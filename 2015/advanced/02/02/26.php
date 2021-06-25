<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：20.12.8 15:13
motto：有志者，事竟成
-->
<?php
// 制作RSS订阅源
$conn = mysqli_connect('localhost', 'root', '123456');
mysql_select_db('blog');
mysql_query('set names utf8');
$sql = "select * from blog";
$res = mysql_query($sql);
$blogs = array();
while ($row = mysql_fetch_assoc($res)) {
    $blogs[] = $row;
}
$xml = "<?xml version='1.0' encoding='utf-8'>
        <rss version='2.0'>
            <channel>
                <title>PHP</title>
                <link>test.com</link>
                <description>学</description>
                <language>zh-cn</language></channel></rss>";
foreach ($blogs as $blog) {
    $xml .= "<item>
                <title>{$blog['title']}</title>
                <link>{$blog['link']}</link>
                <pubDate>".date('Y-m-d H:i:s', $blog['add_time'])."</pubDate>
                <description>{$blog['description']}</description>
            </item>";
}
$xml .= "</channel></rss>";
header("Content-Type:text/xml;charset=utf-8");
echo $xml;