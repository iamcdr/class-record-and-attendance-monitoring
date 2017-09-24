<div class="container-fluid">
   <div class="row" style="margin-bottom: 10px">
       <div class="col-lg-offset-4 col-lg-4">
           <input type="number" maxlength="4" class="form-control" id="year" value="<?= date("Y") ?>">
       </div>
   </div>
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
                    <td><a href="reports.php?s=attendance_month&m=<?= $monthnum ?>&y=<?php echo "<script>$('#year').val()</script>" ?>" class="btn btn-primary">View</a></td>
                </tr>

                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
