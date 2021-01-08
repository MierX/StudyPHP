<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.7 14:36
motto：有志者，事竟成
-->
<?php

class testA
{

    function __call($methodName, $argument)
    {

        echo "<p>正在调用不存在的方法{$methodName}，传递了以下参数：" . implode(',', $argument) . "</p>";
    }

    static function __callstatic($methodName, $argument)
    {

        echo "<p>正在调用不存在的方法{$methodName}，传递了以下参数：" . implode(',', $argument) . "</p>";
    }
}

$a = new testA();
@$a->f1();
@$a->f2(1, 2, 3);
@$a::f3();