<?php

/**
 * author：MierX
 * github：https://github.com/MierX/StudyPhp
 * create：21.4.15 14:56
 * motto ：有志者，事竟成
 */

namespace beijing\haidian\xisanqi;
const USER = 1;

namespace liaoning\shenyang\tiexi\xisanq;
const USER = 2;

namespace liaoning\shenyang\tiexi;
const USER = 2;

echo xisanq\USER;
// 限定名称访问元素
echo xisanqi\USER; // Fatal error: Undefined constant 'liaoning\shenyang\tiexi\xisanqi\USER' in D:\Project\Self\StudyPhp\2015\advanced\04\03\04.php on line 17