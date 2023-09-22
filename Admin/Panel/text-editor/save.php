<?php
include("../../app/db_connection.php"); 
if (isset($_POST['content'])) {
    $content = $_POST['content'];
    $fileName = $_POST['fileName'];
    $subject =  $_POST['subject'];
    $teacher =  $_POST['teacherName'];
    $file = $_POST['file'];


    $filePath = '../../Panel/Books/' . $fileName; // Specify the directory where you want to save the file
    
    
    if (file_put_contents($filePath, $content)) {
        echo $subject;
    } else {
        echo 'Error saving file.';
    }

    $sql = "insert into notes(notes_subject, notes_author, notes_topic, notes_link) values ('$subject', '$teacher', '$file', '$fileName')";
    $q=mysqli_query($con,$sql);
    if($q)
     echo "notes save successfully";
    else
     echo "error notes saving file";
}
?>
