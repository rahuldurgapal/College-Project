<?php
error_reporting(E_WARNING|E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

 if(isset($_SESSION['confirm_otp']))
 {
    if(isset($_POST['pass'])){
   include("../../Admin/app/db_connection.php");
   $email = $_SESSION['email'];
   $pass = $_POST['new_pass'];
   $conf_pass = $_POST['new_confirm_pass'];

   if($pass!=$conf_pass)
   {
        $warn = "the passwords are not match";
        header("Location: newpassword.php?warn=$warn");
   }
  
  $sql = "update students set student_password = '$pass' where student_email = '$email'";
  $q = mysqli_query($con,$sql);
  if($q)
  {
    unset($_SESSION['email']);
    unset($_SESSION['confirm']);
    $_SESSION['pass'] = $pass;
    header("location: passwordchange.php");
  }
  else
   echo "operation failed";

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate New Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/resetpass.css">
  
</head>
<body>
    
   <img src="img/bg-r.jpg" alt="" class="wave">       
    <div class="reset-container">
           <form class="reset-form" action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="POST">
               <img class="avatar" src="img/reset-password.png" />
               <?php
                    if(isset($_GET['warn'])){
                        echo '<div class="alert alert-danger" role="alert">'.
                                $_GET['warn'].
                             '</div>';
                    }
                    ?>
               <h3>Reset account password</h3>
               <div class="input-div one ">
                   <div class="i">
                       <i class="fa fa-lock"></i>
                   </div>
                   <div>
                       <h5>Password</h5>
                       <input class="input" type="password" name="new_pass" required/>
                   </div>
               </div>
               <div class="input-div two">
                   <div class="i">
                       <i class="fa fa-lock"></i>
                   </div>
                   <div>
                       <h5>Confirm Password</h5>
                       <input class="input" type="password" name="new_confirm_pass" required/>
               
                   </div>

               </div>
               <div>
                   <input type="submit" name="pass" class="btn" value="Reset password">
               </div>
               
           </form>
       
    </div>
  
    <script src="js/login.js"></script>
</body>
</html>

<?php
 }
  else
  echo "something wrong";
?>