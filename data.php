<?php
header('Cache-Control: s-maxage=0,max-age=8');
header('Content-Type: application/json; charset=utf-8');
header('Age: 4');

$string = "**11dddd11111eeee111121---";

header('Content-Length: '.(strlen($string) + 11));
echo('{"data":"'.$string.'"}');

sleep(2);
?>