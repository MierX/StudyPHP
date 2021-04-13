<?php

//后台商品控制器
//命名空间
namespace Admin\Controller;

use Model\GoodsModel;
use Think\Controller;

class GoodsController extends Controller
{
    //列表展示
    function showlist()
    {
        $model = new GoodsModel();
        var_dump($model);
        $this->display();
    }

    //添加商品
    function tianjia()
    {
        // $model = new \Model\EnglishModel();
        $model = D('goods')->select();
        var_dump($model);
        $this->display();
    }

    //修改商品
    function upd()
    {
        $this->display();
    }
}
