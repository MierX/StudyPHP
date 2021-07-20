<?php

/**
 * author：MierX
 * github：https://github.com/MierX/StudyPhp
 * create：21.7.20 11:04
 * motto ：有志者，事竟成
 */

// 根据id获得指定的一条记录信息
$id = rand(1, 10);
$yu = $id % 5;
$sql = "select * from goods_{$yu} where id = {$id}";

// 给指定的分表写入指定的记录信息
$maxId = "select max(id) from goods_fu";
$trueId = $maxId+1;
$yu = $trueId % 5;
$sql = "insert into goods_{$yu} values(...)";
$sql = "insert into goods_{$yu} values ({$trueId})";
