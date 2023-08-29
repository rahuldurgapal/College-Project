<?php
session_start();
 include("../db_connection.php");
 if(isset($_POST['login']))
 {
    $username = $_POST['username'];
    $password = $_POST['password'];

    //to prevent from mysqli inection
    
    $new_username = mysqli_real_escape_string($con, $username);
    $new_password = mysqli_real_escape_string($con, $password);

    
    //match tha data from database
   

    $sql = "select * from admin where admin_username = '$new_username' and admin_password = '$new_password'";
    $result = mysqli_query($con,$sql);
    $count = mysqli_num_rows($result);


    
    if($count>0)
    {
        $user=mysqli_fetch_assoc($result);
        $_SESSION['user']=$user['admin_id'];
        header("location: ../../Panel/home.php");
    }
    else{
        $warn = "Your @username or @email or password is invalid!";
        header("Location: ../../Login?warn=$warn");
    }
 } 
 else{
    header("Location: ../../Login");
 }


?>