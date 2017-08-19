<?php

if(isset($_POST['activate_gradingperiod'])){
    $gradingperiod_id = $_POST['gradingperiod_id'];

    //query
    $query = "UPDATE gradingperiod SET status = 1  WHERE gradingperiod_id = {$gradingperiod_id}";
    mysqli_query($connection, $query);

    $queryDeactivate = "UPDATE gradingperiod SET status = 0 WHERE gradingperiod_id != {$gradingperiod_id}";
    mysqli_query($connection, $queryDeactivate);

    //audit log
    $type = "Activated a grading period.";
    $remarks = "Description: ". displayGradingPeriod($gradingperiod_id);
    insertAuditLogData($type, $remarks);


}
