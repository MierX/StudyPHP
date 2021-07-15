<?php

/**
 * author：MierX
 * github：https://github.com/MierX/StudyPhp
 * create：21.7.14 17:03
 * motto ：有志者，事竟成
 */

// 实现session在memcache中存储
ini_set("session.save_handler", "memcache");
ini_set("session.save_path", "tcp://172.16.4.110:11211");

// 正常操作session
session_start();
$_SESSION['username'] = "xiaoming";
echo session_id();