<?php
error_reporting(E_WARNING|E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include("../../Admin/app/db_connection.php");
if(isset($_SESSION['done'])){

     $new_name = $_SESSION['user_name'];
     $new_email = $_SESSION['user_email'];
     $new_password = $_SESSION['user_pass'];

     $sql = "insert into students(student_name, student_email, student_password) values ('$new_name', '$new_email', '$new_password')";
    $query = mysqli_query($con,$sql);
    if($query){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
         <br><br>
         <h1>Your Registration is successfull</h1>
         <a href="../login/">Back to Login</a>
    </center>
</body>
</html>
<?php
session_unset();
session_destroy();
    }
    else 
     echo "something wrong in the query";
}
else
 header("location: index.php");

?>