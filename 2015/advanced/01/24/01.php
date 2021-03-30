<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.3.30 10:40
motto：有志者，事竟成
-->
<?php
$file = './test.txt';
$mode = 'r';
$handle = fopen($file, $mode);
var_dump(ftell($handle));
fseek($handle, 4);
var_dump(ftell($handle));