<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.4.6 15:23
motto：有志者，事竟成
-->
<?php
// 引入smarty类
include "../libs/Smarty.class.php";

// 实例化对象
$smarty = new Smarty();

// 设置模板文件目录
$smarty->setTemplateDir("../templates");

// 设置模板编译文件目录
$smarty->setCompileDir("../templates_c");

// 开启缓存
$smarty->caching = true;

// 设置缓存目录
$smarty->setCacheDir('../cache');
$smarty->clearAllCache();