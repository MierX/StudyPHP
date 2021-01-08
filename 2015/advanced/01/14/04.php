<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.5 17:59
motto：有志者，事竟成
-->
<?php

class A
{

    public $a = 1;

    function move()
    {

        echo '2<br />';
    }
}

class B extends A
{

    public $a = 3;

    function move()
    {

        echo '4<br />';
    }
}

class C extends A
{

    public $a = 5;

    function move()
    {

        echo '6<br />';
    }
}