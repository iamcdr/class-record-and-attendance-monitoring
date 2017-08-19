<?php
error_reporting(0);
//LOCALHOST CONNECTION
//Connection through CONSTANTS method
$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "holytrinitycrams_db";

foreach($db as $key => $value){

    define(strtoupper($key), $value);

}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(!$connection){
    $oldb['oldb_host'] = "localhost";
    $oldb['oldb_user'] = "id2330323_root";
    $oldb['oldb_pass'] = "patience";
    $oldb['oldb_name'] = "id2330323_holytrinitycrams_db";

    foreach($oldb as $keyol => $valueol){

        define(strtoupper($keyol), $valueol);

    }

    $connection = mysqli_connect(OLDB_HOST, OLDB_USER, OLDB_PASS, OLDB_NAME);
}

//ONLINE CONNECTION of db holytrinitycrams_db

/*
$oldb['oldb_host'] = "mysql.hostinger.ph";
$oldb['oldb_user'] = "u873089731_e518";
$oldb['oldb_pass'] = "ep0NrU6FAuF8";
$oldb['oldb_name'] = "u873089731_crams";

foreach($oldb as $keyol => $valueol){

    define(strtoupper($keyol), $valueol);

}

$connection = mysqli_connect(OLDB_HOST, OLDB_USER, OLDB_PASS, OLDB_NAME);
*/

