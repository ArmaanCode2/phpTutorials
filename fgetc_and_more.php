<?php

$fptr = fopen("files.txt" , "r");
// echo fgets($fptr);//reads one line at a time
// echo fgets($fptr);


//reading a file line by line

/*
while($a = fgets($fptr)){
   echo "$a<br>";
}

echo "end of the file here";
*/


//reading a file character by character
/*
while($a = fgetc($fptr)){
    echo $a;
    // break;
    }
 */

 //program
 while($a = fgetc($fptr)){
     echo $a;
     if($a == "."){
         break;
     }
 }

 fclose($fptr);
?>