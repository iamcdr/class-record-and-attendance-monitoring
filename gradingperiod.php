<?php include("includes/header.php") ?>
    <?php
$activePage = "Manage Grading Period";
?>

        <?php include("includes/side-nav.php") ?>

            <?php include("includes/top-nav.php") ?>

                <div class="content">
                    <div class="container-fluid">
                        <div class="card">
                            <div class="header">
                                <h4 class="page-header">Grading Period</h4>
                            </div>
                            <!-- /.col-lg-12 -->
                            <div class="content">
                                <?php
                if(isset($_GET['s'])) $source = $_GET['s']; else $source = '';

                   switch($source){

                       case 'exec':
                           include "includes/gradingperiod_exec.php";
                           break;

                       default:
                           include "includes/view_all_gradingperiod.php";
                           break;

                   }

               ?>

                                    <!-- /.row -->
                            </div>
                        </div>
                    </div>
                </div>

                <?php include("includes/footer.php") ?>
