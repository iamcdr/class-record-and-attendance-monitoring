<?php
if(isset($_SESSION['ALERT']['SUCCESS_ARCHIVE'])){
    echo '<div class="alert alert-success">'.$_SESSION['ALERT']['SUCCESS_ARCHIVE']. '</div>';
}
if(isset($_SESSION['ALERT']['ADD_ACCOUNT_SUCCESS'])){
    echo '<div class="alert alert-success">'.$_SESSION['ALERT']['ADD_ACCOUNT_SUCCESS']. '</div>';
}
if(isset($_SESSION['ALERT']['EDIT_ACCOUNT_SUCCESS'])){
    echo '<div class="alert alert-success">'.$_SESSION['ALERT']['EDIT_ACCOUNT_SUCCESS']. '</div>';
}
?>
        <div class="row">
            <div class="col-lg-12">
               <a href="accounts.php?s=add" class="btn btn-primary btn-lg"><i class="fa fa-plus fa-fw"></i> Add Account</a>
                <div class="panel panel-body">
                    <table class="table table-bordered" id="content">
                        <thead>
                            <tr>
                                <th>Last Name</th>
                                <th>First Name</th>
                                <th>Email Address</th>
                                <th>Account Type</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        $queryAccounts = "SELECT * FROM useraccount AS a LEFT JOIN user_profile AS b ON a.user_id=b.user_id WHERE a.archive_status = 0  ORDER BY last_name";
                        $resultAccounts = mysqli_query($connection, $queryAccounts) or die(mysqli_error($connection));

                        while($rowAccounts = mysqli_fetch_array($resultAccounts)){
                        ?>
                                <tr>
                                    <td>
                                        <?= $rowAccounts['last_name'] ?>
                                    </td>
                                    <td>
                                        <?= $rowAccounts['first_name'] ?>
                                    </td>
                                    <td>
                                        <?= $rowAccounts['email'] ?>
                                    </td>
                                    <td>
                                        <?= displayAccountType($rowAccounts['user_privilege']) ?>
                                    </td>
                                    <td>

                                        <div class="btn-group">
                                            <button type="button" data-toggle="dropdown" class="btn btn-success dropdown-toggle">Action &nbsp;
                                                <i class="fa fa-angle-down"></i></button>
                                            <ul role="menu" class="dropdown-menu">
                                                <li><a href="accounts.php?s=view&uid=<?= $rowAccounts['user_id'] ?>">View Information</a></li>
                                                <li><a href="accounts.php?s=edit&uid=<?= $rowAccounts['user_id'] ?>">Edit Information</a></li>
                                                <li><a href="#" id="resetPass<?= $rowAccounts['user_id'] ?>">Reset Password</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#" id="archive_account<?= $rowAccounts['user_id'] ?>">Move to Archive</a></li>
                                            </ul>
                                        </div>

                                    </td>
                                </tr>
                                        <?php include("includes/modal_resetpassword.php") ?>
                                        <?php include("includes/modal_archiveaccount.php") ?>
                                <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


