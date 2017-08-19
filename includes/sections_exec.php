<?php
if(isset($_POST['add_section'])){
    $gradelevel_id = $_POST['gradelevel_assg'];
    $section_description = mysqli_real_escape_string($connection, $_POST['section_description']);

    //query
    $query = "INSERT INTO sections (gradelevel_id, section_description) VALUES ('{$gradelevel_id}', '{$section_description}')";

    //VALIDATION
    $queryCheck = "SELECT * FROM sections WHERE section_description = '{$section_description}' AND archive_status=0";
    $resultCheck = mysqli_query($connection, $queryCheck);

    if(mysqli_num_rows($resultCheck)>0){
        $_SESSION['ALERT']['ADD_SECTION_FAILED'] = "$section_description already exists.";

    } else {
        mysqli_query($connection, $query) or die(mysqli_error($connection));
        //alert
        $_SESSION['ALERT']['ADD_SECTION_SUCCESS'] = "$section_description was successfully added.";

        //audit log
        $type = "Added a section";
        $remarks = $_SESSION['ALERT']['ADD_SECTION_SUCCESS'];
        insertAuditLogData($type, $remarks);


    }

    header("Location: sections.php");
    exit();
}

if(isset($_POST['archive_section'])){
    $section_id = $_POST['section_id'];

    //query
    $query = "UPDATE sections SET archive_status = 1 WHERE section_id = {$section_id}";
    mysqli_query($connection, $query);

    //audit log
    $type = "Archived a section";
    $remarks = "Description: " . displaySectionDesc($section_id);
    insertAuditLogData($type, $remarks);

}
