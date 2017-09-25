<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-body">
            <?= isset($_SESSION['ALERT']['ASSIGN_CLASS_SUCCESS']) ? '<div class="alert alert-success">'.$_SESSION['ALERT']['ASSIGN_CLASS_SUCCESS']. '</div>' : ''; ?>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Section</th>
                            <th>Subject</th>
                            <th>Year</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    $queryClass = "SELECT * FROM teacher_classes a LEFT JOIN sections b ON a.section_id=b.section_id WHERE teacher_id = {$_GET['tid']} AND advisory = 0 AND b.archive_status=0 AND a.archive_status=0";
                    $resultClass = mysqli_query($connection, $queryClass);

                    while($rowClass = mysqli_fetch_array($resultClass)){
                    ?>
                            <tr>
                                <td>
                                    <?= displaySectionDesc($rowClass['section_id']) ?>
                                </td>
                                <td>
                                    <?= displaySubjectDesc($rowClass['subject_id']) ?>
                                </td>
                                <td>
                                    <?= displayAcadYear($rowClass['year_id']) ?>
                                </td>
                                <td><a href="teachers.php?s=view_cls_rec&tcid=<?= $rowClass[0] ?>" class="btn btn-success">View Records</a></td>
                            </tr>
                    <?php } ?>
                    </tbody>
                </table>
        </div>
    </div>
</div>
