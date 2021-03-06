<?php
require('./db.php');
require('./functions.php');
require_once('../plugins/dompdf/autoload.inc.php');
//echo  $_SERVER['PHP_SELF'];
ini_set('max_execution_time', 9000);
session_start();
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$dompdf->set_option('defaultFont', 'Helvetica');
ob_start();

?>
    <html>

    <head>
        <style>
            table {
                width: 100%;
                border: 1px solid black;
            }


            td {
                font-size: 12px;
                padding: 5px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }

            p {
                font-size: 8px;
            }

            th {
                height: 50px;
                font-size: 10px;
                padding: 7px
            }

            tr:nth-child(even) {background-color: #f2f2f2}

        </style>
    </head>

    <center>
    <img src="../assets/img/logo1.png" alt="Logo" style="width:80px; height: auto"><br>
        <h3 style="font: arial">Holy Trinity School</h3>
        <h3 style="font: arial">Center of Catholic Education Inc.</h3>
        <h3 style="font: arial; font-size: 10px">Manibaug, Paralaya</h3>
        <h3 style="font: arial; font-size: 10px">Porac, Pampanga</h3>
    </center>
    <body style="font-size: 10px; ">
        <h2>Archive Report</h2>
         <div style="margin: 10px 96px 96px 96px">
             <table border=1>

                    <?php
                    for($i=1;$i<=12;$i++){
                        $year = $_GET['y'];
                        $samdate = "$year-$i-01";
                        $monthname = date("F", strtotime($samdate));
                        $monthnum = date("m", strtotime($samdate));
                        ?>
                    <tr>
                        <th colspan=3><h3><?= $monthname . " " . $year ?></h3></th>
                    </tr>
                    <tr>
                        <th>Audit Type</th>
                        <th>Remarks</th>
                        <th>Date Time</th>
                    </tr>
                    <?php

                    $queryAtt = "SELECT * FROM audit_trail WHERE YEAR(audit_datetime) = {$year} AND MONTH(audit_datetime) = {$monthnum} ORDER BY audit_datetime";
                    $resultAtt = mysqli_query($connection, $queryAtt) or die(mysqli_error($connection));
                    while($rowAtt = mysqli_fetch_array($resultAtt)):
                        ?>
                    <tr>
                        <td><?= $rowAtt['audit_type'] ?></td>
                        <td><?= $rowAtt['audit_remarks'] ?></td>
                        <td><?= $rowAtt['audit_datetime'] ?></td>
                    </tr>
                    <?php
                    endwhile;
                    ?>

                    <?php
                    }
                    ?>

                </table>

            <table>
                <tr>
                    <td style="text-align: right">
                        Prepared By:
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right">
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right">
                        <strong><?= displayName($_SESSION['hts_user_id']) ?></strong>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right">
                        Date:
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right">
                        <?= date("F d Y"); ?>
                    </td>
                </tr>
            </table>
         </div>
    </body>

    </html>
    <?php
$dompdf->loadHtml(ob_get_clean());
$dompdf->setPaper('letter', 'portrait');
$dompdf->render();
$dompdf->stream();
?>
