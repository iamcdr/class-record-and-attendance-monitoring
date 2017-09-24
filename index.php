<?php include("includes/header.php") ?>
<?php
$activePage = "Dashboard";
if(isset($_SESSION['hts_user_first_login'])&&$_SESSION['hts_user_first_login']!=0)
        require_once(header("Location: ./accounts.php?s=chpas"));
?>

    <?php include("includes/side-nav.php") ?>

    <?php include("includes/top-nav.php") ?>


    <div class="content">
        <div class="container-fluid">
            <div class="header">
                <h4 class="title">Class Record and Attendance Monitoring System</h4>
                <p class="category">Handcrafted for Holy Trinity School</p>
                <?= (isset($_SESSION['ALERT']['EDIT_ACCOUNT_SUCCESS'])&&$_SESSION['hts_user_userprivilege']==2) ? "<div class='alert alert-success'> {$_SESSION['ALERT']['EDIT_ACCOUNT_SUCCESS']} </div>" : '' ?>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="panel task db mbm">
                        <div class="panel-body">
                            <p class="icon">
                                Current Grading Period
                            </p>
                            <h4>
                                <?php
                                    $rowGp = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM gradingperiod WHERE status = 1"));
                                    echo $rowGp[1];
                                    ?>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="panel task db mbm">
                        <div class="panel-body">
                            <p class="icon">
                                Current School Year
                            </p>
                            <h4>
                                <?php
                            $cDateYear = date("Y");
                            $currentSy = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM year WHERE year1 = '{$cDateYear}'"));

                            echo "S.Y. " . $currentSy['year1'] . " - " . $currentSy['year2'];
                            ?>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="panel task db mbm">
                        <div class="panel-body">
                            <p class="icon">
                                Current Number of Students
                            </p>
                            <h4>
                                <?php
                            $countStud = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM students WHERE archive_status = 0"));

                            echo $countStud;
                            ?>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="panel task db mbm">
                        <div class="panel-body">
                            <p class="icon">
                                Current Number of Teachers
                            </p>
                            <h4>
                                <?php
                            $countStud = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM useraccount WHERE user_privilege = 2 AND  archive_status = 0"));

                            echo $countStud;
                            ?>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>


            <!--TEACHERS -->
            <?php
            $queryClass = "SELECT * FROM teacher_classes WHERE teacher_id = {$_SESSION['hts_user_id']} AND year_id = {$currentSy[0]} AND archive_status = 0 AND advisory = 1";
            $resultClass = mysqli_query($connection, $queryClass);

            while($rowClass = mysqli_fetch_array($resultClass)){
            ?>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="panel task db mbm">
                            <div class="panel-body">
                                <p class="icon">
                                    <?= displaySectionDesc($rowClass['section_id']) ?>
                                </p>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-body">
                                            <p><strong>Ranking</strong></p>
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

                                                $queryClass = "SELECT * FROM students AS a INNER JOIN student_section AS b ON a.student_id=b.student_id WHERE a.archive_status = 0 AND b.section_id = {$rowClass['section_id']} AND b.schoolyear_id = {$currentSy[0]} ORDER BY a.last_name ASC";
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
                            //                            $studGrade = (displayFinalGrade($rowClass['student_id'], $rowSub['subject_id'], $rowClass['section_id'])!=60) ? displayFinalGrade($rowClass['student_id'], $rowSub['subject_id'], $rowClass['section_id']) : 60;
                                                        $studGrade = (displayFinalGrade($rowClass['student_id'], $rowSub['subject_id'], $rowClass['section_id']));
                                                        $sumgrade += $studGrade;
                                                    }
                                                    $finalgrade = getOutputsFinalGrade($sumgrade / $countSub);
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
                                            <p><strong>Failing Students</strong></p>
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
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

            <!--AUDIT TRAIL-->
<?php if($_SESSION['hts_user_userprivilege']==1): ?>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="panel task db mbm">
                            <div class="panel-body">
                                <p class="icon">
                                Audit Logs
                                </p>
                                 <div class="row">
                                    <div class="col-lg-12" id="auditLog">
                                        <div class="panel panel-body">
                                        <table class="table">
                                            <tr>
                                                <th>User</th>
                                                <th>Remarks</th>
                                                <th>Date Updated</th>
                                            </tr>
                                            <?php
                                            $queryAud = "SELECT * FROM audit_trail WHERE user_id != {$_SESSION['hts_user_id']} ORDER BY audit_datetime DESC LIMIT 5";
                                            $resultAud = mysqli_query($connection, $queryAud);

                                            while($rowAud = mysqli_fetch_array($resultAud)):
                                            ?>
                                                <tr>
                                                    <td><?= displayName($rowAud['user_id']) ?></td>
                                                    <td><?= $rowAud['audit_type'] ?> </td>
                                                    <td><?= $rowAud['audit_datetime'] ?> </td>
                                                </tr>

                                            <?php endwhile ?>
                                        </table>
                                        </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php endif ?>
<script>
$(document).ready(auditLog);
setInterval(auditLog, 3000);

    function auditLog(e){
         $.ajax({
            method: "POST",
            url: "index.php",
            success: function(result) {
                var div = $('#auditLog', $(result));
                $('#auditLog').html(div);
            }

        })
    }
</script>




        </div>
    </div>
    <!-- /#page-wrapper -->

    <?php include("includes/footer.php") ?>
