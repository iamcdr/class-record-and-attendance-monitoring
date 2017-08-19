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
                            <td>
                                <select name="section_id" class="form-control" id="searchable">
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
                                <select name="year_id" class="form-control">
                                    <?php
                                    $currentY = date("Y");
                                    $queryYear = "SELECT * FROM schoolyear";
                                    $resultYear = mysqli_query($connection, $queryYear);
                                    
                                    while($rowYear = mysqli_fetch_array($resultYear)){
                                        $yearcount = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM student_section WHERE schoolyear_id = {$rowYear[0]} AND student_id = {$_GET['sid']} AND archive_status=0"));
                                        if($yearcount==0){
                                        ?>
                                        <option value="<?= $rowYear[0] ?>"<?php if($currentY==$rowYear['year1']) echo "selected" ?> ><?= $rowYear['year1'] . " - " . $rowYear['year2'] ?></option>
                                        <?php }
                                    } ?>
                                </select>
                            </td>
                            <td>
                                <input type="submit" class="btn btn-success" name="assign_section">
                            </td>
                        </tr>
                    </form>
                    <?php
                    $queryAssign = "SELECT * FROM students AS a LEFT JOIN student_section AS b ON a.student_id=b.student_id WHERE a.student_id = {$_GET['sid']}";
                    $resultAssign = mysqli_query($connection, $queryAssign);
                    
                    while($rowAssign = mysqli_fetch_array($resultAssign)){
                    ?>
                        <tr>
                            <td>
                                <?= displaySectionDesc($rowAssign['section_id']) ?>
                            </td>
                            <td>
                                <?= displayAcadYear($rowAssign['schoolyear_id']) ?>
                            </td>
                            <td></td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
