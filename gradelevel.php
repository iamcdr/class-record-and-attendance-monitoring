<?php include("includes/header.php") ?>
    <?php
$activePage = "Manage Grade Level";
?>

        <?php include("includes/side-nav.php") ?>

            <?php include("includes/top-nav.php") ?>

                <div class="content">
                    <div class="container-fluid">
                        <div class="card">

                            <div class="header">
                                <?php
    if(isset($_GET['s'])&&$_GET['s']=="add")
        echo '<h4 class="page-header"><a href="gradelevel.php">Grade Level</a> -> Add New</h4>';
    elseif(isset($_GET['s'])&&$_GET['s']=="edit")
        echo '<h4 class="page-header"><a href="gradelevel.php">Grade Level</a> -> Edit '. displayGradeLevelDesc($_GET['lvlid']) .'</h4>';
    elseif(isset($_GET['s'])&&$_GET['s']=="assg_sub")
        echo '<h4 class="page-header"><a href="gradelevel.php">Grade Level</a> -> Assign Subjects to '. displayGradeLevelDesc($_GET['lvlid']) .'</h4>';
    else
        echo '<h4 class="page-header">Grade Level</h4>';
                ?>
                            </div>
                            <!-- /.col-lg-12 -->
                            <div class="content">
                                <?php
                if(isset($_GET['s'])) $source = $_GET['s']; else $source = '';

                   switch($source){

                       case 'add':
                           include "includes/add_gradelevel.php";
                           break;

                       case 'edit':
                           include "includes/edit_gradelevel.php";
                           break;

                       case 'assg_sub':
                           include "includes/gradelevel_assignsubject.php";
                           break;

                       case 'exec':
                           include "includes/gradelevel_exec.php";
                           break;

                       default:
                           include "includes/view_all_gradelevel.php";
                           break;

                   }

               ?>
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                </div>

                <?php include("includes/footer.php") ?>
