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
            $db_user_account_status = $rowVerify['archive_status'];
            $db_user_account_status = $rowVerify['randSalt'];

            $password = crypt($password, $db_user_password);
        }

        if(($username !== $db_user_username && $username !== $db_user_emp_num) || $password !== $db_user_password || $db_user_account_status == 1){

            header("Location:login.php?error=1");

        } else if(($username == $db_user_username|| $username == $db_user_emp_num) && $password == $db_user_password){

            $_SESSION['hts_user_id'] = $db_user_id;
            $_SESSION['hts_user_username'] = $db_user_username;
            $_SESSION['hts_user_password'] = $db_user_password;
            $_SESSION['hts_user_firstname'] = $db_user_firstname;
            $_SESSION['hts_user_middlename'] = $db_user_middlename;
            $_SESSION['hts_user_lastname'] = $db_user_lastname;
            $_SESSION['hts_user_userprivilege'] = $db_user_userprivilege;
            $_SESSION['hts_user_account_status'] = $db_user_account_status;

            //$_SESSION['loggedin_time'] = time();

                /*//audit trail for login
                $type = "User logged in";
                    //get data
                    $user_name = displayNameFromUsers($_SESSION['mp_eprofile_user_id']);
                $remarks = "User Name: $user_name";
                insertAuditLogData($type, $remarks);*/

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
