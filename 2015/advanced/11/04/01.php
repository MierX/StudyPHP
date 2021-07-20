<?php

/**
 * author：MierX
 * github：https://github.com/MierX/StudyPhp
 * create：21.7.20 15:44
 * motto ：有志者，事竟成
 */

// 首先开启php缓冲区（ob:output_buffering）
ob_start();

// 然后实现一个简单的静态化过程
for ($i = 0; $i < 10; ++$i) {
    echo "{$i}<hr />";
}

// 然后抓取缓冲区的内容（浏览器上看到的静态内容都会被缓冲区收集）
$con = ob_get_contents();

// 利用抓取到的内容制作静态页面（文件）
file_put_contents("02.html", $con);

// 删除缓冲区内容并关闭
ob_end_clean();