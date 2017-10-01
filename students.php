<?php include("includes/header.php") ?>
<?php
$activePage = "Manage Students";
?>

    <?php include("includes/side-nav.php") ?>

    <?php include("includes/top-nav.php") ?>

    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="header">
                    <?php
            if(isset($_GET['s'])&&$_GET['s']=="add")
                echo '<h4 class="page-header"><a href="students.php">Students</a> -> Add New</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="assg_sc")
                echo '<h4 class="page-header"><a href="students.php">Students</a> -> Assign Section to '.displayStudentName($_GET['sid']).'</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="view")
                echo '<h4 class="page-header"><a href="students.php">Students</a> -> View Information of '.displayStudentName($_GET['sid']).'</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="edit")
                echo '<h4 class="page-header"><a href="students.php">Students</a> -> Update Information of '.displayStudentName($_GET['sid']).'</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="shft_sc")
                echo '<h4 class="page-header"><a href="students.php">Students</a> -> Shift Section of '.displayStudentName($_GET['sid']).'</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="batch_assign")
                echo '<h4 class="page-header"><a href="students.php">Students</a> -> Batch Assigning of Sections</h4>';
            else
                echo '<h4 class="page-header">Students</h4>';
                        ?>
                </div>
                <!-- /.col-lg-12 -->
                <div class="content">
                    <?php
                if(isset($_GET['s'])) $source = $_GET['s']; else $source = '';

                   switch($source){

                       case 'add':
                           include "includes/add_student.php";
                           break;

                       case 'assg_sc':
                           include "includes/students_assignsection.php";
                           break;

                       case 'view':
                           include "includes/view_student_info.php";
                           break;

                       case 'edit':
                           include "includes/students_update.php";
                           break;

                       case 'shft_sc':
                           include "includes/students_shift_section.php";
                           break;

                       case 'batch_assign':
                           include "includes/students_batch_assign.php";
                           break;

                       case 'exec':
                           include "includes/students_exec.php";
                           break;

                       default:
                           include "includes/view_all_students.php";
                           break;

                   }

               ?>
                        <!-- /.row -->
                </div>
            </div>
        </div>
    </div>

    <?php include("includes/footer.php") ?>
