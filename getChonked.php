<?php
function getChunked($arr, $l)
{
    $chunk = [];
    for($row = 0; $row < count($arr); $row += $l){
        array_push($chunk, array_slice($arr, $row, $l));
    }
    return $chunk;
}

print_r(getChunked(['a', 'b', 'c', 'd'], 2));
// → [['a', 'b'], ['c', 'd']]

print_r(getChunked(['a', 'b', 'c', 'd'], 3));
// → [['a', 'b', 'c'], ['d']]

print_r(getChunked(['aaaaa', 'aaaaaaaaaaa', 'aa', 'aaaa', 'aaaaaa'], 2));