<?php
//tek - текущая дата, NG - новый год, raz - разность
date_default_timezone_set('Moscow');
$tek = new dateTime();
//var_dump($tek);

echo "Сегодня ".$tek->format('d (l) M Y')."<br>";
echo "Текущее время: ".$tek->format('H:i:s')."<br>";
$sled_ng = $tek->format('Y')+1;
//var_dump($sled_ng);
$NG = new DateTime($sled_ng."-1-1 0:0:0");
//var_dump($NG);
/*Создайте для каждой даты объект DateTime.
Воспользуйтесь методом DateTime::diff() для получения объекта DateInterval,
описывающего разность между датами.
Разность между двумя датами в неделях, днях, часах, минутах и секундах.*/

$diff = $NG->diff($tek);
printf("До Нового года осталось %s дней ",
    floor($diff->format('%a')));