<?php
$ishod = file('data.txt');
//$ishod = $_POST;
$s = explode(' ', $ishod[rand(0, 8)]);
$ss = count($s);
$gachi = array('300 bucks', 'club', 'buddy', 'Ass', 'boy', 'Fuck', 'Fuck you', 'leather man', 'door', 'Deep dark fantasies', 'Dungeon master', 'Cumming', 'slave', 'Stick your finger', 'amazing');
$gg = count($gachi);
foreach ($gachi as $g) {
    $rs = rand(0, $ss);
    $rg = rand(0, $gg);
    $s[$rs] = $g ;
}
foreach ($s as $ass) {
    echo $ass . " ";
}
?>