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
                        <th>Subject Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <form action="gradelevel.php?s=exec" method="post">
                        <input type="hidden" name="gradelevel_id" value="<?= $_GET['lvlid'] ?>">
                        <tr>
                            <td>
                                <select name="subject_id" id="" class="form-control">
                                    <?php
                                $query = mysqli_query($connection, "SELECT * FROM subjects WHERE archive_status = 0 ORDER BY subject_code ASC");

                                while($row = mysqli_fetch_array($query)){

                                    $subjcount = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM gradelevel_subject WHERE level_id = {$_GET['lvlid']} AND subject_id = {$row['subject_id']} AND archive_status = 0"));
                                    if($subjcount == 0){
                                ?>
                                        <option value="<?= $row[0] ?>">
                                            <?= displaySubjectDesc($row['subject_id']) ?>
                                        </option>
                                        <?php
                                    }
                                }
                                ?>
                                </select>
                            </td>
                            <td>
                                <input type="submit" name="assign_subject" value="Assign" class="btn btn-success">
                            </td>
                        </tr>
                        <?php
                    $querySubj = "SELECT * FROM gradelevel_subject WHERE level_id = {$_GET['lvlid']} AND archive_status = 0";
                    $resultSubj = mysqli_query($connection, $querySubj) or die(mysqli_error($connection));

                    while($rowSubj = mysqli_fetch_array($resultSubj)){
                    ?>
                            <tr>
                                <td>
                                    <?= displaySubjectDesc($rowSubj['subject_id']) ?>
                                </td>
                                <td><a href="#" id="archive_assignsubject<?= $rowSubj[0] ?>" class="btn btn-danger">Unassign</a></td>
                            </tr>
                            <?php include("includes/modal_archiveassignedsubject.php") ?>
                                <?php } ?>
                    </form>
                </tbody>
            </table>
        </div>
    </div>
