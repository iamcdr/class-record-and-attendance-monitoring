<?php
if(isset($_POST['assign_class'])){
    $teacher_id = $_POST['teacher_id'];
    $section_id = $_POST['section_id'];
    $subject_id = $_POST['subject_id'];
    $year_id = $_POST['year_id'];



    //check if count is 1 query
    $count = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM teacher_classes WHERE teacher_id = {$teacher_id}  AND section_id = {$section_id} AND year_id = {$year_id} AND subject_id = {$subject_id} AND archive_status = 0"));


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
