<form action="classes.php?s=exec" method="post">
   <input type="hidden" name="section_id" value="<?= $_GET['sid'] ?>">
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
                    <?php $rowGP = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM gradingperiod WHERE status = 1"));
                  echo $rowGP['description'];?>
                </h4>
                <input type="hidden" name="gradingperiod_id" value="<?= $rowGP[0] ?>">
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Quiz</th>
                    </tr>
                    <tr>
                        <td><b>Highest Grade Possible</b></td>
                        <td>
                            <b><input type="text" class="form-control" name="total_score" style="width: 100px"></b>
                        </td>
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
                            <td>
                                <input type="text" class="form-control raw_score_text" name="raw_score_<?= $rowRec['student_id'] ?>" style="width: 100px">
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
        $('.raw_score_text').keypress(function(e) {
            var key = e.which;
            if (key == 13) {
                $('#submitQuiz').trigger("click");
            }
        })

        var t = false
        $('.raw_score_text').focus(function() {
            var $this = $(this)
            var maximum = $('input[name="total_score"]').val();
            t = setInterval(

                function() {
                    if (($this.val() < 1 || $this.val() > maximum) && $this.val().length != 0) {
                        if ($this.val() < 1) {
                                    $this.val('')
                        }

                        if ($this.val() > maximum) {
                                    $this.val('')
                        }

                    }
                }, 50)
        });


        var timeoutID;
        $('form input').on('input propertychange',
            function() {
                clearTimeout(timeoutID);
                timeoutID = setTimeout(function() {
                    //runs with 1 second delay
                    quizHandler();
                }, 1000);
            })


        function quizHandler(e) {
            console.log("Saving to DB");
            var form = $('form');
            $.ajax({
                url: "includes/classes_exec.php",
                type: "POST",
                data: form.serialize(),
                success: function(result) {
                }
            })
        }
    })
</script>
