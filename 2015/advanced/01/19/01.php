<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.2.19 15:23
motto：有志者，事竟成
-->
<?php
$dsn = "mysql:host=localhost;port=3306;dbname=study";
$options = [PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"];
$pdo = new PDO($dsn, 'root', '123456', $options);
var_dump($pdo);