<?php
function sayPrimeOrNot($x)
{
    for ($i = 2; $i < ($x - 1) ; $i++) {
        if ($x % $i == 0) {
            return 'no';
        }
    }
    return 'yes';
}

echo sayPrimeOrNot(2);
echo PHP_EOL;
echo sayPrimeOrNot(221);