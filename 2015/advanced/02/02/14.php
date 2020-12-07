<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：20.12.7 18:03
motto：有志者，事竟成
-->
<?php
$dom = new DOMDocument('1.0', 'utf-8');
$dom->load('02.xml');
$xpath = new DOMXPath($dom);
$query = '/bookstore/book/title[1]';
$res = $xpath->query($query);
var_dump($res);
$query = '//title';
$res = $xpath->query($query);
var_dump($res);
$query = '.';
$res = $xpath->query($query);
var_dump($res);
$query = '..';
$res = $xpath->query($query);
var_dump($res);
$query = '/bookstore/title[@name="asd"]';
$res = $xpath->query($query);
var_dump($res);