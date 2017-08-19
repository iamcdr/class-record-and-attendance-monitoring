<?php
date_default_timezone_set("Asia/Manila");
include("../includes/db.php");
session_start();
include("../includes/functions.php");

backup_tables('localhost','root','','holytrinitycrams_db');




/* backup the db OR just a table */
function backup_tables($host,$user,$pass,$name,$tables = '*')
{

    $link = mysqli_connect($host,$user,$pass, $name);
    mysqli_select_db($link, $name);

    //get all of the tables
    if($tables == '*')
    {
        $tables = array();
        $result = mysqli_query($link, 'SHOW TABLES');
        while($row = mysqli_fetch_row($result))
        {
            $tables[] = $row[0];
        }
    }
    else
    {
        $tables = is_array($tables) ? $tables : explode(',',$tables);
    }

    $return = '';
    //cycle through

    $result = mysqli_query($link, 'SELECT * FROM useraccount');
    $num_fields = mysqli_num_fields($result);
    $table = 'useraccount';
    $return .= 'DROP TABLE IF EXISTS '.$table.';';
    $row2 = mysqli_fetch_row(mysqli_query($link, 'SHOW CREATE TABLE '.$table));
    $return.= "\n\n".$row2[1].";\n\n";

    for ($i = 0; $i < $num_fields; $i++)
    {
        while($row = mysqli_fetch_row($result))
        {
            $return.= 'INSERT INTO '.$table.' VALUES(';
            for($j=0; $j<$num_fields; $j++)
            {
                $row[$j] = addslashes($row[$j]);
                $row[$j] = str_replace("\n","\\n",$row[$j]);
                if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
                if ($j<($num_fields-1)) { $return.= ','; }
            }
            $return.= ");\n";
        }
    }

    $return.="\n\n\n";

    foreach($tables as $table)
    {
        if($table != 'useraccount')
        {
            $result = mysqli_query($link, 'SELECT * FROM '.$table);
            $num_fields = mysqli_num_fields($result);

            $return .= 'DROP TABLE IF EXISTS '.$table.';';
            $row2 = mysqli_fetch_row(mysqli_query($link, 'SHOW CREATE TABLE '.$table));
            $return.= "\n\n".$row2[1].";\n\n";

            for ($i = 0; $i < $num_fields; $i++)
            {
                while($row = mysqli_fetch_row($result))
                {
                    $return.= 'INSERT INTO '.$table.' VALUES(';
                    for($j=0; $j<$num_fields; $j++)
                    {
                        $row[$j] = addslashes($row[$j]);
                        $row[$j] = str_replace("\n","\\n",$row[$j]);
                        if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
                        if ($j<($num_fields-1)) { $return.= ','; }
                    }
                    $return.= ");\n";
                }
            }

            $return.="\n\n\n";
        }
    }


    $filename = 'holytrinitycrams_db'.date('Ymd_His').'.sql';


    //audit log
    $type = "Backed up the database";
    $remarks = "Filename: $filename";
    insertAuditLogData($type, $remarks);

    //save file
    $handle = fopen($filename,'w+');
    fwrite($handle,$return);
    fclose($handle);

    $file_url = 'http://www.myremoteserver.com/file.exe';
    header('Content-Type: application/octet-stream');
    header("Content-Transfer-Encoding: Binary");
    header("Content-disposition: attachment; filename=\"" . $filename . "\"");
    readfile($filename); // do the double-download-dance (dirty but worky)
}

?>
