<?php
function addPrefix($arr, $pre)
{
    for($a = 0; $a < count($arr); $a++){
        $arr[$a] =  $pre.' '.$arr[$a];
    }
    return $arr;
}

$names = ['john', 'smith', 'karl'];
$newNames = addPrefix($names, 'Mr');
print_r($newNames);

print_r(addPrefix(['Kefir', 'Fish', 'Rock', 'Beer', 'Cheese'], 'St'));