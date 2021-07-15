<?php

/**
 * author：MierX
 * github：https://github.com/MierX/StudyPhp
 * create：21.7.14 14:59
 * motto ：有志者，事竟成
 */

$conn = mysql_connect('172.16.4.110:3306', 'root', '123456');
mysql_select_db('test');
mysql_query('set names utf8');
$sql = "select * from goods";
$res = mysql_query($sql);
$arr = array();
while ($row = mysql_fetch_assoc($res)) {
    $arr[] = $row;
}
var_dump($arr);