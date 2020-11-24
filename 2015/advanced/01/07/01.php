<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：20.11.20 10:00
motto：有志者，事竟成
-->
<?php
$arr = array(
    1 => 3,
    'a1' => 11,
    3 => 5,
);
$_arr = each($arr);
print_r($_arr);
echo '<br />';
$_arr = each($arr);
print_r($_arr);
echo '<br />';