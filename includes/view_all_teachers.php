<?php
if(isset($_SESSION['ALERT']['SUCCESS_ARCHIVE'])){
    echo '<div class="alert alert-success">'.$_SESSION['ALERT']['SUCCESS_ARCHIVE']. '</div>';
}
if(isset($_SESSION['ALERT']['ADD_STUDENT_SUCCESS'])){
    echo '<div class="alert alert-success">'.$_SESSION['ALERT']['ADD_STUDENT_SUCCESS']. '</div>';
}
?>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-body">
                    <table class="table table-bordered" id="content">
                        <thead>
                            <tr>
                                <th>Employee ID</th>
                                <th>Full Name</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        $queryTeach = "SELECT * FROM useraccount WHERE archive_status = 0 AND user_privilege = 2";
                        $resultTeach = mysqli_query($connection, $queryTeach) or die(mysqli_error($connection));


                        while($rowTeach = mysqli_fetch_array($resultTeach)){
                        ?>
                                <tr>
                                    <td>
                                        <?= $rowTeach['emp_num'] ?>
                                    </td>
                                    <td>
                                        <?= displayTeacherName($rowTeach['user_id']) ?>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" data-toggle="dropdown" class="btn btn-success dropdown-toggle">Action &nbsp;
                                                <i class="fa fa-angle-down"></i></button>
                                            <ul role="menu" class="dropdown-menu">
                                                <li><a href="teachers.php?s=view&tid=<?= $rowTeach[0] ?>">View Information</a></li>
                                                <li><a href="teachers.php?s=view_cls&tid=<?= $rowTeach[0] ?>">View Classes</a></li>
                                                <li class="divider"></li>
                                                <li><a href="teachers.php?s=assg_cls&tid=<?= $rowTeach[0] ?>">Assign Class</a></li>
                                                <li><a href="teachers.php?s=assg_adv_cls&tid=<?= $rowTeach[0] ?>">Assign Advisory Class</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
