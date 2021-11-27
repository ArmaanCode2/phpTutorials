<?php

$fptr = fopen("files.txt" , "r");//r is for reading the file
//more modes on ---> https://www.php.net/manual/en/function.fopen  <---


// $content = fread($fptr,5); 5  is no. of characters
$content = fread($fptr,filesize("files.txt")); // filesize() tells length of file
echo $content;

fclose($fptr);//closes the file for extra ram
?>