<?php

/**
 * author：MierX
 * github：https://github.com/MierX/StudyPhp
 * create time：21.4.7 17:05
 * motto：有志者，事竟成
 */


namespace Home\Controller;


use Think\Controller;

class UserController extends Controller
{
    /**
     * 登录系统
     */
    public function login()
    {
        // 调用试图模板
        $this->display();

        // echo "login";
    }

    /**
     * 退出系统
     */
    public function logout()
    {
        $this->display("login");
    }

    /**
     * 注册
     */
    public function register()
    {
        $this->display();
    }
}