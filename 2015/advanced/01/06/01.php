<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：20.11.18 14:53
motto：有志者，事竟成
-->
<?php
function jc($n)
{
    return $n == 1 ? $n : $n * jc($n-1);
}

echo jc(5);