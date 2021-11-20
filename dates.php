<?php
    echo"dates in pHp <br>";
    $d = date("jS l g:i A");/*d will return dates in 05, 06 || j will not
    return dates in Zeros || l will return Days || F will reurn 
    months in wordsc|| S returns rth or rd || Y returns Years in
    words || Manual on php wesites*/
    echo "today day is $d <br>";

    $year = date("Y");
    echo"Copyright $year All Rights Reserved";
?>