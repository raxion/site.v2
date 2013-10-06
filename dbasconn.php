<?php
$username = "root";
$password = "";
$hostname = "localhost"; 

//connection to the database
$dbcon = mysql_connect($hostname, $username, $password) 
  or die("Could not connect to server.");
mysql_select_db("117987-recolosdb",$dbcon) 
		or die("Could not select 117987-recolosdb");
?>