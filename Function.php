<?php
    echo "Funtions in pHp";
    echo"<br>";
    function marks($marksArr){
        $sum = 0;
        foreach ($marksArr as $value) {
            $sum += $value;
        }
        return $sum;
    }

    $rohan = [34, 98, 45, 98, 93, 71];
    $sumMarks = marks($rohan);

    $armaan = [99, 98, 93, 94, 67, 92];
    $sumMarksArmaan = marks($armaan);
    echo "Total makrs scored by rohan out of 600 is $sumMarks";
    echo"<br>";
    echo "Total makrs scored by rohan out of 600 is $sumMarksArmaan";
?>