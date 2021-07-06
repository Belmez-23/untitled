<?php

function getMirrorMatrix($arrays){

    $mirror = [];
    $center = count($arrays[0]);

    foreach ($arrays as $array) {

        for ($left = 0; $left < $center; $left++) {
            $right = count($array)-$left-1;
            $array[$right] = $array[$left];
        }
        array_push($mirror, $array);
    }
    return $mirror;

}

var_dump(getMirrorMatrix([
    [11, 12, 13, 14, 15, 16],
    [21, 22, 23, 24, 25, 26],
    [31, 32, 33, 34, 35, 36],
    [41, 42, 43, 44, 45, 46],
    [51, 52, 53, 54, 55, 56],
    [61, 62, 63, 64, 65, 66],
]));