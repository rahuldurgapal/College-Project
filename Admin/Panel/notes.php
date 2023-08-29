<?php

 include("header.php");


?>
    <div class="content">

        <div class="search-box">
            <form action="" method="get">
            </form>
            <form action="" method="get">
                <input type="text" name="book" placeholder="Topic name, Author name">
                <button type="submit" class="btn btn-primary">search</button>
            </form>
        </div>
        <div class="text-center
                    align-items-center
                    vh-75
                    flex-wrap">
            <table class="table table-bordered">
                <thead style="background-color: rgb(82, 100, 243); color: white;">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Topic Name</th>
                        <th scope="col">Author Name</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"></th>
                        <form action="" method="post">
                            <td>
                                <div class="input">
                                    <input type="text" name="book_name" placeholder="Topic name">
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
                                <button type="submit" class="btn btn-success"> <i class="fa fa-plus"></i> </button>
                            </td>
                        </form>
                    </tr>

                    <tr>
                        <th scope="row">1</th>
                        <td><a href="">Topic name</a></td>
                        <td>Teacher Name</td>
                        <td>Related subject</td>
                        <td>
                            <a href=""><i class="fa fa-trash"> Delete</i></a>
                            &nbsp
                            <a href=""><i class="fa fa-edit"> Update</i></a>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">2</th>
                        <td><a href="">Topic name</a></td>
                        <td>Teacher Name</td>
                        <td>Related subject</td>
                        <td>
                            <a href=""><i class="fa fa-trash"> Delete</i></a>
                            &nbsp
                            <a href=""><i class="fa fa-edit"> Update</i></a>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">3</th>
                        <td><a href="">Topic name</a></td>
                        <td>Teacher Name</td>
                        <td>Related subject</td>
                        <td>
                            <a href=""><i class="fa fa-trash"> Delete</i></a>
                            &nbsp
                            <a href=""><i class="fa fa-edit"> Update</i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>