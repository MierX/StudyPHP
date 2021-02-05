<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.12 14:38
motto：有志者，事竟成
-->
<?php
require_once '05.php';

D('userModel')
    ->add([
        'name' => '王五',
        'account' => 'test01254',
        'password' => md5(123456),
        'addtime' => date('Y-m-d H:i:s', time()),
    ]);

$rs = D('userModel')
    ->field('*')
    ->order('addtime desc')
    ->limit('0, 3')
    ->select();
var_dump($rs);