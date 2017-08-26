<?= isset($_SESSION['ALERT']['SUCCESS_RESTORE']) ? "<div class='alert alert-success'>{$_SESSION['ALERT']['SUCCESS_RESTORE']}</div>" : '' ?>

<div class="panel panel-body">
    <table class="table table-bordered" id="content">
        <thead>
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $queryAcc = "SELECT * FROM useraccount a LEFT JOIN user_profile b ON a.user_id=b.user_id WHERE archive_status = 1";
            $resultAcc = mysqli_query($connection, $queryAcc);

            while($rowAcc = mysqli_fetch_array($resultAcc)):
            ?>
            <tr>
                <td><?= $rowAcc['last_name'] . ", " . $rowAcc['first_name'] ?></td>
                <td><a href="#" class="btn btn-success" id="restoreAcc<?= $rowAcc[0] ?>">Restore</a></td>
            </tr>
            <?php include("includes/modal_restoreaccount.php") ?>
            <?php endwhile ?>
        </tbody>
    </table>
</div>
