<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.8 17:01
motto：有志者，事竟成
-->
<?php

require '01.class.php';

$sql = db2::getInstance(['dbname' => 'study', 'host' => 'localhost', 'port' => '3306', 'user' => 'root', 'pass' => '123456', 'charset' => 'utf8']);
var_dump($sql);

$sql2 = clone $sql;
var_dump($sql2);