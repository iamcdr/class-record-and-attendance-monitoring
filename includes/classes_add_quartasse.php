<form action="classes.php?s=exec" method="post">
    <?php
    $gradingperiod_id = $_GET['gpid'];
    ?>
        <input type="hidden" name="output_session" value="<?= $_GET['outses'] ?>">
        <input type="hidden" name="teacher_id" value="<?= $_SESSION['hts_user_id'] ?>">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="col-lg-6"><strong>Output Description: </strong></div>
                    <div class="col-lg-6"><input type="text" name="remarks" class="form-control" value="<?= getOutputsRemarks($_GET['outses'], $_GET['subid'], $_SESSION['hts_user_id'] , $gradingperiod_id) ?>"></div>
                </div>
            </div>
        </div>
        <input type="hidden" name="section_id" value="<?= $_GET['sid'] ?>">
        <input type="hidden" name="subject_id" value="<?= $_GET['subid'] ?>">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-body">
                    <!--<div class="row">
                    <div class="col-lg-offset-3 col-lg-6 col-lg-offset-3">
                        <select name="gradingperiod" id="" class="form-control">
                            <option value="1">First Grading</option>
                            <option value="2">Second Grading</option>
                            <option value="3">Third Grading</option>
                            <option value="4">Fourth Grading</option>
                            <option value="90">VIEW ALL</option>
                        </select>
                    </div>
                </div>-->
                    <h4>
                        <?= displayGradingPeriod($gradingperiod_id) ?>
                    </h4>
                    <input type="hidden" name="gradingperiod_id" value="<?= $gradingperiod_id ?>">
                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <th>Performance Task</th>
                        </tr>
                        <tr>
                            <td><b>Highest Grade Possible</b></td>
                            <td>
                                <b><input type="text" class="form-control" name="total_score" style="width: 100px" value="<?= number_format(getOutputsTotal($_GET['outses'], $_GET['subid'], $_SESSION['hts_user_id'] , $gradingperiod_id), 0) ?>"></b>
                            </td>
                        </tr>
                        <?php
                    $queryRec = "SELECT * FROM student_section WHERE section_id = {$_GET['sid']} AND schoolyear_id = {$_GET['yid']} AND archive_status = 0";
                    $resultRec = mysqli_query($connection, $queryRec);

                    while($rowRec = mysqli_fetch_array($resultRec)):
                    ?>
                            <tr>
                                <td>
                                    <?= displayLastNameFirst($rowRec['student_id']) ?>
                                        <input type="hidden" class="student_id" name="student_id_<?= $rowRec['student_id'] ?>" value="<?= $rowRec['student_id'] ?>">
                                </td>
                                <td>
                                    <input type="text" class="form-control raw_score_text" name="raw_score_<?= $rowRec['student_id'] ?>" style="width: 100px" value="<?= number_format(getOutputsActual($rowRec['student_id'], $_GET['subid'], $gradingperiod_id, $_GET['outses']),0) ?>">
                                </td>
                            </tr>
                            <?php endwhile; ?>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <input type="button" id="submitQuiz" class="btn btn-primary" value="Submit">
                                </td>
                            </tr>
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

        //input not more than total
        $('.raw_score_text').on('keyup keydown', function(e){
            var total_score = parseInt($('input[name="total_score"]').val());
            if ($(this).val() > total_score
                && e.keyCode != 46
                && e.keyCode != 8
               ) {
               e.preventDefault();
               $(this).val(total_score);
            }
        });

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
                data: form.serialize() + '&add_grade=1',
                success: function(result) {
                    swal({
                        title: "Successful!",
                        html: "<b>Added grades successfully!</b>",
                        type: "success"
                    })
                }
            })
        }

    })
</script>
