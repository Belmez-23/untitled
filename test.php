<?php
$array = [15, 10, 3, 4];
$num = 10;
$min = 0;

for($m = 0; $m < count($array); $m++){
    if(abs($array[$m] - $num) < abs($array[$min] - $num)){
        $min = $m;
        var_dump($array[$m] );
    }
}
echo $min;