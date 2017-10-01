<?php
$section_id = $_GET['sid'];
?>
<div class="row">
   <div class="col-lg-12">
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
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>Students</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $year_id = (isset($_POST['sy'])&&$_POST['sy']!='') ? $_POST['sy'] : $currentSy[0];
                    $queryClass = "SELECT * FROM students AS a INNER JOIN student_section AS b ON a.student_id=b.student_id WHERE a.archive_status = 0 AND b.section_id = {$section_id} AND b.schoolyear_id = {$year_id}  ORDER BY a.last_name ASC";
                    $resultClass = mysqli_query($connection, $queryClass);

                    while($rowClass = mysqli_fetch_array($resultClass)){
                    ?>
                        <tr>
                            <td>
                                <?= displayLastNameFirst($rowClass['student_id']) ?>
                            </td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
