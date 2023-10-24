<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
        <link rel="stylesheet" href="css/notes.css">
        <link rel="stylesheet" href="../style.css">
</head>

<body>
    <section class="header">
        <nav>
            <a href="index.html"><img src="../icons/new-explorer.png" alt="#"></a>
            <div class="nav-links" id="navlinks">
                <i class="fa-solid fa-xmark" onclick="hidemenu()"></i>
                <ul>
                    <li><a href="index.html" class="active">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="courses.html">Courses</a></li>
                    <li><a href="notification.html">Notifications</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>

            </div>
            <i class="fa-solid fa-bars" onclick="showmenu()"></i>
        </nav>
        <form action="" method="post" class="searchabox">
                <input type="text" name="data" placeholder="Search Your Notes">
                <button type="submit">search</button>
            </form>

        <div class="container d-flex justify-content-between flex-wrap">
      <?php  
      error_reporting(E_WARNING|E_NOTICE);
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);
        include("../../Admin/app/db_connection.php");
        $sql = "";
        if(isset($_POST['data'])){
            $data = $_POST['data'];
            $sql = "SELECT * FROM notes WHERE notes_topic LIKE '%$data%' OR notes_author LIKE '%$data%' OR notes_subject LIKE '%$data%'";
        }
        else $sql = "Select * from notes";
               $q = mysqli_query($con,$sql);
               while($row=mysqli_fetch_assoc($q)){
      ?>
    
        <div class="card ">
                <h3><?= $row['notes_topic']?></h3>
                <hr>
                <div class="box">
                    <p><span>Subject Name :</span> <?=$row['notes_author']?></p>
                    <p><span>Author Name :</span> <?=$row['notes_subject']?></p>
                    <button class="btn btn-primary">View</button>
                </div>
            </div>

            <?php  }  ?>
        </div>
        
        <script src="js/notes.js"></script>
</body>

</html>

<script>
    var navlinks = document.getElementById("navlinks");
    function showmenu() {
        navlinks.style.right = "0";
    }
    function hidemenu() {
        navlinks.style.right = "-200px";
    }

    window.addEventListener("load", function () {
        loader.style.display = "none";
    })
</script>