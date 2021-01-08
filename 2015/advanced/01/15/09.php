<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.7 17:01
motto：有志者，事竟成
-->
<?php
require '08.class.php';

$sql = new db(['dbname' => 'study', 'host' => 'localhost', 'port' => '3306', 'user' => 'root', 'pass' => '123456', 'charset' => 'utf8']);
$result = mysql_query("SELECT * FROM study.user");
var_dump($result);

$_sql = "INSERT INTO study.user(`name`, `account`, `password`, `addtime`) VALUES('张三丰', 'test001', '" . md5('123456') . "', '" . date('Y-m-d H:i:s', time()) . "')";
var_dump($sql->exec($_sql));
$_sql = "SELECT * FROM study.user ORDER BY id DESC LIMIT 1";
var_dump($sql->getRows($_sql));

$sql->setCharset('gbk');
$sql->selectDB('test');

$result = mysql_query("SELECT * FROM test.banji");
var_dump($result);

$sql->closeDb();