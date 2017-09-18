<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-body">
           <a href="classes.php?s=add_grades&sid=<?= $_GET['sid']?>&subid=<?= $_GET['subid'] ?>&yid=<?= $_GET['yid'] ?>" class="btn btn-success btn-lg"><i class="fa fa-plus fa-fw"></i> Add Grades</a>
           <a href="classes.php?s=cls_stndng&sid=<?= $_GET['sid']?>&subid=<?= $_GET['subid'] ?>&yid=<?= $_GET['yid'] ?>" class="btn btn-info btn-lg">Class Standing Report</a>
            <table class="table table-striped" id="content">
                <thead>
                    <tr>
                        <td>Students</td>
                        <td>First Grading</td>
                        <td>Second Grading</td>
                        <td>Third Grading</td>
                        <td>Fourth Grading</td>
                        <td>Final Grade</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $queryClass = "SELECT * FROM students AS a INNER JOIN student_section AS b ON a.student_id=b.student_id WHERE a.archive_status = 0 AND b.section_id = {$_GET['sid']} AND b.schoolyear_id = {$_GET['yid']} ORDER BY a.last_name ASC";
                    $resultClass = mysqli_query($connection, $queryClass);

                    while($rowClass = mysqli_fetch_array($resultClass)){
                    ?>
                        <tr>
                            <td>
                                <?= displayLastNameFirst($rowClass['student_id']) ?>
                            </td>
                            <td><?= displayGradingPeriodGrade($rowClass['student_id'], $_GET['subid'], $_GET['sid'], 1) ?></td>
                            <td><?= displayGradingPeriodGrade($rowClass['student_id'], $_GET['subid'], $_GET['sid'], 2) ?></td>
                            <td><?= displayGradingPeriodGrade($rowClass['student_id'], $_GET['subid'], $_GET['sid'], 3) ?></td>
                            <td><?= displayGradingPeriodGrade($rowClass['student_id'], $_GET['subid'], $_GET['sid'], 4) ?></td>
                            <td><?= displayGradingPeriodGrade($rowClass['student_id'], $_GET['subid'], $_GET['sid'], 5) ?></td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
