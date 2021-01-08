<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.8 17:32
motto：有志者，事竟成
-->
<?php
$a = 1;
$b = 'as';
$c = [1, 2, '1sad'];
$_a = serialize($a);
$_b = serialize($b);
$_c = serialize($c);
var_dump($_a);
var_dump($_b);
var_dump($_c);

$_a = unserialize($_a);
$_b = unserialize($_b);
$_c = unserialize($_c);
var_dump($_a);
var_dump($_b);
var_dump($_c);