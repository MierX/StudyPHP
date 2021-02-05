<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.11 09:39
motto：有志者，事竟成
-->
<?php

class xuliehua
{

    const E = 5;
    static $d = 4;
    public $a = 1;
    protected $c = 3;
    private $b = 2;

    function __sleep()
    {

        echo "<p>要进行序列化</p>";
        return ['a'];
    }

    function __wakeup()
    {

        echo "<p>要进行反序列化</p>";
    }

    function show()
    {
        $f = 112312312;
        echo "<p>{$f}</p>";
    }
}

$obj1 = new xuliehua();
var_dump($obj1);

$s1 = serialize($obj1);
var_dump($s1);

$us = unserialize($s1);
var_dump($us);

$us->show();