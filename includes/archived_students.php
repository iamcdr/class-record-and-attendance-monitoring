<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-body">
            <table class="table table-bordered" id="content">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $queryStudents = "SELECT * FROM students WHERE archive_status = 1";
                        $resultStudents = mysqli_query($connection, $queryStudents) or die(mysqli_error($connection));

                        while($rowStudents = mysqli_fetch_array($resultStudents)){
                        ?>
                        <tr>
                            <td>
                                <?= displayStudentName($rowStudents[0]) ?>
                            </td>
                            <td>
                               <a href="#" id="restoreStudent<?= $rowStudents[0] ?>" class="btn btn-success">Restore</a>
                                <?php include("includes/modal_restorestudent.php") ?>
                            </td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
