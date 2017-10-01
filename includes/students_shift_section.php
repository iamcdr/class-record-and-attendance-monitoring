<?= isset($_SESSION['ALERT']['SHIFT_STUDSEC_SUCCESS']) ? "<div class='alert alert-success'>{$_SESSION['ALERT']['SHIFT_STUDSEC_SUCCESS']}</div>" : '' ?>
<?= isset($_SESSION['ALERT']['ADD_STUDSEC_FAILED']) ? "<div class='alert alert-danger'>{$_SESSION['ALERT']['ADD_STUDSEC_FAILED']}</div>" : '' ?>


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Section</th>
                        <th>Year</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <form action="students.php?s=exec" method="post">
                        <input type="hidden" name="student_id" value="<?= $_GET['sid'] ?>">
                        <tr>
                            <td colspan=3><h4>Shift From</h4></td>
                        </tr>
                        <tr>
                            <td>
                                <select name="section_id_from" class="form-control">
                                   <?php
                                    $querySection = "SELECT * FROM students AS a LEFT JOIN student_section AS b ON a.student_id=b.student_id LEFT JOIN sections AS c ON b.section_id=c.section_id WHERE a.student_id = {$_GET['sid']} AND a.archive_status = 0 AND c.archive_status = 0 AND b.archive_status = 0";
                                    $resultSection = mysqli_query($connection, $querySection);

                                    while($rowSection = mysqli_fetch_array($resultSection)){
                                        $sectioncount = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM student_section WHERE section_id = {$rowSection[0]} AND student_id = {$_GET['sid']} AND archive_status=0"));
                                        if($sectioncount==0){
                                    ?>
                                    <option value="<?= $rowSection['section_id'] ?>"><?= $rowSection['section_description'] ?></option>
                                    <?php }
                                    } ?>
                                </select>
                            </td>
                            <td>
                                <select name="year_id_from" class="form-control">
                                    <?php
                                    $currentY = date("Y");
                                    $queryYear = "SELECT * FROM schoolyear";
                                    $resultYear = mysqli_query($connection, $queryYear);

                                    $querySection = "SELECT * FROM students AS a LEFT JOIN student_section AS b ON a.student_id=b.student_id LEFT JOIN sections AS c ON b.section_id=c.section_id WHERE a.student_id = {$_GET['sid']} AND a.archive_status = 0 AND c.archive_status = 0 AND b.archive_status = 0";
                                    $resultSection = mysqli_query($connection, $querySection);

                                    while($rowSection = mysqli_fetch_array($resultSection)){
                                    ?>
                                    <option value="<?= $rowSection['schoolyear_id'] ?>"><?= displayAcadYear($rowSection['schoolyear_id']) ?></option>
                                    <?php
                                    } ?>
                                </select>
                            </td>
                            <td>
                            </td>
                        </tr>

                        <tr>
                            <td colspan=3><h4>Shift to</h4></td>
                        </tr>

                        <tr>
                            <td>
                                <select name="section_id_to" class="form-control" id="searchable">
                                   <?php
                                    $querySection = "SELECT * FROM sections WHERE archive_status = 0 ORDER BY section_description ASC";
                                    $resultSection = mysqli_query($connection, $querySection);

                                    while($rowSection = mysqli_fetch_array($resultSection)){
                                        $sectioncount = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM student_section WHERE section_id = {$rowSection[0]} AND student_id = {$_GET['sid']} AND archive_status=0"));
                                        if($sectioncount==0){
                                    ?>
                                    <option value="<?= $rowSection[0] ?>"><?= $rowSection['section_description'] ?></option>
                                    <?php }
                                    } ?>
                                </select>
                            </td>
                            <td>
                                <select name="year_id_to" class="form-control">
                                    <?php
                                    $currentY = date("Y");
                                    $queryYear = "SELECT * FROM schoolyear";
                                    $resultYear = mysqli_query($connection, $queryYear);

                                    while($rowYear = mysqli_fetch_array($resultYear)){
                                        $yearcount = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM student_section WHERE schoolyear_id = {$rowYear[0]} AND student_id = {$_GET['sid']} AND archive_status=0"));
                                        ?>
                                        <option value="<?= $rowYear[0] ?>"<?php if($currentY==$rowYear['year1']) echo "selected" ?> ><?= $rowYear['year1'] . " - " . $rowYear['year2'] ?></option>
                                        <?php
                                    } ?>
                                </select>
                            </td>
                            <td>
                                <input type="submit" class="btn btn-success" name="shift_section">
                            </td>
                        </tr>
                    </form>
                </tbody>
            </table>
        </div>
    </div>
</div>
