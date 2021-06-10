<?php

/**
 * author：MierX
 * github：https://github.com/MierX/StudyPhp
 * create：21.6.10 16:35
 * motto ：有志者，事竟成
 */

if ($_GET) {
    echo json_encode($_GET);
} elseif ($_POST) {
    echo json_encode($_POST);
} else {
    echo 'no';
}