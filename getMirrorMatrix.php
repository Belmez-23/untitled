<?php

function getMirrorMatrix($arrays)
{
    $mirror = [];
    $center = count($arrays[0]);

    foreach ($arrays as $array) {
        for ($left = 0; $left < $center; $left++) {
            $right = count($array) - $left - 1;
            $array[$right] = $array[$left];
        }
        array_push($mirror, $array);
    }
    return $mirror;
}

$output = getMirrorMatrix([
    [11, 12, 13, 14, 15],
    [21, 22, 23, 24, 25],
    [31, 32, 33, 34, 35],
    [41, 42, 43, 44, 45],
    [51, 52, 53, 54, 55]
]);

foreach ($output as $out){
    foreach ($out as $o){
        echo ' '.$o;
    }
    echo "\n";
}