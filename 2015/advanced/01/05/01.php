<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：20.11.17 11:06
motto：有志者，事竟成
-->
<?php
// 输出图案，其中的行数可以由变量控制
// 以下假设变量为4
$n = 4;
define('KG', "&ensp;");

// 图形A
echo '图形A<br />';
for ($i = 1; $i <= $n; ++$i) {
    for ($j = 1; $j <= $n; ++$j) {
        echo '*';
    }
    echo '<br />';
}
echo '<hr />';

// 图形B
echo '图形B<br />';
for ($i = 1; $i <= $n; ++$i) {
    for ($j = 1; $j <= $i; ++$j) {
        echo '*';
    }
    echo '<br />';
}
echo '<hr />';

// 图形C
echo '图形C<br />';
for ($i = 1; $i <= $n; ++$i) {
    for ($j = 1; $j <= 2 * $i - 1; ++$j) {
        echo '*';
    }
    echo '<br />';
}
echo '<hr />';

// 图形D
echo '图形D<br />';
for ($i = 1; $i <= $n; ++$i) {
    for ($k = 1; $k <= $n - $i; ++$k) {
        echo KG;
    }
    for ($j = 1; $j <= 2 * $i - 1; ++$j) {
        echo '*';
    }
    for ($k = 1; $k <= $n - $i; ++$k) {
        echo KG;
    }
    echo '<br />';
}
echo '<hr />';

// 图形E
echo '图形E<br />';
for ($i = 1; $i <= $n; ++$i) {
    for ($k = 1; $k <= $n - $i; ++$k) {
        echo KG;
    }
    for ($j = 1; $j <= 2 * $i - 1; ++$j) {
        if ($j == 1 || $j == 2 * $i - 1) {
            echo '*';
        } else {
            echo KG;
        }
    }
    for ($k = 1; $k <= $n - $i; ++$k) {
        echo KG;
    }
    echo '<br />';
}
echo '<hr />';

// 图形F
echo '图形E<br />';
for ($i = 1; $i <= $n; ++$i) {
    for ($k = 1; $k <= $n - $i; ++$k) {
        echo KG;
    }
    for ($j = 1; $j <= 2 * $i - 1; ++$j) {
        if ($i == $n) {
            echo '*';
        } else {
            if ($j == 1 || $j == 2 * $i - 1) {
                echo '*';
            } else {
                echo KG;
            }
        }
    }
    for ($k = 1; $k <= $n - $i; ++$k) {
        echo KG;
    }
    echo '<br />';
}
echo '<hr />';

// 图形G
echo '图形G<br />';