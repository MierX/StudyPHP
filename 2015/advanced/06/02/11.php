<?php

/**
 * author：MierX
 * github：https://github.com/MierX/StudyPhp
 * create：21.6.7 14:40
 * motto ：有志者，事竟成
 */

header('content-type: text/html;charset:utf-8');

$link = @mysql_connect('localhost', 'root', '123456');
mysql_select_db('study', $link);
mysql_query('set names utf8');

print_r($_POST);