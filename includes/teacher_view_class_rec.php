<?php
$section_id = getSectionIdFromTeacherClasses($_GET['tcid']);
$year_id = getSchoolyearIdFromTeacherClasses($_GET['tcid']);
$subject_id = getSubjectIdFromTeacherClasses($_GET['tcid']);
$teacher_id = getTeacherIdFromTeacherClasses($_GET['tcid']);
   ?>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-body">
            <table class="table table-striped" id="content">
                <thead>
                    <tr>
                        <td>Students</td>
                        <td>First Grading</td>
                        <td>Second Grading</td>
                        <td>Third Grading</td>
                        <td>Fourth Grading</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $queryClass = "SELECT * FROM students AS a INNER JOIN student_section AS b ON a.student_id=b.student_id WHERE a.archive_status = 0 AND b.section_id = {$section_id} AND b.schoolyear_id = {$year_id}  ORDER BY a.last_name ASC";
                    $resultClass = mysqli_query($connection, $queryClass);

                    while($rowClass = mysqli_fetch_array($resultClass)){
                    ?>
                        <tr>
                            <td>
                                <?= displayLastNameFirst($rowClass['student_id']) ?>
                            </td>
                            <td><?= displayGradingPeriodGrade($rowClass['student_id'], $subject_id, $section_id, 1, $teacher_id) ?></td>
                            <td><?= displayGradingPeriodGrade($rowClass['student_id'], $subject_id, $section_id, 2, $teacher_id) ?></td>
                            <td><?= displayGradingPeriodGrade($rowClass['student_id'], $subject_id, $section_id, 3, $teacher_id) ?></td>
                            <td><?= displayGradingPeriodGrade($rowClass['student_id'], $subject_id, $section_id, 4, $teacher_id) ?></td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
