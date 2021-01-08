<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.6 15:07
motto：有志者，事竟成
-->
<?php

/**
 * 设计如下几个类：
 * 商品类：有名称、价钱、库存，可显示自身信息
 * 手机类，是商品的一种，并且有品牌、产地，可显示自身信息
 * 图书类，是商品的一种，有作者、出版社
 * 创建一个手机对象，并显示自身信息
 * 创建一个图书对象，并显示自身信息
 * 扩展要求：尽量体现封装性就更好了
 */
class product
{

    private $name;
    private $price;
    private $stock;

    protected function __construct($name, $price, $stock)
    {

        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }

    protected function showInfo()
    {

        echo "<p>商品名称：<font style='color: red'>{$this->name}</font></p>";
        echo "<p>商品价格：{$this->price}元</p>";
        echo "<p>商品库存：{$this->stock}</p>";
    }
}

class mobile extends product
{

    protected $brand;
    protected $origin;

    public function __construct($name, $price, $stock, $brand, $origin)
    {

        parent::__construct($name, $price, $stock);
        $this->brand = $brand;
        $this->origin = $origin;
    }

    public function showInfo()
    {

        parent::showInfo();
        echo "<p>商品品牌：{$this->brand}</p>";
        echo "<p>商品产地：{$this->origin}</p>";
    }
}

class book extends product
{

    protected $author;
    protected $press;

    public function __construct($name, $price, $stock, $author, $press)
    {

        parent::__construct($name, $price, $stock);
        $this->author = $author;
        $this->press = $press;
    }

    public function showInfo()
    {

        parent::showInfo();
        echo "<p>作者：{$this->author}</p>";
        echo "<p>出版社：{$this->press}</p>";
    }
}

$mobile = new mobile('联想3280', '1299', '10000', 'Lenovo', '北京上地信息产业基地');
$mobile->showInfo();

$book = new book('php从入门到精通', '99.9', '10000', '哈哈', '人民出版社');
$book->showInfo();

$mobile1 = new mobile('华硕飞行堡垒FX50J', '4899', '520', 'ASUS', '华硕产业基地');
$mobile1->showInfo();