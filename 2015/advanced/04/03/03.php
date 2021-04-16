<?php

/**
 * author：MierX
 * github：https://github.com/MierX/StudyPhp
 * create：21.4.15 14:53
 * motto ：有志者，事竟成
 */

namespace beijing\haidian\xisanq;
class Animal{

    public $name = '1';
}

namespace liaoning\shenyang\tiexi;
class Animal{
    public $name = '2';
}

// 非限定名称方式访问元素
$obj = new Animal();
echo $obj->name; // 2
echo "<hr />";

// 访问其它空间元素：完全限定名称方式
$obj1 = new \beijing\haidian\xisanq\Animal();
echo $obj1->name; // 1