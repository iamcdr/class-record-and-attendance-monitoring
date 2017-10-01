<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?php
            $queryGp = "SELECT * FROM gradingperiod";
            $resultGp = mysqli_query($connection, $queryGp);

            while($rowGp = mysqli_fetch_array($resultGp)):
             ?>
             <h1><?= $rowGp['description'] ?></h1>
             <table class="table table-bordered">
                <?php
                $querySec = "SELECT * FROM sections WHERE archive_status = 0";
                $resultSec = mysqli_query($connection, $querySec);
                while($rowSec = mysqli_fetch_array($resultSec)):
                    ?>
                    <tr class="border">
                        <th colspan=2>
                            <?= displaySectionDesc($rowSec[0]) ?>
                        </th>
                    </tr>




                    <?php
                    $queryStuds = "SELECT * FROM student_section a LEFT JOIN students b ON a.student_id=b.student_id WHERE a.archive_status = 0 AND b.archive_status = 0 AND section_id = {$rowSec[0]} AND schoolyear_id = {$_GET['ay']} ORDER BY b.last_name";
                    $resultStuds = mysqli_query($connection, $queryStuds);

                    while($rowStuds = mysqli_fetch_array($resultStuds)):
                    ?>
                    <tr>
                        <td><?= displayStudentName($rowStuds['student_id']) ?></td>
                    </tr>
                        <?php
                        $querySub = "SELECT * FROM gradelevel_subject a LEFT JOIN subjects b ON a.subject_id=b.subject_id WHERE a.level_id = {$rowSec['gradelevel_id']} AND a.archive_status=0 AND b.archive_status=0";
                        $resultSub = mysqli_query($connection, $querySub) or die(mysqli_error($connection) . $querySub) ;

                        while($rowSub = mysqli_fetch_array($resultSub)):
                        ?>
                        <tr style="border: 1px solid black; font-weight: bold">
                            <td><?= displaySubjectDesc($rowSub['subject_id']) ?></td>
                            <td><?= displayGradingPeriodGrade($rowStuds['student_id'], $rowSub['subject_id'], $rowSec[0], $rowGp[0]) ?></td>
                        </tr>
                        <?php endwhile //subjects ?>



                    <?php endwhile //students ?>




                <?php endwhile //sections ?>
                </table>
            <?php endwhile // gradingperiod ?>
        </div>
    </div>
</div>
