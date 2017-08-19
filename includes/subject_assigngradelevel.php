<?php
if(isset($_SESSION['ALERT']['ASSIGN_SUBJECT_SUCCESS'])){
    echo '<div class="alert alert-success">' . $_SESSION['ALERT']['ASSIGN_SUBJECT_SUCCESS'] . '</div>';
}
if(isset($_SESSION['ALERT']['UNASSIGN_SUBJECT_SUCCESS'])){
    echo '<div class="alert alert-success">' . $_SESSION['ALERT']['UNASSIGN_SUBJECT_SUCCESS'] . '</div>';
}
?>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Grade Level</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <form action="subjects.php?s=exec" method="post">
                        <input type="hidden" name="subject_id" value="<?= $_GET['lvlid'] ?>">
                        <tr>
                            <td>
                                <select name="gradelevel_id" id="" class="form-control">
                                    <?php
                                $query = mysqli_query($connection, "SELECT * FROM gradelevel WHERE archive_status = 0 ORDER BY gradelevel_description ASC");
                                while($row = mysqli_fetch_array($query)){

                                    $levelAssigned = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM gradelevel_subject WHERE subject_id = {$_GET['sid']} AND level_id = {$row['gradelevel_id']} AND archive_status = 0"));
                                    if($levelAssigned == 0){
                                ?>
                                        <option value="<?= $row[0] ?>">
                                            <?= $row['subject_code'] . " - " . $row['subject_description'] ?>
                                        </option>
                                        <?php
                                    }
                                }
                                ?>
                                </select>
                            </td>
                            <td>
                                <input type="submit" name="assign_gradelevel" value="Assign" class="btn btn-success">
                            </td>
                        </tr>
                        <?php
                    $querySubj = "SELECT * FROM gradelevel_subject WHERE subject_id = {$_GET['sid']} AND archive_status = 0";
                    $resultSubj = mysqli_query($connection, $querySubj) or die(mysqli_error($connection));

                    while($rowSubj = mysqli_fetch_array($resultSubj)){
                    ?>
                            <tr>
                                <td>
                                    <?= displayGradelevelCode($rowSubj['level_id']) . " - " . displayGradeLevelDesc($rowSubj['level_id']) ?>
                                </td>
                                <td><a href="#" id="archive_assigngradelevel<?= $rowSubj[0] ?>" class="btn btn-danger">Unassign</a></td>
                            </tr>
                            <?php include("includes/modal_archiveassignedgradelevel.php") ?>
                                <?php } ?>
                    </form>
                </tbody>
            </table>
        </div>
    </div>
