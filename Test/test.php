<?php
error_reporting(E_WARNING|E_NOTICE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$file = "Books/normalization.html";

if(unlink($file))
 echo "the file" . $file . "was deleted successfully";
else 
 echo "There was a error deleting a file " . $fil;


?>