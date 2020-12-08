<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：20.12.8 14:58
motto：有志者，事竟成
-->
<?php
// 删除
$sxe = simplexml_load_file('19.xml');
foreach ($sxe->book as $book) {
    unset($book->year);
}
$sxe->saveXML('25.xml');