<?php
function getIntersectionOfSortedArray($first, $second)
{
    //(array_intersect($first, $second))
    $inter = [];

    foreach ($first as $f){
        if(in_array($f, $second)){
            array_push($inter, $f);
            unset($second[array_search($f, $second)]); //для исключения повторов
        }
    }
    return $inter;
}

print_r(getIntersectionOfSortedArray([10, 11, 24], [10, 13, 14, 18, 24, 30])); // [10, 24]

print_r(getIntersectionOfSortedArray([10, 11, 24], [-2, 3, 4])); // []

print_r(getIntersectionOfSortedArray([], [2])); // []

print_r(getIntersectionOfSortedArray([2, 2, 2, 2, 2], [2, 2]));