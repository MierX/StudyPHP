<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.5 15:27
motto：有志者，事竟成
-->
<?php

class C
{

    static $d = 4;
    public $a = 1;
    protected $b = 2;
    private $c = 3;

    function show()
    {

        echo "{$this->a}<br/>";
        echo "{$this->b}<br/>";
        echo "{$this->c}<br/>";
        echo self::$d . "<br/>";
    }
}

class D extends C
{

    function show2()
    {

        echo 'test<br/>';
        parent::show();
        self::$d;
        $this->b;
        $this->a;
    }
}

$a = new D();
$a->show2();
$a->show();