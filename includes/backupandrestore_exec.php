<?php
include("db.php");
session_start();
include("functions.php");

if(isset($_POST['restore_confirmation'])){

    $password = mysqli_real_escape_string($connection, $_POST['password_auth']);
    //check password
    $userid = $_SESSION['hts_user_id'];
    $queryAuth = "SELECT password FROM useraccount WHERE user_id = {$userid}";
    $resultAuth = mysqli_query($connection, $queryAuth);
    $rowAuth = mysqli_fetch_array($resultAuth);
        //check db for pass
        $password = crypt($password, $rowAuth[0]);
        //initialize json

        if($password != $rowAuth[0]){
            echo "error";
            exit();
        } else {
            $filename= $_POST['backup_file'];
            $filename=urldecode($filename);
            $templine = '';
            $file = file("../backup/".$filename.".sql");


            if (!file_exists("../backup/".$filename.".sql")) // check .. baka na delete na yung file bago ma restore ...
            {
                echo "The file $filename does not exist"; //temp...
                exit();
            }
            else
            {
                foreach ($file as $line)
                {
                    if (substr($line, 0, 2) == '--' || $line == '')
                        continue;
                $templine .= $line;
                    if (substr(trim($line), -1, 1) == ';')
                    {
                        if (!mysqli_query($connection, $templine))
                            {
                                echo "Error creating table: " . mysqli_error($connection);
                            }
                        $templine = '';
                    }
                }
                echo "Restore Complete."; //temporary habang wala pang page :)
                exit();

            }
        }

}
