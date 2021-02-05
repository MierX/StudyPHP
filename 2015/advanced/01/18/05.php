<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.12 16:18
motto：有志者，事竟成
-->
<?php
require_once '01.php';

function D($modelName)
{
    return modelFactory::getInstance($modelName);
}