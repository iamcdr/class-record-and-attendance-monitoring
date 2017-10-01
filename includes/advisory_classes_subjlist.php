<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-body">
           <a href="advisory.php?s=cls_stndng&sid=<?= $_GET['sid']?>&yid=<?= $_GET['yid'] ?>" class="btn btn-info btn-lg">Class Standing Report</a>
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
                        $dataGL = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM sections WHERE section_id = {$_GET['sid']}"));
                        $level_id = $dataGL['gradelevel_id'];
                        $querySubjects = "SELECT * FROM gradelevel_subject a WHERE archive_status = 0 AND level_id = {$level_id}";
                        $resultSubjects = mysqli_query($connection, $querySubjects) or die(mysqli_error($connection));

                        while($rowSubjects = mysqli_fetch_array($resultSubjects)){
                        ?>
                        <tr>
                            <td>
                                <?= displaySubjectCode($rowSubjects['subject_id']) ?>
                            </td>
                            <td>
                                <?= displaySubjectDesc($rowSubjects['subject_id']) ?>
                            </td>
                            <td>
                                <a href="advisory.php?s=gr_list&sid=<?= $_GET['sid']?>&yid=<?= $_GET['yid']?>&subid=<?= $rowSubjects['subject_id'] ?>" class="btn btn-primary">Open</a>
                            </td>
                        </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
