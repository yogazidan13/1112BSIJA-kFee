<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "kefe";
 
try{
    $DB_con = new PDO("mysql:host={$host};dbname={$db_name}",$user,$pass);
    $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo $e->getMessage();
}

$sql_login = mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($db_name,$sql_login) or die (mysql_error());

?>