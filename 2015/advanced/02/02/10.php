<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：20.12.7 17:24
motto：有志者，事竟成
-->
<?php
if (empty($_POST['word']) || empty($_POST['explain']) || empty($_POST['eg'])) header('LOCATION:http://study.php.local/2015/advanced/02/02/09.html');
$word = $_POST['word'];
$explain = $_POST['explain'];
$eg = $_POST['eg'];

$dom = new DOMDocument('1.0', 'utf-8');

if (file_exists('11.xml')) {
    $dom->load('11.xml');
    $root = $dom->documentElement;
} else {
    $book = $dom->createElement('book');
    $root = $dom->appendChild($book);
}
$wordNode = $dom->createElement('word');
$nameNode = $dom->createElement('name', $word);
$meanNode = $dom->createElement('mean', $explain);
$lxNode = $dom->createElement('lx', $eg);
$wordNode->appendChild($nameNode);
$wordNode->appendChild($meanNode);
$wordNode->appendChild($lxNode);
$root->appendChild($wordNode);
$dom->save('11.xml');
header('LOCATION:http://study.php.local/2015/advanced/02/02/09.html');