<?php
function get($array, $index, $default = null)
{
    return array_key_exists($index, $array)? $array[$index] : $default;
}

$cities = ['moscow', 'london', 'berlin', 'porto', null];

echo get($cities, 1); // london
echo PHP_EOL;
echo get($cities, 10, 'paris'); // paris
echo PHP_EOL;
echo get($cities, 5); // null
echo PHP_EOL;
echo get($cities, 4, 'default'); // null