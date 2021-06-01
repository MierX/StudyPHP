<?php

/**
 * author：MierX
 * github：https://github.com/MierX/StudyPhp
 * create：21.5.31 16:46
 * motto ：有志者，事竟成
 */

// php正则
$str = 'this is 20210531 day, tomorrow is 20210601';
$reg = "/\d+/";

// 单次匹配
preg_match($reg, $str, $rs);
var_dump($rs);

// 全局匹配
preg_match_all($reg, $str, $rs);
var_dump($rs);

// 反向匹配
$str = '2021abc';
$reg = "/(?<=\d{4})[a-z]+/";
preg_match($reg, $str, $rs);
var_dump($rs);

// 反向不匹配
$str = '2021abc';
$reg = "/(?<!\d{4})[a-z]+/";
preg_match($reg, $str, $rs);
var_dump($rs);