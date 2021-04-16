<?php

// 后台管理员控制器
// 命名空间
namespace Admin\Controller;

use Think\Controller;
use Think\Verify;

class ManagerController extends Controller
{
    // 登录系统方法
    function login()
    {
        $this->display();
    }

    // 输出验证码
    function verifyImg()
    {
        ob_clean();
        header("Content-type: image/png");
        $cfg = [
            'imageH' => 45,
            'imageW' => 100,
            'length' => 4,
            'fontSize' => 15,
        ];
        $very = new Verify($cfg);
        $very->entry();
    }

    function checkVerify()
    {
        $very = new Verify();
        dump($very->check($_GET['num']));
    }
}
