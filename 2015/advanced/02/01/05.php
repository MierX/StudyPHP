<?php
// DOM方式操作xml

// 实例化一个DOMDocument对象
$dom = new DOMDocument('1.0', 'utf-8');

// 载入xml文档，将其转成树模型
$dom->load('01.xml');

// 具体的处理过程，根据需求来定

// 将处理完的结果保存回来
$dom->save('06.xml');