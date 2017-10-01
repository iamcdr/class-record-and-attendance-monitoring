<?php include("includes/header.php") ?>
    <?php
$activePage = "Manage Accounts";
?>

        <?php include("includes/side-nav.php") ?>

            <?php include("includes/top-nav.php") ?>

                <div class="content">
                    <div class="container-fluid">
                        <div class="card">
                            <div class="header">
                                <?php
            if(isset($_GET['s'])&&$_GET['s']=="add")
                echo '<h4 class="page-header"><a href="accounts.php">Accounts</a> -> Add New</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="chpas")
                echo '<h4 class="page-header">Change Password</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="view")
                echo '<h4 class="page-header"><a href="accounts.php">Accounts</a> -> View Details '. displayName($_GET['uid']) .'</h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="edit")
                echo '<h4 class="page-header"><a href="accounts.php">Accounts</a> -> Change Information</h4>';
            else
                echo '<h4 class="page-header">Accounts</h4>';
                        ?>
                            </div>
                            <!-- /.col-lg-12 -->
                            <div class="content">
                                <?php
                if(isset($_GET['s'])) $source = $_GET['s']; else $source = '';

                   switch($source){

                       case 'add':
                           include "includes/add_account.php";
                           break;

                       case 'edit':
                           include "includes/edit_account.php";
                           break;

                       case 'chpas':
                           include "includes/account_changepass.php";
                           break;

                       case 'view':
                           include "includes/account_view_information.php";
                           break;

                       case 'exec':
                           include "includes/accounts_exec.php";
                           break;

                       default:
                           include "includes/view_all_accounts.php";
                           break;

                   }

               ?>

                                    <!-- /.row -->
                            </div>
                        </div>
                    </div>
                </div>

                <?php include("includes/footer.php") ?>
