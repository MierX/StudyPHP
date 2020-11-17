<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：20.11.17 14:37
motto：有志者，事竟成
-->
<?php
define('GJ', '5');
define('MJ', '3');
define('XJ', '0.33');


for ($gj = 0; $gj <= 100 / GJ; ++$gj) {
    for ($mj = 0; $mj <= (100 - ($gj * GJ)) / 3; ++$mj) {
        $xj = 100 - $gj - $mj;
        if ($xj % 3 != 0) continue;
        $zj = $gj * GJ + $mj * MJ + $xj * XJ;
        if ($zj <= 100 && round($zj) == 100) echo "公鸡：$gj 只，母鸡：$mj 只，小鸡：$xj 只<br />";
    }
}

