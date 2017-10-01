<div class="container-fluid">
   <div class="row" style="margin-bottom: 10px">
       <div class="col-lg-offset-4 col-lg-4">
           <form action="#" method="POST">
                <?php
                    $cDateYear = date("Y");
                    $currentSy = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM year WHERE year1 = '{$cDateYear}'"));
                    ?>
                <select name="sy" onchange="this.form.submit()" class="form-control">
                    <?php
                    $sy = mysqli_query($connection, "SELECT * FROM year");
                    while($sydata = mysqli_fetch_assoc($sy)){ ?>
                        <option value="<?= $sydata['year1'] ?>" <?php if (!empty($_POST)){ if($sydata['year1']==$_POST['sy']){ echo "selected"; } }else{ if($currentSy['id']==$sydata['id']){ echo "selected"; }} ?>>
                            <?= $sydata['year1'] ?>
                        </option>
                    <?php } ?>
                </select>
            </form>
       </div>
   </div>
   <?php $year = isset($_POST['sy']) ? $_POST['sy'] : date("Y"); ?>
   <div class="row" style="margin-bottom: 10px">
       <div class="col-lg-12">
           <a href="includes/pdf.reports_archive.php?y=<?= $year ?>&month=" class="btn btn-info btn-lg">Download PDF</a>
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

                    $samdate = "$year-$i-01";
                    $monthname = date("F", strtotime($samdate));
                    $monthnum = date("m", strtotime($samdate));
                    ?>
                <tr>
                    <td><?= $monthname ?></td>
                    <td><a href="reports.php?s=archive_month&m=<?= $monthnum ?>&y=<?= $year ?>" class="btn btn-primary">View</a>
                    <a href="includes/pdf.reports_archive_month.php?m=<?= $monthnum ?>&y=<?= $year ?>" class="btn btn-primary">Download PDF</a>
                    </td>
                </tr>

                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
