<?php
 echo "This is multidimensional arrays <br>";

 $multiDim = array(// this is 2 dimension array 
     array(2,5,7,8),
     array(1,2,3,4),
     array(3,4,1,8)
 );
//  echo var_dump($multiDim);
//  echo $multiDim[1][1];


//this is to print the array
// for ($i=0; $i <count($multiDim) ; $i++) { 

//     echo var_dump($multiDim[$i]);
//     echo "<br>";
// }

for ($i=0; $i < count($multiDim) ; $i++) { 
    for ($j=0; $j < count($multiDim[$i]); $j++) { 
        echo $multiDim[$i][$j];
        echo " ";
    }
    echo "<br>";
}

?>