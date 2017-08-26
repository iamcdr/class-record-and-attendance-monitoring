    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-body">
                <table class="table table-bordered" id="content">
                    <thead>
                        <tr>
                            <th>Grade Level Assign</th>
                            <th>Section Description</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $querySection = "SELECT * FROM sections WHERE archive_status = 1";
                        $resultSection = mysqli_query($connection, $querySection) or die(mysqli_error($connection));

                        while($rowSection = mysqli_fetch_array($resultSection)){
                        ?>
                            <tr>
                                <td>
                                    <?= displayGradeLevelDesc($rowSection['gradelevel_id']) ?>
                                </td>
                                <td>
                                    <?= $rowSection['section_description'] ?>
                                </td>
                                <td>
                                    <a href="#" id="restoreSection<?= $rowSection[0] ?>" class="btn btn-success">Restore</a>
                                    <?php include("includes/modal_restoresection.php") ?>
                                </td>
                            </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
