<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.11 10:00
motto：有志者，事竟成
-->
<?php

class tostring
{

    public $a;
    public $b;
    public $c;

    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    function __toString()
    {

        return "a:{$this->a},b:{$this->b},c:{$this->c}";
    }
}

$obj1 = new tostring(1, 2, 3);
echo $obj1;