<?php
    echo "Associative Arrays <br>";
    
    $favCol = array(
        /*key =>*/"armaan" => "red",
        "rishab" =>"green"/*<=value*/,
        "keshav" =>"blue",
        8 => "yellow"//numbers can be used as keys
    );

    // echo $favCol["armaan"];
    // echo "<br>";
    // echo $favCol["rishab"];
    // echo "<br>";
    // echo $favCol["keshav"];
    // echo "<br>";
    // echo $favCol[8];

    foreach ($favCol as $key => $value) {
        echo "<br> Fvorate color of $key is $value";
    }
?>