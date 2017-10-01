<?php include("includes/header.php") ?>
    <?php
$activePage = "Manage Sections";
?>

        <?php include("includes/side-nav.php") ?>

            <?php include("includes/top-nav.php") ?>

                <div class="content">
                    <div class="container-fluid">
                        <div class="card">

                            <div class="header">
                                <?php
    if(isset($_GET['s'])&&$_GET['s']=="add")
        echo '<h4 class="page-header"><a href="sections.php">Sections</a> -> Add New</h4>';
    elseif(isset($_GET['s'])&&$_GET['s']=="edit")
        echo '<h4 class="page-header"><a href="sections.php">Sections</a> -> Edit '. displaySectionDesc($_GET['sid']) .'</h4>';
    elseif(isset($_GET['s'])&&$_GET['s']=="students")
        echo '<h4 class="page-header"><a href="sections.php">Sections</a> -> View Students in '. displaySectionDesc($_GET['sid']) .'</h4>';
    else
        echo '<h4 class="page-header">Sections</h4>';
                ?>
                            </div>
                            <!-- /.col-lg-12 -->
                            <div class="content">

                                <?php
                if(isset($_GET['s'])) $source = $_GET['s']; else $source = '';

                   switch($source){

                       case 'add':
                           include "includes/add_section.php";
                           break;

                       case 'students':
                           include "includes/section_view_students.php";
                           break;

                       case 'exec':
                           include "includes/sections_exec.php";
                           break;

                       default:
                           include "includes/view_all_sections.php";
                           break;

                   }

               ?>
                                    <!-- /.row -->
                            </div>

                            <?php include("includes/footer.php") ?>
