<?php
function swap($arr, $mid)
{
    if(array_key_exists($mid-1, $arr) && array_key_exists($mid+1, $arr)) {
        [$arr[$mid - 1], $arr[$mid + 1]] = [$arr[$mid + 1], $arr[$mid - 1]];
    }
    return $arr;
}

$names = ['john', 'smith', 'karl'];

$result = swap($names, 1);
print_r($result); // => ['karl', 'smith', 'john']

$result = swap($names, 2);
print_r($result); // => ['john', 'smith', 'karl']

$result = swap($names, 0);
print_r($result); // => ['john', 'smith', 'karl']