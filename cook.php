
<?php
/*$value = 'Это тестовое cookie';

setcookie("TestCookie", $value);
setcookie("TestCookie", $value, time()+3600);  // срок действия 1 час
setcookie("TestCookie", $value, time()+3600, "/untitled08", "localhost", 1);
*/
//setcookie('TestCookie', '', time()-360); // delete cookie
if (!$_COOKIE['counter']) $counter  =  1;
else $counter  =  ++$_COOKIE['counter'];
setcookie("counter", $counter, time() + 3600);
echo "Визит страницы: $counter";
echo '<br>';
if(isset($_COOKIE['TestCookie']) || isset($_COOKIE['my_name'])) {
    echo $_COOKIE['TestCookie'];// одно конкретное значение cookie
    echo '<br>';
    /*$name = 'Геннадий Палыч';
    setcookie('my_name',$name,time() + (86400 * 5)); */
    if ($_COOKIE['my_name'] != '')
        echo 'Привет, ' . $_COOKIE['my_name'] . '!';
    else
        echo 'Привет, Гость!';
    echo '<br>';
// вывод всех cookie
    var_dump($_COOKIE);
}
else echo "cookie удалены";


?>
