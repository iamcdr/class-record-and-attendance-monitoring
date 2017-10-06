<?php include("includes/header.php") ?>
<?php
$activePage = "View Classes";
?>

    <?php include("includes/side-nav.php") ?>

    <?php include("includes/top-nav.php") ?>
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="header">
                    <?php
            if(isset($_GET['s'])&&$_GET['s']=="cls_rec")
                echo '<h4 class="page-header"><a href="classes.php">Classes</a> ->'.displaySectionDesc($_GET['sid']).'('.displaySubjectDesc($_GET['subid']).')</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="add_grades")
                echo '<h4 class="page-header"><a href="classes.php">Classes</a>-><a href="classes.php?s=cls_rec&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'">'.displaySectionDesc($_GET['sid']).'('.displaySubjectDesc($_GET['subid']).')</a> ->Add Grades</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="cls_stndng")
                echo '<h4 class="page-header"><a href="classes.php">Classes</a>-><a href="classes.php?s=cls_rec&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'">'.displaySectionDesc($_GET['sid']).'('.displaySubjectDesc($_GET['subid']).')</a> ->Class Standing Reports</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="add_ww")
                echo '<h4 class="page-header"><a href="classes.php">Classes</a>-><a href="classes.php?s=cls_rec&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'">'.displaySectionDesc($_GET['sid']).'('.displaySubjectDesc($_GET['subid']).')</a> -><a href="classes.php?s=add_grades&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'">Add Grades</a>-> <a href="classes.php?s=ww&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'&gpid='.$_GET['gpid'].'">Written Work</a>-> Add Written Work</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="ww")
                echo '<h4 class="page-header"><a href="classes.php">Classes</a>-><a href="classes.php?s=cls_rec&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'">'.displaySectionDesc($_GET['sid']).'('.displaySubjectDesc($_GET['subid']).')</a> -><a href="classes.php?s=add_grades&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'">Add Grades</a>-> Written Work</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="edit_ww")
                echo '<h4 class="page-header"><a href="classes.php">Classes</a>-><a href="classes.php?s=cls_rec&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'">'.displaySectionDesc($_GET['sid']).'('.displaySubjectDesc($_GET['subid']).')</a> -><a href="classes.php?s=add_grades&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'">Add Grades</a>-> <a href="classes.php?s=ww&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'&gpid='.$_GET['gpid'].'">Written Work</a>-> <a href="classes.php?s=ww_e&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'&gpid='.$_GET['gpid'].'">Edit Written Works</a>->Update '.$_GET['outses'].'</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="ww_e")
                echo '<h4 class="page-header"><a href="classes.php">Classes</a>-><a href="classes.php?s=cls_rec&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'">'.displaySectionDesc($_GET['sid']).'('.displaySubjectDesc($_GET['subid']).')</a> -><a href="classes.php?s=add_grades&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'">Add Grades</a>-> <a href="classes.php?s=ww&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'&gpid='.$_GET['gpid'].'">Written Work</a>-> Edit Written Works</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="add_pt")
                echo '<h4 class="page-header"><a href="classes.php">Classes</a>-><a href="classes.php?s=cls_rec&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'">'.displaySectionDesc($_GET['sid']).'('.displaySubjectDesc($_GET['subid']).')</a> -><a href="classes.php?s=add_grades&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'">Add Grades</a>-> <a href="classes.php?s=pt&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'&gpid='.$_GET['gpid'].'">Performance Task</a>-> Add Performance Task</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="pt")
                echo '<h4 class="page-header"><a href="classes.php">Classes</a>-><a href="classes.php?s=cls_rec&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'">'.displaySectionDesc($_GET['sid']).'('.displaySubjectDesc($_GET['subid']).')</a> -><a href="classes.php?s=add_grades&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'">Add Grades</a>-> Performance Task</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="edit_pt")
                echo '<h4 class="page-header"><a href="classes.php">Classes</a>-><a href="classes.php?s=cls_rec&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'">'.displaySectionDesc($_GET['sid']).'('.displaySubjectDesc($_GET['subid']).')</a> -><a href="classes.php?s=add_grades&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'">Add Grades</a>-> <a href="classes.php?s=pt&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'&gpid='.$_GET['gpid'].'">Performance Task</a>-><a href="classes.php?s=pt_e&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'&gpid='.$_GET['gpid'].'">Edit Performance Task</a>->Update '.$_GET['outses'].'</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="pt_e")
                echo '<h4 class="page-header"><a href="classes.php">Classes</a>-><a href="classes.php?s=cls_rec&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'">'.displaySectionDesc($_GET['sid']).'('.displaySubjectDesc($_GET['subid']).')</a> -><a href="classes.php?s=add_grades&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'">Add Grades</a>-> <a href="classes.php?s=pt&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'&gpid='.$_GET['gpid'].'">Performance Task</a>-> Edit Performance Tasks</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="add_qa")
                echo '<h4 class="page-header"><a href="classes.php">Classes</a>-><a href="classes.php?s=cls_rec&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'">'.displaySectionDesc($_GET['sid']).'('.displaySubjectDesc($_GET['subid']).')</a> -><a href="classes.php?s=add_grades&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'">Add Grades</a>-> <a href="classes.php?s=qa&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'&gpid='.$_GET['gpid'].'">Quarterly Assessment</a>-> Add Quarterly Assessment</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="qa")
                echo '<h4 class="page-header"><a href="classes.php">Classes</a>-><a href="classes.php?s=cls_rec&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'">'.displaySectionDesc($_GET['sid']).'('.displaySubjectDesc($_GET['subid']).')</a> -><a href="classes.php?s=add_grades&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'">Add Grades</a>-> Quarterly Assessment</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="edit_qa")
                echo '<h4 class="page-header"><a href="classes.php">Classes</a>-><a href="classes.php?s=cls_rec&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'">'.displaySectionDesc($_GET['sid']).'('.displaySubjectDesc($_GET['subid']).')</a> -><a href="classes.php?s=add_grades&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'">Add Grades</a>-> <a href="classes.php?s=qa&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'&gpid='.$_GET['gpid'].'">Quarterly Assessment</a>-><a href="classes.php?s=qa_e&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'&gpid='.$_GET['gpid'].'">Edit Quarterly Assessment</a>->Update '.$_GET['outses'].'</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="qa_e")
                echo '<h4 class="page-header"><a href="classes.php">Classes</a>-><a href="classes.php?s=cls_rec&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'">'.displaySectionDesc($_GET['sid']).'('.displaySubjectDesc($_GET['subid']).')</a> -><a href="classes.php?s=add_grades&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'">Add Grades</a>-> <a href="classes.php?s=qa&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'&gpid='.$_GET['gpid'].'">Quarterly Assessment</a>-> Edit Quarterly Assessment</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="edit_perc")
                echo '<h4 class="page-header"><a href="classes.php">Classes</a>-><a href="classes.php?s=cls_rec&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'">'.displaySectionDesc($_GET['sid']).'('.displaySubjectDesc($_GET['subid']).')</a> -><a href="classes.php?s=add_grades&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&yid='.$_GET['yid'].'">Add Grades</a>-> Edit Percentage Distribution</h4>';
            else
                echo '<h4 class="page-header">View Classes</h4>';
                        ?>
                </div>
                <!-- /.col-lg-12 -->
                <div class="content">
                    <?php
                if(isset($_GET['s'])) $source = $_GET['s']; else $source = '';

                   switch($source){

                       case 'cls_rec':
                           include "includes/classes_studlist.php";
                           break;

                       case 'add_grades':
                           include "includes/classes_add_grades.php";
                           break;

                       case 'ww':
                           include "includes/classes_written.php";
                           break;

                       case 'add_ww':
                           include "includes/classes_add_written.php";
                           break;

                       case 'edit_ww':
                           include "includes/classes_add_written.php";
                           break;

                       case 'ww_e':
                           include "includes/classes_edit_written.php";
                           break;

                       case 'pt':
                           include "includes/classes_performance.php";
                           break;

                       case 'add_pt':
                           include "includes/classes_add_performance.php";
                           break;

                       case 'edit_pt':
                           include "includes/classes_add_performance.php";
                           break;

                       case 'pt_e':
                           include "includes/classes_edit_performance.php";
                           break;

                       case 'qa':
                           include "includes/classes_quartasse.php";
                           break;

                       case 'add_qa':
                           include "includes/classes_add_quartasse.php";
                           break;

                       case 'edit_qa':
                           include "includes/classes_add_quartasse.php";
                           break;

                       case 'qa_e':
                           include "includes/classes_edit_quartasse.php";
                           break;

                       case 'cls_stndng':
                           include "includes/classes_report_standing.php";
                           break;

                       case 'edit_perc':
                           include "includes/classes_edit_percentage.php";
                           break;

                       case 'exec':
                           include "includes/classes_exec.php";
                           break;

                       default:
                           include "includes/view_all_classes.php";
                           break;

                   }

               ?>
                        <!-- /.row -->
                </div>
            </div>
        </div>
    </div>

    <?php include("includes/footer.php") ?>
