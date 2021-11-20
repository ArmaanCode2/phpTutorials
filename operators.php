<?php
/*
1.Arithmetic operators
2.Assignment operators
3.comparison operators
4. logical operators
*/

//Arithmetic operatos
$a = 45;
$b = 8;

echo "result of a + b are: " . ($a + $b) . "<br>";//bracket is impotant you cannot join string and a numeric value
echo "result of a - b are: " . ($a - $b) . "<br>";
echo "result of a * b are: " . ($a * $b) . "<br>";
echo "result of a % b are: " . ($a % $b) . "<br>";//Gives the remainder
echo "result of a ** b are: " . ($a ** $b) . "<br>";// ** is raise to power

echo "<br>";
echo "<br>";


//Assignment operators   helps to asssign one value to another
$x = $a;
echo "value of x is: " . $x . "<br>";
$a += 6;// += plus krke assign krdega
echo "value of a is: " . $a . "<br>";
$a -= 6;// -= minus krke assign krdega
echo "value of -a is: " . $a . "<br>";
$a *= 6;// *8= multiply krke assign krdega
echo "value of *a is: " . $a . "<br>";
$a /= 6;// /= divide krke assign krdega
echo "value of /a is: " . $a . "<br>";
$a %= 6;// %= percentage krke assign krdega
echo "value of %a is: " . $a . "<br>";


//Comparison operators
$n = 7;
$y = 9;
echo "for $n == $y, the result is ";
echo var_dump($n == $y) . "<br>";

echo "for $n > $y, the result is ";//greater than
echo var_dump($n > $y) . "<br>";

echo "for $n < $y, the result is ";//less than
echo var_dump($n < $y) . "<br>";

echo "for $n <> $y, the result is ";//not equal to
echo var_dump($n <> $y) . "<br>";

echo "for $n >= $y, the result is ";//greater than or equal
echo var_dump($n >= $y) . "<br>";

echo "for $n <= $y, the result is ";//less than or equal
echo var_dump($n <= $y) . "<br>";



//logical operators only valid for boolean values
$h = true;
$j = false;

echo "for h and j, the result is ";//if both true than true , (and) can also be written as &&
echo var_dump($h and $j) . "<br>";

echo "for h or j, the result is ";//if one true than true , (or) can also be written as ||
echo var_dump($h or $j) . "<br>";

echo "for !h, the result is ";//true ka false and false ka true
echo var_dump(!$h) . "<br>";
echo "erfgf";
?>