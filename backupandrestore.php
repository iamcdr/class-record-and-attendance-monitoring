<?php include("includes/header.php") ?>
    <?php
$activePage = "Backup and Restore Settings";
?>

            <?php include("includes/side-nav.php") ?>

        <?php include("includes/top-nav.php") ?>

                <div class="content">
                    <div class="container-fluid">
                        <div class="card">
                            <!-- /.col-lg-12 -->
                            <div class="content">
                    <!--MAINCONTENT-->
                    <?php
                    $source = (isset($_GET['s'])) ? $_GET['s'] : '';

                    switch($source){
                        /*case 'exec':
                            include "includes/backupandrestore_exec.php";
                            break;*/

                        default:
                            include "includes/view_all_backups.php";
                            break;
                    }
                    ?>
                    <!--MAIN CONTENT-->
                    <!-- /.row -->
                </div>

                <?php include("includes/footer.php") ?>
