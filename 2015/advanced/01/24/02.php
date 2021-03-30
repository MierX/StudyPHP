<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.3.30 10:45
motto：有志者，事竟成
-->
<?php
//$handle = fopen('./test1.txt', 'x');
//var_dump($handle);

$handle = fopen('./test.txt', 'w+');
var_dump($handle);
$result = fwrite($handle, date('Y-m-d H:i:s', time()));
var_dump($result);
var_dump(ftell($handle));
var_dump(fseek($handle, 3));
var_dump(ftell($handle));
$result = fwrite($handle, 'abc');
var_dump($result);
