<?php
if(isset($_POST['archive_student'])){
    $student_id = $_POST['student_id'];

    //query
    mysqli_query($connection, "UPDATE students SET archive_status = 1 WHERE student_id = {$student_id}");

    //Show the success alert
    $_SESSION['ALERT']['SUCCESS_ARCHIVE'] = displayStudentName($student_id) . " was successfully moved to archive.";

    //audit log
    $type = "Archived a student information";
    $remarks = $_SESSION['ALERT']['SUCCESS_ARCHIVE'];
    insertAuditLogData($type, $remarks);

    header("Location: students.php");
}



if(isset($_POST['add_student'])){

    $last_name = ucwords(mysqli_real_escape_string($connection, $_POST['last_name']));
    $first_name = ucwords(mysqli_real_escape_string($connection, $_POST['first_name']));
    $middle_name = ucwords(mysqli_real_escape_string($connection, $_POST['middle_name']));
    $student_idno = mysqli_real_escape_string($connection, $_POST['student_idno']);
    $student_barcode = mysqli_real_escape_string($connection, $_POST['student_barcode']);
    $birthdate = mysqli_real_escape_string($connection, $_POST['birthdate']);
    $contact_no = mysqli_real_escape_string($connection, $_POST['contact_no']);
    $assg_gradelevel = mysqli_real_escape_string($connection, $_POST['assg_gradelevel']);
    $schoolyear_id = mysqli_real_escape_string($connection, $_POST['schoolyear_id']);

    //query to students
    $query = "INSERT INTO students (last_name, first_name, middle_name, student_idno, birthdate, contact_no, student_barcode) VALUES('{$last_name}', '{$first_name}', '{$middle_name}', '{$student_idno}', '{$birthdate}', '{$contact_no}', '{$student_barcode}')";
    mysqli_query($connection, $query) or die(mysqli_error($connection));

        //init students id
        $student_id = mysqli_insert_id($connection);

    //query to sectionassignment
    $queryLv = "INSERT INTO student_section(student_id, section_id, schoolyear_id) VALUES('{$student_id}', '{$section_id}', '{$schoolyear_id}')";
    mysqli_query($connection, $queryLv) or die(mysqli_error($connection));

    //alert
    $_SESSION['ALERT']['ADD_STUDENT_SUCCESS'] = "$first_name $middle_name $last_name is successfully added as student";

    //audit trail
    $type = "Added a student";
    $remarks = "Name: $first_name $middle_name $last_name <br>";
    $remarks .= "Student ID No: $student_idno";
    insertAuditLogData($type, $remarks);

    header("Location: students.php");
    exit();
}

if(isset($_POST['update_student'])){

    $student_idno = mysqli_real_escape_string($connection, $_POST['student_idno']);
    $student_barcode = mysqli_real_escape_string($connection, $_POST['student_barcode']);
    $contact_no = mysqli_real_escape_string($connection, $_POST['contact_no']);
    $student_id = mysqli_real_escape_string($connection, $_POST['student_id']);
    
    //query to students
    $query = "UPDATE students SET student_idno = '{$student_idno}', student_barcode = '{$student_barcode}', contact_no = '{$contact_no}' WHERE student_id = {$student_id} ";
    mysqli_query($connection, $query) or die(mysqli_error($connection));

    //init stud info
    $rowStud = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM students WHERE student_id = {$student_id}"));
    $first_name = $rowStud['first_name'];
    $middle_name = $rowStud['middle_name'];
    $last_name = $rowStud['last_name'];
    
    //alert
    $_SESSION['ALERT']['EDIT_STUDENT_SUCCESS'] = "The information of $first_name $middle_name $last_name is successfully updated.";

    //audit trail
    $type = "Update student information";
    $remarks = "Name: $first_name $middle_name $last_name <br>";
    $remarks .= "Student ID No: $student_idno";
    insertAuditLogData($type, $remarks);

    header("Location: students.php");
    exit();
}

if(isset($_POST['assign_section'])){
    $student_id = $_POST['student_id'];
    $section_id = $_POST['section_id'];
    $year_id = $_POST['year_id'];
    
    //query to student_section
    $query = "INSERT INTO student_section(student_id, section_id, schoolyear_id) VALUES('{$student_id}','{$section_id}','{$year_id}')";
    mysqli_query($connection, $query);
    
    //var init
    $studentname = displayStudentName($student_id);
    $section_desc = displaySectionDesc($section_id);
    
    //alert
    $_SESSION['ALERT']['ADD_STUDSEC_SUCCESS'] = "$studentname successfully assigned to $section_desc";
    
    header("Location: ./students.php?s=assg_sc&sid=$student_id");
    exit();
}