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