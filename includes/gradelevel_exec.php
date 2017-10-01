<?php

if(isset($_POST['archive_gradelevel'])){
    $gradelevel_id = $_POST['gradelevel_id'];

    //query
    mysqli_query($connection, "UPDATE gradelevel SET archive_status = 1 WHERE gradelevel_id = {$gradelevel_id}");

    //Show the success alert
    $_SESSION['ALERT']['SUCCESS_ARCHIVE'] = displayGradelevelDesc($gradelevel_id) . " was successfully moved to archive.";

    //audit log
    $type = "Archived a grade level data";
    $remarks = $_SESSION['ALERT']['SUCCESS_ARCHIVE'];
    insertAuditLogData($type, $remarks);

    header("Location: gradelevel.php");
}

if(isset($_POST['add_gradelevel'])){
    $gradelevel_code = mysqli_real_escape_string($connection, $_POST['gradelevel_code']);
    $gradelevel_description = mysqli_real_escape_string($connection, $_POST['gradelevel_description']);


    //VALIDATION
    $queryCheck = "SELECT * FROM gradelevel WHERE (gradelevel_code = '{$gradelevel_code}' OR gradelevel_description = '{$gradelevel_description}') AND archive_status=0";
    $resultCheck = mysqli_query($connection, $queryCheck);

    if(mysqli_num_rows($resultCheck)>0){
        $_SESSION['ALERT']['ADD_GRADELEVEL_FAILED'] = "$gradelevel_code or $gradelevel_description already exists.";
    } else {

        //query
        mysqli_query($connection, "INSERT INTO gradelevel (gradelevel_code, gradelevel_description) VALUES('{$gradelevel_code}', '{$gradelevel_description}')");

        //alert
        $_SESSION['ALERT']['ADD_GRADELEVEL_SUCCESS'] = "$gradelevel_description was successfully added.";


        //audit log
        $type = "Added grade level data";
        $remarks = "$gradelevel_description added.";
        insertAuditLogData($type, $remarks);

    }


    header("Location: gradelevel.php");
    exit();
}

if(isset($_POST['edit_gradelevel'])){
    $gradelevel_id = $_POST['gradelevel_id'];
    $gradelevel_code = mysqli_real_escape_string($connection, $_POST['gradelevel_code']);
    $gradelevel_description = mysqli_real_escape_string($connection, $_POST['gradelevel_description']);

    //query
    $query = "UPDATE gradelevel SET gradelevel_code = '{$gradelevel_code}', gradelevel_description = '{$gradelevel_description}' WHERE gradelevel_id = '{$gradelevel_id}'";
    mysqli_query($connection, $query) or die(mysqli_error($connection));

    //VALIDATION
    $queryCheck = "SELECT * FROM gradelevel WHERE gradelevel_code = OR gradelevel_description = AND archive_status=0";
    $resultCheck = mysqli_query($connection, $queryCheck);
    if(mysqli_num_rows($resultCheck)>0){
        $_SESSION['ALERT']['EDIT_GRADELEVEL_FAILED'] = "$gradelevel_code or $gradelevel_description already exists.";
    }else {
        //alert
        $_SESSION['ALERT']['EDIT_GRADELEVEL_SUCCESS'] = "Grade level information was successfully edited.";


        //audit log
        $type = "Updated grade level data";
        $remarks = "Updated to $gradelevel_description";
        insertAuditLogData($type, $remarks);

    }

    header("Location: gradelevel.php");
    exit();
}

if(isset($_POST['assign_subject'])){
    $subject_id = $_POST['subject_id'];
    $gradelevel_id = $_POST['gradelevel_id'];

    //query
    $query = "INSERT INTO gradelevel_subject (level_id, subject_id) VALUES ({$gradelevel_id}, {$subject_id})";
    mysqli_query($connection, $query) or die(mysqli_error($connection));


    //alert
    $_SESSION['ALERT']['ASSIGN_SUBJECT_SUCCESS'] = displaySubjectDesc($subject_id) . " is successfully assigned to " . displayGradelevelDesc($gradelevel_id);

    //audit log
    $type = "Assigned a subject to a grade level";
    $remarks = $_SESSION['ALERT']['ASSIGN_SUBJECT_SUCCESS'];
    insertAuditLogData($type, $remarks);

    header("Location: gradelevel.php?s=assg_sub&lvlid=$gradelevel_id");
    exit();
}

if(isset($_POST['unassign_subject'])){
    $lvlsubj_id = $_POST['levelsubject_id'];

    //query
    $query = "UPDATE gradelevel_subject SET archive_status = 1 WHERE level_subject_id = {$lvlsubj_id}";
    mysqli_query($connection, $query) or die(mysqli_error($connection));

    //alert
        //initialize
        $result = mysqli_query($connection, "SELECT * FROM gradelevel_subject WHERE level_subject_id = {$lvlsubj_id}");
        $data = mysqli_fetch_array($result);
        //
    $_SESSION['ALERT']['UNASSIGN_SUBJECT_SUCCESS'] = displaySubjectDesc($data['subject_id']) . " is successfully unassigned to " . displayGradelevelDesc($data['level_id']);

    //audit log
    $type = "Unassigned a subject to a grade level";
    $remarks = $_SESSION['ALERT']['UNASSIGN_SUBJECT_SUCCESS'];
    insertAuditLogData($type, $remarks);

    //change v
    $gradelevel_id = $data['level_id'];
    header("Location: gradelevel.php?s=assg_sub&lvlid=$gradelevel_id");
    exit();
}
