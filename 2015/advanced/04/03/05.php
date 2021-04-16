<?php

/**
 * author：MierX
 * github：https://github.com/MierX/StudyPhp
 * create：21.4.15 15:50
 * motto ：有志者，事竟成
 */

namespace beijing;
function test()
{
    echo '1';
}

const TEST = '2';

function test2()
{
    echo '3';
}

include "06.php"; // 引入公共文件
echo \TEST; // test
echo "<hr />";
echo TEST; // 2
echo "<hr />";
test2(); // 3
echo "<hr />";
\test2(); // test2
echo "<hr />";
test3();
