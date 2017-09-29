<?php
$date_graded = date("Y-m-d H:i:s");
if(isset($_POST['add_grade'])){

    $gradingperiod_id = $_POST['gradingperiod_id'];
    $section_id = $_POST['section_id'];
    $subject_id = $_POST['subject_id'];
    $total_score = $_POST['total_score'];
    $remarks = mysqli_real_escape_string($connection, $_POST['remarks']);
    $output_session = $_POST['output_session'];
    $teacher_id = $_POST['teacher_id'];
    //loop again students
    $queryRec = "SELECT * FROM student_section WHERE section_id = {$section_id} AND archive_status = 0";
    $resultRec = mysqli_query($connection, $queryRec);

    while($rowRec = mysqli_fetch_array($resultRec)){
        $studid = $rowRec['student_id'];
        $student_id = $_POST["student_id_$studid"];
        $raw_score = $_POST["raw_score_$studid"];

        //update or insert
        //check if entry available
        $queryCheckEntry = "SELECT * FROM outputs_actual WHERE section_id = {$section_id} AND student_id = {$studid} AND subject_id = {$subject_id} AND gradingperiod_id = {$gradingperiod_id} AND output_session = '{$output_session}' AND teacher_id = {$teacher_id} AND archive_status = 0";
        $resultCheckEntry = mysqli_query($connection, $queryCheckEntry) or die(mysqli_error($connection) . $queryCheckEntry);

        if(mysqli_num_rows($resultCheckEntry)>0){
            $queryUpdate = "UPDATE outputs_actual SET total_score = '{$total_score}', raw_score = '{$raw_score}', section_id = '{$section_id}', remarks = '{$remarks}' WHERE student_id = {$studid} AND section_id = {$section_id} AND subject_id = {$subject_id} AND archive_status = 0 AND output_session = '{$output_session}'";
            $resultUpdate = mysqli_query($connection, $queryUpdate) or die(mysqli_error($connection) . $queryUpdate);
        } else {
            $queryInsert = "INSERT INTO outputs_actual (student_id, section_id, subject_id, gradingperiod_id, total_score, raw_score, remarks, date_graded, teacher_id, output_session) VALUES ('{$studid}', '{$section_id}', '{$subject_id}', '{$gradingperiod_id}', '{$total_score}', '{$raw_score}', '{$remarks}', '{$date_graded}', {$teacher_id}, '{$output_session}')";
            $resultInsert = mysqli_query($connection, $queryInsert) or die(mysqli_error($connection) . $queryInsert);
        }
    }

}

if(isset($_POST['submit_final_grade'])){
    include("db.php");
    session_start();
    include("functions.php");
    $password = mysqli_real_escape_string($connection, $_POST['password_auth']);
    //check password
    $userid = $_SESSION['hts_user_id'];
    $queryAuth = "SELECT password FROM useraccount WHERE user_id = {$userid}";
    $resultAuth = mysqli_query($connection, $queryAuth);
    $rowAuth = mysqli_fetch_array($resultAuth);
        //check db for pass
        $password = crypt($password, $rowAuth[0]);

        if($password != $rowAuth[0]){
            echo "error";
            exit();
        } else {

            $section_id = $_POST['section_id'];
            $subject_id = $_POST['subject_id'];
            $gradingperiod_id = $_POST['gradingperiod_id'];
            $year_id = $_POST['year_id'];

            //loop again students
            $queryRec = "SELECT * FROM student_section WHERE section_id = {$section_id} AND schoolyear_id = {$year_id} AND archive_status = 0";
            $resultRec = mysqli_query($connection, $queryRec);

            while($rowRec = mysqli_fetch_array($resultRec)){
                $studid = $rowRec['student_id'];
                $studentid = $_POST["student_id_$studid"];
                $finalgrade_score = $_POST["final_grade$studid"];

                //insert
                $queryInsert = "INSERT INTO outputs_final(teacher_id, student_id, subject_id, gradingperiod_id, section_id, total_score) VALUES({$userid}, {$studid}, {$subject_id}, {$gradingperiod_id}, {$section_id}, '{$finalgrade_score}')";
                mysqli_query($connection, $queryInsert) or die(mysqli_error($connection));
            }


            echo "success";
        }

}

if(isset($_POST['percentage_dist'])){
    $section_id = $_POST['section_id'];
    $subject_id = $_POST['subject_id'];
    $year_id = $_POST['year_id'];
    $ww = mysqli_real_escape_string($connection, $_POST['ww']);
    $pt = mysqli_real_escape_string($connection, $_POST['pt']);
    $qa = mysqli_real_escape_string($connection, $_POST['qa']);
    $pt_eq = $pt/100;
    $ww_eq = $ww/100;
    $qa_eq = $qa/100;
    //check table if subj&year avail
    $countAvail = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM percentage_distribution WHERE subject_id = {$subject_id} AND schoolyear_id = {$year_id} AND status = 0"));

    if($countAvail>0){
        echo $queryWw = "UPDATE percentage_distribution SET percent = '{$ww}', equivalent = '{$ww_eq}' WHERE subject_id = {$subject_id} AND schoolyear_id = {$year_id} AND score_category = 'ww' AND status = 0";
        mysqli_query($connection, $queryWw);
        echo $queryPt = "UPDATE percentage_distribution SET percent = '{$pt}', equivalent = '{$pt_eq}' WHERE subject_id = {$subject_id} AND schoolyear_id = {$year_id} AND score_category = 'pt' AND status = 0";
        mysqli_query($connection, $queryPt);
        echo $queryQa = "UPDATE percentage_distribution SET percent = '{$qa}', equivalent = '{$qa_eq}' WHERE subject_id = {$subject_id} AND schoolyear_id = {$year_id} AND score_category = 'qa' AND status = 0";
        mysqli_query($connection, $queryQa);
    } else {
        $queryWw = "INSERT INTO percentage_distribution(subject_id, schoolyear_id, score_category, percent, equivalent, status) VALUES({$subject_id}, {$year_id}, 'ww', {$ww}, {$ww_eq}, 0) ";
        mysqli_query($connection, $queryWw);
        $queryPt = "INSERT INTO percentage_distribution(subject_id, schoolyear_id, score_category, percent, equivalent, status) VALUES({$subject_id}, {$year_id}, 'pt', {$pt}, {$pt_eq}, 0) ";
        mysqli_query($connection, $queryPt);
        $queryQa = "INSERT INTO percentage_distribution(subject_id, schoolyear_id, score_category, percent, equivalent, status) VALUES({$subject_id}, {$year_id}, 'qa', {$qa}, {$qa_eq}, 0) ";
        mysqli_query($connection, $queryQa);
    }

    $_SESSION['ALERT']['UPDATE_PERCENTAGE_SUCCESS'] = "Successfully edited percentage distribution grade";

    header("Location: classes.php?s=add_grades&sid=$section_id&subid=$subject_id&yid=$year_id");
    exit();
}
