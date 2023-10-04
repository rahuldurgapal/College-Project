<?php
// error_reporting(E_ALL);
// ini_set('display_startup_errors', 1);

 $host = "localhost";
 $username = "root";
 $password = "";
 $database = "explorer_404";

 $con = mysqli_connect($host,$username,$password,$database);
 
 if(!$con)
  die("Connection Failed");
?>