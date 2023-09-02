<?php
if (isset($_POST['content'])) {
    $content = $_POST['content'];
    $fileName = $_POST['fileName'];
    $filePath = '../Admin/Panel/Books/' . $fileName; // Specify the directory where you want to save the file

    if (file_put_contents($filePath, $content)) {
        echo 'File saved successfully.';
    } else {
        echo 'Error saving file.';
    }
}
?>
