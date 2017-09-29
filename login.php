<?php session_start(); ?>
    <?php include("includes/db.php") ?>
        <?php include("includes/functions.php") ?>

            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="utf-8" />
                <link rel="apple-touch-icon" sizes="76x76" href="assets/img/logo1.png">
                <link rel="icon" type="image/png" sizes="96x96" href="assets/img/logo1.png">
                <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

                <title>Holy Trinity School</title>

                <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
                <meta name="viewport" content="width=device-width" />


                <!-- Bootstrap core CSS     -->
                <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

                <!-- Animation library for notifications   -->
                <link href="assets/css/animate.min.css" rel="stylesheet" />

                <!--  Paper Dashboard core CSS    -->
                <link href="assets/css/paper-dashboard.css" rel="stylesheet" />

                <!-- iCheck -->
                <link rel="stylesheet" href="plugins/iCheck/flat/red.css">

                <!--  CSS for Demo Purpose, don't include it in your project     -->
                <link href="assets/css/demo.css" rel="stylesheet" />


                <!--  Fonts and icons     -->
                <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
                <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
                <link href="assets/css/themify-icons.css" rel="stylesheet">

            </head>
<style>
                </style>
            <body id="bg" style="background-image: url('assets/img/school.jpg'); background-repeat: no-repeat; background-size: 100%;
">

                <div class="container">

                    <div class="row">
                        <div class="col-md-offset-4 col-md-4 col-md-offset-4" style="text-align: center">
                            <img src="images/logo copy.png" class="img-responsive" style="display: block; margin: auto;">
                        </div>
                        <div class="col-md-offset-4 col-md-4 col-md-offset-4">

                            <div class="login-panel panel panel-default">
                                <?php if(isset($_GET['error'])&&$_GET['error']==2){ ?>
                                    <div class="alert alert-danger"> Error! Username is not registered.</div>
                                    <?php
                                } elseif(isset($_GET['error'])&&$_GET['error']=='1'){ ?>
                                        <div class="alert alert-danger"> Error! Username and password did not match.</div>
                                    <?php
                                } elseif(isset($_GET['error'])&&$_GET['error']=='1s'){ ?>
                                        <div class="alert alert-danger"> Error! Account is disabled. Contact your administrator</div>
                                    <?php
                                } elseif(isset($_GET['error'])&&$_GET['error']=='fp1'){ ?>
                                        <div class="alert alert-danger"> Failed! Employee number and contact number did not match</div>
                                        <?php } ?>

                                        <?php
                                         if(isset($_GET['s'])) $source = $_GET['s']; else $source = '';

                                            switch($source){

                                                case 'for_pass';
                                                    include "includes/login_forget_password.php";
                                                    break;

                                                case 'exec';
                                                    include "includes/login_exec.php";
                                                    break;

                                                default:
                                                    include "includes/login_main.php";
                                                    break;

                                            }

                                        ?>

                            </div>
                        </div>
                    </div>
                </div>


                    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
                    <script src="plugins/iCheck/icheck.min.js"></script>

                    <script>
                        $('input[type="checkbox"]').iCheck({
                            checkboxClass: 'icheckbox_flat-red',
                            radioClass: 'iradio_flat-red'
                        });
                    </script>
            </body>

            </html>
