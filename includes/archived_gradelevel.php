    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-body">
                <table class="table table-bordered" id="content">
                    <thead>
                        <tr>
                            <th>Grade Level Code</th>
                            <th>Grade Level Description</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $queryGradeLvl = "SELECT * FROM gradelevel WHERE archive_status = 1";
                        $resultGradeLvl = mysqli_query($connection, $queryGradeLvl) or die(mysqli_error($connection));

                        while($rowGradeLvl = mysqli_fetch_array($resultGradeLvl)){
                        ?>
                            <tr>
                                <td>
                                    <?= $rowGradeLvl['gradelevel_code'] ?>
                                </td>
                                <td>
                                    <?= $rowGradeLvl['gradelevel_description'] ?>
                                </td>
                                <td>
                                    <a href="#" id="restoreGradelevel<?= $rowGradeLvl[0] ?>" class="btn btn-success">Restore</a>
                                    <?php include("includes/modal_restoregradelevel.php") ?>
                                </td>
                            </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
