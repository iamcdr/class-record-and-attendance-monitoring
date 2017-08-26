<?php
$query = "SELECT * FROM useraccount a LEFT JOIN user_profile b ON a.user_id=b.user_id WHERE a.user_id = {$_GET['tid']}";
$result = mysqli_query($connection, $query);

$row = mysqli_fetch_array($result);
?>
<div class="content">
    <div class="row">
        <form action="accounts.php?s=exec" method="post">
            <div class="row">
                <div class="form-group col-lg-12">
                    <div class="col-lg-4">
                        <h5>Last Name</h5>
                        <h5><b><?= $row['last_name'] ?></b></h5>
                    </div>
                    <div class="col-lg-4">
                        <h5>First Name</h5>
                        <h5><b><?= $row['first_name'] ?></b></h5>
                    </div>
                    <div class="col-lg-4">
                        <h5>Middle Name</h5>
                        <h5><b><?= $row['middle_name'] ?></b></h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-12">
                    <div class="col-lg-4">
                        <h5>Employee ID Number</h5>
                        <h5><b><?= $row['emp_num'] ?></b></h5>
                    </div>
                    <div class="col-lg-8">
                        <h5>Address</h5>
                        <h5><b><?= $row['address'] ?></b></h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-12">

                    <div class="col-lg-4">
                        <h5>Birthdate</h5>
                        <h5><b><?= date("F d Y", strtotime($row['birthdate'])) ?></b></h5>
                    </div>
                    <div class="col-lg-4">
                        <h5>Gender</h5>
                        <h5><b><?= $row['gender'] ?></b></h5>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-12">
                    <div class="col-lg-6">
                        <h5>Email Address</h5>
                        <h5><b><?= $row['email'] ?></b></h5>
                    </div>
                    <div class="col-lg-6">
                        <h5>Contact No</h5>
                        <h5><b><?= $row['contact_no'] ?></b></h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-12">
                    <div class="col-lg-offset-3 col-lg-6 col-lg-offset-3">
                        <h5>Specialization</h5>
                        <h5><b><?= $row['specialization'] ?></b></h5>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
