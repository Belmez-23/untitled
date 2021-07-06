<?php
function average(...$mass)
{
    return $mass != []? array_sum($mass) / count($mass): 'null';
}

echo average();
echo PHP_EOL;
echo average(0);
echo PHP_EOL;
echo average(0, 10);
echo PHP_EOL;
echo average(10, 10, -5);