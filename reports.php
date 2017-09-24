<?php include("includes/header.php") ?>
<?php
$activePage = "View Advisory Classes";
?>

    <?php include("includes/side-nav.php") ?>

    <?php include("includes/top-nav.php") ?>
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="header">
                    <?php
            if(isset($_GET['s'])&&$_GET['s']=="subj_list")
                echo '<h4 class="page-header"><a href="advisory.php">Advisory</a> ->'.displaySectionDesc($_GET['sid']).'</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="gr_list")
                echo '<h4 class="page-header"><a href="advisory.php">Advisory</a> -> <a href="advisory.php?s=subj_list&sid='. $_GET['sid'].'&yid='.$_GET['yid'].'&subid='.$_GET['subid'].'">'.displaySectionDesc($_GET['sid']).'</a> -> '.displaySubjectDesc($_GET['subid']).'</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="cls_stndng")
                echo '<h4 class="page-header"><a href="advisory.php">Advisory</a>-><a href="advisory.php?s=gr_list&sid='.$_GET['sid'].'&yid='.$_GET['yid'].'">'.displaySectionDesc($_GET['sid']).'</a> ->Class Standing Reports</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="cls_stndng-print")
                echo '<h4 class="page-header" style="text-align: center">Class Standing Reports for '.displaySectionDesc($_GET['sid']).'</h4><h4 style="text-align: center">Subject: '.displaySubjectDesc($_GET['subid']).'</h4>';
            else
                echo '<h4 class="page-header">View Advisory Classes</h4>';
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

                       case 'cls_rec':
                           include "includes/reports_class_record.php";
                           break;

                       default:
                           include "includes/view_all_advisory_classes.php";
                           break;

                   }

               ?>
                        <!-- /.row -->
                </div>
            </div>
        </div>
    </div>

    <?php include("includes/footer.php") ?>
