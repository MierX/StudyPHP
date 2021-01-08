<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.6 15:35
motto：有志者，事竟成
-->
<?php

// 抽象类
abstract class monster
{

    protected $blood = 100;

    abstract protected function attack();
}

// 蛇怪类
class snake extends monster
{


    public function attack()
    {

        echo "<p>悄悄靠近了你，然后迅速咬了一口</p>";
        $this->blood--; // 扣除一点血
    }
}

// 虎怪类
class tiger extends monster
{

    public function attack()
    {

        echo "<p>猛扑向了你</p>";
        $this->blood--; // 扣除一点血
    }
}

// 妖怪类
class goblin extends monster
{

    public function attack()
    {

        echo "<p>妖怪攻击了你</p>";
        $this->blood--; // 扣除一点血
    }
}

$a = new snake();
$a->attack();

$b = new tiger();
$b->attack();