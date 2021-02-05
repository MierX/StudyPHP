<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.11 10:52
motto：有志者，事竟成
-->
<?php

class A
{
    static $p1 = 1;

    static function show1()
    {
        echo "<p>" . self::$p1 . "</p>";
        echo "<p>" . static::$p1 . "</p>";
    }
}

class B extends A
{
    static $p1 = 11;
}

A::show1();
echo "<hr />";
B::show1();