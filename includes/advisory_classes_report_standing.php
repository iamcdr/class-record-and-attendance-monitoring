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
                    mysqli_query($connection, $queryTemp) or die(mysqli_error($connection));

                    //truncate
                    $queryTemp = "TRUNCATE class_final_ranking";
                    mysqli_query($connection, $queryTemp) or die(mysqli_error($connection));
                    
                    $queryClass = "SELECT * FROM students AS a INNER JOIN student_section AS b ON a.student_id=b.student_id WHERE a.archive_status = 0 AND b.section_id = {$_GET['sid']} AND b.schoolyear_id = {$_GET['yid']} ORDER BY a.last_name ASC";
                    $resultClass = mysqli_query($connection, $queryClass) or die(mysqli_error($connection));

                    $i=1;
                    while($rowClass = mysqli_fetch_array($resultClass)){
                        $final_grade = displayFinalGrade($rowClass['student_id'], $_GET['subid'], $_GET['sid']);
                        $queryTempIns = "INSERT INTO class_final_ranking VALUES({$rowClass['student_id']}, $final_grade)";
                        mysqli_query($connection, $queryTempIns) or die(mysqli_error($connection));


                        $queryTempSel = "SELECT * FROM class_final_ranking ORDER BY final_grade DESC";
                        $resultTempSel = mysqli_query($connection, $queryTempSel) or die(mysqli_error($connection));
                    }
                        $i=1;
                        while($rowTempSel = mysqli_fetch_array($resultTempSel)):
                    ?>
                        <tr>
                           <td>
                               <?= $i++ ?>
                           </td>
                            <td>
                                <?= displayLastNameFirst($rowTempSel['student_id']) ?>
                            </td>
                            <td>
                                <?= $rowTempSel['final_grade'] ?>
                            </td>
                        </tr>
                        <?php
                    endwhile ?>
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
                    $queryClass = "SELECT * FROM students AS a INNER JOIN student_section AS b ON a.student_id=b.student_id WHERE a.archive_status = 0 AND b.section_id = {$_GET['sid']} AND b.schoolyear_id = {$_GET['yid']} ORDER BY a.last_name ASC";
                    $resultClass = mysqli_query($connection, $queryClass) or die(mysqli_error($connection));

                    $i=1;
                    while($rowClass = mysqli_fetch_array($resultClass)):
                        $final_grade = displayFinalGrade($rowClass['student_id'], $_GET['subid'], $_GET['sid']);
                               
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
