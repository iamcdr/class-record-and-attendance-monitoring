<?php include("includes/header.php") ?>
<?php
$activePage = "Reports";
?>

    <?php include("includes/side-nav.php") ?>

    <?php include("includes/top-nav.php") ?>
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="header">
                    <?php
            if(isset($_GET['s'])&&$_GET['s']=="attendance")
                echo '<h4 class="page-header">Attendance Report</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="attendance_month")
                echo '<h4 class="page-header"><a href="reports.php?s=attendance">Attendance Report</a>-> Monthly Report ('.date("F", strtotime("2017-{$_GET['m']}-01")).')</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="cls_rec")
                echo '<h4 class="page-header">Class Record Report</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="cls_stndng-print")
                echo '<h4 class="page-header" style="text-align: center">Class Standing Reports for '.displaySectionDesc($_GET['sid']).'</h4><h4 style="text-align: center">Subject: '.displaySubjectDesc($_GET['subid']).'</h4>';
            else
                echo '<h4 class="page-header">View Reports</h4>';
                        ?>
                </div>
                <!-- /.col-lg-12 -->
                <div class="content">
                    <?php
                if(isset($_GET['s'])) $source = $_GET['s']; else $source = '';

                   switch($source){

                       case 'archive':
                           include "includes/reports_archive.php";
                           break;

                       case 'attendance':
                           include "includes/reports_attendance.php";
                           break;

                       case 'attendance_month':
                           include "includes/reports_attendance_month.php";
                           break;

                       case 'pdf_attendance':
                           include "includes/pdf.reports_attendance_month.php";
                           break;

                       case 'cls_rec':
                           include "includes/reports_class_record.php";
                           break;

                   }

               ?>
                        <!-- /.row -->
                </div>
            </div>
        </div>
    </div>

    <?php include("includes/footer.php") ?>
