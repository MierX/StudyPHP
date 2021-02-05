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
class db2
{

    private static $instance = null;
    private $link;

    private function __construct($config)
    {
        $this->dbname = $config['dbname'] ?: 'test';
        $this->host = $config['host'] ?: 'localhost';
        $this->port = $config['port'] ?: '3306';
        $this->user = $config['user'] ?: 'root';
        $this->pass = $config['pass'] ?: '123456';
        $this->charset = $config['charset'] ?: 'utf8';

        // 连接数据库
        $this->link = @mysql_connect("{$this->host}:{$this->port}", "{$this->user}", "{$this->pass}") or die();

        // 设置编码
        $this->setCharset($this->charset);

        // 选择数据库
        $this->selectDB($this->dbname);
    }

    function setCharset($charset)
    {

        $this->query("set names {$charset}");
    }

    private function query($sql)
    {

        $rs = mysql_query($sql);
        if ($rs) {
            return $rs;
        } else {
            echo "<p>sql语句执行失败，请参考如下信息：</p>";
            echo "<p>错误代号：" . mysql_errno() . "</p>";
            echo "<p>错误信息：" . mysql_error() . "</p>";
            echo "<p>错误语句：" . $sql . "</p>";
            die();
        }
    }

    // 设置编码

    function selectDB($dbname)
    {

        $this->query("use {$dbname}");
    }

    // 选择数据库

    static function getInstance($config)
    {

        if (!isset(self::$instance)) {
            self::$instance = new self($config);
        }

        return self::$instance;
    }

    // 关闭链接

    function closeDb()
    {

        mysql_close($this->link);
    }

    // 这个方法为了执行一条增删改语句，返回真假结果

    function exec($sql)
    {

        $this->query($sql);
        return true;
    }

    // 这个方法为了执行一条返回一行数据的语句，返回一维数组
    function getOneRow($sql)
    {

        $rs = $this->query($sql);
        $arr = [];
        while ($rec = mysql_fetch_assoc($rs)) {
            $arr[] = $rec;
        }
        return $arr;
    }

    // 这个方法为了执行一条返回多行数据的语句，返回二维数组

    function getRows($sql)
    {

        $rs = $this->query($sql);
        return mysql_fetch_assoc($rs);
    }

    // 这个方法为了执行一条返回一个数据的语句，返回一个值

    function getOneData($sql)
    {

        $rs = $this->query($sql);
        return mysql_fetch_row($rs)[0];
    }

    private function __clone()
    {
    }
}