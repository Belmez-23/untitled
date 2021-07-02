<?php
function average(...$mass){
/*    if($mass != []) {
        return array_sum($mass) / count($mass);
    }
    else return 'null'; */

    return $mass != []? array_sum($mass) / count($mass): 'null';
}

echo average();
echo PHP_EOL;
echo average(0);
echo PHP_EOL;
echo average(0, 10);
echo PHP_EOL;
echo average(10, 10, -5);