<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：20.12.2 15:37
motto：有志者，事竟成
-->
<?php

class C1
{
    static $p2 = 2;
    public $p1 = 1;

    static function test2()
    {
        echo '<br />静态方法';
        echo '<br />p2：' . self::$p2;
    }

    function test1()
    {
        echo '<br />实例方法';
        echo '<br />p1：' . $this->p1;
    }
}