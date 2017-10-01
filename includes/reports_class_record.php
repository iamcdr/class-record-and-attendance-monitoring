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
                                    while($sydata = mysqli_fetch_assoc($sy)): ?>
                                        <option value="<?= $sydata['id']; ?>" <?php if (!empty($_POST)){ if($sydata['id']==$_POST['sy']){ echo "selected"; } }else{ if($currentSy['id']==$sydata['id']){ echo "selected"; }} ?>>
                                            <?= $sydata['year1'] . " - " . $sydata['year2']; ?>
                                        </option>
                                    <?php endwhile ?>
                        </select>
            </form>
        </div>
    </div>
    <?php $year = isset($_POST['sy']) ? $_POST['sy'] : $currentSy[0] ?>
    <div class="row" style="margin-bottom: 10px">
        <div class="col-lg-12">
            <a href="includes/pdf.reports_class_record.php?ay=<?= $year ?>" class="btn btn-info btn-lg">Download PDF</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered">
                <tr>
                    <th>Section Name</th>
                    <th>Action</th>
                </tr>
                <?php
                $querySec = "SELECT * FROM sections WHERE archive_status = 0";
                $resultSec = mysqli_query($connection, $querySec);
                while($rowSec = mysqli_fetch_array($resultSec)){
                    ?>
                    <tr>
                        <td>
                            <?= displaySectionDesc($rowSec[0]) ?>
                        </td>
                        <td><a href="reports.php?s=cls_rec_section&sid=<?= $rowSec[0] ?>&ay=<?= $year ?>" class="btn btn-primary">View</a><a href="includes/pdf.reports_class_record_section.php?ay=<?= $year ?>&sid=<?= $rowSec[0] ?>" class="btn btn-primary">Download PDF</a></td>
                    </tr>

                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
