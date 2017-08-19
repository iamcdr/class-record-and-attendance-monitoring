
    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#"><?= $activePage ?> </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!--<li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
                                <p>Stats</p>
                            </a>
                        </li>-->
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-user"></i>
                                    <p><?php if(isset($_SESSION['hts_user_userprivilege'])) echo $_SESSION['hts_user_firstname'] . " " . $_SESSION['hts_user_lastname'] ?></p>
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                               <li><a href="accounts.php?s=chpas">Change Password</a></li>
                                <li><a href="login.php?s=exec&logout">Log Out</a></li>
                              </ul>
                        </li>
                        <!--<li>
                            <a href="#">
                                <i class="ti-settings"></i>
                                <p>Settings</p>
                            </a>
                        </li>-->
                    </ul>

                </div>
            </div>
        </nav>

