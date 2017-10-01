<?php
if(isset($_POST['assign_class'])){
    $teacher_id = $_POST['teacher_id'];
    $section_id = $_POST['section_id'];
    $subject_id = $_POST['subject_id'];
    $year_id = $_POST['year_id'];



    //check if currently exist
    $count = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM teacher_classes WHERE teacher_id = {$teacher_id}  AND section_id = {$section_id} AND year_id = {$year_id} AND subject_id = {$subject_id} AND archive_status = 0"));

    //check if in gradelevel subject
    $dataGL = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM sections WHERE section_id = {$section_id}"));
    $gradelevel_id = $dataGL['gradelevel_id'];
    $countGlSub = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM gradelevel_subject WHERE level_id = {$gradelevel_id} AND subject_id = {$subject_id} AND archive_status = 0"));

    //check if other teacher
    $countTeach = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM teacher_classes WHERE section_id = {$section_id} AND year_id = {$year_id} AND subject_id = {$subject_id} AND archive_status = 0"));

    if($countTeach>0){
        //alert
        $_SESSION['ALERT']['ASSIGN_CLASS_FAILED'] = "Assigning failed! Class already assigned to another teacher.";

        header("Location: teachers.php?s=assg_cls&tid=$teacher_id");
        exit();
    }

    if($countGlSub==0){
        //alert
        $_SESSION['ALERT']['ASSIGN_CLASS_FAILED'] = "Entries does not match. Section and subject are not yet assigned to their respective grade level. Please assign Subject in Grade Level page.";

        header("Location: teachers.php?s=assg_cls&tid=$teacher_id");
        exit();
    }

    if($count>0){
        //alert
        $_SESSION['ALERT']['ASSIGN_CLASS_FAILED'] = displaySectionDesc($section_id) . " - " . displaySubjectDesc($subject_id) . " " . displayAcadYear($year_id) . " currently exists. Assigning failed!";
    } else {
         //query
        $query = "INSERT INTO teacher_classes(teacher_id, section_id, year_id, subject_id) VALUES({$teacher_id}, {$section_id}, {$year_id}, {$subject_id})";
        mysqli_query($connection, $query) or die(mysqli_error($connection));




        //alert
        $_SESSION['ALERT']['ASSIGN_CLASS_SUCCESS'] = "Assigning to section " . displaySectionDesc($section_id) . " with the subject " . displaySubjectDesc($subject_id) . " academic year " . displayAcadYear($year_id) . " successful!";

        //audit log
        $type = "Assign classes to teacher";
        $remarks = "Teacher: " . displayTeacherName($teacher_id) . "<br>";
        $remarks .= "Section: " . displaySectionDesc($section_id) . "<br>";
        $remarks .= "Subject: " . displaySubjectDesc($subject_id) . "<br>";
        $remarks .= "Academic Year: " . displayAcadYear($year_id) . "<br>";
        insertAuditLogData($type, $remarks);
    }



    header("Location: teachers.php?s=assg_cls&tid=$teacher_id");
    exit();
}

if(isset($_POST['assign_advisory_class'])){
    $teacher_id = $_POST['teacher_id'];
    $section_id = $_POST['section_id'];
    $year_id = $_POST['year_id'];


    //check if count is 1 query
    $count = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM teacher_classes WHERE teacher_id = {$teacher_id}  AND section_id = {$section_id} AND year_id = {$year_id} AND archive_status = 0 AND advisory = 1"));

    if($count > 0){
        //alert
        $_SESSION['ALERT']['ASSIGN_ADV_CLASS_FAILED'] = displaySectionDesc($section_id) . " - " . " currently exists. Assigning advisory class failed!";
    } else {
        //query
        $query = "INSERT INTO teacher_classes(teacher_id, section_id, year_id, subject_id, advisory) VALUES({$teacher_id}, {$section_id}, {$year_id}, 0, 1)";
        mysqli_query($connection, $query) or die(mysqli_error($connection));

        //alert
        $_SESSION['ALERT']['ASSIGN_ADV_CLASS_SUCCESS'] = "Assigning advisory class section " . displaySectionDesc($section_id) . " academic year " . displayAcadYear($year_id) . " successful!";

        //audit log
        $type = "Assign advisory class to teacher";
        $remarks = "Teacher: " . displayTeacherName($teacher_id) . "<br>";
        $remarks .= "Section: " . displaySectionDesc($section_id) . "<br>";
        $remarks .= "Subject: " . displaySubjectDesc($subject_id) . "<br>";
        $remarks .= "Academic Year: " . displayAcadYear($year_id) . "<br>";
        insertAuditLogData($type, $remarks);

    }

    header("Location: teachers.php?s=assg_adv_cls&tid=$teacher_id");
    exit();
}

if(isset($_POST['unassign_class'])){
    $teach_class_id = $_POST['teach_class_id'];

    //query
    $query = "UPDATE teacher_classes SET archive_status = 1 WHERE teach_class_id = {$teach_class_id}";
    mysqli_query($connection, $query);

}

if(isset($_POST['unassign_adv_class'])){
    $teach_class_id = $_POST['teach_class_id'];

    //query
    $query = "UPDATE teacher_classes SET archive_status = 1 WHERE teach_class_id = {$teach_class_id}";
    mysqli_query($connection, $query);

}

if(isset($_POST['transfer_records'])){
    $teacher_id = $_POST['teacher_id'];
    $new_teacher_id = $_POST['new_teacher_id'];

    //query
    $query = "UPDATE teacher_classes SET teacher_id = {$new_teacher_id} WHERE teacher_id = {$teacher_id}";
    mysqli_query($connection, $query);

    $queryAct = "UPDATE outputs_actual SET teacher_id = {$new_teacher_id} WHERE teacher_id = {$teacher_id}";
    mysqli_query($connection, $queryAct);

    $queryFin = "UPDATE outputs_final SET teacher_id = {$new_teacher_id} WHERE teacher_id = {$teacher_id}";
    mysqli_query($connection, $queryFin);

    mysqli_query($connection, "UPDATE useraccount SET archive_status = 1 WHERE user_id = {$teacher_id}");

    $_SESSION['ALERT']['TRANSFER_SUCCESS'] = "Records of " . displayName($teacher_id) . " have been successfully transferred to " . displayName($new_teacher_id);

    header("Location: teachers.php");
    exit();
}
