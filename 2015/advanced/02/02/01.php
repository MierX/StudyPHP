<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：20.12.7 16:13
motto：有志者，事竟成
-->
<?php
// 增加节点
$dom = new DOMDocument('1.0', 'utf-8');
$dom->load('../01/02.xml');
$newBook = $dom->createElement('book');
$newTitle = $dom->createElement('title', 'php学习宝典');
$newAuthor = $dom->createElement('author', 'mier');
$newYear = $dom->createElement('year', '2020');
$newPrice = $dom->createElement('price', '0.00');
$newBook->appendChild($newTitle);
$newBook->appendChild($newAuthor);
$newBook->appendChild($newYear);
$newBook->appendChild($newPrice);
$dom->documentElement->appendChild($newBook);
$dom->save('02.xml');