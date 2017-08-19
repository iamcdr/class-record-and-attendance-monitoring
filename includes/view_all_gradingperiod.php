<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>Description</td>
                        <td>Status </td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $queryGP = "SELECT * FROM gradingperiod ORDER BY gradingperiod_id";
                    $resultGP = mysqli_query($connection, $queryGP);

                    while($rowGP = mysqli_fetch_array($resultGP)):
                    ?>
                        <tr>
                            <td><?= $rowGP['description'] ?></td>
                            <td><?= ($rowGP['status']==0) ? '<span class="label label-danger">Inactive</span>' : '<span class="label label-success">Active</span>' ?></td>
                            <td><?= ($rowGP['status']==1) ? '' : '<a href="#" id="activate_grading'.$rowGP['gradingperiod_id'].'" class="btn btn-success">Activate</a>' ?></td>
                        </tr>
                        <?php
                        include("includes/modal_activategradingperiod.php");

                    endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
