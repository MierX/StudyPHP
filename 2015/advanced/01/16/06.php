<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.8 15:30
motto：有志者，事竟成
-->
<?php

class AB
{

    const E = 5;
    static $d = 4;
    public $a = 1;
    protected $b = 2;
    private $c = 3;

    function a()
    {

    }
}

$obj = new AB();
foreach ($obj as $key => $value) {
    echo "<p>属性：{$key}，值：{$value}</p>";
}