<?php
/*PHP Data Types
1. String
2.ineger
3.float
4.boolean
5.object
6.array
7.NULL
*/

$a = true;
$b = false;
//var_dump() tells which data type is that
echo var_dump($a);
echo "<br>"; //<br> for next line
echo var_dump($b);
echo "<br>";
// array is multiple values in a single object
$days = array("monday","tuesday","wednesday");
echo var_dump($days);
echo "<br>";
echo $days[0];
echo "<br>";
echo $days[1];
echo "<br>";
echo $days[2];

// NULL is Nothing
$name = NULL;
echo "<br>";
echo var_dump($name);
?>