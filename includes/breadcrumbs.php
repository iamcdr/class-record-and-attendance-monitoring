<?php
if(isset($_GET['s']))
    $activeCaseS = $_GET['s'];
?>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title">
                <?= ucfirst($activePage) ?>
            </div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;
                <a href="<?= basename ($_SERVER['PHP_SELF']); ?>">
                    <?= ucfirst($activePage) ?>
                </a>
            </li>
            <?php if(isset($activeCaseS)) echo '&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;'; ?>
        </ol>
        <div class="clearfix">
        </div>

    </div>