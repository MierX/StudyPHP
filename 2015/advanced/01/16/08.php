<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.8 16:17
motto：有志者，事竟成
-->
<?php
$config = ['dbname' => 'study', 'host' => 'localhost', 'port' => '3306', 'user' => 'root', 'pass' => '123456', 'charset' => 'utf8'];
$obj1 = (object) $config;
var_dump($config);
var_dump($obj1);