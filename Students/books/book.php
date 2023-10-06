<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/book.css">

</head>
<body>
    
    <section class="header">
        <nav>
            <a href="/Students/index.html"><img src="../icons/new-explorer.png" alt="#"></a>
            <div class="nav-links" id="navlinks">
                <i class="fa-solid fa-xmark" onclick="hidemenu()"></i>
                <ul>
                    <li><a href="/Students/index.html" class="active">Home</a></li>
                    <li><a href="/Students/about.html">About</a></li>
                    <li><a href="/Students/courses.html">Courses</a></li>
                    <li><a href="/Students/notification.html">Notifications</a></li>
                    <li><a href="/Students/contact.html">Contact</a></li>
                </ul>

            </div>
            <i class="fa-solid fa fa-bars" onclick="showmenu()"></i>
        </nav>
        <div class="container d-flex justify-content-between flex-wrap">
      <?php  
      error_reporting(E_WARNING|E_NOTICE);
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);
        include("../../Admin/app/db_connection.php");
            
               $sql = "select * from books";
               $q = mysqli_query($con,$sql);
               while($res=mysqli_fetch_assoc($q)){
             
      
      ?>
        
            <div class="card ">
                <div class="pdf-preview" data-pdf-url="../../Admin/Panel/Books/<?php echo $res['book_pdf'];  ?>"></div>
                <div class="box">
                    <h4><?php echo $res['book_name'];    ?></h4>
                    <hr>
                    <h6><?php  echo $res['book_author_name'];  ?></h6>
                    <hr>

                    <button class="btn btn-primary"><i class="fa fa-download" data-toggle="tooltip"
                            data-placement="bottom" title="Download Book"></i></button>
                    &nbsp
                    <button class="btn btn-primary"><i class="fa fa-eye" data-toggle="tooltip" data-placement="bottom"
                            title="View Book"></i></button>
                </div>
            </div>

            <?php  }  ?>
            <!-- <div class="card ">
                <div class="pdf-preview" data-pdf-url="../../Explorer3.O/Pdf files/Automata (2).pdf"></div>
                <div class="box">
                    <h4>Book name</h4>
                    <hr>
                    <h6>Author Name</h6>
                    <hr>

                    <button class="btn btn-primary"><i class="fa fa-download" data-toggle="tooltip"
                            data-placement="bottom" title="Download Book"></i></button>
                    &nbsp
                    <button class="btn btn-primary"><i class="fa fa-eye" data-toggle="tooltip" data-placement="bottom"
                            title="View Book"></i></button>
                </div>
            </div>
            <div class="card ">
                <div class="pdf-preview" data-pdf-url="../../Explorer3.O/Pdf files/Automata (2).pdf"></div>
                <div class="box">
                    <h4>Book name</h4>
                    <hr>
                    <h6>Author Name</h6>
                    <hr>

                    <button class="btn btn-primary"><i class="fa fa-download" data-toggle="tooltip"
                            data-placement="bottom" title="Download Book"></i></button>
                    &nbsp
                    <button class="btn btn-primary"><i class="fa fa-eye" data-toggle="tooltip" data-placement="bottom"
                            title="View Book"></i></button>
                </div>
            </div>
            <div class="card ">
                <div class="pdf-preview" data-pdf-url="../../Explorer3.O/Pdf files/Automata (2).pdf"></div>
                <div class="box">
                    <h4>Book name</h4>
                    <hr>
                    <h6>Author Name</h6>
                    <hr>

                    <button class="btn btn-primary"><i class="fa fa-download" data-toggle="tooltip"
                            data-placement="bottom" title="Download Book"></i></button>
                    &nbsp
                    <button class="btn btn-primary"><i class="fa fa-eye" data-toggle="tooltip" data-placement="bottom"
                            title="View Book"></i></button>
                </div>
            </div>
            <div class="card ">
                <div class="pdf-preview" data-pdf-url="../../Explorer3.O/Pdf files/Automata (2).pdf"></div>
                <div class="box">
                    <h4>Book name</h4>
                    <hr>
                    <h6>Author Name</h6>
                    <hr>

                    <button class="btn btn-primary"><i class="fa fa-download" data-toggle="tooltip"
                            data-placement="bottom" title="Download Book"></i></button>
                    &nbsp
                    <button class="btn btn-primary"><i class="fa fa-eye" data-toggle="tooltip" data-placement="bottom"
                            title="View Book"></i></button>
                </div>
            </div>
            <div class="card ">
                <div class="pdf-preview" data-pdf-url="../../Explorer3.O/Pdf files/Automata (2).pdf"></div>
                <div class="box">
                    <h4>Book name</h4>
                    <hr>
                    <h6>Author Name</h6>
                    <hr>

                    <button class="btn btn-primary"><i class="fa fa-download" data-toggle="tooltip"
                            data-placement="bottom" title="Download Book"></i></button>
                    &nbsp
                    <button class="btn btn-primary"><i class="fa fa-eye" data-toggle="tooltip" data-placement="bottom"
                            title="View Book"></i></button>
                </div>
            </div>
            <div class="card ">
                <div class="pdf-preview" data-pdf-url="../../Explorer3.O/Pdf files/Automata (2).pdf"></div>
                <div class="box">
                    <h4>Book name</h4>
                    <hr>
                    <h6>Author Name</h6>
                    <hr>

                    <button class="btn btn-primary"><i class="fa fa-download" data-toggle="tooltip"
                            data-placement="bottom" title="Download Book"></i></button>
                    &nbsp
                    <button class="btn btn-primary"><i class="fa fa-eye" data-toggle="tooltip" data-placement="bottom"
                            title="View Book"></i></button>
                </div>
            </div>
            <div class="card ">
                <div class="pdf-preview" data-pdf-url="../../Explorer3.O/Pdf files/Automata (2).pdf"></div>
                <div class="box">
                    <h4>Book name</h4>
                    <hr>
                    <h6>Author Name</h6>
                    <hr>

                    <button class="btn btn-primary"><i class="fa fa-download" data-toggle="tooltip"
                            data-placement="bottom" title="Download Book"></i></button>
                    &nbsp
                    <button class="btn btn-primary"><i class="fa fa-eye" data-toggle="tooltip" data-placement="bottom"
                            title="View Book"></i></button>
                </div>
            </div>
            <div class="card ">
                <div class="pdf-preview" data-pdf-url="../../Explorer3.O/Pdf files/Automata (2).pdf"></div>
                <div class="box">
                    <h4>Book name</h4>
                    <hr>
                    <h6>Author Name</h6>
                    <hr>

                    <button class="btn btn-primary"><i class="fa fa-download" data-toggle="tooltip"
                            data-placement="bottom" title="Download Book"></i></button>
                    &nbsp
                    <button class="btn btn-primary"><i class="fa fa-eye" data-toggle="tooltip" data-placement="bottom"
                            title="View Book"></i></button>
                </div>
            </div>
            <div class="card ">
                <div class="pdf-preview" data-pdf-url="../../Explorer3.O/Pdf files/Automata (2).pdf"></div>
                <div class="box">
                    <h4>Book name</h4>
                    <hr>
                    <h6>Author Name</h6>
                    <hr>

                    <button class="btn btn-primary"><i class="fa fa-download" data-toggle="tooltip"
                            data-placement="bottom" title="Download Book"></i></button>
                    &nbsp
                    <button class="btn btn-primary"><i class="fa fa-eye" data-toggle="tooltip" data-placement="bottom"
                            title="View Book"></i></button>
                </div>
            </div>
            <div class="card ">
                <div class="pdf-preview" data-pdf-url="../../Explorer3.O/Pdf files/Automata (2).pdf"></div>
                <div class="box">
                    <h4>Book name</h4>
                    <hr>
                    <h6>Author Name</h6>
                    <hr>

                    <button class="btn btn-primary"><i class="fa fa-download" data-toggle="tooltip"
                            data-placement="bottom" title="Download Book"></i></button>
                    &nbsp
                    <button class="btn btn-primary"><i class="fa fa-eye" data-toggle="tooltip" data-placement="bottom"
                            title="View Book"></i></button>
                </div>
            </div>
            <div class="card ">
                <div class="pdf-preview" data-pdf-url="../../Explorer3.O/Pdf files/Automata (2).pdf"></div>
                <div class="box">
                    <h4>Book name</h4>
                    <hr>
                    <h6>Author Name</h6>
                    <hr>

                    <button class="btn btn-primary"><i class="fa fa-download" data-toggle="tooltip"
                            data-placement="bottom" title="Download Book"></i></button>
                    &nbsp
                    <button class="btn btn-primary"><i class="fa fa-eye" data-toggle="tooltip" data-placement="bottom"
                            title="View Book"></i></button>
                </div> 
            </div>  -->

        </div>
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
        <script src="js/books.js"></script>
</body>
</html>