<?php
$queryGradeLvl = "SELECT * FROM gradelevel WHERE gradelevel_id = {$_GET['lvlid']}";
$resultGradeLvl = mysqli_query($connection, $queryGradeLvl) or die(mysqli_error($connection));

$rowGradeLvl = mysqli_fetch_array($resultGradeLvl);

?>


<div class="row">
    <form action="gradelevel.php?s=exec" method="post">
       <input type="hidden" name="gradelevel_id" value="<?= $_GET['lvlid'] ?>">
        <div class="col-lg-offset-3 col-lg-6 col-lg-offset-3">
            <div class="form-group">
                <label>Subject Code</label>
                <input class="form-control" type="text" name="gradelevel_code" value="<?= $rowGradeLvl['gradelevel_code'] ?>" >
            </div>
            <div class="form-group">
                <label>gradelevel Description</label>
                <input class="form-control" type="text" name="gradelevel_description" value="<?= $rowGradeLvl['gradelevel_description'] ?>" >
            </div>
            <div class="form-group">
                <input type="submit" name="edit_gradelevel" class="btn btn-success">
            </div>
        </div>
    </form>
</div>
