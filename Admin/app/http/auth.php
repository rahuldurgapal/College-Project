<?php

$username = $_POST['username'];

$password = $_POST['password'];

    if($username == "isthisarjun"){
        if($password == "arjun"){
            echo "Connected";
        }
        else{ 
            $warn = "Your password is invalid!";
            header("Location: ../../Login?warn=$warn");
        }
    }
    else{ 
        $warn = "Your @username is invalid!";
        header("Location: ../../Login?warn=$warn");
    }
?>