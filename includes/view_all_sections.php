<?php
if(isset($_SESSION['ALERT']['ADD_SECTION_SUCCESS'])){
    echo '<div class="alert alert-success">'.$_SESSION['ALERT']['ADD_SECTION_SUCCESS'].'</div>';
}
if(isset($_SESSION['ALERT']['ADD_SECTION_FAILED'] )){
    echo '<div class="alert alert-danger">'.$_SESSION['ALERT']['ADD_SECTION_FAILED'].'</div>';
}
    ?>


                <div class="row">
                    <div class="col-lg-12">
                        <a href="sections.php?s=add" class="btn btn-primary btn-lg"><i class="fa fa-plus fa-fw"></i> Add Section</a>
                        <div class="panel panel-body">
                            <table class="table table-bordered" id="content">
                                <thead>
                                    <tr>
                                        <th>Grade Level Assign</th>
                                        <th>Section Description</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                        $querySection = "SELECT * FROM sections WHERE archive_status = 0";
                        $resultSection = mysqli_query($connection, $querySection) or die(mysqli_error($connection));

                        while($rowSection = mysqli_fetch_array($resultSection)){
                        ?>
                                        <tr>
                                            <td>
                                                <?= displayGradeLevelDesc($rowSection['gradelevel_id']) ?>
                                            </td>
                                            <td>
                                                <?= $rowSection['section_description'] ?>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" data-toggle="dropdown" class="btn btn-success dropdown-toggle">Action &nbsp;
                                                        <i class="fa fa-angle-down"></i></button>
                                                    <ul role="menu" class="dropdown-menu">
                                                        <li><a href="#" id="archive_section<?= $rowSection[0] ?>">Move to Archive</a></li>
                                                    </ul>
                                                </div>
                                                <?php include("includes/modal_archivesection.php") ?>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
