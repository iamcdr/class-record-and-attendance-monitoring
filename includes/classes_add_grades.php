<style>
    .inputGrades {
        padding: 2px;
        width: 30px;
        display: inline-block;
        text-align: center;
        vertical-align: middle;
    }
</style>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-offset-4 col-lg-4" style="text-align: center; margin-bottom: 10px">
            <a href="classes.php?s=edit_perc&sid=<?= $_GET['sid'] ?>&subid=<?= $_GET['subid'] ?>&yid=<?= $_GET['yid'] ?>" class="btn btn-success">Edit Percentage Distribution</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-offset-4 col-lg-4">
            <select name="gperiod" class="form-control">
               <?php
               $querySelGp = "SELECT * FROM gradingperiod";
               $resultSelGp = mysqli_query($connection, $querySelGp);

               while($rowSelGp = mysqli_fetch_array($resultSelGp)):
               ?>
               <option value="<?= $rowSelGp[0] ?>"><?= $rowSelGp['description'] ?></option>
               <?php endwhile //$rowSelGp ?>
           </select>
        </div>
    </div>

    <?php
    $queryGP = "SELECT * FROM gradingperiod ";

    if(isset($_POST['gradingperiod_id'])&&$_POST['gradingperiod_id']!=''){
        $queryGP .= " WHERE gradingperiod_id = {$_POST['gradingperiod_id']}";
    }

    $resultGP = mysqli_query($connection, $queryGP);
    ?>


        <?= isset($_SESSION['ALERT']['UPDATE_PERCENTAGE_SUCCESS']) ? "<div class='alert alert-success'>{$_SESSION['ALERT']['UPDATE_PERCENTAGE_SUCCESS']}</div>" : ''; ?>


    <div class="row">
        <div id="viewGrades">
                            <?php
                        while($rowGP = mysqli_fetch_array($resultGP)):
                    ?>
                                <form action="#" class="form<?= $rowGP[0] ?>">
                                    <input type="hidden" name="section_id" value="<?= $_GET['sid'] ?>">
                                    <input type="hidden" name="subject_id" value="<?= $_GET['subid'] ?>">
                                    <input type="hidden" name="year_id" value="<?= $_GET['yid'] ?>">
                                    <div class="row">
                                        <?php
                           $queryCounts = "SELECT * FROM outputs_final WHERE teacher_id = {$_SESSION['hts_user_id']} AND section_id = {$_GET['sid']} AND subject_id = {$_GET['subid']} AND gradingperiod_id = {$rowGP[0]}";
                            $resultCounts = mysqli_query($connection, $queryCounts);
                            ?>
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <a href="#" id="submitGrade<?= $rowGP[0] ?>" class="btn btn-primary btn-lg">Submit Grade as Final</a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="panel panel-body">
                                                        <h4>
                                                            <?php
                                                                                  echo $rowGP['description'];?>
                                                                <input type="hidden" name="gradingperiod_id" value="<?= $rowGP[0] ?>">
                                                        </h4>
                                                        <table class="table-striped" id="addGradesTbl">
                                                            <tr>
                                                                <th>Learners' Name</th>
                                                                <th>Written Works (
                                                                    <?= getPercDistPercentage('ww',$_GET['subid'] ,$_GET['yid']) ?>%)
                                                                        <a href="classes.php?s=ww&sid=<?= $_GET['sid'] ?>&subid=<?= $_GET['subid'] ?>&yid=<?= $_GET['yid'] ?>&gpid=<?= $rowGP[0] ?>" class="addGrade">
                                                                            <?php if(mysqli_num_rows($resultCounts)==0&&$rowGP['status']==1): ?>
                                                                            <i class="fa fa-plus"></i>
                                                                            <?php else: ?>
                                                                            <i class="fa fa-eye"></i>
                                                                            <?php endif ?>
                                                                        </a>
                                                                </th>
                                                                <th>Performance Tasks (
                                                                    <?= getPercDistPercentage('pt',$_GET['subid'] ,$_GET['yid']) ?>%)
                                                                        <a href="classes.php?s=pt&sid=<?= $_GET['sid'] ?>&subid=<?= $_GET['subid'] ?>&yid=<?= $_GET['yid'] ?>&gpid=<?= $rowGP[0] ?>">
                                                                            <?php if(mysqli_num_rows($resultCounts)==0&&$rowGP['status']==1): ?>
                                                                            <i class="fa fa-plus"></i>
                                                                            <?php else: ?>
                                                                            <i class="fa fa-eye"></i>
                                                                            <?php endif ?>
                                                                        </a>
                                                                </th>
                                                                <th>Quarterly Assessments (
                                                                    <?= getPercDistPercentage('qa',$_GET['subid'] ,$_GET['yid']) ?>%)
                                                                        <a href="classes.php?s=qa&sid=<?= $_GET['sid'] ?>&subid=<?= $_GET['subid'] ?>&yid=<?= $_GET['yid'] ?>&gpid=<?= $rowGP[0] ?>">
                                                                            <?php if(mysqli_num_rows($resultCounts)==0&&$rowGP['status']==1): ?>
                                                                            <i class="fa fa-plus"></i>
                                                                            <?php else: ?>
                                                                            <i class="fa fa-eye"></i>
                                                                            <?php endif ?>
                                                                        </a>
                                                                </th>
                                                                <th>Initial Grade</th>
                                                                <th>Transmuted Grade</th>
                                                            </tr>
                                                            <tr>


                                                                <td><b>Computation</b></td>
                                                                <td>
                                                                    <table>
                                                                        <tr>
                                                                            <td class="inputGrades" style="width:80px"><b>PS</b></td>
                                                                            <td class="inputGrades" style="width:50px"><b>WS</b></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <?php
                                                               $totalOverallWw = 0;
                                                                                               for($i=1;$i<=10;$i++):
                                                                                               //check if wwsession is available on table
                                                           $output_session = "WW".$i;
                                                           $totalFromOutAct = getOutputsTotal($output_session,$_GET['subid'],$_SESSION['hts_user_id'],$rowGP[0]);
                                                           $totalOverallWw += $totalFromOutAct;
                                                                                               endfor;
                                                                                               ?>


                                                                                <td class="inputGrades" style="width:80px"><b>100.00</b></td>
                                                                                <td class="inputGrades" style="width:50px"><b><?= getPercDistPercentage('ww',$_GET['subid'] ,$_GET['yid']) ?>%</b></td>
                                                                        </tr>
                                                                    </table>
                                                                </td>


                                                                <td>
                                                                    <table>
                                                                        <tr>
                                                                            <td class="inputGrades" style="width:80px"><b>PS</b></td>
                                                                            <td class="inputGrades" style="width:80px"><b>WS</b></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <?php
                                                               $totalOverallPt = 0;
                                                        for($i=1;$i<=10;$i++):
                                                        //check if wwsession is available on table
                                                           $output_session = "PT".$i;
                                                           $totalFromOutAct = getOutputsTotal($output_session,$_GET['subid'],$_SESSION['hts_user_id'],$rowGP[0]);
                                                           $totalOverallPt += $totalFromOutAct;
                                                        endfor;
                                                                                               ?>


                                                                                <td class="inputGrades" style="width:80px"><b>100.00</b></td>
                                                                                <td class="inputGrades" style="width:80px"><b><?= getPercDistPercentage('pt',$_GET['subid'] ,$_GET['yid']) ?>%</b></td>
                                                                        </tr>
                                                                    </table>
                                                                </td>


                                                                <td>
                                                                    <table>
                                                                        <tr>
                                                                            <td class="inputGrades" style="width:80px"><b>PS</b></td>
                                                                            <td class="inputGrades" style="width:80px"><b>WS</b></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <?php
                                                               $totalOverallQa = 0;
                                                                                               //check if wwsession is available on table
                                                           $output_session = "QA";
                                                           $totalFromOutAct = getOutputsTotal($output_session,$_GET['subid'],$_SESSION['hts_user_id'],$rowGP[0]);
                                                           $totalOverallQa += $totalFromOutAct;
                                                                                               ?>

                                                                                <td class="inputGrades" style="width:80px"><b>100.00</b></td>
                                                                                <td class="inputGrades" style="width:80px"><b><?= getPercDistPercentage('qa',$_GET['subid'] ,$_GET['yid']) ?>%</b></td>
                                                                        </tr>
                                                                    </table>
                                                                </td>


                                                                <td>100.00</td>
                                                                <td>100.00</td>

                                                            </tr>





                                                            <?php
                                                                                       $queryRec = "SELECT * FROM student_section a LEFT JOIN students b ON a.student_id=b.student_id WHERE section_id = {$_GET['sid']} AND schoolyear_id = {$_GET['yid']} AND a.archive_status = 0 AND b.archive_status = 0";
                                                                                       $resultRec = mysqli_query($connection, $queryRec);

                                                                                       while($rowRec = mysqli_fetch_array($resultRec)):
                                                                                        $totalRawWw=0;
                                                                                        $totalRawPt=0;
                                                                                        $totalRawQa=0;
                                                                                       ?>
                                                                <input type="hidden" name="student_id_<?= $rowRec['student_id'] ?>">
                                                                <tr>
                                                                    <td>
                                                                        <?= displayLastNameFirst($rowRec['student_id']) ?>
                                                                    </td>
                                                                    <td>
                                                                        <table>
                                                                            <tr>
                                                                                <?php
                                                                                           $totalRaw = 0;
                                                                                           for($i=1;$i<=10;$i++):
                                                                                               $output_session = "WW".$i;
                                                                                               $queryWW = "SELECT * FROM outputs_actual WHERE archive_status = 0 AND student_id = {$rowRec['student_id']} AND output_session = '{$output_session}' AND subject_id = {$_GET['subid']} AND section_id = {$_GET['sid']} AND teacher_id ={$_SESSION['hts_user_id']} AND gradingperiod_id = {$rowGP[0]}";
                                                                                               $resultWW = mysqli_query($connection, $queryWW);
                                                           while($rowQuiz = mysqli_fetch_array($resultWW)){
                                                               $totalRawWw += number_format($rowQuiz['raw_score'], 0);
                                                           }
                                                                                           endfor;
                                                                                               ?>
                                                                                    <td class="inputGrades" style="width:80px">
                                                                                        <?= getOutputsPercentage($totalOverallWw, $totalRawWw) ?>
                                                                                    </td>
                                                                                    <td class="inputGrades" style="width:50px">
                                                                                        <?= $totalWw = getOutputsWwWeighted(getOutputsPercentage($totalOverallWw, $totalRawWw), getPercDistMultiplier('ww',$_GET['subid'] ,$_GET['yid']) ) ?>
                                                                                    </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                    <td>
                                                                        <table>
                                                                            <tr>
                                                                                <?php
                                                                                           $totalRaw = 0;
                                                                                           for($i=1;$i<=10;$i++):
                                                                                               $output_session = "PT".$i;
                                                                                               $queryWW = "SELECT * FROM outputs_actual WHERE archive_status = 0 AND student_id = {$rowRec['student_id']} AND output_session = '{$output_session}' AND subject_id = {$_GET['subid']} AND section_id = {$_GET['sid']} AND teacher_id ={$_SESSION['hts_user_id']}  AND gradingperiod_id = {$rowGP[0]}";
                                                                                               $resultWW = mysqli_query($connection, $queryWW);
                                                           while($rowQuiz = mysqli_fetch_array($resultWW)){
                                                               $totalRawPt += number_format($rowQuiz['raw_score'], 0);
                                                           }
                                                                                           endfor;
                                                                                               ?>
                                                                                    <td class="inputGrades" style="width:80px">
                                                                                        <?= getOutputsPercentage($totalOverallPt, $totalRawPt) ?>
                                                                                    </td>
                                                                                    <td class="inputGrades" style="width:80px">
                                                                                        <?= $totalPt = getOutputsPtWeighted(getOutputsPercentage($totalOverallPt, $totalRawPt), getPercDistMultiplier('pt',$_GET['subid'] ,$_GET['yid'])) ?>
                                                                                    </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                    <td>
                                                                        <table>
                                                                            <tr>
                                                                                <?php
                                                           $output_session = "QA";
                                                           $queryQa = "SELECT * FROM outputs_actual WHERE archive_status = 0 AND student_id = {$rowRec['student_id']} AND output_session = '{$output_session}' AND subject_id = {$_GET['subid']} AND section_id = {$_GET['sid']} AND teacher_id ={$_SESSION['hts_user_id']}  AND gradingperiod_id = {$rowGP[0]}";
                                                           $resultQa = mysqli_query($connection, $queryQa);
                                                           while($rowQuiz = mysqli_fetch_array($resultQa)){
                                                               $totalRawQa = number_format($rowQuiz['raw_score'], 0);
                                                           }
                                                                                               ?>
                                                                                    <td class="inputGrades" style="width:80px">
                                                                                        <?= getOutputsPercentage($totalOverallQa, $totalRawQa) ?>
                                                                                    </td>
                                                                                    <td class="inputGrades" style="width:80px">
                                                                                        <?= $totalQa = getOutputsQaWeighted(getOutputsPercentage($totalOverallQa, $totalRawQa), getPercDistMultiplier('qa',$_GET['subid'] ,$_GET['yid'])) ?>
                                                                                    </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                    <td>
                                                                        <?= $initalGrade =  getOutputsInitialGrade($totalWw, $totalPt, $totalQa)  ?>
                                                                    </td>
                                                                    <td>
                                                                        <b><?= getOutputsFinalGrade($initalGrade) ?></b>
                                                                        <input type="hidden" name="final_grade<?= $rowRec['student_id'] ?>" value="<?= getOutputsFinalGrade($initalGrade) ?>">
                                                                    </td>
                                                                </tr>
                                                                <?php endwhile; ?>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </form>



                                <script>
                                    $(document).ready(function() {
                                        var perDis = <?= getPercDistPercentage('pt',$_GET['subid'] ,$_GET['yid']) ?>;
                                        $('.addGrade').click(function(e) {
                                            if (perDis == 0)
                                                e.preventDefault();
                                            else
                                                return true;
                                        })

                                        $('#submitGrade<?= $rowGP[0] ?>').click(function() {
                                            swal({
                                                title: "Submit this as final grade?",
                                                text: "Please input your password to confirm submitting this final grade.",
                                                confirmButtonText: 'Yes',
                                                input: 'password',
                                                inputAttributes: {
                                                    'name': 'password_auth'
                                                },
                                                showCancelButton: true,
                                                showLoaderOnConfirm: true,
                                                preConfirm: function() {
                                                    return new Promise(function(resolve) {
                                                        $.ajax({
                                                            url: "includes/classes_exec.php",
                                                            type: "POST",
                                                            data: $('.form<?= $rowGP[0] ?>').serialize() + '&submit_final_grade=1' + '&password_auth=' + $('input[name="password_auth"]').val(),
                                                            success: function(data) {
                                                                console.log(data);
                                                                if (data == "error") {
                                                                    swal({
                                                                        title: 'Failed!',
                                                                        text: "Failed to submit final grade, password is incorrect",
                                                                        type: 'error'
                                                                    })
                                                                } else {
                                                                    swal({
                                                                            title: 'Success!',
                                                                            text: "Successfully submitted grade as final.",
                                                                            type: 'success'
                                                                        })
                                                                        .then(function() {
                                                                            window.location.href = "classes.php?s=add_grades&sid=<?= $_GET['sid'] ?>&subid=<?= $_GET['subid'] ?>&yid=<?= $_GET['yid'] ?>"
                                                                        })
                                                                }
                                                            }
                                                        })
                                                    })
                                                }
                                            })
                                        });

                                    });
                                </script>
                                <?php endwhile ?></div>
            </div>
</div>




<script>
    $(document).ready(showGpHandler);
    $('select[name="gperiod"]').change(showGpHandler);

    function showGpHandler(e) {
        $.ajax({
            method: "POST",
            url: "classes.php?s=add_grades&sid=<?= $_GET['sid'] ?>&subid=<?= $_GET['subid'] ?>&yid=<?= $_GET['yid'] ?>",
            data: {
                'gradingperiod_id': $('select[name="gperiod"]').val()
            },
            success: function(result) {
                var showDiv = $('#viewGrades', $(result));
                $('#viewGrades').html(showDiv);
            }
        })
    }
</script>
