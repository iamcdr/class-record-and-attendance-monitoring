<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-body">
            <h2>Ranking</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>Rank #</td>
                        <td>Student Name</td>
                        <td>Grade</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //create temporary table
                    $queryTemp = "CREATE TEMPORARY TABLE class_final_ranking(
                    `student_id` int NOT NULL,
                    `final_grade` dec (10,2) NOT NULL)";
                    mysqli_query($connection, $queryTemp) or die(mysqli_error($connection) . $queryTemp);

                    $queryClass = "SELECT * FROM students AS a INNER JOIN student_section AS b ON a.student_id=b.student_id WHERE a.archive_status = 0 AND b.section_id = {$_GET['sid']} AND b.schoolyear_id = {$_GET['yid']} ORDER BY a.last_name ASC";
                    $resultClass = mysqli_query($connection, $queryClass) or die(mysqli_error($connection)  . $queryClass);

                    $i=1; $sumgrade=0;
                    while($rowClass = mysqli_fetch_array($resultClass)){

                        //get active grading period
                        $rowGp = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM gradingperiod WHERE status = 1"));

                        //subject loop
                        $querySub = "SELECT * FROM outputs_final WHERE student_id = {$rowClass['student_id']} AND gradingperiod_id = {$rowGp[0]}";
                        $resultSub = mysqli_query($connection, $querySub);
                        $countSub = mysqli_num_rows(mysqli_query($connection, "SELECT DISTINCT gradingperiod_id FROM outputs_final WHERE student_id = {$rowClass['student_id']}"));
                        while($rowSub = mysqli_fetch_array($resultSub)){
//                            $studGrade = (displayFinalGrade($rowClass['student_id'], $rowSub['subject_id'], $_GET['sid'])!=60) ? displayFinalGrade($rowClass['student_id'], $rowSub['subject_id'], $_GET['sid']) : 60;
                            $studGrade = (displayFinalGrade($rowClass['student_id'], $rowSub['subject_id'], $_GET['sid']));
                            $sumgrade += $studGrade;
                        }
                        $finalgrade = $sumgrade / $countSub;
                        $queryTempIns = "INSERT INTO class_final_ranking VALUES({$rowClass['student_id']}, $finalgrade)";
                        mysqli_query($connection, $queryTempIns) or die(mysqli_error($connection) . $queryTempIns);


                        $queryTempSel = "SELECT * FROM class_final_ranking ORDER BY final_grade DESC";
                        $resultTempSel = mysqli_query($connection, $queryTempSel) or die(mysqli_error($connection));
                    }
                        $i=1;
                        while($rowTempSel = mysqli_fetch_array($resultTempSel)):
                    ?>
                        <tr>
                           <td>
                               <?= $i ?>
                           </td>
                            <td>
                                <?= displayLastNameFirst($rowTempSel['student_id']) ?>
                            </td>
                            <td>
                                <?= $rowTempSel['final_grade'] ?>
                            </td>
                        </tr>
                        <?php
                    $i++; endwhile ?>
                </tbody>
            </table>
            <h2>Failing Students</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>Student Name</td>
                        <td>Grade</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $queryClass = "SELECT * FROM class_final_ranking ORDER BY final_grade DESC";
                    $resultClass = mysqli_query($connection, $queryClass) or die(mysqli_error($connection));

                    $i=1;
                    while($rowClass = mysqli_fetch_array($resultClass)):
                        $final_grade = $rowClass['final_grade'];

                        if($final_grade<80):
                    ?>
                        <tr>
                            <td>
                                <?= displayLastNameFirst($rowClass['student_id']) ?>
                            </td>
                            <td>
                                <?= $final_grade ?>
                            </td>
                        </tr>
                        <?php
                        endif; //final grade > 80
                    endwhile ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
