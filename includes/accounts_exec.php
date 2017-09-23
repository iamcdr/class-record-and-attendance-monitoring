<?php

if(isset($_POST['archive_account'])){
    $user_id = $_POST['user_id'];

    //query
    mysqli_query($connection, "UPDATE useraccount SET archive_status = 1 WHERE user_id = {$user_id}");

    //Show the success alert
    $_SESSION['ALERT']['SUCCESS_ARCHIVE'] = displayName($user_id) . " account was successfully moved to archive.";

    //audit log
    $type = "Archived an account";
    $remarks = $_SESSION['ALERT']['SUCCESS_ARCHIVE'];
    insertAuditLogData($type, $remarks);

    header("Location: accounts.php");
}

if(isset($_POST['add_account'])){
    $last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
    $first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
    $middle_name = mysqli_real_escape_string($connection, $_POST['middle_name']);
    $user_privilege = mysqli_real_escape_string($connection, $_POST['user_privilege']);
    $emp_num = mysqli_real_escape_string($connection, $_POST['emp_num']);
    $defaultPass = "$2y$10\$jMmqu3FgVxSxnIsFbQpCguZVjdAIyOUGBeBib0DsWSPWELjepnQxu";

    //user_profile init
    $specialization = mysqli_real_escape_string($connection, $_POST['specialization']);
    $full_name = "$last_name, $first_name $middle_name";
    $gender = $_POST['gender'];
    $birthdate = $_POST['birthdate'];
    $email = $_POST['email'];
    $contact_no = $_POST['contact_no'];
        $address1 = mysqli_real_escape_string($connection, $_POST['address1']);
        $address2 = mysqli_real_escape_string($connection, $_POST['address2']);
        $address3 = mysqli_real_escape_string($connection, $_POST['address3']);
    $address = "$address1, $address2, $address3";

    //VALIDATION
    $queryCheck = "SELECT * FROM useraccount AS a INNER JOIN user_profile AS b ON a.user_id=b.user_id WHERE last_name = '{$last_name}' AND first_name = '{$first_name}' AND middle_name = '{$middle_name}'";
    $resultCheck = mysqli_query($connection, $queryCheck);

    if(mysqli_num_rows($resultCheck)>0){
        $_SESSION['ALERT']['ADD_ACCOUNT_FAILED'] = "$fullname already exists";
    } else {
        //query useraccounts
        $queryUc = "INSERT INTO useraccount(password, last_name, middle_name, first_name, emp_num, user_privilege, first_login) VALUES('{$defaultPass}', '{$last_name}', '{$middle_name}', '{$first_name}', '{$emp_num}', '{$user_privilege}', 1)";
        mysqli_query($connection, $queryUc) or die(mysqli_error($connection));
        $user_id = mysqli_insert_id($connection);


        //query user_profile
        $queryUp = "INSERT INTO user_profile(user_id, full_name, address, gender, birthdate, specialization, email, contact_no) VALUES ('{$user_id}', '{$full_name}', '{$address}', '{$gender}', '{$birthdate}', '{$specialization}', '{$email}', '{$contact_no}')";
        mysqli_query($connection, $queryUp) or die(mysqli_error($connection));

        //audit log
        $type = "Added a new " . displayAccountType($user_privilege) . " account";
        $remarks = "Name: $full_name ";
        insertAuditLogData($type, $remarks);

        $_SESSION['ALERT']['ADD_ACCOUNT_SUCCESS'] = "$fullname account is successfully added.";
    }

    header("Location: accounts.php");
    exit();
}

if(isset($_POST['edit_account'])){
    $user_id = mysqli_real_escape_string($connection, $_POST['user_id']);
    $profile_id = mysqli_real_escape_string($connection, $_POST['profile_id']);
    $last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
    $first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
    $middle_name = mysqli_real_escape_string($connection, $_POST['middle_name']);
    $user_privilege = mysqli_real_escape_string($connection, $_POST['user_privilege']);
    $emp_num = mysqli_real_escape_string($connection, $_POST['emp_num']);

    //user_profile init
    $specialization = mysqli_real_escape_string($connection, $_POST['specialization']);
    $full_name = "$last_name, $first_name $middle_name";
    $gender = $_POST['gender'];
    $birthdate = $_POST['birthdate'];
    $email = $_POST['email'];
    $contact_no = $_POST['contact_no'];
    $address = mysqli_real_escape_string($connection, $_POST['address']);

        //query useraccounts
        $queryUc = "UPDATE useraccount SET last_name = '{$last_name}', middle_name = '{$middle_name}', first_name = '{$first_name}', emp_num = '{$emp_num}', user_privilege = '{$user_privilege}' WHERE user_id = '{$user_id}'";
        mysqli_query($connection, $queryUc) or die(mysqli_error($connection));
        $user_id = mysqli_insert_id($connection);


        //query user_profile
        $queryUp = "UPDATE user_profile SET full_name = '{$full_name}', address = '{$address}', gender = '{$gender}', birthdate = '{$birthdate}', specialization = '{$specialization}', email = '{$email}', contact_no = '{$contact_no}' WHERE profile_id = {$profile_id}";
        mysqli_query($connection, $queryUp) or die(mysqli_error($connection));

        //audit log
        $type = "Updated account information";
        $remarks = "Name: $full_name ";
        insertAuditLogData($type, $remarks);

        $_SESSION['ALERT']['EDIT_ACCOUNT_SUCCESS'] = "The information details of $full_name are successfully updated.";

    if($_SESSION['hts_user_userprivilege']==1)
        header("Location: accounts.php");
    elseif($_SESSION['hts_user_userprivilege']==2){
        $_SESSION['ALERT']['EDIT_ACCOUNT_SUCCESS'] = "Your information details are successfully updated.";
        header("Location: ./");
    }

    exit();
}

if(isset($_POST['submit_cpass'])){
    $oldpassword = $_POST['oldpassword'];
    $newpassword = $_POST['newpassword'];
    $renewpassword = $_POST['renewpassword'];
    $user_id = $_SESSION['hts_user_id'];

    //CHECK user old password
        $rowGetUserPass = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM useraccount WHERE user_id = {$user_id}"));
    //get SALT
        $randSALT = mysqli_fetch_assoc(mysqli_query($connection, "SELECT randSalt FROM useraccount LIMIT 1"));
        $randSalt = $randSALT['randSalt'];

    $oldpassword = crypt($oldpassword, $randSalt);

    if($oldpassword !== $rowGetUserPass['password']){
        $_SESSION['ALERT']['OLDMISMATCH'] = "Old password did not match.";
    }

    //CHECK retyped password
    if($newpassword !== $renewpassword){
        $_SESSION['ALERT']['MISMATCH'] = "Retyped password did not match with new password.";
    }

    //UPDATE PASSWORD
    if($oldpassword == $rowGetUserPass['password'] && $newpassword == $renewpassword){

        $newpassword = crypt($newpassword, $randSalt);

        $queryUpdatePassword = "UPDATE useraccount SET password = '{$newpassword}', first_login = 0 WHERE user_id = {$user_id}";
        $_SESSION['hts_user_first_login'] = 0;
        $resultUpdatePassword = mysqli_query($connection, $queryUpdatePassword);

        $_SESSION['ALERT']['CHANGEPASS_SUCCESS'] = "Password was successfully changed.";
    }

    header("Location: accounts.php?s=chpas");
    exit();
}

if(isset($_POST['cpass_validation'])){
    $oldpassword = $_POST['oldpassword'];
    $newpassword = $_POST['newpassword'];
    $renewpassword = $_POST['renewpassword'];

}

if(isset($_POST['reset_pass'])){
    $user_id = $_POST['user_id'];
    $newpassword = rand_string(10);

    //get details
    $contactno = mysqli_fetch_array(mysqli_query($connection, "SELECT contact_no FROM user_profile WHERE user_id = {$user_id}"));

    //for password encryp
    $encrypt = mysqli_fetch_array(mysqli_query($connection, "SELECT randSalt FROM useraccount"));

    $salt = $encrypt[0];
    $password = crypt($newpassword, $salt);

    //update
    mysqli_query($connection, "UPDATE useraccount SET password = '$password', first_login=1 WHERE user_id = {$user_id}");

    $message = "Your new pasword is: $newpassword";
    itexmo($contactno[0], $message);

}
