<?php
function slugify($line){
    $line = trim($line, ' '); //убрать пробелы в начале и конце
    $line = mb_strtolower($line); //нижний регистр в т.ч. кириллица
    $line = preg_replace('/\s+/', '-', $line) ; //замена пробелов на дефис
    return $line;
}

echo slugify('КоноСуба');
echo PHP_EOL;
echo slugify(' Seishun Buta Yarou wa Bunny Girl Senpai no Yume wo Minai');
echo PHP_EOL;
echo slugify('Мы так и не знаем названия цветка, что видели в тот день ');
echo PHP_EOL;
echo slugify(' Ore no Imouto ga Konnani Kawaii Wake ga Nai ');
echo PHP_EOL;
echo slugify('WATAshi ga MOTEnai no wa                      Dou Kangaetemo Omaera ga Warui!');
echo PHP_EOL;
echo slugify(' Shuumatsu Nani Shitemasu ka? Isogashii Desu ka? Sukutte Moratte Ii Desu ka? ');