<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.12 14:40
motto：有志者，事竟成
-->
<?php

require_once '04.php';

class userModel extends model
{

    protected $table = 'user';

    public function __construct()
    {
        parent::getInstance('user');
    }
}