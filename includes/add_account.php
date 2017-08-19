<div class="content">
    <div class="row">
        <form action="accounts.php?s=exec" method="post">
            <div class="row">
                <div class="form-group col-lg-12">
                    <div class="col-lg-4">
                        <h5>Last Name</h5>
                        <input type="text" class="form-control" name="last_name">
                    </div>
                    <div class="col-lg-4">
                        <h5>First Name</h5>
                        <input type="text" class="form-control" name="first_name">
                    </div>
                    <div class="col-lg-4">
                        <h5>Middle Name</h5>
                        <input type="text" class="form-control" name="middle_name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-12">
                    <div class="col-lg-4">
                        <h5>User Privilege</h5>
                        <select name="user_privilege" class="form-control">
                            <option value="">=-Please Select-=</option>
                            <option value="1">Administrator</option>
                            <option value="2">Teacher</option>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <h5>Employee ID Number</h5>
                        <input type="text" class="form-control" name="emp_num">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-12">
                    <div class="col-lg-4">
                        <h5>Address</h5>
                        <input type="text" name="address1" class="form-control"> 
                        <input type="text" name="address2" class="form-control"> 
                        <input type="text" name="address3" class="form-control"> 
                    </div>
                    <div class="col-lg-4">
                        <h5>Birthdate</h5>
                        <input type="date" name="birthdate" class="form-control">
                    </div>
                    <div class="col-lg-4">
                        <h5>Gender</h5>
                        <div class="radio">
                            <label for="Male"><input type="radio" class="iCheck-control" name="gender" value="Male">Male</label>
                        </div>
                        <div class="radio">
                            <label for="Female"><input type="radio" class="iCheck-control" name="gender" value="Female">Female</label>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-12">
                    <div class="col-lg-6">
                        <h5>Email Address</h5>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <h5>Contact No</h5>
                        <input type="text" name="contact_no" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-12">
                    <div class="col-lg-offset-3 col-lg-6 col-lg-offset-3">
                        <h5>Specialization</h5>
                        <textarea name="specialization" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="input-group col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg" name="add_account">
                </div>
            </div>
        </form>
    </div>
</div>