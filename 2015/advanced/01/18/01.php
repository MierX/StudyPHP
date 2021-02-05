<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.12 14:33
motto：有志者，事竟成
-->
<?php

require_once '03.php';

final class modelFactory
{

    private static $objArr = [];

    private function __construct()
    {
    }

    static function getInstance($instance)
    {

        if (!(isset(self::$objArr[$instance])) || self::$objArr[$instance] instanceof $instance) {
            self::$objArr[$instance] = new $instance();
        }
        return self::$objArr[$instance];
    }
}