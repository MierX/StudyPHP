<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.3.2 11:01
motto：有志者，事竟成
-->
<?php
// 创建画布
$width = 1000;
$height = 500;
$image = imagecreatetruecolor($width, $height);

// 分配颜色
$blue = imagecolorallocate($image, 0, 0, 255);
$red = imagecolorallocate($image, 255, 0, 0);

// 填充画布
imagefill($image, 0, 0, $blue);

// 输出图像
imagepng($image, './blue.png');

// 显示图像
echo '<img src="blue.png" alt=""/>';

// 销毁图像
imagedestroy($image);