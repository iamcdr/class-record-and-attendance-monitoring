<?php
$queryAcc = "SELECT * FROM useraccount AS a INNER JOIN user_profile AS b ON a.user_id=b.user_id WHERE a.user_id = {$_GET['uid']}";
$resultAcc = mysqli_query($connection, $queryAcc);
$rowAcc = mysqli_fetch_array($resultAcc);
?>

    <div class="content">
        <div class="row">
            <form action="accounts.php?s=exec" method="post">
                <input type="hidden" name="user_id" value="<?= $_GET['uid'] ?>">
                <input type="hidden" name="profile_id" value="<?= $rowAcc['profile_id'] ?>">
                <?php if(($_SESSION['hts_user_userprivilege']==1||$_SESSION['hts_user_userprivilege']==2)&&$_SESSION['hts_user_id']==$_GET['uid']): ?>
                <div class="row">
                    <div class="form-group col-lg-12">
                        <div class="col-lg-4">
                            <h5>Last Name</h5>
                            <input type="text" class="form-control" name="last_name" value="<?= $rowAcc['last_name'] ?>" required>
                        </div>
                        <div class="col-lg-4">
                            <h5>First Name</h5>
                            <input type="text" class="form-control" name="first_name" value="<?= $rowAcc['first_name'] ?>" required>
                        </div>
                        <div class="col-lg-4">
                            <h5>Middle Name</h5>
                            <input type="text" class="form-control" name="middle_name" value="<?= $rowAcc['middle_name'] ?>" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-12">
                        <div class="col-lg-122">
                            <h5>Address</h5>
                            <textarea name="address" class="form-control" cols="30" rows="3" style="resize: none"><?= $rowAcc['address'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-12">
                        <div class="col-lg-4">
                            <h5>User Privilege</h5>
                            <select name="user_privilege" class="form-control">
                            <option value="">=-Please Select-=</option>
                            <option value="1" <?php if($rowAcc['user_privilege']==1) echo "selected" ?>>Administrator</option>
                            <option value="2" <?php if($rowAcc['user_privilege']==2) echo "selected" ?>>Teacher</option>
                        </select>
                        </div>
                        <div class="col-lg-4">
                            <h5>Employee ID Number</h5>
                            <input type="text" class="form-control" name="emp_num" value="<?= $rowAcc['emp_num'] ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-12">
                        <div class="col-lg-6">
                            <h5>Email Address</h5>
                            <input type="email" name="email" class="form-control" value="<?= $rowAcc['email'] ?>">
                        </div>
                        <div class="col-lg-6">
                            <h5>Contact No</h5>
                            <input type="text" name="contact_no" class="form-control" value="<?= $rowAcc['contact_no'] ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-12">
                        <div class="col-lg-offset-3 col-lg-6 col-lg-offset-3">
                            <h5>Specialization</h5>
                            <textarea name="specialization" cols="30" rows="10" class="form-control"><?= $rowAcc['specialization'] ?></textarea>
                        </div>
                    </div>
                </div>
                <?php elseif($_SESSION['hts_user_userprivilege']==1&&$_SESSION['hts_user_id']!=$_GET['uid']): ?>
                <div class="row">
                    <div class="form-group col-lg-12">
                        <div class="col-lg-4">
                            <h5>User Privilege</h5>
                            <select name="user_privilege" class="form-control">
                            <option value="">=-Please Select-=</option>
                            <option value="1" <?php if($rowAcc['user_privilege']==1) echo "selected" ?>>Administrator</option>
                            <option value="2" <?php if($rowAcc['user_privilege']==2) echo "selected" ?>>Teacher</option>
                        </select>
                        </div>
                        <div class="col-lg-4">
                            <h5>Employee ID Number</h5>
                            <input type="text" class="form-control" name="emp_num" value="<?= $rowAcc['emp_num'] ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-12">
                        <div class="col-lg-6">
                            <h5>Contact No</h5>
                            <input type="text" name="contact_no" class="form-control" value="<?= $rowAcc['contact_no'] ?>">
                        </div>
                    </div>
                </div>
                <?php endif ?>



                <div class="row">
                    <div class="input-group col-lg-12">
                        <input type="submit" class="btn btn-primary btn-lg" name="edit_account">
                    </div>
                </div>
            </form>
        </div>
    </div>
