<?php
require('./db.php');
require('./functions.php');
require_once('../plugins/dompdf/autoload.inc.php');
//echo  $_SERVER['PHP_SELF'];

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
                padding: 10px;
                text-align: left;
            }

            p {
                font-size: 8px;
            }

            th {
                font-size: 16px;
                padding: 15px;
                border: 1px solid black;
                text-align: left;
            }

            tr:nth-child(even) {background-color: #f2f2f2}

        </style>
    </head>

    <center>
    <img src="../assets/img/logo1.png" alt="Logo" style="width:80px; height: auto"><br>
    <h3 style="font: arial">Holy Trinity School</h3>
    <h3 style="font: arial">Center of Catholic Education Inc.</h3>
    </center>
    <body style="font-size: 10px; ">
        <h2>Class Record Report</h2>
        <h3>Academic Year <?= displayAcadYear($_GET['ay']) ?></h3>
         <div style="margin: 10px 96px 96px 96px">
             <table>
                <?php
                $querySec = "SELECT * FROM sections WHERE archive_status = 0";
                $resultSec = mysqli_query($connection, $querySec);
                while($rowSec = mysqli_fetch_array($resultSec)):
                    ?>
                    <tr class="border">
                        <th colspan=2>
                            <?= displaySectionDesc($rowSec[0]) ?>
                        </th>
                    </tr>
                    
                    
                    
                    
                    <?php 
                    $queryStuds = "SELECT * FROM student_section a LEFT JOIN students b ON a.student_id=b.student_id WHERE a.archive_status = 0 AND b.archive_status = 0 AND section_id = {$rowSec[0]} AND schoolyear_id = {$_GET['ay']} ORDER BY b.last_name";
                    $resultStuds = mysqli_query($connection, $queryStuds);
                            
                    while($rowStuds = mysqli_fetch_array($resultStuds)):
                    ?>
                    <tr>
                        <td><?= displayStudentName($rowStuds[0]) ?></td>
                    </tr>
                    <?php endwhile //students ?>
                    
                    
                    
                     
                <?php endwhile //sections ?>
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