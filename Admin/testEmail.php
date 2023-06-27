<?php
    if(isset($_POST['mail'])){
        $email = $_POST['mail'];
        include "../Admin/app/helpers/EmailValid.php";
        if (emailExists($email)) {
            echo "The email '{$email}' exists.";
        } else {
            echo "The email '{$email}' does not exist or could not be verified.";
        }
    }
    else{


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container1">
        <h1>Email Validaor</h1>
        <hr>
        <div class="alert alert-success" style="border-radius: 20px;" role="alert">
            This mail is exist
          </div>
          <div class="alert alert-danger" style="border-radius: 20px;" role="alert">
            This mail is not exist
          </div>
        <form action="" method="post">
            <div class="inp">
                <input type="email" name="mail" id="" placeholder="Enter you mail" required>
            </div>
            <div class="btn1">
                <button type="submit">CHECK</button>
            </div>
        </form>
    </div>
</body>
</html>
<style>
    body{
        background-color: rgb(17, 16, 16);
        color: white;
    }
    h1{
        color: cyan;
    }
    .container1{
        margin-top: 10vh;
        margin-right: auto;
        margin-left: auto;
        background-color: gray;
        padding:50px;
        max-width: 500px;
        border-radius: 20px;
        text-align: center;
    }
    .inp{
        padding: 10px;
        /* width: 80%; */
        text-align: center;
    }
    .inp input{
        border-radius: 15px;
        border: none;
        padding: 5px;
        font-style: bold;
        font-family: 'Courier New';
        font-size: larger;
        width: 100%;
    }
    .btn1{
        padding: 10px;
    }
    .btn1 button{
        border-radius: 20px;
        border: 2px solid rgb(255, 0, 0);
        background-color: gray;
        padding: 10px;
        color: white;
    }
    .btn1 button:hover{
        background-color: red;
    }
</style>
<?php
    }
?>