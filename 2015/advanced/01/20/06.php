<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.2.20 15:05
motto：有志者，事竟成
-->
<?php
session_start();

$_SESSION['user'] = 'test';
$_SESSION['psd'] = md5(123456);

$_SESSION['psd'] = md5(654321);

unset($_SESSION['psd']);

var_dump($_SESSION['user']);
@var_dump($_SESSION['psd']);