<?php
 echo "forEach_loops";

 $arr = array("Laptop" , "Charger" , "Bread" , "Mobile" , "Butter");

// for ($i = 0;$i < count($arr); $i++){
//    echo "$arr[$i]";
//    echo "<br>";
// }

//better way to do this

foreach ($arr as $value) {
    echo "$value <br>";
}
?>