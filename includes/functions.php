<?php
function insertAuditLogData($type,$remarks,$date_created = null){
    global $connection;

    $user_id = $_SESSION['hts_user_id'];
    $user_privilege = $_SESSION['hts_user_userprivilege'];

    if(empty($date_created))
        $date_created = date("Y-m-d H:i:s");

    $query = "INSERT INTO audit_trail(user_id, user_privilege, audit_type, audit_remarks, audit_datetime) VALUES ({$user_id}, {$user_privilege}, '{$type}','{$remarks}','{$date_created}') ";

    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

    return mysqli_insert_id($connection);
}

function displayAccountType($userprivilege){

    if($userprivilege==1)
        return "Administrator";
    else
        return "Teacher";
}

function displayArchiveStatus($status){

    if($status==0)
        return '<span class="label label-success">Active</span>';
    else
        return '<span class="label label-danger">Inactive</span>';
}

function displayName($user_id){
    global $connection;

    $query = "SELECT * FROM useraccount WHERE user_id = {$user_id}";
    $result = mysqli_query($connection, $query) or die (mysqli_error($connection));
    $row = mysqli_fetch_array($result);
    return $row['first_name'] . " " . $row['last_name'];
}

function displaySubjectDesc($id){
    global $connection;

    $query = "SELECT * FROM subjects WHERE subject_id = {$id}";
    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($result);
    return $row['subject_description'];
}

function displayGradeLevelDesc($id){
    global $connection;

    $query = "SELECT * FROM gradelevel WHERE gradelevel_id = {$id}";
    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($result);
    return $row['gradelevel_description'];
}

function displayStudentName($id){
    global $connection;

    $query = "SELECT * FROM students WHERE student_id = {$id}";
    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($result);
    return $row['first_name'] . " " . $row['middle_name'] . " " . $row['last_name'];
}

function displaySubjectCode($id){
    global $connection;

    $query = "SELECT * FROM subjects WHERe subject_id = {$id}";
    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($result);
    return $row['subject_code'];
}

function displayGradeLevelCode($id){
    global $connection;

    $query = "SELECT * FROM gradelevel WHERE gradelevel_id = {$id}";
    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($result);
    return $row['gradelevel_code'];
}

function displayTeacherName($id){
    global $connection;

    $query = "SELECT * FROM useraccount WHERE user_id = {$id}";
    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($result);
    return $row['last_name'] . ", " . $row['first_name'];

}

function displaySectionDesc($id){
    global $connection;

    $query = "SELECT * FROM sections WHERE section_id = {$id}";
    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($result);
    return $row['section_description'];
}

function displayAcadYear($id){
    global $connection;

    $query = "SELECT * FROM year WHERE id = {$id}";
    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($result);
    return $row['year1'] . " - " . $row['year2'];
}


function displayLastNameFirst($id){
    global $connection;

     $query = "SELECT * FROM students WHERE student_id = {$id}";
    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($result);
    return $row['last_name'] . ", " . $row['first_name'] . " " . $row['middle_name'];
}

function displayGradingPeriod($id){
    global $connection;

    $query = "SELECT * FROM gradingperiod WHERE gradingperiod_id = {$id}";
    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($result);
    return $row['description'];
}

function getOutputsActual($studid, $subject_id, $gradingperiod_id, $output_session){
    global $connection;

    $query = "SELECT * FROM outputs_actual WHERE student_id = {$studid} AND subject_id = {$subject_id} AND gradingperiod_id = {$gradingperiod_id} AND output_session = '{$output_session}' AND archive_status = 0";
    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($result);
    return $row['raw_score'];

}

function getOutputsTotal($output_session, $subject_id, $teacher_id, $gradingperiod_id){
    global $connection;

    $query = "SELECT * FROM outputs_actual WHERE output_session = '{$output_session}' AND subject_id = {$subject_id} AND teacher_id = {$teacher_id} AND gradingperiod_id = {$gradingperiod_id} LIMIT 1";
    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($result);
    return $row['total_score'];
}

function getOutputsRemarks($output_session, $subject_id, $teacher_id, $gradingperiod_id){
    global $connection;

    $query = "SELECT * FROM outputs_actual WHERE output_session = '{$output_session}' AND subject_id = {$subject_id} AND teacher_id = {$teacher_id} AND gradingperiod_id = {$gradingperiod_id} LIMIT 1";
    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($result);
    return $row['remarks'];
}

function getOutputsCategory($output_session, $subject_id, $teacher_id, $gradingperiod_id){
    global $connection;

    $query = "SELECT * FROM outputs_actual WHERE output_session = '{$output_session}' AND subject_id = {$subject_id} AND teacher_id = {$teacher_id} AND gradingperiod_id = {$gradingperiod_id} LIMIT 1";
    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($result);
    return $row['gradingperiod_id'];
}

function getOutputsTotalOverall($output_session, $subject_id, $teacher_id, $gradingperiod_id){

    global $connection;

    $query = "SELECT SUM(total_score) as overallTotal FROM outputs_actual WHERE output_session = '{$output_session}' AND subject_id = {$subject_id} AND teacher_id = {$teacher_id} AND gradingperiod_id = {$gradingperiod_id} ";
    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($result);
    return $row['overallTotal'];
}

function getOutputsPercentage($overallTotal, $rawTotal){

    if($rawTotal!=0)
        return number_format(($rawTotal/$overallTotal)*100, 2);
    else
        return 0;

}

function getOutputsWwWeighted($percentage){

    return number_format($percentage*.3, 2);
}

function getOutputsPtWeighted($percentage){

    return number_format($percentage*.5, 2);
}

function getOutputsQaWeighted($percentage){

    return number_format($percentage*.2, 2);
}

function getOutputsInitialGrade($ww, $pt, $qa){

    return number_format($ww + $pt + $qa, 2);
}

function getOutputsFinalGrade($initial){

    if($initial == 100)
        return 100;
    elseif($initial >= 98.40 && $initial <= 99.99)
        return 99;
    elseif($initial >= 96.80 && $initial <= 98.39)
        return 98;
    elseif($initial >= 95.20 && $initial <= 96.79)
        return 97;
    elseif($initial >= 93.60 && $initial <= 95.19)
        return 96;
    elseif($initial >= 92.00 && $initial <= 93.59)
        return 95;
    elseif($initial >= 90.40 && $initial <= 91.99)
        return 94;
    elseif($initial >= 88.80 && $initial <= 90.39)
        return 93;
    elseif($initial >= 87.20 && $initial <= 88.79)
        return 92;
    elseif($initial >= 85.60 && $initial <= 87.19)
        return 91;
    elseif($initial >= 84.00 && $initial <= 85.59)
        return 90;
    elseif($initial >= 82.40 && $initial <= 83.99)
        return 89;
    elseif($initial >= 80.80 && $initial <= 82.39)
        return 88;
    elseif($initial >= 79.20 && $initial <= 80.79)
        return 87;
    elseif($initial >= 77.60 && $initial <= 79.19)
        return 86;
    elseif($initial >= 76.00 && $initial <= 77.59)
        return 85;
    elseif($initial >= 74.40 && $initial <= 75.99)
        return 84;
    elseif($initial >= 72.80 && $initial <= 74.39)
        return 83;
    elseif($initial >= 71.20 && $initial <= 72.79)
        return 82;
    elseif($initial >= 69.60 && $initial <= 71.19)
        return 81;
    elseif($initial >= 68.00 && $initial <= 69.59)
        return 80;
    elseif($initial >= 66.40 && $initial <= 67.99)
        return 79;
    elseif($initial >= 64.80 && $initial <= 66.39)
        return 78;
    elseif($initial >= 63.20 && $initial <= 64.79)
        return 77;
    elseif($initial >= 61.60 && $initial <= 63.19)
        return 76;
    elseif($initial >= 60.00 && $initial <= 61.59)
        return 75;
    elseif($initial >= 56.00 && $initial <= 59.99)
        return 74;
    elseif($initial >= 52.00 && $initial <= 55.99)
        return 73;
    elseif($initial >= 48.00 && $initial <= 51.99)
        return 72;
    elseif($initial >= 44.00 && $initial <= 47.99)
        return 71;
    elseif($initial >= 40.00 && $initial <= 43.99)
        return 70;
    elseif($initial >= 36.00 && $initial <= 39.99)
        return 69;
    elseif($initial >= 32.00 && $initial <= 35.99)
        return 68;
    elseif($initial >= 28.00 && $initial <= 31.99)
        return 67;
    elseif($initial >= 24.00 && $initial <= 27.99)
        return 66;
    elseif($initial >= 20.00 && $initial <= 23.99)
        return 65;
    elseif($initial >= 16.00 && $initial <= 19.99)
        return 64;
    elseif($initial >= 12.00 && $initial <= 15.99)
        return 63;
    elseif($initial >= 8.00 && $initial <= 11.99)
        return 62;
    elseif($initial >= 4.00 && $initial <= 7.99)
        return 61;
    elseif($initial >= 0 && $initial <= 3.99)
        return 60;

}

function displayGradingPeriodGrade($student_id, $subid, $secid, $gradingperiod_id, $teacher_id=null){
    global $connection;

    $teacher_id = (isset($teacher_id)) ? $teacher_id : $_SESSION['hts_user_id'];

    $query = "SELECT * FROM outputs_final WHERE student_id = {$student_id} AND section_id = {$secid} AND subject_id = {$subid} AND gradingperiod_id = {$gradingperiod_id} AND teacher_id = {$teacher_id}";
    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($result);
    return $row['total_score'];
}

function displayFinalGrade($student_id, $subid, $secid){
    global $connection;

    $teacher_id = (isset($teacher_id)) ? $teacher_id : $_SESSION['hts_user_id'];

    $first = displayGradingPeriodGrade($student_id, $subid, $secid, 1);
    $second = displayGradingPeriodGrade($student_id, $subid, $secid, 2);
    $third = displayGradingPeriodGrade($student_id, $subid, $secid, 3);
    $fourth = displayGradingPeriodGrade($student_id, $subid, $secid, 4);

    $query = "SELECT * FROM outputs_final WHERE student_id = {$student_id} AND section_id = {$secid} AND subject_id = {$subid} AND teacher_id = {$teacher_id} ORDER BY gradingperiod_id DESC";
    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($result);

    if($row['gradingperiod_id']==1)
        return ($first + $second + $third + $fourth);
    elseif($row['gradingperiod_id']==2)
        return ($first + $second + $third + $fourth)/2;
    elseif($row['gradingperiod_id']==3)
        return ($first + $second + $third + $fourth)/3;
    elseif($row['gradingperiod_id']==4)
        return ($first + $second + $third + $fourth)/4;

}



//##########################################################################
// ITEXMO SEND SMS API - PHP - CURL-LESS METHOD
// Visit www.itexmo.com/developers.php for more info about this API
//##########################################################################
function itexmo($number,$message,$apicode = "TR-HOLYT940364_354K4"){
    $url = 'https://www.itexmo.com/php_api/api.php';
    $itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
    $param = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($itexmo),
        ),
    );
    $context  = stream_context_create($param);
    return file_get_contents($url, false, $context);
}
//##########################################################################

function getTeacherIdFromTeacherClasses($tcid){
    global $connection;

    $query = "SELECT * FROM teacher_classes WHERE teach_class_id = {$tcid}";
    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($result);
    return $row['teacher_id'];
}
function getSectionIdFromTeacherClasses($tcid){
    global $connection;

    $query = "SELECT * FROM teacher_classes WHERE teach_class_id = {$tcid}";
    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($result);
    return $row['section_id'];
}
function getSubjectIdFromTeacherClasses($tcid){
    global $connection;

    $query = "SELECT * FROM teacher_classes WHERE teach_class_id = {$tcid}";
    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($result);
    return $row['subject_id'];
}
function getSchoolyearIdFromTeacherClasses($tcid){
    global $connection;

    $query = "SELECT * FROM teacher_classes WHERE teach_class_id = {$tcid}";
    $result = mysqli_query($connection, $query);

    $row = mysqli_fetch_array($result);
    return $row['year_id'];
}
