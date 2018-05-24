<?php
$txt = fopen("numbers.txt", "w");           //create random numbers
    for($i = 0; $i < 1000000; $i++){
        $rand = rand(-999, 999);
        fwrite($txt, "$rand, ");
    }
    fclose($txt);
?>