<?php

/**
 * author：MierX
 * github：https://github.com/MierX/StudyPhp
 * create：21.4.15 16:01
 * motto ：有志者，事竟成
 */

const TEST = 'test';

function test2()
{
    echo 'test2';
}

function test3()
{
    echo 'test3';
}

include_once "08.php";
echo \TEST; // test
echo "<hr />";
echo beijing\TEST; // 2
echo "<hr />";
beijing\test2(); // 3
echo "<hr />";
\test2(); // test2
echo "<hr />";
test3();
