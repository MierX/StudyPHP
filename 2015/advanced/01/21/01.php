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

}
/**
 * 结束session
 */
function sessionEnd()
{

}
/**
 * 读取session
 */
function sessionRead()
{

}

/**
 * 写入session
 */
function sessionWrite()
{

}

/**
 * 删除session
 */
function sessionDel()
{

}

/**
 * GCsession
 */
function sessionGC()
{

}

session_set_save_handler(sessionStart(), sessionEnd(), sessionRead(), sessionWrite(), sessionDel(), sessionGC());