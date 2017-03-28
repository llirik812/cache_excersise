<?php
header('Cache-Control: no-transform, s-maxage=0, max-age=0');
header('Content-Type: application/json; charset=utf-8');
header('ETag: 1313131231');

$string = "**11dddd11111eeee11111";

header('Content-Length: '.(strlen($string) + 11));
echo('{"data":"'.$string.'"}');

sleep(2);
?>