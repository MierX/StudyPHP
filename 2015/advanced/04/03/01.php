<?php

/**
 * author：MierX
 * github：https://github.com/MierX/StudyPhp
 * create：21.4.15 14:32
 * motto ：有志者，事竟成
 */

namespace test001;
function test()
{
    var_dump('1');
}

const TEST = 1;

namespace test002;
function test()
{
    var_dump('2');
}

const TEST = 2;

echo \test001\TEST;
echo "<hr />";
echo TEST;