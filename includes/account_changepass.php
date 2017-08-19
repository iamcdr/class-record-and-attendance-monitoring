<?php
if(isset($_SESSION['ALERT']['CHANGEPASS_SUCCESS'])){
    echo '<div class="alert alert-success">'.$_SESSION['ALERT']['CHANGEPASS_SUCCESS']. '</div>';
}
if(isset($_SESSION['ALERT']['OLDMISMATCH'])){
    echo '<div class="alert alert-danger">'.$_SESSION['ALERT']['OLDMISMATCH']. '</div>';
}
if(isset($_SESSION['ALERT']['MISMATCH'])){
    echo '<div class="alert alert-danger">'.$_SESSION['ALERT']['MISMATCH']. '</div>';
}
?>
    <script src="./plugins/pwstrength/dist/pwstrength-bootstrap.min.js"></script>

    <div class="content">
        <form action="accounts.php?s=exec" method="post">
            <div class="row">
                <div class="form-group col-lg-12">
                    <div class="col-lg-offset-3 col-lg-6 col-lg-offset-3">
                        <h5>Old Password</h5>
                        <input type="password" name="oldpassword" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-12">
                    <div class="col-lg-6">
                        <h5>New Password</h5>
                        <input type="password" name="newpassword" class="form-control" required>
                    </div>
                    <div class="col-lg-6">
                        <h5>Repeat New Password</h5>
                        <input type="password" name="renewpassword" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <input type="submit" name="submit_cpass" class="btn btn-primary btn-lg">
                </div>
            </div>
        </form>
    </div>

    <script>
        $('input[name="newpassword"]').keypress(commonHandler);
        $('input[name="oldpassword"]').keypress(commonHandler);
        $('input[name="renewpassword"]').keypress(commonHandler);

        function commonHandler(e) {
            //validation for password client-side

            //no whitespace
            if (e.which === 32)
                return false;
            
        }
        
        
        $('input[name="newpassword"]').pwstrength({
                ui: {
                    showVerdictsInsideProgressBar: true
                }
            });

    </script>
