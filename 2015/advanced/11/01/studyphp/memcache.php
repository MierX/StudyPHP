<?php

/**
 * author：MierX
 * github：https://github.com/MierX/StudyPhp
 * create：21.7.14 15:26
 * motto ：有志者，事竟成
 */

$mem = new Memcache();
$conn = $mem->connect('172.16.4.110', 11211);
$mem->set('test', 'test', 1, 60);
$test = $mem->get('test');
var_dump($test);