<?php
function findIndexOfNearest($array, $num){
    if($array != []) {
            $min = 0;
            for($m = 0; $m < count($array); $m++){
                if(abs($array[$m] - $num) < abs($array[$min] - $num)){
                    $min = $m;
                }
            }
            return $min;
 }
    else return 'null';
}

echo findIndexOfNearest([], 0);
echo PHP_EOL;
echo findIndexOfNearest([1, 2, 5, -7, 12, 80], -12);