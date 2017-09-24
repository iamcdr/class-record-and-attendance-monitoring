<?php
$activePageFilename = basename($_SERVER['PHP_SELF']);
?>


    <div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="primary">

            <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

            <div class="sidebar-wrapper">
                <div class="logo" style="position: fixed; left: 5px; z-index: 1; padding-bottom: 30px; background-color: #fff">
                    <img src="images/logo copy.png" style="margin:auto; display: block">
                    <a href="./" class="simple-text" style="color: #000">
                    Holy Trinity School
                </a>
                </div>
                <div class="logo" style="visibility:hidden">
                    <img src="images/logo copy.png" style="margin:auto; display: block">
                    <a href="./" class="simple-text">
                    Holy Trinity School
                </a>
                </div>
                <ul class="nav" style="z-index: 9999">
                    <li <?php if(isset($activePage)&&$activePage=='Dashboard' ) echo "class='active'" ?>>
                        <a href="./"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>

                    <?php if($_SESSION['hts_user_userprivilege']==1){ ?>

                    <li <?php if(isset($activePage)&&$activePage=='Attendance Monitoring' ) echo "class='active'" ?>>
                        <a href="attendance.php">
                            <i class="fa fa-calendar fa-fw"><div class="icon-bg bg-orange"></div></i> Attendance
                        </a>
                    </li>

                    <li <?php if(isset($activePage)&&strpos($activePage, "Manage")!==false) echo "class='active'" ?>>
                        <a data-toggle="collapse" href="#manage">
                            <i class="fa fa-gear fa-fw"></i>
                            <p>Manage <b class="caret"></b></p>
                        </a>
                        <div class="collapse" id="manage">
                            <ul class="nav">
                                <li <?php if(strpos($activePageFilename, "accounts.php")!==false) echo "class='active'" ?>>
                                    <a href="accounts.php"><i class="fa fa-align-left"></i>&nbsp; Accounts</a>
                                </li>
                                <li <?php if(strpos($activePageFilename, "subjects.php")!==false) echo "class='active'" ?>>
                                    <a href="subjects.php"><i class="fa fa-align-left"></i>&nbsp; Subjects</a>
                                </li>
                                <li <?php if(strpos($activePageFilename, "gradelevel.php")!==false) echo "class='active'" ?>>
                                    <a href="gradelevel.php"><i class="fa fa-align-left"></i>&nbsp; Grade Level</a>
                                </li>
                                <li <?php if(strpos($activePageFilename, "gradingperiod.php")!==false) echo "class='active'" ?>>
                                    <a href="gradingperiod.php"><i class="fa fa-align-left"></i>&nbsp; Grading Period</a>
                                </li>
                                <li <?php if(strpos($activePageFilename, "sections.php")!==false) echo "class='active'" ?>>
                                    <a href="sections.php"><i class="fa fa-align-left"></i>&nbsp; Sections</a>
                                </li>
                                <li <?php if(strpos($activePageFilename, "students.php")!==false) echo "class='active'" ?>>
                                    <a href="students.php"><i class="fa fa-align-left"></i>&nbsp; Students</a>
                                </li>
                                <li <?php if(strpos($activePageFilename, "teachers.php")!==false) echo "class='active'" ?>>
                                    <a href="teachers.php"><i class="fa fa-align-left"></i>&nbsp; Teachers</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li <?php if(isset($activePage)&&strpos($activePage, "Settings")!==false||strpos($activePage, "Archives")!==false) echo "class='active'" ?>>
                        <a data-toggle="collapse" href="#settings">
                            <i class="fa fa-gears fa-fw"></i>
                            <p>Settings <b class="caret"></b></p>
                        </a>
                        <div class="collapse" id="settings">
                            <ul class="nav">
                                <li <?php if(strpos($activePageFilename, "backupandrestore.php")!==false) echo "class='active'" ?>>
                                    <a href="backupandrestore.php"><i class="fa fa-align-left"></i>&nbsp; Backup and Restore</a>
                                </li>
                                <li <?php if(strpos($activePageFilename, "audittrail.php")!==false) echo "class='active'" ?>>
                                    <a href="audittrail.php"><i class="fa fa-align-left"></i>&nbsp; Audit Trail</a>
                                </li>
                                <li <?php if(strpos($activePageFilename, "archives.php")!==false) echo "class='active'" ?>>
                                    <a href="archives.php">
                                        <i class="fa fa-align-left"></i>&nbsp; Archives
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <?php } ?>

                    <?php if($_SESSION['hts_user_userprivilege']==2){ ?>

                    <li <?php if(isset($activePage)&&strpos($activePage, "View Classes")!==false) echo "class='active'" ?>>
                        <a href="./classes.php"><i class="fa fa-address-book fa-fw"></i> Classes</a>
                    </li>

                    <li <?php if(isset($activePage)&&strpos($activePage, "Advisory")!==false) echo "class='active'" ?>>
                        <a href="./advisory.php"><i class="fa fa-users fa-fw"></i> Advisory Classes</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
