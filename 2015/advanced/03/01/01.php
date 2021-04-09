<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.3.31 15:31
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

// 设置缓存有效期
$smarty->cache_lifetime = 60;

// 开启调试模式
$smarty->debugging = false;

// 调用assign方法分配数据
$smarty->assign('level', '15');
$smarty->assign('title', 'smarty模板');
$smarty->assign('content', 'smarty模板是一个强大的php模板引擎asdasdjasdjioasdjioajsdioajsiod');
$smarty->assign('name', ['张三', '李四', '王五', '赵六']);

// 定义常量
const PI = 3.1415926;

$sex = 1;
$smarty->assign('sex', $sex);

// 数组循环
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
$smarty->assign('arr', $arr);

// 调用display方法载入模板
$id = rand(0, 10);
var_dump($id);
$smarty->display("index.html");