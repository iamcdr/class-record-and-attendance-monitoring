<div class="content">
    <div class="row">
        <form action="students.php?s=exec" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-lg-12">
                    <div class="col-lg-4">
                        <h5>Last Name</h5>
                        <input type="text" class="form-control" name="last_name" required onkeypress="return lettersOnly(event)">
                    </div>
                    <div class="col-lg-4">
                        <h5>First Name</h5>
                        <input type="text" class="form-control" name="first_name" required onkeypress="return lettersOnly(event)">
                    </div>
                    <div class="col-lg-4">
                        <h5>Middle Name</h5>
                        <input type="text" class="form-control" name="middle_name" onkeypress="return lettersOnly(event)">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-12">
                    <div class="col-lg-6">
                        <h5>Student ID Number</h5>
                        <input type="text" class="form-control" name="student_idno">
                    </div>
                    <div class="col-lg-6">
                        <h5>ID Barcode Number</h5>
                        <input type="text" class="form-control" name="student_barcode">
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-12">
                    <div class="col-lg-4 ">
                        <h5>Birthdate</h5>
                        <input type="date" name="birthdate" class="form-control">
                    </div>
                    <div class="col-lg-4 col-lg-offset-4">
                        <h5>Image of Student</h5>
                        <input type="file" name="stud_img" class="form-control" accept="image/*">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-12">
                    <div class="col-lg-3">
                        <h5>Contact No</h5>
                        <input type="text" name="contact_no" class="form-control" required onkeypress="return isNumberKey(event)">
                    </div>
                    <div class="col-lg-3">
                        <h5>Assign Section</h5>
                        <select name="assg_section" class="form-control">
                            <?php
                            $queryGl = "SELECT * FROM sections WHERE archive_status = 0 ORDER BY section_description ASC";
                            $resultGl = mysqli_query($connection, $queryGl) or die(mysqli_error($connection));

                            while($rowGl = mysqli_fetch_array($resultGl)){
                                ?>
                                <option value="<?= $rowGl[0] ?>"><?= $rowGl['section_description'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-lg-3">
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


            <div class="row">
                <div class="input-group col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg" name="add_student">
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

        return true;
    }

    function lettersOnly(evt) {
       evt = (evt) ? evt : event;
       var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
          ((evt.which) ? evt.which : 0));
       if (charCode > 32 && (charCode < 65 || charCode > 90) &&
          (charCode < 97 || charCode > 122)) {
          swal("Enter letters only.");
          return false;
       }
       return true;
     }


</script>
