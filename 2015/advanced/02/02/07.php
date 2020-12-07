<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：20.12.7 16:41
motto：有志者，事竟成
-->
<?php
// 删除第二本书的year元素
$dom = new DOMDocument('1.0', 'year');
$dom->load('06.xml');
$year = $dom->getElementsByTagName('year')->item(1);
// 通过父节点删除本节点
$year->parentNode->removeChild($year);

// 删除所有书籍的author元素
$authors = $dom->getElementsByTagName('author');
foreach ($authors as $author) {
    $temp[] = $author;
}
foreach ($temp as $value) {
    $value->parentNode->removeChild($value);
}
$dom->save('08.xml');