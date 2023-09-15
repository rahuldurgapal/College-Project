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
            <a href="notes.php">Notes</a>
            <a class="active" href="course.php">Couse</a>
        </div>
    </div>
    <div class="content">

        <div class="search-box">
            <form action="" method="get">
            </form>
            <form action="" method="get">
                <input type="text" name="book" placeholder="Course Name" style="width: 50%; border: solid 1px rgb(255, 0, 255);">
                <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="right"
                title="search">search</button>
            </form>
        </div>
        <div class="add-card card">
            <i class="fa fa-plus fa-5x"></i>
            <h5 class="card-title">Add Course</h5>
        </div>
        <div class="course-container container d-flex justify-content-center flex-wrap">

            <div class="course-card card">
                <h4>Master of Computer Application</h4>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary"><i class="fa fa-edit"> edit</i></a>
                    <a href="#" class="btn btn-danger"><i class="fa fa-trash"> delete</i></a>
                </div>
            </div>
            <div class="course-card card">
                <h4>Master of Computer Application</h4>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary"><i class="fa fa-edit"> edit</i></a>
                    <a href="#" class="btn btn-danger"><i class="fa fa-trash"> delete</i></a>
                </div>
            </div>
            <div class="course-card card">
                <h4>Master of Computer Application</h4>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary"><i class="fa fa-edit"> edit</i></a>
                    <a href="#" class="btn btn-danger"><i class="fa fa-trash"> delete</i></a>
                </div>
            </div>
            <div class="course-card card">
                <h4>Master of Computer Application</h4>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary"><i class="fa fa-edit"> edit</i></a>
                    <a href="#" class="btn btn-danger"><i class="fa fa-trash"> delete</i></a>
                </div>
            </div>
            <div class="course-card card">
                <h4>Master of Computer Application</h4>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary"><i class="fa fa-edit"> edit</i></a>
                    <a href="#" class="btn btn-danger"><i class="fa fa-trash"> delete</i></a>
                </div>
            </div>

        </div>
    </div>
</body>

</html>