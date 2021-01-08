<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.8 16:43
motto：有志者，事竟成
-->
<?php

interface UU
{
}

class AX implements UU
{
}

class XA
{
}

function f1($p1, array $p2, XA $p3, UU $p4)
{

    echo "<p>没有约束的p1：{$p1}</p>";
    echo "<p>数组约束的p2：</p>";
    var_dump($p2);
    echo "<p>对象约束的p3：</p>";
    var_dump($p3);
    echo "<p>接口约束的p4：</p>";
    var_dump($p4);
}

f1(1, [2], new XA(), new AX());