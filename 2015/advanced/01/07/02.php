<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：20.11.20 10:07
motto：有志者，事竟成
-->
<?php
$arr = array(
    0 => 0,
    1 => 11,
    3 => 33,
    2 => 44,
);
list($v1) = $arr;
list($v2,$v3) = $arr;
list($n1, $n2, $n100, $n4) = $arr;
echo "$v1\n";
echo "$v2\n";
echo "$v3\n";
echo "$n1\n";
echo "$n2\n";
echo "$n100\n";
echo "$n4\n";