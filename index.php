<?php include("includes/header.php") ?>
<?php
$activePage = "Dashboard";
?>

    <?php include("includes/side-nav.php") ?>

    <?php include("includes/top-nav.php") ?>


    <div class="content">
        <div class="container-fluid">
            <div class="header">
                <h4 class="title">Class Record and Attendance Monitoring System</h4>
                <p class="category">Handcrafted for Holy Trinity School</p>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="panel task db mbm">
                    <div class="panel-body">
                        <p class="icon">
                            Current Grading Period
                        </p>
                        <h4>
                            <?php
                                $rowGp = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM gradingperiod WHERE status = 1"));
                                echo $rowGp[1];
                                ?>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-wrapper -->

    <?php include("includes/footer.php") ?>
