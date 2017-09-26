<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-body">
            <?php
if(isset($_SESSION['ALERT']['ASSIGN_CLASS_SUCCESS']))
    echo '<div class="alert alert-success">'.$_SESSION['ALERT']['ASSIGN_CLASS_SUCCESS']. '</div>';
if(isset($_SESSION['ALERT']['ASSIGN_CLASS_FAILED']))
    echo '<div class="alert alert-danger">'.$_SESSION['ALERT']['ASSIGN_CLASS_FAILED']. '</div>';
            ?>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Section</th>
                            <th>Subject</th>
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
                                    ?>
                                    <option value="<?= $rowSection[0] ?>"><?= $rowSection['section_description'] ?></option>
                                    <?php } ?>
                                </select>
                                </td>
                                <td>
                                    <select name="subject_id" class="form-control">
                                    <?php
                                    $querySubj = "SELECT * FROM subjects WHERE archive_status = 0";
                                    $resultSubj = mysqli_query($connection, $querySubj);

                                    while($rowSubj = mysqli_fetch_array($resultSubj)){

                                        ?>
                                        <option value="<?= $rowSubj[0] ?>"><?= $rowSubj['subject_description'] ?></option>
                                        <?php

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
                                    <input type="submit" class="btn btn-success btnassign_class" name="assign_class" value="Assign">
                                </td>
                            </tr>
                        </form>
                        <?php
                    $queryClass = "SELECT * FROM teacher_classes a LEFT JOIN sections b ON a.section_id=b.section_id WHERE teacher_id = {$_GET['tid']} AND advisory = 0 AND b.archive_status=0 AND a.archive_status=0";
                    $resultClass = mysqli_query($connection, $queryClass);

                    while($rowClass = mysqli_fetch_array($resultClass)){
                    ?>
                            <tr>
                                <td>
                                    <?= displaySectionDesc($rowClass['section_id']) ?>
                                </td>
                                <td>
                                    <?= displaySubjectDesc($rowClass['subject_id']) ?>
                                </td>
                                <td>
                                    <?= displayAcadYear($rowClass['year_id']) ?>
                                </td>
                                <td><a href="#" id="archive_assignclass<?= $rowClass[0] ?>" class="btn btn-danger">Archive</a></td>
                            </tr>
                            <?php include("includes/modal_archiveassignedclass.php") ?>
                            <?php } ?>
                    </tbody>
                </table>
        </div>
    </div>
</div>
