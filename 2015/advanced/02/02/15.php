<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：20.12.8 09:38
motto：有志者，事竟成
-->
<?php
//    $data = file_get_contents('02.xml');
//    $sxe = new SimpleXMLElement($data);
    $sxe = simplexml_load_file('02.xml');

    $sxe->saveXML('17.xml');