<?php

/**
 * author：MierX
 * github：https://github.com/MierX/StudyPhp
 * create：21.7.20 17:03
 * motto ：有志者，事竟成
 */

//ob_start();
//ob_end_clean();
echo 'abc';
session_start();
header("content-type: text/html;charset=utf-8");
$_SESSION['a'] = 'abc';