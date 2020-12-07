<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：20.12.7 11:31
motto：有志者，事竟成
-->
<?php
// 对于02.xml将其以表格的形式显示到页面中
$dom = new DOMDocument('1.0', 'utf-8');
$dom->load('02.xml');

// 搜索具有给定标签名称的所有元素
$titles = $dom->getElementsByTagName('title');

// 检索索引指定的节点
$title1 = $titles->item(0);

// 此节点的值，取决于其类型
$title = $title1->nodeValue;

var_dump($titles);