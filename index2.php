<?php
    /*$txt = fopen("numbers.txt", "a");               //create random numbers
        for($i = 0; $i < 1000000; $i++){
            $rand = rand(-999, 999);
            fwrite($txt, "$rand, ");
        }
    fclose($txt);*/
    
   $numbers = explode(", ", file_get_contents("numbers.txt"));     //read file and string->array
    
    $maxN = $numbers[0];        //calculation max value
    for($i = 0, $count = count($numbers); $i < $count-1; $i++){
        if($numbers[$i] >= $maxN){
            $maxN = $numbers[$i];
        }
    }

    $minN = $numbers[0];        //calculation min value
    for($i = 0, $count = count($numbers); $i < $count-1; $i++){
        if($numbers[$i] <= $minN){
            $minN = $numbers[$i];
        }
    }

    $averageN = 0;          //calculation average value
    for($i = 0, $count = count($numbers); $i < $count-1; $i++){
        $averageN += $numbers[$i];
    }
    $averageN = $averageN / count($numbers);
    
    $timeStart = microtime(true);
    var_dump($numbers);
    echo "<hr>".'Max number: '.$maxN;
    echo "<hr>".'Min number: '.$minN;
    echo "<hr>".'Average value: '.$averageN;
    $timeEnd = microtime(true);
    $time = $timeEnd - $timeStart;
    echo "<hr>"."Time: $time sec.";

?>