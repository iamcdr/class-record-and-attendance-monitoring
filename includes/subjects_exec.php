<?php
if(isset($_POST['archive_subject'])){
    $subject_id = $_POST['subject_id'];

    //query
    mysqli_query($connection, "UPDATE subjects SET archive_status = 1 WHERE subject_id = {$subject_id}");

    //Show the success alert
    $_SESSION['ALERT']['SUCCESS_ARCHIVE'] = displaySubjectDesc($subject_id) . " was successfully moved to archive.";

    //audit log
    $type = "Archived a subject data";
    $remarks = $_SESSION['ALERT']['SUCCESS_ARCHIVE'];
    insertAuditLogData($type, $remarks);

    header("Location: subjects.php");

}

if(isset($_POST['add_subject'])){
    $subject_code = $_POST['subject_code'];
    $subject_code = mysqli_real_escape_string($connection, $subject_code);
    $subject_description = $_POST['subject_description'];
    $subject_description = mysqli_real_escape_string($connection, $subject_description);

    //query
    mysqli_query($connection, "INSERT INTO subjects (subject_code, subject_description) VALUES('{$subject_code}', '{$subject_description}')");

    //VALIDATION code
    echo $queryCheck = "SELECT * FROM subjects WHERE (subject_code = '{$subject_code}' OR subject_description = '{$subject_description}') AND archive_status = 0";
    $resultCheck = mysqli_query($connection, $queryCheck);

    if(mysqli_num_rows($resultCheck)>0){
        //alert
        $_SESSION['ALERT']['ADD_SUBJECT_FAILED'] = "$subject_code or $subject_description already exists.";

    } else{
        //alert
        $_SESSION['ALERT']['ADD_SUBJECT_SUCCESS'] = "$subject_description was successfully added.";

        //audit log
        $type = "Added new subject data";
        $remarks = "$subject_description added.";
        insertAuditLogData($type, $remarks);

    }

    header("Location: subjects.php");
    exit();
}

if(isset($_POST['edit_subject'])){
    $subject_id = $_POST['subject_id'];
    $subject_code = mysqli_real_escape_string($connection, $_POST['subject_code']);
    $subject_description = mysqli_real_escape_string($connection, $_POST['subject_description']);

    //query
    $query = "UPDATE subjects SET subject_code = '{$subject_code}', subject_description = '{$subject_description}' WHERE subject_id = '{$subject_id}'";
    mysqli_query($connection, $query) or die(mysqli_error($connection));


    //VALIDATION
    $queryCheck = "SELECT * FROM subjects WHERE subject_code = $subject_code OR subject_description = $subject_description AND archive_status = 0";
    $resultCheck = mysqli_query($connection, $queryCheck);

    if(mysqli_num_rows($resultCheck)>0){
        $_SESSION['ALERT']['EDIT_SUBJECT_FAILED'] = "$subject_code or $subject_description already exists.";
    } else {
         //alert
        $_SESSION['ALERT']['EDIT_SUBJECT_SUCCESS'] = "Subject information was successfully edited.";

        //audit log
        $type = "Updated subject data";
        $remarks = "Updated to $subject_description";
        insertAuditLogData($type, $remarks);
    }


    header("Location: subjects.php");
    exit();
}
