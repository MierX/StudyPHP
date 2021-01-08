<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.5 18:16
motto：有志者，事竟成
-->
<?php

class A
{

    static $d = 4;
    public $a = 1;
    protected $b = 2;
    private $c = 3;

    public function __construct()
    {
        echo 'A类<br />';
        $this->show();
        $this->show1();
    }

    public function show()
    {
        echo $this->a . "<br />";
        echo $this->b . "<br />";
        echo $this->c . "<br />";
        echo self::$d . "<br />";
        echo '<hr />';
    }

    private function show1()
    {
        echo $this->a . "<br />";
        echo $this->b . "<br />";
        echo $this->c . "<br />";
        echo self::$d . "<br />";
        echo 'show1';
        echo '<hr />';
    }
}

class B extends A
{
    static $d = 'd';
    public $a = 'a';
    protected $b = 'b';
    private $c = 'c';

    public function __construct()
    {
        echo 'B类<br />';
        $this->show();
        $this->show1();
        new C();
    }

    public function show()
    {
        echo $this->a . "<br />";
        echo $this->b . "<br />";
        echo $this->c . "<br />";
        echo self::$d . "<br />";
        echo '<hr />';
    }

    private function show1()
    {
        echo $this->a . "<br />";
        echo $this->b . "<br />";
        echo $this->c . "<br />";
        echo self::$d . "<br />";
        echo 'show1';
        echo '<hr />';
    }
}

class C extends A
{
    static $d = 'd';
    public $a = 'a';
    protected $b = 'b';
    private $c = 'c';

    public function __construct()
    {

        echo 'C类<br />';
        parent::__construct();
        $this->show();
    }
}

new A();
new B();
new C();