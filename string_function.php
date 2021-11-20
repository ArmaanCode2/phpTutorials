<?php
$name = " i am armaan";
echo $name;
echo "<br>";

echo strlen($name);//strlen() tells length of string
// we use dot opereator for joining strings
echo "<br>";
echo "this is a " . "joint string";
echo "<br>";
echo str_word_count($name);//str_word_count() tells how many words are in the sentence
echo "<br>";

echo strrev($name);//strrev() ulta the sentence
echo "<br>";

echo strpos($name , "i");//returns the position of word in nindex 
echo "<br>";

echo str_replace("armaan" , "thanos" , $name);// syntax: (word that you want to replace , word ypu want to replace with , $string name) 
echo "<br>";

echo str_repeat($name , 5);//syntax: ($string name , how many times)
echo "<br>";

echo "<pre>";// pre tag shows as it is
echo rtrim("   this is armaan   ");//remove spaces from right
echo "<br>";
echo ltrim("   this is armaan   ");//remove spaces from left
echo "</pre>";

?>