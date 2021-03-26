<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.3.26 16:49
motto：有志者，事竟成
-->
<?php
 // opendir()建立数据流通道
$file = opendir('./test');
var_dump($file);

// readdir()通过句柄读取文件
$fileName = readdir($file);
var_dump($fileName);

$fileName = readdir($file);
var_dump($fileName);

$fileName = readdir($file);
var_dump($fileName);

$fileName = readdir($file);
var_dump($fileName);

// 关闭句柄
closedir($file);
var_dump($file);