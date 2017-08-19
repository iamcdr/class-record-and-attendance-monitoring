<?php
if(isset($_SESSION['ALERT']['SUCCESS_ARCHIVE'])){
    echo '<div class="alert alert-success">' . $_SESSION['ALERT']['SUCCESS_ARCHIVE'] . '</div>';
}
if(isset($_SESSION['ALERT']['ADD_SUBJECT_SUCCESS'])){
    echo '<div class="alert alert-success">' . $_SESSION['ALERT']['ADD_SUBJECT_SUCCESS']  . '</div>';
}
if(isset($_SESSION['ALERT']['EDIT_SUBJECT_SUCCESS'])){
    echo '<div class="alert alert-success">' . $_SESSION['ALERT']['EDIT_SUBJECT_SUCCESS']  . '</div>';
}
if(isset($_SESSION['ALERT']['ADD_SUBJECT_FAILED'])){
    echo '<div class="alert alert-danger">' . $_SESSION['ALERT']['ADD_SUBJECT_FAILED']  . '</div>';
}
if(isset($_SESSION['ALERT']['EDIT_SUBJECT_FAILED'])){
    echo '<div class="alert alert-danger">' . $_SESSION['ALERT']['EDIT_SUBJECT_FAILED']  . '</div>';
}
             ?>

                <div class="row">
                    <div class="col-lg-12">
                        <a href="subjects.php?s=add" class="btn btn-primary btn-lg"><i class="fa fa-plus fa-fw"></i> Add Subject</a>
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
                                                <div class="btn-group">
                                                    <button type="button" data-toggle="dropdown" class="btn btn-success dropdown-toggle">Action &nbsp;
                                                        <i class="fa fa-angle-down"></i></button>
                                                    <ul role="menu" class="dropdown-menu">
                                                        <li><a href="subjects.php?s=edit&sid=<?= $rowSubjects['subject_id'] ?>">Edit Information</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#" id="archive_subject<?= $rowSubjects['subject_id'] ?>">Move to Archive</a></li>
                                                    </ul>
                                                </div>
                                                <?php include("includes/modal_archivesubject.php") ?>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
