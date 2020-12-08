<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：20.12.8 14:22
motto：有志者，事竟成
-->
<?php
$sxe = simplexml_load_file('19.xml');
$tab = "<table border='1' width='600'>";
$tab .= "<tr><th>title</th><th>author</th><th>year</th><th>price</th></tr>";
foreach ($sxe->book as $book) {
    $tab .= "<tr>";
    $tab .= "<td>{$book->title}</td>";
    $tab .= "<td>{$book->author}</td>";
    $tab .= "<td>{$book->year}</td>";
    $tab .= "<td>{$book->price}</td>";
    $tab .= "</tr>";
}
$tab .= '</table>';
echo $tab;