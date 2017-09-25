<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-body">
           <div class="form-group">
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
            <table class="table table-striped" id="content">
                <thead>
                    <tr>
                        <td>Section</td>
                        <td>Subject</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                   <?php
                    $schoolyear_id = (isset($_POST['sy'])) ? $_POST['sy'] : $currentSy[0];
                    $queryClass = "SELECT * FROM teacher_classes a LEFT JOIN sections b ON a.section_id=b.section_id WHERE teacher_id = {$_SESSION['hts_user_id']} AND advisory = 0 AND b.archive_status=0 AND a.archive_status=0";
                    $resultClass = mysqli_query($connection, $queryClass);

                    while($rowClass = mysqli_fetch_array($resultClass)){
                    ?>
                    <tr>
                        <td><?= displaySectionDesc($rowClass['section_id']) ?></td>
                        <td><?= displaySubjectDesc($rowClass['subject_id']) ?></td>
                        <td><a href="classes.php?s=cls_rec&sid=<?= $rowClass['section_id'] ?>&subid=<?= $rowClass['subject_id'] ?>&yid=<?= $rowClass['year_id'] ?>" class="btn btn-success">Open</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
