<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：20.12.7 14:09
motto：有志者，事竟成
-->
<?php

// 对于02.xml将其以表格的形式显示到页面中
$dom = new DOMDocument('1.0', 'utf-8');
$dom->load('02.xml');

// 搜索具有给定标签名称的所有元素
$titles = $dom->getElementsByTagName('title');
$authors = $dom->getElementsByTagName('author');
$years = $dom->getElementsByTagName('year');
$prices = $dom->getElementsByTagName('price');
$len = $titles->length;

$tab = "
    <table border='1' width='600'>
        <tr>
            <th>title</th>
            <th>author</th>
            <th>year</th>
            <th>price</th>
        </tr>";
for ($i = 0; $i < $len; ++$i) {
    $tab .= "
            <tr>
                <td>{$titles->item($i)->nodeValue}</td>
                <td>{$authors->item($i)->nodeValue}</td>
                <td>{$years->item($i)->nodeValue}</td>
                <td>{$prices->item($i)->nodeValue}</td>
            </tr>";
}
$tab .= "</table>";

echo $tab;