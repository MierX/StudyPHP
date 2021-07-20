<?php

/**
 * author：MierX
 * github：https://github.com/MierX/StudyPhp
 * create：21.7.20 15:57
 * motto ：有志者，事竟成
 */

ob_start();
$week = "星期二";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新建网页</title>
</head>
<body>
<h2>实现静态化1</h2>
<h2>实现静态化2<?php echo $week; ?></h2>
<?php
$con = ob_get_contents();
file_put_contents('04.html', $con);
ob_end_clean();
?>
</body>
</html>
