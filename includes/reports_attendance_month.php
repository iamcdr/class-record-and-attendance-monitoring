<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered">
                <tr>
                    <th>Date</th>
                    <th>Student Name</th>
                    <th>Time In</th>
                </tr>
                <?php

                $queryAtt = "SELECT * FROM attendance_log WHERE YEAR(date_attended) = {$_GET['y']} AND MONTH(date_attended) = {$_GET['m']} ORDER BY time_in";
                $resultAtt = mysqli_query($connection, $queryAtt) or die(mysqli_error($connection));
                while($rowAtt = mysqli_fetch_array($resultAtt)):
                    ?>
                <tr>
                    <td><?= $rowAtt['date_attended'] ?></td>
                    <td><?= displayStudentName($rowAtt['student_id']) ?></td>
                    <td><?= $rowAtt['time_in'] ?></td>
                </tr>
                <?php
                endwhile;
                ?>
            </table>
        </div>
    </div>
</div>
