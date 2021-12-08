<?php

echo "this is writing files";
// $fptr = fopen("files2.txt" , "w");//agr file nhi hogi to ban jayegi
//agr file hogi aur fwrite nhi hoga to file empty ho jayegi
//aur w mode overwrite lr deta h 
// fwrite($fptr,"new text");

// fclose($fptr);

//Apending to a file in php
$fptr = fopen("files2.txt" , "a");//append mode keeps the data and adds more
fwrite($fptr,"apending text
");
fclose($fptr);
?>