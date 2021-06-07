<?php

/**
 * author：MierX
 * github：https://github.com/MierX/StudyPhp
 * create：21.6.7 11:04
 * motto ：有志者，事竟成
 */

header('content-type: text/html;charset=utf-8');

// 获得最新的聊天消息
$link = @mysql_connect("localhost:3306", "root", "123456") or die();
mysql_select_db('study');
mysql_query('set names utf8');

$maxId = $_GET['maxId'];

$sql = "select * from ajax_msg where id > {$maxId}";
$rs = mysql_query($sql);

$info = [];
while ($rst = mysql_fetch_assoc($rs)) {
    $info[] = $rst;
}

echo json_encode($info);