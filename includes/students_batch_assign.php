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
    <form action="students.php?s=exec" method="post">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-body">
                    <div class="row" style="margin-bottom: 10px">
                        <div class="col-lg-offset-4 col-lg-4 col-lg-offset-4">
                           <h5>Filter:</h5>
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
                        <div class="col-lg-offset-2 col-lg-8">
                            <div class="col-lg-6">
                                <h5>Section</h5>
                                <select name="section_id" class="form-control">
                                <?php
                                $queryGl = "SELECT * FROM sections WHERE archive_status = 0 ORDER BY section_description ASC";
                                $resultGl = mysqli_query($connection, $queryGl) or die(mysqli_error($connection));

                                while($rowGl = mysqli_fetch_array($resultGl)){
                                    ?>
                                    <option value="<?= $rowGl[0] ?>"><?= $rowGl['section_description'] ?></option>
                                <?php } ?>
                            </select>
                            </div>
                            <div class="col-lg-6">
                                <h5>School Year</h5>
                                <select name="schoolyear_id" class="form-control">
                                <?php
                                $cDateYear = date("Y");
                                $currentSy = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM schoolyear WHERE year1 = '{$cDateYear}'"));
                                $sy = mysqli_query($connection, "SELECT * FROM schoolyear");
                                while($sydata = mysqli_fetch_array($sy)){
                                    ?>
                                    <option value="<?= $sydata['id']; ?>" <?php if($currentSy['id']==$sydata['id']){ echo "selected"; } ?>>
                                            <?= $sydata['year1'] . " - " . $sydata['year2']; ?>
                                    </option>
                                    <?php } ?>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row" id="showStudents">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="checkAll"></th>
                                        <th>ID No.</th>
                                        <th>Last Name</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Level Assigned</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $schoolyear_id = (isset($_POST['sy'])&&$_POST['sy']!='') ? $_POST['sy'] : $currentSy[0];
                                    $queryStud = "SELECT * FROM students AS a INNER JOIN (SELECT * FROM student_section GROUP BY student_id) as b ON a.student_id=b.student_id LEFT JOIN sections c ON c.section_id=b.section_id LEFT JOIN gradelevel d ON d.gradelevel_id=c.gradelevel_Id WHERE a.archive_status = 0 AND c.archive_status = 0 ";

                                    if(isset($_POST['sy'])){
                                        echo "<Script>
                                        $(\"#checkAll\").change(function () {
                                            $(\"input:checkbox\").prop('checked', $(this).prop(\"checked\"));
                                        });
                                        </script>
                                        ";
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
                                            <td><input type="checkbox" class="studentCheck" name="check_<?= $rowStud[0] ?>"></td>
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

                                        </tr>
                                        <?php } ?>
                                        <tr>
                                            <td colspan=6><input type="submit" name="batch_assign_section" class="btn btn-primary"></td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>
        $(document).ready(studentsHandler);
        $('#keyword').on('keyup', studentsHandler);
        $('select[name="sy"]').on('change', studentsHandler);

        function studentsHandler(e) {
            $.ajax({
                method: "POST",
                url: "students.php?s=batch_assign",
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
