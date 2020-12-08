<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：20.12.8 14:33
motto：有志者，事竟成
-->
<?php
// 更新
$sxe = simplexml_load_file('19.xml');
foreach ($sxe->book as $book) {
    $book->title = '哈哈哈';
}
$sxe->saveXML('23.xml');