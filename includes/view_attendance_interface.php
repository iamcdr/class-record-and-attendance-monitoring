<div class="container-fluid"><div class="row">
        <div class="col-lg-12">
            <input type="text" name="barcode" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12" id="showStatusHere">
            <?php
            if(isset($_POST['barcode_shoot'])):
                $query = "SELECT * FROM students WHERE student_barcode = '{$_POST['barcode']}'";
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

                        $message = "Date: $date_attended \n Time In: $time_in ";
                        itexmo($contactno, $message);
                        $i=1;
                    }

                ?>
                    <div class="col-lg-4">
                        <label>Full Name</label>
                    </div>
                    <div class="col-lg-8">
                        <?= $row['last_name'] . " " . $row['first_name']  ?>
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

        function focusInput(time){
            setTimeout(function() {
                $('input[name="barcode"]').focus();
                $('input[name="barcode"]').val('');
            }, time);
        }
        focusInput(20);

        $('input[name="barcode"]').on('keyup', function(e){
            $.ajax({
                url: "attendance.php",
                type: "POST",
                data: {
                    barcode: $('input[name="barcode"]').val(),
                    barcode_shoot: true
                },
                success: function(result){
                    var getStatus = $('#showStatusHere', $(result));
                    $('#showStatusHere').html(getStatus);

                    focusInput(1000);
                }
            })
        })
    })
</script>
