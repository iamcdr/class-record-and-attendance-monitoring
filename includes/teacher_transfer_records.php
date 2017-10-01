<?= isset($_SESSION['ALERT']['SHIFT_STUDSEC_SUCCESS']) ? "<div class='alert alert-success'>{$_SESSION['ALERT']['SHIFT_STUDSEC_SUCCESS']}</div>" : '' ?>
<?= isset($_SESSION['ALERT']['ADD_STUDSEC_FAILED']) ? "<div class='alert alert-danger'>{$_SESSION['ALERT']['ADD_STUDSEC_FAILED']}</div>" : '' ?>


<div class="row">
    <div class="col-lg-12">
       <p>Note: Once transferred to another teacher, the account of this teacher will automatically be moved to archive.</p>
        <div class="panel panel-body">
            <table class="table table-striped">
                <tbody>
                    <form action="teachers.php?s=exec" method="post">
                        <input type="hidden" name="teacher_id" value="<?= $_GET['tid'] ?>">
                        <tr>
                            <td colspan=3><h4>Transfer All to</h4></td>
                        </tr>

                        <tr>
                            <td>
                                <select name="new_teacher_id" class="form-control" id="searchable">
                                   <?php
                                    $queryTeach = "SELECT * FROM useraccount WHERE archive_status = 0 AND user_privilege = 2 AND user_id != {$_GET['tid']} ORDER BY last_name";
                                    $resultTeach = mysqli_query($connection, $queryTeach);

                                    while($rowTeach = mysqli_fetch_array($resultTeach)){
                                    ?>
                                    <option value="<?= $rowTeach[0] ?>"><?= displayName($rowTeach[0]) ?></option>
                                    <?php
                                    } ?>
                                </select>
                            </td>
                            <td>
                                <input type="submit" class="btn btn-success" name="transfer_records">
                            </td>
                        </tr>
                    </form>
                </tbody>
            </table>
        </div>
    </div>
</div>
