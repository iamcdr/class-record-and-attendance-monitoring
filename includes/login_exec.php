<?php
if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $queryVerify = "SELECT * FROM useraccount WHERE username = '{$username}' OR emp_num = '{$username}' ";
    $resultVerify = mysqli_query($connection, $queryVerify) or die(mysqli_error($connection));

    //1 is ADMIN
    //2 is TEACHER
    if(mysqli_num_rows($resultVerify)>0){ //if user name found in useraccount table

        while($rowVerify = mysqli_fetch_array($resultVerify)){

            $db_user_id = $rowVerify['user_id'];
            $db_user_username = $rowVerify['username'];
            $db_user_emp_num = $rowVerify['emp_num'];
            $db_user_password = $rowVerify['password'];
            $db_user_firstname = $rowVerify['first_name'];
            $db_user_middlename = $rowVerify['middle_name'];
            $db_user_lastname = $rowVerify['last_name'];
            $db_user_userprivilege = $rowVerify['user_privilege'];
            $db_user_rand_salt = $rowVerify['randSalt'];
            $db_user_account_status = $rowVerify['archive_status'];
            $db_user_first_login = $rowVerify['first_login'];

            $password = crypt($password, $db_user_password);
        }

        if(($username !== $db_user_username && $username !== $db_user_emp_num) || $password !== $db_user_password){
            header("Location:login.php?error=1");
        } else if($db_user_account_status == 1){
            header("Location:login.php?error=1s");
        } else if(($username == $db_user_username|| $username == $db_user_emp_num) && $password == $db_user_password){

            $_SESSION['hts_user_id'] = $db_user_id;
            $_SESSION['hts_user_username'] = $db_user_username;
            $_SESSION['hts_user_password'] = $db_user_password;
            $_SESSION['hts_user_firstname'] = $db_user_firstname;
            $_SESSION['hts_user_middlename'] = $db_user_middlename;
            $_SESSION['hts_user_lastname'] = $db_user_lastname;
            $_SESSION['hts_user_userprivilege'] = $db_user_userprivilege;
            $_SESSION['hts_user_account_status'] = $db_user_account_status;
            $_SESSION['hts_user_first_login'] = $db_user_first_login;

            //$_SESSION['loggedin_time'] = time();

                /*//audit trail for login
                $type = "User logged in";
                    //get data
                    $user_name = displayNameFromUsers($_SESSION['mp_eprofile_user_id']);
                $remarks = "User Name: $user_name";
                insertAuditLogData($type, $remarks);*/

                if($_SESSION['hts_user_first_login']==1)
                    header("Location: ./accounts.php?s=chpas");
                else
                    header("Location: ./");

        }

    } else {

        header("Location: ./login.php?error=2");
    }

}


if(isset($_GET['logout'])&&isset($_SESSION['hts_user_userprivilege'])){

    $_SESSION['hts_user_id'] = null;
    $_SESSION['hts_user_username'] = null;
    $_SESSION['hts_user_password'] = null;
    $_SESSION['hts_user_firstname'] = null;
    $_SESSION['hts_user_middlename'] = null;
    $_SESSION['hts_user_lastname'] = null;
    $_SESSION['hts_user_userprivilege'] = null;
    $_SESSION['hts_user_account_status'] = null;

    session_destroy();
    header ("Location: ./login.php");
}

if(isset($_POST['forgot_pass'])){
    $emp_idno = mysqli_real_escape_string($connection, $_POST['emp_idno']);
    $contact_no = mysqli_real_escape_string($connection, $_POST['contact_no']);

    //get
    $count = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM useraccount a LEFT JOIN user_profile b ON a.user_id=b.user_id WHERE a.emp_num = '{$emp_idno}' AND b.contact_no = '{$contact_no}'"));

    if($count>0){
        $newpassword = rand_string(10);
        //get details
        $data = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM useraccount a LEFT JOIN user_profile b ON a.user_id=b.user_id WHERE a.emp_num = '{$emp_idno}' AND b.contact_no = '{$contact_no}'"));
        $user_id = $data[0];

        //for password encryp
        $encrypt = mysqli_fetch_array(mysqli_query($connection, "SELECT randSalt FROM useraccount"));

        $salt = $encrypt[0];
        $password = crypt($newpassword, $salt);

        //update
        mysqli_query($connection, "UPDATE useraccount SET password = '$password', first_login=1 WHERE user_id = {$user_id}");

        $message = "Your new pasword is: $newpassword";
        itexmo($contact_no, $message);
        header("Location: login.php");
    } else {
        header("Location: login.php?s=for_pass&error=fp1");
    }
}
