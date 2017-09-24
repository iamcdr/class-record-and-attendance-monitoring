<div class="row" id="classRecord">
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
            <h4><?php $rowGP = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM gradingperiod WHERE status = 1"));
              echo $rowGP['description'];?></h4>
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th><a href="#" id="#addquiz"><i class="fa fa-plus fa-fw"></i></a>Quiz</th>
                    <th><a href="#" id="#addseatwork"><i class="fa fa-plus fa-fw"></i></a>Seatwork</th>
                    <th><a href="#" id="#addhomework"><i class="fa fa-plus fa-fw"></i></a>Homework</th>
                    <th><a href="#" id="#addproject"><i class="fa fa-plus fa-fw"></i></a>Project</th>
                    <th><a href="#" id="#addexam"><i class="fa fa-plus fa-fw"></i></a>Exam</th>
                </tr>
                <tr>
                    <td><b>Total Score</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <?php
                $queryRec = "SELECT * FROM student_section WHERE section_id = {$_GET['sid']} AND archive_status = 0";
                $resultRec = mysqli_query($connection, $queryRec);

                while($rowRec = mysqli_fetch_array($resultRec)):
                ?>
                    <tr>
                        <td>
                            <?= displayLastNameFirst($rowRec['student_id']) ?>
                        </td>
                        <td>
                            <?php
                    $queryQuiz = "SELECT * FROM outputs_actual WHERE archive_status = 0 AND output_category_id = 1 AND student_id = {$rowRec['student_id']}";
                    $resultQuiz = mysqli_query($connection, $queryQuiz);

                        while($rowQuiz = mysqli_fetch_array($resultQuiz)){
                            echo "<a href='#' id='quiz$rowQuiz[0]'>{$rowQuiz['raw_score']}</a>";
                        }
                        ?>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <?php endwhile; ?>
            </table>
        </div>
    </div>
</div>
