<?php

error_reporting(E_WARNING|E_NOTICE);
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);

  include("../Admin/app/db_connection.php");
  $result = mysqli_query($con,"SELECT * FROM books");
$rows = mysqli_num_rows($result);
echo "There are " . $rows . " rows in my table.";

?>