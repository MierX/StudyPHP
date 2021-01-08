<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.6 10:08
motto：有志者，事竟成
-->
<?php

// 单例模式
final class single
{

    // 设置一个记录对象是否被生产的私有静态属性
    private static $instance = null;

    // 私有的构造方法的类无法被实例
    private function __construct()
    {

    }

    // 静态方法
    static function getObject()
    {

        // 准备在这里，根据自己的逻辑，控制好对象的数量，就一个，然后返回
        if (!isset(self::$instance)) {
            // 生产一个对象、记录起来
            self::$instance = new self();
        }
        // 直接返回已被生产的对象
        return self::$instance;
    }
}

//$o1 = new single();
//$o2 = new single();
$o1 = single::getObject();
$o2 = single::getObject();
var_dump($o1);
var_dump($o2);