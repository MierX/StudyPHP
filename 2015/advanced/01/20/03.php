<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.2.20 10:21
motto：有志者，事竟成
-->
<?php
setcookie('test2', md5(654321), time() - 1);
var_dump($_COOKIE['test2']);