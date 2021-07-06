<?php
function getTotalAmount($money, $ex)
{
    $total = 0;
    foreach ($money as $m){
        if(str_starts_with($m, $ex)){// или str_contains
            $total += (double) str_replace($ex.' ', '', $m);
        }
    }
    return $total;
}

$money1 = ['eur 10', 'usd 1', 'usd 10', 'rub 50', 'usd 5'];
echo getTotalAmount($money1, 'usd') ;// 16
echo PHP_EOL;
$money2 = ['eur 10', 'usd 1', 'eur 5', 'rub 100', 'eur 20', 'eur 100', 'rub 200'];
echo getTotalAmount($money2, 'eur'); // 135
echo PHP_EOL;
$money3 = ['eur 10', 'rub 50', 'eur 5', 'rub 10', 'rub 10', 'eur 100', 'rub 200'];
echo getTotalAmount($money3, 'rub') ;// 270

echo PHP_EOL;
$money = ['usd 54.17', 'usd 30.2', 'usd 19.24', 'rub 1384.8', 'rub 490.6', 'usd 16.02'];
echo getTotalAmount($money, 'rub') ;
echo PHP_EOL;
echo getTotalAmount($money, 'usd') ;
echo PHP_EOL;
echo getTotalAmount($money, 'eur') ;
