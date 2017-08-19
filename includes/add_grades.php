<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-body">
          <h4><?php $rowGP = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM gradingperiod WHERE status = 1"));
              echo $rowGP['description'];?></h4>
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Quiz</th>
                    <th>Seatwork</th>
                    <th>Homework</th>
                    <th>Exam</th>
                </tr>
                <?php
                $queryRec = "SELECT * FROM student_section WHERE section_id = {$_GET['sid']} AND archive_status = 0";
                $resultRec = mysqli_query($connection, $queryRec);

                while($rowRec = mysqli_fetch_array($resultRec)):
                ?>
                <tr>
                    <td><?= displayLastNameFirst($rowRec['student_id']) ?></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </div>
</div>
