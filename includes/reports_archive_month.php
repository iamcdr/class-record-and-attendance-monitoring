<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered">
 <?php
                        $year = $_GET['y'];
                        $month = $_GET['m'];
                        $samdate = "$year-$month-01";
                        $monthname = date("F", strtotime($samdate));
                        $monthnum = date("m", strtotime($samdate));
                        ?>
                    <tr>
                        <th>Audit Type</th>
                        <th>Remarks</th>
                        <th>Date Time</th>
                    </tr>
                    <?php

                    $queryAtt = "SELECT * FROM audit_trail WHERE YEAR(audit_datetime) = {$year} AND MONTH(audit_datetime) = {$monthnum} ORDER BY audit_datetime";
                    $resultAtt = mysqli_query($connection, $queryAtt) or die(mysqli_error($connection));
                    while($rowAtt = mysqli_fetch_array($resultAtt)):
                        ?>
                    <tr>
                        <td><?= $rowAtt['audit_type'] ?></td>
                        <td><?= $rowAtt['audit_remarks'] ?></td>
                        <td><?= $rowAtt['audit_datetime'] ?></td>
                    </tr>
                    <?php
                    endwhile;
                    ?>            </table>
        </div>
    </div>
</div>
