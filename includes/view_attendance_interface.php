<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <input type="text" name="barcode" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12" id="showStatusHere">
            <?php
            if(isset($_POST['barcode_shoot'])):
                $query = "SELECT * FROM students AS a LEFT JOIN (SELECT * FROM student_section ORDER BY student_level_id DESC) b ON a.student_id = b.student_id WHERE a.student_barcode = '{$_POST['barcode']}' AND a.archive_status=0";
                $result = mysqli_query($connection, $query);

                $row = mysqli_fetch_array($result);

                if(mysqli_num_rows($result)>0):
                    //message
                    $contactno = $row['contact_no'];
                    $date_attended = date("Y-m-d");
                    $time_in = date("H:i:s");


                    //query to attendance log
                    $i=0;
                    if($i==0){
                        mysqli_query($connection, "INSERT INTO attendance_log(student_id, date_attended, time_in, sent) VALUES ({$row[0]}, '{$date_attended}', '{$time_in}', 1 )");

                        $message = "Your child is already at school. $date_attended $time_in ";
                        itexmo($contactno, $message);
                        $i=1;
                    }

                ?>

                <div class="row" style="margin-top: 20px">
                   <div class="row" style="margin-bottom: 20px">
                       <div class="col-lg-offset-4 col-lg-4">
                            <img src="./images/<?= $row['image_1'] ?>" alt="<?= $row['image_1'] ?>" class="img-responsive" style="width: 200px; ">
                       </div>
                   </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <label>Full Name</label>
                        </div>
                        <div class="col-lg-8">
                            <?= $row['last_name'] . " " . $row['first_name']  ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <label>ID No.</label>
                        </div>
                        <div class="col-lg-8">
                            <?= $row['student_idno'] ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4"><label>Birthdate</label></div>
                        <div class="col-lg-8">
                            <?= $row['birthdate'] ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4"><label>Section</label></div>
                        <div class="col-lg-8">
                            <?= displaySectionDesc($row['section_id']) ?>
                        </div>
                    </div>
                </div>
                <?php else: //else if count ==0 ?>
                <div class="row" style="margin-top: 20px">
                    <div class="row">
                        <div class="col-lg-12">
                            <label>Either the student account has been archived or no such barcode exists.</label>
                        </div>
                    </div>
                </div>
                <?php

                endif; //endif count of results more than 0
            endif; //endif triggered
            ?>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        function focusInput(time) {
            setTimeout(function() {
                $('input[name="barcode"]').focus();
                $('input[name="barcode"]').val('');
            }, time);
        }
        focusInput(20);

        $('input[name="barcode"]').on('keypress', function(e) {
            if (e.which == 13) { //13 is for enter key
                e.stopImmediatePropagation();
                $.ajax({
                    url: "attendance.php",
                    type: "POST",
                    data: {
                        barcode: $('input[name="barcode"]').val(),
                        barcode_shoot: true
                    },
                    success: function(result) {
                        var getStatus = $('#showStatusHere', $(result));
                        $('#showStatusHere').html(getStatus);

                        focusInput(100);
                    }
                })
            }
        })

    })
</script>
