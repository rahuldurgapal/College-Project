<?php
if(isset($_GET['id']))
{

  include("../app/db_connection.php");
  error_reporting(E_WARNING|E_NOTICE);
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Admin Panel</title>
</head>

<body>
    <?php
        include("header.php");
    ?>

    <div class="fixed">
        <div class="sidebar">
            <a href="index.php">Home</a>
            <a href="book.php">Books</a>
            <a class="active" href="notes.php" >Notes</a>
            <a href="course.php">Course</a>
        </div>
    </div>
    <div class="content">
        <?php
        
         $id = $_GET['id'];
         $sql = "select notes_link from notes where notes_id = '$id'";
         $query=mysqli_query($con,$sql);
         $res = mysqli_fetch_assoc($query);
         $notes=$res['notes_link'];
         ?>
          
        <div>
            <embed
                src="<?php  echo "../Panel/Books/$notes";  ?>"
                type="text/html" frameBorder="0" scrolling="auto" height = "1000px"
                width="100%">
            </embed>
        </div>

    </div>
</body>

</html>
<?php
}
else
 header("location: notes.php");
?>