<form action="classes.php?s=exec" method="post">
    <?php
    $gradingperiod_id = $_GET['gpid'];

    $rowGP = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM gradingperiod WHERE status = 1"));

    $queryCounts = "SELECT * FROM outputs_final WHERE teacher_id = {$_SESSION['hts_user_id']} AND section_id = {$_GET['sid']} AND subject_id = {$_GET['subid']} AND gradingperiod_id = {$gradingperiod_id}";
    $resultCounts = mysqli_query($connection, $queryCounts);
    ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-body">
                    <h4>
                        <?= displayGradingPeriod($gradingperiod_id) ?>
                    </h4>
                    <input type="hidden" name="gradingperiod_id" value="<?= $gradingperiod_id ?>">
                    <table class="table table-striped table-bordered">



                        <tr>
                            <th>Name</th>
                            <?php
                            $totalOverall = 0;
                            for($i=1;$i<=10;$i++):
                               ?>
                                <th>
                                    <?php
                            //check if wwsession is available on table
                                $output_session = "PT".$i;
                                $totalFromOutAct = getOutputsTotal($output_session,$_GET['subid'],$_SESSION['hts_user_id'],$gradingperiod_id);
                                $totalOverall += $totalFromOutAct;
                                if(mysqli_num_rows($resultCounts)==0&&$rowGP[0]==$gradingperiod_id){
                                    if($totalFromOutAct!="")
                                        echo '<a href="classes.php?s=edit_pt&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&outses='.$output_session.'&yid='.$_GET['yid'].'&gpid='.$gradingperiod_id.'">'."PT$i".'<i class="fa fa-pencil"></i></a>';
                                    else
                                        echo '<a href="classes.php?s=add_pt&sid='.$_GET['sid'].'&subid='.$_GET['subid'].'&outses='.$output_session.'&yid='.$_GET['yid'].'&gpid='.$gradingperiod_id.'">'."PT$i".'<i class="fa fa-plus"></i></a>';
                                } else{
                                    echo "PT$i";
                                }
                            ?>
                                </th>
                                <?php
                           endfor;
                            ?>
                                    <th>Total</th>
                        </tr>


                        <tr>
                            <td><b>Highest Grade Possible</b></td>
                            <?php
                                    $totalOverall = 0;
                            for($i=1;$i<=10;$i++):
                               ?>
                                <td>
                                    <?php
                                //check if wwsession is available on table
                                $output_session = "PT".$i;
                                $totalFromOutAct = getOutputsTotal($output_session,$_GET['subid'],$_SESSION['hts_user_id'],$gradingperiod_id);
                                $totalOverall += $totalFromOutAct;
                                if($totalFromOutAct!="")
                                    echo number_format($totalFromOutAct, 0);
                                else
                                    echo 0;
                            ?>
                                </td>
                                <?php
                           endfor;
                            ?>
                            <td><b><?= $totalOverall ?></b></td>
                        </tr>




                        <?php
                    $queryRec = "SELECT * FROM student_section WHERE section_id = {$_GET['sid']} AND archive_status = 0";
                    $resultRec = mysqli_query($connection, $queryRec);

                    while($rowRec = mysqli_fetch_array($resultRec)):
                    ?>
                            <tr>
                                <td>
                                    <?= displayLastNameFirst($rowRec['student_id']) ?>
                                        <input type="hidden" class="student_id" name="student_id_<?= $rowRec['student_id'] ?>" value="<?= $rowRec['student_id'] ?>">
                                </td>
                                <?php
                                $totalRaw = 0;
                                for($i=1;$i<=10;$i++):
                                    $output_session = "PT".$i;
                                    $queryWW = "SELECT * FROM outputs_actual WHERE archive_status = 0 AND student_id = {$rowRec['student_id']} AND output_session = '{$output_session}' AND subject_id = {$_GET['subid']} AND section_id = {$_GET['sid']} AND teacher_id = {$_SESSION['hts_user_id']} AND gradingperiod_id = {$gradingperiod_id}";
                                    $resultWW = mysqli_query($connection, $queryWW);
                                    $countWW = mysqli_num_rows($resultWW);
                                    if($countWW>0){
                                        while($rowQuiz = mysqli_fetch_array($resultWW)){
                                            $totalRaw += number_format($rowQuiz['raw_score'], 0);
                                            echo "<td>".number_format($rowQuiz['raw_score'], 0)."</td>";
                                        }
                                    } else {
                                        echo "<td>0</td>";
                                    }
                                endfor;
                                    ?>
                                    <td>
                                        <b><?= $totalRaw ?></b>
                                    </td>
                            </tr>
                            <?php endwhile; ?>









                    </table>
                </div>
            </div>
        </div>
</form>
<script>
    $(document).ready(function() {


        $('#submitQuiz').click(quizHandler);
        $('.raw_score_text,  input[name="remarks"]').keypress(function(e) {
            var key = e.which;
            if (key == 13) {
                $('#submitQuiz').trigger("click");
            }
        })

        //        var timeoutID;
        //        $('form input, form select').on('input propertychange change',
        //            function() {
        //                clearTimeout(timeoutID);
        //                timeoutID = setTimeout(function() {
        //                    //runs with 1 second delay
        //                    quizHandler();
        //                }, 1000);
        //            })


        function quizHandler(e) {
            console.log("Saving to DB");
            var form = $('form');
            $.ajax({
                url: "classes.php?s=exec",
                type: "POST",
                data: form.serialize() + '&add_written=1',
                success: function(result) {
                    swal({
                        title: "Successful!",
                        html: "<b>Added grades successfully!</b>" + result,
                        type: "success"
                    })
                }
            })
        }

    })
</script>
