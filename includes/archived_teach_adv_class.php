<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Section</th>
                        <th>Year</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $queryClass = "SELECT * FROM teacher_classes a LEFT JOIN sections b ON a.section_id=b.section_id WHERE advisory = 1 ANd a.archive_status=1";
                    $resultClass = mysqli_query($connection, $queryClass);

                    while($rowClass = mysqli_fetch_array($resultClass)){
                    ?>
                    <tr>
                        <td><?= displaySectionDesc($rowClass['section_id']) ?></td>
                        <td><?= displayAcadYear($rowClass['year_id']) ?></td>
                        <td><a href="#" id="restore_assignadvclass<?= $rowClass[0] ?>" class="btn btn-success">Restore</a></td>
                    </tr>
                    <?php include("includes/modal_restoreassignedadvclass.php") ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
