<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-body">
            <table class="table table-bordered" id="content">
                <thead>
                    <tr>
                        <th>Subject Code</th>
                        <th>Subject Description</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $querySubjects = "SELECT * FROM subjects WHERE archive_status = 0";
                        $resultSubjects = mysqli_query($connection, $querySubjects) or die(mysqli_error($connection));

                        while($rowSubjects = mysqli_fetch_array($resultSubjects)){
                        ?>
                        <tr>
                            <td>
                                <?= $rowSubjects['subject_code'] ?>
                            </td>
                            <td>
                                <?= $rowSubjects['subject_description'] ?>
                            </td>
                            <td>
                                <a href="advisory.php?s=gr_list&sid=<?= $_GET['sid']?>&yid=<?= $_GET['yid']?>&subid=<?= $rowSubjects[0] ?>" class="btn btn-primary">Open</a>
                            </td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
