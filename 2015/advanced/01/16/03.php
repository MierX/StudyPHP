<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.8 11:02
motto：有志者，事竟成
-->
<?php
// 类的自动加载

// require '01.class.php';

function __autoload($name)
{

    if ($name == 'db2') {
        $name = '01';
    }
    require_once $name . '.class.php';
}

$sql = db2::getInstance(['dbname' => 'study', 'host' => 'localhost', 'port' => '3306', 'user' => 'root', 'pass' => '123456', 'charset' => 'utf8']);
var_dump($sql);