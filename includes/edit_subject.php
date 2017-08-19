<?php
$querySubject = "SELECT * FROM subjects WHERE subject_id = {$_GET['sid']}";
$resultSubject = mysqli_query($connection, $querySubject) or die(mysqli_error($connection));

$rowSubject = mysqli_fetch_array($resultSubject);

?>


<div class="row">
    <form action="subjects.php?s=exec" method="post">
       <input type="hidden" name="subject_id" value="<?= $_GET['sid'] ?>">
        <div class="col-lg-offset-3 col-lg-6 col-lg-offset-3">
            <div class="form-group">
                <label>Subject Code</label>
                <input class="form-control" type="text" name="subject_code" value="<?= $rowSubject['subject_code'] ?>" >
            </div>
            <div class="form-group">
                <label>Subject Description</label>
                <input class="form-control" type="text" name="subject_description" value="<?= $rowSubject['subject_description'] ?>" >
            </div>
            <div class="form-group">
                <input type="submit" name="edit_subject" class="btn btn-success">
            </div>
        </div>
    </form>
</div>
