<?php

/**
 * author：MierX
 * github：https://github.com/MierX/StudyPhp
 * create：21.6.2 09:49
 * motto ：有志者，事竟成
 */

$fp = fopen("./04.txt", 'a');
fwrite($fp, 'php' . time()."\n");
fclose($fp);