<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.6 10:31
motto：有志者，事竟成
-->
<?php

/**
 * 设计一个类：mysql数据库操作类
 * 设计目标：
 * 该类一实例化，就可以自动连接上mysql数据库
 * 该类可以单独去设定要使用的链接编码
 * 该类可以单独去设定要使用的数据库
 * 可以主动关闭连接
 */
class db
{

    public $link = null;

    function __construct($dbname, $host = 'localhost', $port = '3306', $user = 'root', $pass = '123456', $charset = 'utf8')
    {

        $this->link = @mysql_connect("{$host}:{$port}", "{$user}", "{$pass}") or die();
        mysql_query("set names {$charset}");
        mysql_query("use {$dbname}");
    }

    // 设置编码
    function setCharset($charset)
    {

        mysql_query("set names {$charset}");
    }

    // 选择数据库
    function selectDB($dbname) {
        mysql_query("use {$dbname}");
    }

    // 关闭链接
    function closeDb()
    {
        mysql_close($this->link);
    }
}

$dbname = 'study';
$sql = new db($dbname);
$result = mysql_query("SELECT * FROM study.user");
var_dump($result);

$sql->setCharset('gbk');
$sql->selectDB('test');

$result = mysql_query("SELECT * FROM test.banji");
var_dump($result);

$sql->closeDb();