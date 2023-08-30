
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
            <a class="active" href="book.php">Books</a>
            <a href="notes.php">Notes</a>
            <a href="#about">Syllabus</a>
            <!-- <a href="#about"></a> -->
        </div>
    </div>

    <div class="content">

        <div class="search-box">
            <form action="" method="get">
            </form>
            <form action="" method="get">
                <input type="text" name="book" style="border: 2px solid rgb(255, 51, 255); width: 50%;"
                    placeholder="Book name, Author name, Book Id">
                <button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom"
                title="Search Book">search</button>
            </form>
        </div>
        <div class="text-center
                    align-items-center
                    vh-75
                    flex-wrap">
            <table class="table table-bordered" style="backdrop-filter: blur(15px);">
                <thead style="background-color: rgb(82, 100, 243); color: white;">
                    <tr>
                        <th scope="col">Books Id</th>
                        <th scope="col">Book Name</th>
                        <th scope="col">Author Name</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <th scope="row"></th>
                        <form action="upload_book.php" method="post">
                            <td>
                                <div class="input">
                                    <input type="text" name="book_name" placeholder="Book name">
                                </div>
                            </td>
                            <td>
                                <div class="input">
                                    <input type="text" name="author_Name" placeholder="Author name">
                                </div>
                            </td>
                            <td>
                                <div class="input">
                                    <input type="text" name="subject_name" placeholder="Subject name">
                                </div>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-success" data-toggle="tooltip" data-placement="bottom"
                                title="Add Book"> <i class="fa fa-plus"></i> </button>
                            </td>
                        </form>
                    </tr>

                    <tr>
                        <th scope="row">1</th>
                        <td><a href="">Let Us C</a></td>
                        <td>Yashavant Kanetkar</td>
                        <td>C Programming</td>
                        <td>
                            <a href="" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom"
                            title="Delete Book"><i class="fa fa-trash"></i></a>
                            &nbsp
                            <a href="" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom"
                                title="View Book"><i class="fa fa-eye"></i></a>
                            &nbsp
                            <a href="" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom"
                            title="Update Book"><i class="fa fa-edit"></i></a>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">2</th>
                        <td><a href="">Let Us C++</a></td>
                        <td>Yashavant Kanetkar</td>
                        <td>C++ Programming</td>
                        <td>
                            <a href="" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom"
                            title="Delete Book"><i class="fa fa-trash"></i></a>
                            &nbsp
                            <a href="" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom"
                                title="View Book"><i class="fa fa-eye"></i></a>
                            &nbsp
                            <a href="" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom"
                            title="Update Book"><i class="fa fa-edit"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><a href="">Let Us C++</a></td>
                        <td>Yashavant Kanetkar</td>
                        <td>C++ Programming</td>
                        <td>
                            <a href="" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom"
                            title="Delete Book"><i class="fa fa-trash"></i></a>
                            &nbsp
                            <a href="" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom"
                                title="View Book"><i class="fa fa-eye"></i></a>
                            &nbsp
                            <a href="" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom"
                            title="Update Book"><i class="fa fa-edit"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><a href="">Let Us C++</a></td>
                        <td>Yashavant Kanetkar</td>
                        <td>C++ Programming</td>
                        <td>
                            <a href="" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom"
                            title="Delete Book"><i class="fa fa-trash"></i></a>
                            &nbsp
                            <a href="" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom"
                                title="View Book"><i class="fa fa-eye"></i></a>
                            &nbsp
                            <a href="" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom"
                            title="Update Book"><i class="fa fa-edit"></i></a>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>
</body>

</html>