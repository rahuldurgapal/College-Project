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
    <link rel="stylesheet" href="../CSS/home.css">
    <title>Admin Panel</title>
</head>

<body>
    <?php
        include("header.php");
    ?>
    <div class="fixed">
        <div class="sidebar">
            <a class="active" href="home.php">Home</a>
            <a href="book.php">Books</a>
            <a href="notes.php">Notes</a>
        </div>
    </div>
    <div class="content" style="display: flex;
                                flex-wrap: wrap;
                                gap: 50px;
                                justify-content: center;">
    <div class="box" style="background-color: rgb(239, 15, 255);">
            <div class="title">
                <h1>Students Info</h1>
            </div>
            <hr>
            <div class="info">
                <img src="../image/students.jpeg" alt="">
                <h1>00</h1>
            </div>
            <button class="btn">
                View Students > 
            </button>
        </div>

        <div class="box" style="background-color: rgb(11, 197, 11)">
            <div class="title">
                <h1>Teachers Info</h1>
            </div>
            <hr>
            <div class="info">
                <img src="../image/teacher.jpg" alt="">
                <h1>00</h1>
            </div>
            <button class="btn">
                View Teachers > 
            </button>
        </div>

        <div class="box" style="background-color: rgb(34, 1, 219)">
            <div class="title">
                <h1>Books Info</h1>
            </div>
            <hr>
            <div class="info">
                <i class="fa fa-book" style="font-size: 100px; color: rgb(255, 238, 0)"></i>
                <h1>00</h1>
            </div>
            <button class="btn">
                View Books > 
            </button>
        </div>

        <div class="box" style="background-color: rgb(219, 1, 81)">
            <div class="title">
                <h1>Notes Info</h1>
            </div>
            <hr>
            <div class="info">
                <i class="fa fa-file" style="font-size: 100px; color: rgb(255, 207, 207);"></i>
                <h1>00</h1>
            </div>
            <button class="btn">
                View Notes > 
            </button>
        </div>

        <div class="box" style="background-color: rgb(11, 96, 255)">
            <div class="title">
                <h1>No. of views</h1>
            </div>
            <hr>
            <div class="info">
                <i class="fa fa-eye" style="font-size: 100px;"></i>
                <h1>00</h1>
            </div>
            
        </div>

        <div class="box" style="background-color: rgb(3, 198, 198)">
            <div class="title">
                <h1>No. of Downloads</h1>
            </div>
            <hr>
            <div class="info">
                <i class="fa fa-download" style="font-size: 100px; color: rgb(255, 0, 0);"></i>
                <h1>00</h1>
            </div>
        </div>
    </div>
</body>

</html>