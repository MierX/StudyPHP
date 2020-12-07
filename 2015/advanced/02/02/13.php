<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：20.12.7 17:46
motto：有志者，事竟成
-->
<?php
if (empty($_POST['word'])) header('LOCATION:http://study.php.local/2015/advanced/02/02/12.html');
$word = trim($_POST['word']);
$res = '暂无该词条';
if (!file_exists('11.xml')) header('LOCATION:http://study.php.local/2015/advanced/02/02/12.html');
$dom = new DOMDocument('1.0', 'utf-8');
$dom->load('11.xml');
$xpath = new DOMXPath($dom);
$query = "//word[name='$word']/mean";
$nodes = $xpath->query($query);
if ($nodes->length) $res = $nodes->item(0)->nodeValue;

//$names = $dom->getElementsByTagName('name');
//$means = $dom->getElementsByTagName('mean');
//foreach ($names as $k => $name) {
//    if ($name->nodeValue == $word) {
//        $res = $means->item($k)->nodeValue;
//        break;
//    } else {
//        continue;
//    }
//}
echo $res;