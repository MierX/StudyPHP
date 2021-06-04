<?php

/**
 * author：MierX
 * github：https://github.com/MierX/StudyPhp
 * create：21.6.4 15:53
 * motto ：有志者，事竟成
 */

echo '表单提交：';
print_r($_POST);
echo '文件上传：';
print_r($_FILES);

// 保存文件
$path = './';
$name = date('YmdHis', time());
$name_arr = explode('.', $_FILES['headIcon']['name']);
$ext = '.' . $name_arr[count($name_arr) - 1];
$pathName = $path.$name.$ext;
if(move_uploaded_file($_FILES['headIcon']['tmp_name'], $pathName)) {
    echo 'ok';
} else {
    echo 'error';
}