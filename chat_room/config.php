<?php
ini_set("display_errors","on");
if(!isset($dbh)){
 session_start();
 date_default_timezone_set("UTC"); // Set Time Zone
 $host = "localhost"; // Hostname
 $port = "3306"; // MySQL Port : Default : 3306
 $user = "id13689244_root1"; // Username Here
 $pass = "Ayush@23112000"; //Password Here
 $db   = "id13689244_chat_room"; // Database Name
 $dbh  = new PDO('mysql:dbname='.$db.';host='.$host.';port='.$port,$user,$pass);
 
 /*Change The Credentials to connect to database.*/
 include("user_online.php");
}
?>
