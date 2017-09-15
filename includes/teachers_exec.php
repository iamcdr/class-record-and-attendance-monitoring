<?php
if(isset($_POST['assign_class'])){
    $teacher_id = $_POST['teacher_id'];
    $section_id = $_POST['section_id'];
    $subject_id = $_POST['subject_id'];
    $year_id = $_POST['year_id'];

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

    header("Location: teachers.php?s=assg_cls&tid=$teacher_id");
    exit();
}

if(isset($_POST['assign_advisory_class'])){
    $teacher_id = $_POST['teacher_id'];
    $section_id = $_POST['section_id'];
    $subject_id = $_POST['subject_id'];
    $year_id = $_POST['year_id'];

    //query
    $query = "INSERT INTO teacher_classes(teacher_id, section_id, year_id, subject_id, advisory) VALUES({$teacher_id}, {$section_id}, {$year_id}, {$subject_id}, 1)";
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

    header("Location: teachers.php?s=assg_cls&tid=$teacher_id");
    exit();
}
