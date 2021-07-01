
<?php
$value = 'что-то откуда-то';

setcookie("TestCookie", $value);
setcookie("TestCookie", $value, time()+3600);  /* срок действия 1 час */
//setcookie("TestCookie", $value, time()+3600, "/untitled08", "localhost", 1);
// Вывести одно конкретное значение cookie
echo $_COOKIE["TestCookie"];

// В целях тестирования и отладки может пригодиться вывод всех cookie
print_r($_COOKIE);
?>
