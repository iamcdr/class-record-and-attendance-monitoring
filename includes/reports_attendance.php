<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered">
                <tr>
                    <th>Month</th>
                    <th>Action</th>
                </tr>
                <?php
                for($i=1;$i<=12;$i++){
                    $samdate = "2017-$i-01";
                    $monthname = date("F", strtotime($samdate));
                    $monthnum = date("m", strtotime($samdate));
                    ?>
                <tr>
                    <td><?= $monthname ?></td>
                    <td><a href="reports?s=attendance_month&m=<?= $monthnum ?>" class="btn btn-primary"></a></td>
                </tr>

                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
