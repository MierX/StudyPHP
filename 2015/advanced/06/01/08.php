<?php

/**
 * author：MierX
 * github：https://github.com/MierX/StudyPhp
 * create：21.6.2 14:47
 * motto ：有志者，事竟成
 */

$exists_name = [
    'mary',
    'jack',
    'linken',
    'bier'
];
$name = $_GET['name'];
if (in_array($name, $exists_name)) {
    echo '用户名已经占用';
} else {
    echo '用户名可以使用';
}

//print_r($_GET);