<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.2.20 16:18
motto：有志者，事竟成
-->
<?php
/**
 * 开启session
 */
function sessionStart()
{

    var_dump('Start');
}

/**
 * 结束session
 */
function sessionEnd()
{

    var_dump('End');
}

/**
 * 读取session
 */
function sessionRead()
{

    var_dump('Read');
}

/**
 * 写入session
 * @param $sessionName
 * @param $sessionContent
 */
function sessionWrite($sessionName, $sessionContent)
{

    var_dump('Write');
}

/**
 * 删除session
 */
function sessionDel()
{

    var_dump('Del');
}

/**
 * GCsession
 */
function sessionGC()
{

    var_dump('GC');
}

session_set_save_handler('sessionStart', 'sessionEnd', 'sessionRead', 'sessionWrite', 'sessionDel', 'sessionGC');

session_start();
sleep(3);
session_destroy();