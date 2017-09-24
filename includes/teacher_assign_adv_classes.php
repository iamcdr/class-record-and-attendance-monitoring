<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-body">
<?php
if(isset($_SESSION['ALERT']['ASSIGN_CLASS_SUCCESS']))
    echo '<div class="alert alert-success">'.$_SESSION['ALERT']['ASSIGN_CLASS_SUCCESS']. '</div>';
            ?>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Section</th>
                        <th>Year</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <form action="teachers.php?s=exec" method="post">
                       <input type="hidden" name="teacher_id" value="<?= $_GET['tid'] ?>">
                        <tr>
                            <td>
                                <select name="section_id" class="form-control">
                                   <?php
                                    $querySection = "SELECT * FROM sections WHERE archive_status = 0";
                                    $resultSection = mysqli_query($connection, $querySection);

                                    while($rowSection = mysqli_fetch_array($resultSection)){
                                        $countSection = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM teacher_classes WHERE teacher_id = {$_GET['tid']} AND advisory = 1 AND section_id = {$rowSection[0]}"));
                                        if($countSection==0):
                                    ?>
                                    <option value="<?= $rowSection[0] ?>"><?= $rowSection['section_description'] ?></option>
                                    <?php endif;
                                    } ?>
                                </select>
                            </td>
                            <td>
                                <select name="year_id" class="form-control">
                                    <?php
                                    $currentY = date("Y");
                                    $queryYear = "SELECT * FROM schoolyear";
                                    $resultYear = mysqli_query($connection, $queryYear);

                                    while($rowYear = mysqli_fetch_array($resultYear)){
                                        ?>
                                        <option value="<?= $rowYear[0] ?>"<?php if($currentY==$rowYear['year1']) echo "selected" ?> ><?= $rowYear['year1'] . " - " . $rowYear['year2'] ?></option>
                                        <?php } ?>
                                </select>
                            </td>
                            <td>
                                <input type="submit" class="btn btn-success" name="assign_advisory_class" value="Assign">
                            </td>
                        </tr>
                    </form>
                    <?php
                    $queryClass = "SELECT * FROM teacher_classes a LEFT JOIN sections b ON a.section_id=b.section_id WHERE teacher_id = {$_GET['tid']} AND advisory = 1 AND b.archive_status=0";
                    $resultClass = mysqli_query($connection, $queryClass);

                    while($rowClass = mysqli_fetch_array($resultClass)){
                    ?>
                    <tr>
                        <td><?= displaySectionDesc($rowClass['section_id']) ?></td>
                        <td><?= displayAcadYear($rowClass['year_id']) ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
