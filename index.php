<?php
    class number{
        public $maxN;
        public $minN;
        public $averageN;

        public function __construct($file){
            $this->file = $file;
    
        }

        public function getNumbers(){
            $numbers = explode(", ", file_get_contents($this->file));     //read file and string->array
            return $numbers;
        }

        public function maxN(){             //calculation max value
            $numbers = $this->getNumbers();
            $maxN = $numbers[0];        
            for($i = 0, $count = count($numbers); $i < $count-1; $i++){
                if($numbers[$i] >= $maxN){
                    $maxN = $numbers[$i];
                }   
            }
            return $this->maxN = $maxN;
        }

        public function minN(){              //calculation min value
            $numbers = $this->getNumbers();
            $minN = $numbers[0];        
            for($i = 0, $count = count($numbers); $i < $count-1; $i++){
                if($numbers[$i] <= $minN){
                    $minN = $numbers[$i];
                }
            }
            return $this->minN = $minN;
        }   

        public function averageN(){          //calculation average value
            $numbers = $this->getNumbers();
            $averageN = 0;          
            for($i = 0, $count = count($numbers); $i < $count-1; $i++){
                $averageN += $numbers[$i];
            }
            $averageN = $averageN / count($numbers);
            return $this->averageN = $averageN;
        }

        public function allN(){               //calculation all values
            $numbers = $this->getNumbers();
            $maxN = $numbers[0];  
            $minN = $numbers[0];
            $averageN = 0;        
            for($i = 0, $count = count($numbers); $i < $count-1; $i++){
                if($numbers[$i] >= $maxN){
                    $maxN = $numbers[$i];
                }
                if($numbers[$i] <= $minN){
                    $minN = $numbers[$i];
                }
                $averageN += $numbers[$i];
            }
                $averageN = $averageN / count($numbers);
                $this->maxN = $maxN;
                $this->minN = $minN;
                $this->averageN = $averageN;
                return $this;
        }
    }

    $timeStart = microtime(true);

    $n = new number("numbers.txt");
   //$n -> allN();
    //var_dump($n);
    echo "<hr>".'Max number: '.$n->maxN();
    echo "<hr>".'Min number: '.$n->minN();
    echo "<hr>".'Average value: '.$n->averageN();

    $timeEnd = microtime(true);
    $time = $timeEnd - $timeStart;
    echo "<hr>"."Time: $time sec.";
?>