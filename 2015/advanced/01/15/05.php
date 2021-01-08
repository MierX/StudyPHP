<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.7 15:09
motto：有志者，事竟成
-->
<?php

/**
 * 目标：设计一个类，这个类的实例可以实现如下要求
 * 调用方法f1：
 * 传入1个参数，返回其本身
 * 传入2个参数，返回平方和
 * 传入3个参数，返回立方和
 * 其它参数，报错
 */
class AA
{

//    function f1($p1)
//    {
//        return $p1;
//    }

//    function f1($p1, $p2)
//    {
//
//
//    }

    function __call($funcName, $argument)
    {

        if ($funcName == 'f1') {
            $count = count($argument);
            if ($count == 1) {
                return pow($argument[0], 1);
            } elseif ($count == 2) {
                return pow($argument[0], 2) + pow($argument[1], 2);
            } elseif ($count == 3) {
                return pow($argument[0], 3) + pow($argument[1], 3) + pow($argument[2], 3);
            } else {
                return 0;
            }
        } else {
            return 0;
        }
    }
}

$aa = new AA();
var_dump($aa->f1(1));
var_dump($aa->f1(1, 2));
var_dump($aa->f1(1, 2, 3));