<?php include("includes/header.php") ?>
<?php
$activePage = "Archives";
?>

    <?php include("includes/side-nav.php") ?>

    <?php include("includes/top-nav.php") ?>

    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="header">
                    <?php
            if(isset($_GET['s'])&&$_GET['s']=="accounts")
                echo '<h4 class="page-header"><a href="archives.php">Archives</a> -> Archived Accounts </h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="subjects")
                echo '<h4 class="page-header"><a href="archives.php">Archives</a> -> Archived Subjects </h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="glvl")
                echo '<h4 class="page-header"><a href="archives.php">Archives</a> -> Archived Grade Level </h4>';
            elseif(isset($_GET['s'])&&$_GET['s']=="sections")
                echo '<h4 class="page-header"><a href="archives.php">Archives</a> -> Archived Sections </h4>';
            else
                echo '<h4 class="page-header">Archives</h4>';
                        ?>
                </div>
                <!-- /.col-lg-12 -->
                <div class="content">
                    <?php
                if(isset($_GET['s'])) $source = $_GET['s']; else $source = '';

                   switch($source){

                       case 'accounts':
                           include "includes/archived_accounts.php";
                           break;

                       case 'subjects':
                           include "includes/archived_subjects.php";
                           break;

                       case 'glvl':
                           include "includes/archived_gradelevel.php";
                           break;

                       case 'sections':
                           include "includes/archived_sections.php";
                           break;

                       case 'teach_class':
                           include "includes/archived_teach_class.php";
                           break;

                       case 'exec':
                           include "includes/archive_exec.php";
                           break;

                       default:
                           include "includes/view_all_archives.php";
                           break;

                   }

               ?>
                        <!-- /.row -->
                </div>
            </div>
        </div>

        <?php include("includes/footer.php") ?>
