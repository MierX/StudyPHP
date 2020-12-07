<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：20.12.7 16:33
motto：有志者，事竟成
-->
<?php
// 更新XML
$dom = new DOMDocument('1.0', 'utf-8');
$dom->load('04.xml');
$prices = $dom->getElementsByTagName('price');
foreach ($prices as $price) {
    $price->nodeValue *= 0.2;
}
$dom->save('06.xml');