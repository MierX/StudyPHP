<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.7 16:36
motto：有志者，事竟成
-->
<?php

//class player
//{
//
//    function play()
//    {
//
//
//    }
//
//
//    function stop()
//    {
//
//
//    }
//
//
//    function next()
//    {
//
//
//    }
//
//
//    function prev()
//    {
//
//
//    }
//}
//
//class usbSet
//{
//
//    const USBWIDTH = 12;
//    const USBHEIGHT = 5;
//
//    function dataIn()
//    {
//
//
//    }
//
//
//    function dataOut()
//    {
//
//
//    }
//}
//
//// 这样只能继承一个类player，不能继承usbSet
//class mp3Player extends player
//{
//
//
//}
interface player
{

    function play();


    function stop();


    function next();


    function prev();
}

interface usbSet
{

    const USBWIDTH = 12;
    const USBHEIGHT = 5;

    function dataIn();


    function dataOut();
}

class mp3Player implements player, usbSet
{


    function play()
    {
    }

    function stop()
    {
    }

    function next()
    {
    }

    function prev()
    {
    }

    function dataIn()
    {
    }

    function dataOut()
    {
    }
}