<?php include("includes/header.php") ?>
    <?php
$activePage = "Manage Subjects";
?>

        <?php include("includes/side-nav.php") ?>

            <?php include("includes/top-nav.php") ?>

                <div class="content">
                    <div class="container-fluid">
                        <div class="card">

                            <div class="header">
                                <?php
    if(isset($_GET['s'])&&$_GET['s']=="add")
        echo '<h4 class="page-header"><a href="subjects.php">Subjects</a> -> Add New</h4>';
    elseif(isset($_GET['s'])&&$_GET['s']=="edit")
        echo '<h4 class="page-header"><a href="subjects.php">Subjects</a> -> Edit '. displaySubjectDesc($_GET['sid']) .'</h4>';
    else
        echo '<h4 class="page-header">Subjects</h4>';
                ?>
                            </div>
                            <!-- /.col-lg-12 -->
                            <div class="content">
                                <?php
                if(isset($_GET['s'])) $source = $_GET['s']; else $source = '';

                   switch($source){

                       case 'add':
                           include "includes/add_subject.php";
                           break;

                       case 'edit':
                           include "includes/edit_subject.php";
                           break;

                       case 'exec':
                           include "includes/subjects_exec.php";
                           break;

                       default:
                           include "includes/view_all_subjects.php";
                           break;

                   }

               ?>
                                    <!-- /.row -->
                            </div>
                        </div>
                    </div>
</div>


                    <?php include("includes/footer.php") ?>
