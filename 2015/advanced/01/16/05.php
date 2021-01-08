<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.8 15:17
motto：有志者，事竟成
-->
<?php

class AAA
{

    public $a = 1;
}

var_dump('$obj1');
$obj1 = new AAA();
var_dump($obj1);

// 对象传值
var_dump('$obj2');
$obj2 = $obj1;
var_dump($obj2);

// 对象引用
var_dump('$obj3');
$obj3 = $obj1;
var_dump($obj3);

// 对象克隆
var_dump('$obj4');
$obj4 = clone $obj1;
var_dump($obj4);

$obj1->a = 2;
var_dump($obj1);

// 对象传值
var_dump('$_obj2');
$_obj2 = $obj1;
var_dump($_obj2);

// 对象引用
var_dump('$_obj3');
$_obj3 = $obj1;
var_dump($_obj3);

// 对象克隆
var_dump('$_obj4');
$_obj4 = clone $obj1;
var_dump($_obj4);


// 对象克隆
var_dump('$obj4');
var_dump($obj4);