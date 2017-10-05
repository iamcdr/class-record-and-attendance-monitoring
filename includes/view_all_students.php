<?php
if(isset($_SESSION['ALERT']['SUCCESS_ARCHIVE'])){
    echo '<div class="alert alert-success">'.$_SESSION['ALERT']['SUCCESS_ARCHIVE']. '</div>';
}
if(isset($_SESSION['ALERT']['ADD_STUDENT_SUCCESS'])){
    echo '<div class="alert alert-success">'.$_SESSION['ALERT']['ADD_STUDENT_SUCCESS']. '</div>';
}
if(isset($_SESSION['ALERT']['EDIT_STUDENT_SUCCESS'])){
    echo '<div class="alert alert-success">'.$_SESSION['ALERT']['EDIT_STUDENT_SUCCESS']. '</div>';
}
if(isset($_SESSION['ALERT']['ADD_STUDENT_FAILED'])){
    echo '<div class="alert alert-danger">'.$_SESSION['ALERT']['ADD_STUDENT_FAILED']. '</div>';
}
?>

    <div class="row">
        <div class="col-lg-12">
        <!--<div class="btn-group">
            <a href="students.php?s=add" class="btn btn-primary btn-lg"><i class="fa fa-plus fa-fw"></i> Add Student</a>
            <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
          </button>
            <ul class="dropdown-menu">
                <li><a href="students.php?s=batch_assign">Batch Assign Section</a></li>
            </ul>
        </div>-->
            <a href="students.php?s=add" class="btn btn-primary btn-lg"><i class="fa fa-plus fa-fw"></i> Add Student</a>

            <div class="panel panel-body">
                <div class="row">
                    <div class="col-lg-offset-4 col-lg-4 col-lg-offset-4">
                            <?php
                                $cDateYear = date("Y");
                                $currentSy = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM year WHERE year1 = '{$cDateYear}'"));
                                ?>
                            <select name="sy" class="form-control">
                                        <?php
                                        $sy = mysqli_query($connection, "SELECT * FROM year");
                                        while($sydata = mysqli_fetch_assoc($sy)){ ?>
                                            <option value="<?= $sydata['id']; ?>" <?php if (!empty($_POST)){ if($sydata['id']==$_POST['sy']){ echo "selected"; } }else{ if($currentSy['id']==$sydata['id']){ echo "selected"; }} ?>>
                                                <?php echo $sydata['year1'] . " - " . $sydata['year2']; ?>
                                            </option>
                                        <?php } ?>
                            </select>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 10px">
                    <div class="col-lg-offset-3 col-lg-6 col-lg-offset-3">
                        <input type="text" id="keyword" class="form-control">
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row" id="showStudents">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID No.</th>
                                    <th>Last Name</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Level Assigned</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $schoolyear_id = (isset($_POST['sy'])&&$_POST['sy']!='') ? $_POST['sy'] : $currentSy[0];
                                $queryStud = "SELECT * FROM students AS a INNER JOIN (SELECT * FROM student_section GROUP BY student_id) as b ON a.student_id=b.student_id LEFT JOIN sections c ON c.section_id=b.section_id LEFT JOIN gradelevel d ON d.gradelevel_id=c.gradelevel_Id WHERE a.archive_status = 0 AND c.archive_status = 0 ";

                                if(isset($_POST['sy'])){
                                    $queryStud = "SELECT * FROM students AS a INNER JOIN (SELECT * FROM student_section WHERE schoolyear_Id = {$schoolyear_id} GROUP BY student_id) as b ON a.student_id=b.student_id LEFT JOIN sections c ON c.section_id=b.section_id LEFT JOIN gradelevel d ON d.gradelevel_id=c.gradelevel_Id WHERE a.archive_status = 0 AND c.archive_status = 0 AND b.schoolyear_id = {$schoolyear_id}";
                                }

                                if(isset($_POST['filter_keyword'])&&$_POST['filter_keyword']!=''){
                                    $keyword = mysqli_real_escape_string($connection, $_POST['filter_keyword']);
                                    $queryStud .= " AND CONCAT(student_idno, ' ', last_name, ' ', first_name, ' ', middle_name, ' ', gradelevel_description) LIKE '%$keyword%' ";
                                }

                                $queryStud .= " ORDER BY last_name";
                                $resultStud = mysqli_query($connection, $queryStud) or die(mysqli_error($connection));


                                while($rowStud = mysqli_fetch_array($resultStud)){
                                ?>
                                    <tr>
                                        <td>
                                            <?= $rowStud['student_idno'] ?>
                                        </td>
                                        <td>
                                            <?= $rowStud['last_name'] ?>
                                        </td>
                                        <td>
                                            <?= $rowStud['first_name'] ?>
                                        </td>
                                        <td>
                                            <?= $rowStud['middle_name'] ?>
                                        </td>
                                        <td>
                                            <?php
                                    $querySl = "SELECT * FROM student_section AS a INNER JOIN sections AS b ON a.section_id=b.section_id INNER JOIN gradelevel AS c ON b.gradelevel_id=c.gradelevel_id WHERE student_id = {$rowStud[0]} AND a.archive_status = 0 AND b.archive_status = 0";
                                    $resultSl = mysqli_query($connection, $querySl) or die(mysqli_error($connection));

                                    while($rowSl = mysqli_fetch_array($resultSl)){

                                        echo $rowSl['gradelevel_description'] . "<br>";
                                    }
                                        ?>
                                        </td>

                                        <td>
                                            <div class="btn-group">
                                                <button type="button" data-toggle="dropdown" class="btn btn-success dropdown-toggle">Action &nbsp;
                                                        <i class="fa fa-angle-down"></i></button>
                                                <ul role="menu" class="dropdown-menu">
                                                    <li><a href="students.php?s=view&sid=<?= $rowStud[0] ?>">View Information</a></li>
                                                    <li><a href="students.php?s=edit&sid=<?= $rowStud[0] ?>">Update Information</a></li>
                                                    <li><a href="students.php?s=assg_sc&sid=<?= $rowStud[0] ?>">Assign Section</a></li>
                                                    <li><a href="students.php?s=shft_sc&sid=<?= $rowStud[0] ?>">Shift Section</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#" id="archive_student<?= $rowStud[0] ?>">Move to Archive</a></li>
                                                </ul>
                                            </div>
                                            <?php include("includes/modal_archivestudent.php") ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script>
$(document).ready(studentsHandler);
$('#keyword').on('keyup', studentsHandler);
$('select[name="sy"]').on('change', studentsHandler);

    function studentsHandler(e){
        $.ajax({
                method: "POST",
                url: "students.php",
                data: {
                    filter_keyword: $('#keyword').val(),
                    sy: $('select[name="sy"]').val()
                },
                success: function(result) {
                    var div = $('#showStudents', $(result));
                    $('#showStudents').html(div);
                }

            })
    }
</script>
