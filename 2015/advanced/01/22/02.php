<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.3.2 11:28
motto：有志者，事竟成
-->
<?php

// 处理码值
$str = 'ABCEFGHIJKLMNPQRSTUVWXYZ123456789abcefghijklmnpqrstuvwxyz';
$len = 4;
$code = '';
for ($i = 1; $i <= $len; ++$i) {
    $index = mt_rand(0, strlen($str) - 1);
    $code .= $str[$index];
}

// 保存验证码
$_SESSION['code'] = $code;
var_dump($_SESSION['code']);

// 获取背景图片
$bg_file = "./blue.png";

// 基于背景图片创建画布
$image = imagecreatefrompng($bg_file);

// 颜色
$white = imagecolorallocate($image, 255, 255, 255);

// 填充验证码
for ($i = 0; $i < $len; ++$i) {
    imagestring($image, mt_rand(1, 5), imagesx($image) / 2 + (15 * $i), imagesy($image) / 2, $code[$i], $white);
}

// 生成验证码图片
imagepng($image, './code.png');

// 显示图片
echo "<img alt='' src='./code.png' />";

// 销毁图片
imagedestroy($image);