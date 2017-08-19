<?php
if(isset($_SESSION['ALERT']['SUCCESS_ARCHIVE'])){
    echo '<div class="alert alert-success">' . $_SESSION['ALERT']['SUCCESS_ARCHIVE'] . '</div>';
}
if(isset($_SESSION['ALERT']['ADD_GRADELEVEL_SUCCESS'])){
    echo '<div class="alert alert-success">' . $_SESSION['ALERT']['ADD_GRADELEVEL_SUCCESS']  . '</div>';
}
if(isset($_SESSION['ALERT']['EDIT_GRADELEVEL_SUCCESS'])){
    echo '<div class="alert alert-success">' . $_SESSION['ALERT']['EDIT_GRADELEVEL_SUCCESS']  . '</div>';
}
if(isset($_SESSION['ALERT']['ADD_GRADELEVEL_FAILED'])){
    echo '<div class="alert alert-danger">' . $_SESSION['ALERT']['ADD_GRADELEVEL_FAILED']  . '</div>';
}
if(isset($_SESSION['ALERT']['EDIT_GRADELEVEL_FAILED'])){
    echo '<div class="alert alert-danger">' . $_SESSION['ALERT']['EDIT_GRADELEVEL_FAILED']  . '</div>';
}

             ?>

                <div class="row">
                    <div class="col-lg-12">
                        <a href="gradelevel.php?s=add" class="btn btn-primary btn-lg"><i class="fa fa-plus fa-fw"></i> Add Grade Level</a>
                        <div class="panel panel-body">
                            <table class="table table-bordered" id="content">
                                <thead>
                                    <tr>
                                        <th>Grade Level Code</th>
                                        <th>Grade Level Description</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                        $queryGradeLvl = "SELECT * FROM gradelevel WHERE archive_status = 0";
                        $resultGradeLvl = mysqli_query($connection, $queryGradeLvl) or die(mysqli_error($connection));

                        while($rowGradeLvl = mysqli_fetch_array($resultGradeLvl)){
                        ?>
                                        <tr>
                                            <td>
                                                <?= $rowGradeLvl['gradelevel_code'] ?>
                                            </td>
                                            <td>
                                                <?= $rowGradeLvl['gradelevel_description'] ?>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" data-toggle="dropdown" class="btn btn-success dropdown-toggle">Action &nbsp;
                                                        <i class="fa fa-angle-down"></i></button>
                                                    <ul role="menu" class="dropdown-menu">
                                                        <li><a href="gradelevel.php?s=edit&lvlid=<?= $rowGradeLvl['gradelevel_id'] ?>">Edit Information</a></li>
                                                        <li><a href="gradelevel.php?s=assg_sub&lvlid=<?= $rowGradeLvl['gradelevel_id'] ?>">Assign Subjects</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#" id="archive_gradelevel<?= $rowGradeLvl['gradelevel_id'] ?>">Move to Archive</a></li>
                                                    </ul>
                                                </div>
                                                <?php include("includes/modal_archivegradelevel.php") ?>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
