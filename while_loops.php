<?php
echo "while loops in php <br>";

/* Syntax
while (condition){
    some lines of code here;
}
*/

$i = 0; 
while($i<5){
    echo "The value of i is ";
    echo $i+1;
    echo "<br>";
    $i+=1; 
} 
?>