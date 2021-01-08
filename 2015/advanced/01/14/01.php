<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.5 15:20
motto：有志者，事竟成
-->
<?php

class A
{

    static $a = 1;
    static protected $b = 2;
}

class B extends A
{

    static public function show1()
    {
        echo "a\n";
        echo parent::$a . "\n";
        echo parent::$b . "\n";
        self::$b = 3;
    }
}

B::show1();