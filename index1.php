<?php
      /*$txt = fopen("numbers.txt", "w");           //create random numbers
        for($i = 0; $i < 100; $i++){
            $rand = rand(-999, 999);
            fwrite($txt, "$rand, ");
        }
        fclose($txt);*/

    $numbers = explode(", ", file_get_contents("numbers.txt"));     //read file and string->array

    class numbers{
        public $maxN;
        public $minN;
        public $averageN;

        public function maxN($numbers){             //calculation max value
            $maxN = $numbers[0];        
            for($i = 0, $count = count($numbers); $i < $count-1; $i++){
                if($numbers[$i] >= $maxN){
                    $maxN = $numbers[$i];
                }   
            }
            return $this->maxN = $maxN;
        }

        public function minN($numbers){              //calculation min value
            $minN = $numbers[0];        
            for($i = 0, $count = count($numbers); $i < $count-1; $i++){
                if($numbers[$i] <= $minN){
                    $minN = $numbers[$i];
                }
            }
            return $this->minN = $minN;
        }   

        public function averageN($numbers){          //calculation average value
            $averageN = 0;          
            for($i = 0, $count = count($numbers); $i < $count-1; $i++){
                $averageN += $numbers[$i];
            }
            $averageN = $averageN / count($numbers);
            return $this->averageN = $averageN;
        }
    }

    //var_dump($numbers);

    $timeStart = microtime(true);
    $number = new numbers;
    echo "<hr>".'Max number: '.$number->maxN($numbers);
    echo "<hr>".'Min number: '.$number->minN($numbers);
    echo "<hr>".'Average value: '.$number->averageN($numbers);
    $timeEnd = microtime(true);
    $time = $timeEnd - $timeStart;
    echo "<hr>"."Time: $time sec.";

  
?>