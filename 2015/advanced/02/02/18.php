<!--
author：MierX
github：https://github.com/MierX/StudyPhp
create time：20.12.8 09:51
motto：有志者，事竟成
-->
<?php
// 利用SimpleXMLElement追加02.xml一本书并保存为19.xml
$sxe = simplexml_load_file('02.xml');
$newBook = $sxe->addChild('book');
$newBook->addAttribute('id', 99);
$newTitle = $newBook->addChild('title', 'xml编程');
$newTitle->addAttribute('lang', 'cn');
$newBook->addChild('author', 'mierX');
$newBook->addChild('year', '2020');
$newBook->addChild('price', '9.9');
$sxe->saveXML('19.xml');