<?php
session_start();
ob_start();
date_default_timezone_set("Asia/Manila");
include("includes/db.php");
include("includes/functions.php");

    if(!isset($_SESSION['hts_user_userprivilege']))
        header("Location: login.php");

 ?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="images/icons/htslogo.jpg">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/logo1.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/logo1.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Holy Trinity School</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
 <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/red.css">

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

    <!-- Data Tables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="plugins/sweetalert2/dist/sweetalert2.min.css">
    <script src="plugins/sweetalert2/dist/sweetalert2.min.js"></script>

    <!--Select2-->
    <link rel="stylesheet" href="plugins/select2/dist/css/select2.min.css">

</head>


<body>
