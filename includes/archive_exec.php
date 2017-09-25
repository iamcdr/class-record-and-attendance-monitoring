<?php
if(isset($_POST['restore_account'])){
    $user_id = $_POST['user_id'];

    //query
    mysqli_query($connection, "UPDATE useraccount SET archive_status = 0 WHERE user_id = {$user_id}");

    //Show the success alert
    $_SESSION['ALERT']['SUCCESS_RESTORE'] = displayName($user_id) . " account was successfully restored.";

    //audit log
    $type = "Restored an account";
    $remarks = $_SESSION['ALERT']['SUCCESS_RESTORE'];
    insertAuditLogData($type, $remarks);

    header("Location: archives.php?s=accounts");
}

if(isset($_POST['restore_gradelevel'])){
    $gradelevel_id = $_POST['gradelevel_id'];

    //query
    mysqli_query($connection, "UPDATE gradelevel SET archive_status = 0 WHERE gradelevel_id = {$gradelevel_id}");

    //Show the success alert
    $_SESSION['ALERT']['SUCCESS_RESTORE'] = displayGradelevelDesc($gradelevel_id) . " was successfully restored.";

    //audit log
    $type = "Restored a grade level data";
    $remarks = $_SESSION['ALERT']['SUCCESS_RESTORE'];
    insertAuditLogData($type, $remarks);

    header("Location: archives.php?s=glvl");
}


if(isset($_POST['restore_section'])){
    $section_id = $_POST['section_id'];

    //query
    $query = "UPDATE sections SET archive_status = 0 WHERE section_id = {$section_id}";
    mysqli_query($connection, $query);

    //audit log
    $type = "Archived a section";
    $remarks = "Description: " . displaySectionDesc($section_id);
    insertAuditLogData($type, $remarks);

}

if(isset($_POST['restore_subject'])){
    $subject_id = $_POST['subject_id'];

    //query
    mysqli_query($connection, "UPDATE subjects SET archive_status = 0 WHERE subject_id = {$subject_id}");

    //Show the success alert
    $_SESSION['ALERT']['SUCCESS_RESTORE'] = displaySubjectDesc($subject_id) . " was successfully moved to archive.";

    //audit log
    $type = "Restored a subject data";
    $remarks = $_SESSION['ALERT']['SUCCESS_RESTORE'];
    insertAuditLogData($type, $remarks);

    header("Location: archives.php?s=subjects");

}


if(isset($_POST['reassign_class'])){
    $teach_class_id = $_POST['teach_class_id'];

    //query
    mysqli_query($connection, "UPDATE teacher_classes SET archive_status = 0 WHERE teach_class_id = {$teach_class_id}");

    //audit log
    $type = "Restored a teach-assigned class data";
    $remarks = $_SESSION['ALERT']['SUCCESS_RESTORE'];
    insertAuditLogData($type, $remarks);

    header("Location: archives.php?s=subjects");

}



if(isset($_POST['restore_student'])){
    $student_id = $_POST['student_id'];

    //query
    mysqli_query($connection, "UPDATE students SET archive_status = 0 WHERE student_id = {$student_id} ");

    //audit log
    $type = "Restored a student data.";
    $remarks = $_SESSION['ALERT']['SUCCESS_RESTORE'];
    insertAuditLogData($type, $remarks);

    header("Location: archives.php?s=students");

}
