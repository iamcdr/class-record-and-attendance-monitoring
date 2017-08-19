<?php include("includes/header.php") ?>
    <?php
$activePage = "Archives";
?>

        <?php include("includes/side-nav.php") ?>

            <?php include("includes/top-nav.php") ?>

                <div class="content">
                    <div class="container-fluid">
                        <div class="card">

                            <?php
                if(isset($_GET['s'])) $source = $_GET['s']; else $source = '';

                   switch($source){

                       case 'subjects':
                           include "includes/archived_subjects.php";
                           break;

                       case 'exec':
                           include "includes/account_exec.php";
                           break;

                       default:
                           include "includes/view_all_archives.php";
                           break;

                   }

               ?>
                                <!-- /.row -->
                        </div>
                    </div>
                </div>

                <?php include("includes/footer.php") ?>
