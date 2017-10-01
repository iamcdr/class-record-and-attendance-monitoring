<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Section</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $queryClass = "SELECT * FROM student_section a LEFT JOIN sections b ON a.section_id=b.section_id WHERE  a.archive_status=1";
                    $resultClass = mysqli_query($connection, $queryClass);

                    while($rowClass = mysqli_fetch_array($resultClass)){
                    ?>
                    <tr>
                        <td><?= displayStudentName($rowClass['student_id']) ?></td>
                        <td><?= displaySectionDesc($rowClass['section_id']) ?></td>
                        <td><a href="#" id="restore_studentsec<?= $rowClass[0] ?>" class="btn btn-success">Restore</a></td>
                    </tr>
                    <?php include("includes/modal_restorestudentsection.php") ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
