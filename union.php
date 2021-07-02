<?php
function union(...$arrays){
    $temp = [];
    $t = 0;
    foreach ($arrays as $array) {
        foreach ($array as $a){
            $temp[$t] = $a;
            $t++;
        }
    }
    return array_merge(array_unique($temp));
}

var_dump(union(['a', 3, false] , [true, false, 3] , [false, 5, 8]));
var_dump(union([3, 2] , [2, 2, 1]));
var_dump(union([3]));