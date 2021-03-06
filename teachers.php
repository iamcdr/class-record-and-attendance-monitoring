<?php include("includes/header.php") ?>
<?php
$activePage = "Manage Teacher";
?>

    <?php include("includes/side-nav.php") ?>

    <?php include("includes/top-nav.php") ?>

    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="header">
                    <?php
            if(isset($_GET['s'])&&$_GET['s']=="assg_cls")
                echo '<h4 class="page-header"><a href="teachers.php">Teachers</a> -> Assign Classes to '. displayTeacherName($_GET['tid']) .'</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="assg_adv_cls")
                echo '<h4 class="page-header"><a href="teachers.php">Teachers</a> -> Assign Advisory Classes to '. displayTeacherName($_GET['tid']) .'</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="trans_rec")
                echo '<h4 class="page-header"><a href="teachers.php">Teachers</a> -> Transfer Records of '. displayTeacherName($_GET['tid']) .'</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="view")
                echo '<h4 class="page-header"><a href="teachers.php">Teachers</a> -> View Details '. displayTeacherName($_GET['tid']) .'</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="view_cls_rec")
                echo '<h4 class="page-header"><a href="teachers.php">Teachers</a> -> <a href="teachers.php?s=view_cls&tid='.getTeacherIdFromTeacherClasses($_GET['tcid']).'">View Classes</a> of '. displayTeacherName(getTeacherIdFromTeacherClasses($_GET['tcid'])) .'-> '.displaySectionDesc(getSectionIdFromTeacherClasses($_GET['tcid'])) . ' (' . displaySubjectDesc(getSubjectIdFromTeacherClasses($_GET['tcid'])) .') </h4>';
            else
                echo '<h4 class="page-header">Teachers</h4>';
                        ?>
                </div>
                <!-- /.col-lg-12 -->
                <div class="content">
                    <?php
                if(isset($_GET['s'])) $source = $_GET['s']; else $source = '';

                   switch($source){

                       case 'assg_cls':
                           include "includes/teacher_assignclasses.php";
                           break;

                       case 'assg_adv_cls':
                           include "includes/teacher_assign_adv_classes.php";
                           break;

                       case 'view':
                           include "includes/teacher_view_details.php";
                           break;

                       case 'view_cls':
                           include "includes/teacher_view_classes.php";
                           break;

                       case 'view_cls_rec':
                           include "includes/teacher_view_class_rec.php";
                           break;

                       case 'trans_rec':
                           include "includes/teacher_transfer_records.php";
                           break;

                       case 'exec':
                           include "includes/teachers_exec.php";
                           break;

                       default:
                           include "includes/view_all_teachers.php";
                           break;

                   }

               ?>
                        <!-- /.row -->
                </div>
            </div>
        </div>
    </div>

    <?php include("includes/footer.php") ?>
