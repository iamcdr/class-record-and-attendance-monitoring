<?php include("includes/header.php") ?>
<?php
$activePage = "Attendance Monitoring";
?>

    <?php include("includes/side-nav.php") ?>

    <?php include("includes/top-nav.php") ?>
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="header">
                    <?php
            if(isset($_GET['s'])&&$_GET['s']=="avg_ass")
                echo '<h4 class="page-header"><a href="attendance.php">Avengers Assemble ;) </a></h4>';
            else
                echo '<h4 class="page-header">Attendance Monitoring</h4>';
                        ?>
                </div>
                <!-- /.col-lg-12 -->
                <div class="content">
                    <?php
                if(isset($_GET['s'])) $source = $_GET['s']; else $source = '';

                   switch($source){

                       case 'exec':
                           include "includes/attendance_exec.php";
                           break;

                       default:
                           include "includes/view_attendance_interface.php";
                           break;

                   }

               ?>
                        <!-- /.row -->
                </div>
            </div>
        </div>
    </div>

    <?php include("includes/footer.php") ?>
