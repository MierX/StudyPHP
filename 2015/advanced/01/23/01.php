<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.3.2 15:50
motto：有志者，事竟成
-->
<?php

var_dump($_FILES);
var_dump($_FILES['file']);

$rs = uploadFile($_FILES['file']);

var_dump($rs);

function uploadFile($fileInfo)
{

    if ($fileInfo['error']) {
        echo "上传文件存在错误！";
        return false;
    }

    // 获取后缀名
    $ext = strchr($fileInfo['name'], '.');

    // 判断后缀是否符合要求
    $extArr = ['.png', '.jpeg'];
    if (!in_array($ext, $extArr)) {
        echo "文件格式不符合要求！";
        return false;
    }

    // 判断文件大小
    if ($fileInfo['size'] > 102400) {
        echo "文件过大！";
        return false;
    }

    // 设置目标文件的位置和名字
    $dstName = uniqid('test', true) . $ext;
    $uploadFile = './';

    // 划分子目录
    $uploadFile .= 'test/';
    if (!file_exists($uploadFile)) {
        mkdir($uploadFile, 777, true);
    }

    // 移动
    if (move_uploaded_file($fileInfo['tmp_name'], $uploadFile . $dstName)) {
        var_dump('success');
    } else {
        var_dump('error');
    }

    return true;
}