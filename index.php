<?php
    $numbers = explode(", ", file_get_contents("numbers.txt"));     //read file and string->array
    
    $maxN = $numbers[0];
    for($i = 0, $count = count($numbers); $i < $count; $i++){
        if($numbers[$i] >= $maxN){
            $maxN = $numbers[$i];
        }
    }

    $minN = $numbers[0];
    for($i = 0, $count = count($numbers); $i < $count; $i++){
        if($numbers[$i] <= $minN){
            $minN = $numbers[$i];
        }
    }

    $averageN = 0;
    for($i = 0, $count = count($numbers); $i < $count; $i++){
        $averageN += $numbers[$i];
    }
    $averageN = $averageN / count($numbers);
    
    var_dump($numbers);
    echo "<hr>".'Max number: '.$maxN;
    echo "<hr>".'Min number: '.$minN;
    echo "<hr>".'Average value: '.$averageN;
?>