<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.6 16:34
motto：有志者，事竟成
-->
<?php
// 重载

class A
{

    public $p1 = 1;

    function __get($prop_name)
    {

        echo "<p>正在调用未定义的属性：{$prop_name}</p>";
//        trigger_error('发生错误：属性不存在', E_USER_ERROR);
//        return '';
//        die();
    }

    function __set($name, $value)
    {
        echo "<p>正在给不存在的属性{$name}进行赋值{$value}</p>";
        $this->$name = $value;
    }

    function __isset($name)
    {
        echo "<p>很显然你正在判断一个不存在的属性{$name}存不存在</p>";
    }

    function __unset($name)
    {

        echo "<p>很显然你正在销毁一个不存在的属性{$name}</p>";
    }
}

$a1 = new A();

echo "<p>{$a1->p1}</p>";

// 取值
echo "<p>{$a1->p2}</p>";

// 赋值
$a1->p3 = 4;
echo "<p>{$a1->p3}</p>";

// 判断
$a = isset($a1->p1);
$b = isset($a1->p4);

// 销毁
unset($a1->p5);