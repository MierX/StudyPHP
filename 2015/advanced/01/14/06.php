<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.6 09:58
motto：有志者，事竟成
-->
<?php

// 工厂模式

class A1
{
}

class B1
{
}

class C1
{
}

// 工厂类
class factory
{

    // 静态方法，通过该方法获得指定的对象
    static function getObject($className)
    {

        $obj = new $className();
        return $obj;
    }
}

$o1 = factory::getObject('A1'); // new A();
$o2 = factory::getObject('B1'); // new B();
$o3 = factory::getObject('C1'); // new C();
var_dump($o1);
var_dump($o2);
var_dump($o3);