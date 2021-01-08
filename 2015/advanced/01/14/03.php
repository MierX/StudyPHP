<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.5 15:42
motto：有志者，事竟成
-->
<?php

class A
{

    public function __construct()
    {

        echo "1<br />";
    }
}

class B extends A
{

    public function __construct()
    {

        echo "2<br />";
    }
}

class C extends A
{

}


new B();
new C();