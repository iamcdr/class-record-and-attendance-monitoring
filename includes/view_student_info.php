<?php
$queryInfo = "SELECT * FROM students WHERE student_id = {$_GET['sid']}";
$resultInfo = mysqli_query($connection, $queryInfo);

$rowInfo = mysqli_fetch_array($resultInfo);
?>


<div class="content">
    <div class="row">
           <div class="row">
               <div class="col-lg-offset-4 col-lg-4">
                   <img src="./images/<?= $rowInfo['image_1'] ?>" alt="<?= $rowInfo['image_1'] ?>" class="img-responsive" style="width: 200px; ">
               </div>
           </div>
            <div class="row">
                <div class="form-group col-lg-12">
                    <div class="col-lg-4">
                        <h5>Last Name</h5>
                        <?= $rowInfo['last_name'] ?>
                    </div>
                    <div class="col-lg-4">
                        <h5>First Name</h5>
                        <?= $rowInfo['first_name'] ?>
                    </div>
                    <div class="col-lg-4">
                        <h5>Middle Name</h5>
                        <?= $rowInfo['middle_name'] ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-12">
                    <div class="col-lg-6">
                        <h5>Student ID Number</h5>
                        <?= $rowInfo['student_idno'] ?>
                    </div>
                    <div class="col-lg-6">
                        <h5>ID Barcode Number</h5>
                        <?= $rowInfo['student_barcode'] ?>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-12">
                    <div class="col-lg-offset-4 col-lg-4 col-lg-offset-4">
                        <h5>Birthdate</h5>
                        <?= $rowInfo['birthdate'] ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-12">
                    <div class="col-lg-3">
                        <h5>Contact No</h5>
                        <?= $rowInfo['contact_no'] ?>
                    </div>
                    <div class="col-lg-3">
                        <h5>Section History:</h5>
                        <table class="table">
                            <tr>
                                <th>School Year</th>
                                <th>Section</th>
                            </tr>
                        <?php
                        $queryGl = "SELECT * FROM student_section a LEFT JOIN sections b ON a.section_id=b.section_id WHERE a.archive_status = 0 AND a.student_id={$_GET['sid']} ORDER BY section_description ASC";
                        $resultGl = mysqli_query($connection, $queryGl) or die(mysqli_error($connection));

                        while($rowGl = mysqli_fetch_array($resultGl)){
                            ?>
                            <tr>
                                <td><?= displayAcadYear($rowGl['schoolyear_id']) ?></td>
                                <td><?= displaySectionDesc($rowGl['section_id']) ?></td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
    </div>
</div>
