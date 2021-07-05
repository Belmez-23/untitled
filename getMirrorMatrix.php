<?php
function getMirrorMatrix($arrays){

    $mirror = [];
    for($a = 0; $a < count($arrays); $a++) {
        //возможно более лаконичное решение с циклом захватывающим только индексы левой стороны матрицы?
        $array = $arrays[$a];
        $left = 0;
        $right = count($array) - 1;
        $center = count($array) / 2;

        while ($left < $center) {
            $array[$right--] = $array[$left++];
        }
        array_push($mirror, $array);
    }

    return $mirror;
}

var_dump(getMirrorMatrix([
    [11, 12, 13, 14],
    [21, 22, 23, 24],
    [31, 32, 33, 34],
    [41, 42, 43, 44],
]));