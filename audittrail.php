<?php include("includes/header.php") ?>
    <?php
$activePage = "Settings: Audit Trail";
?>

        <?php include("includes/side-nav.php") ?>

            <?php include("includes/top-nav.php") ?>

                <div class="content">
                    <div class="container-fluid">
                        <div class="card">

                            <div class="header">
                            </div>
                            <!-- /.col-lg-12 -->
                            <div class="content">
                                <!--MAINCONTENT-->
                                <table class="table table-hover table-striped table-condensed" id="content_audit">
                                    <thead>
                                        <tr>
                                            <th>Account Name</th>
                                            <th>Account Type</th>
                                            <th>Audit Type</th>
                                            <th>Audit Remarks</th>
                                            <th>Audit Date and Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                        $queryAudit = "SELECT * FROM audit_trail ORDER BY audit_datetime DESC";
                        $resultAudit = mysqli_query($connection, $queryAudit);

                        while($rowAudit = mysqli_fetch_array($resultAudit)){
                            ?>
                                            <tr>
                                                <td>
                                                    <?= displayName($rowAudit['user_id']) ?>
                                                </td>
                                                <td>
                                                    <?= displayAccountType($rowAudit['user_privilege']) ?>
                                                </td>
                                                <td>
                                                    <?= $rowAudit['audit_type'] ?>
                                                </td>
                                                <td>
                                                    <?= $rowAudit['audit_remarks'] ?>
                                                </td>
                                                <td>
                                                    <?=  $rowAudit['audit_datetime']  ?>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                    </tbody>
                                </table>
                                <!--MAIN CONTENT-->
                                <!-- /.row -->
                            </div>
                        </div>
                    </div>
                </div>

                <?php include("includes/footer.php") ?>
