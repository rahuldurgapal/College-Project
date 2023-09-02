<?php
 include("../../db_connection.php");
 
 if(isset($_GET['id']))
 {
    $id=$_GET['id'];
    $sql = "delete from books where book_id = $id";
    $q= mysqli_query($con,$sql);
    if($q)
     header("location: ../../../Panel/book.php");
    else
     echo "operation failed";
 }
 else
  header("location: ../../../Panel/book.php");



?>