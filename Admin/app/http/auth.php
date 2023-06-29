<?php

include ("db_connection.php");

$username = $_POST['username'];

$password = $_POST['password'];


    if(isset($_POST['login']))
    {
        $sql1 = "SELECT * FROM `admin` WHERE `admin_username` = '$username' or `admin_email` = '$username'";
        $q1=mysqli_query($con,$sql1);
         
        if(mysqli_num_rows($q1)>=1)
         {
            $sql2 = "SELECT * FROM `admin` WHERE `admin_password` = '$password'";
            $q2=mysqli_query($con,$sql2);
            if(mysqli_num_rows($q2)>=1){
             echo "<center>  <h1> Welcome to Admin Panel </h1> </center>";
            }
             else{ 
                   $warn = "Your password is invalid!";
                   header("Location: ../../Login?warn=$warn");
                 }
         }
        else{ 
                $warn = "Your @username or @email is invalid!";
                header("Location: ../../Login?warn=$warn");
            }
         

    }
    else
     header("Location: ../../Login");
?>