<?php
function getChunked($arr, $l){
//array_chunk($input_array, 2)

$chunk = [];
    for($row = 0; $row < count($arr);){
        array_push($chunk, array_slice($arr, $row, $l));
        $row += $l;
}
    return $chunk;
}

print_r(getChunked(['a', 'b', 'c', 'd'], 2));
// → [['a', 'b'], ['c', 'd']]

print_r(getChunked(['a', 'b', 'c', 'd'], 3));
// → [['a', 'b', 'c'], ['d']]
print_r(getChunked(['aaaaa', 'aaaaaaaaaaa', 'aa', 'aaaa', 'aaaaaa'], 2));