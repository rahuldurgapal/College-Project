<?php
include("../../app/db_connection.php"); 
if (isset($_POST['content'])) {
    $content = $_POST['content'];
    $fileName = $_POST['fileName'];
    $subject =  $_POST['subject'];
    $teacher =  $_POST['teacherName'];
    $file = $_POST['file'];


    $filePath = '../../Panel/Notes/' . $fileName; // Specify the directory where you want to save the file
    
    
    if (file_put_contents($filePath, $content)) {
    } else {
        echo 'Error saving file.';
    }

    $sql = "insert into notes(notes_subject, notes_author, notes_topic, notes_link) values ('$subject', '$teacher', '$file', '$fileName')";
    $q=mysqli_query($con,$sql);
    if($q)
     echo "Notes save successfully";
    else
     echo "Some error occured during insertion";
}
?>
