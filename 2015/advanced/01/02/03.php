<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：20.11.6 15:53
motto：有志者，事竟成
-->
<?php
if (!empty($_POST)) {
    var_dump($_POST);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <label>
        <input type="text" name="user" value=""/>
    </label>
    <button type="submit">提交</button>
</form>
</body>
</html>
