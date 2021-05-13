<?php

/**
 * author：MierX
 * github：https://github.com/MierX/StudyPhp
 * create：21.5.6 09:19
 * motto ：有志者，事竟成
 */

/**
 * @param $oldPath
 * @param $newPath
 */
function readDirs($oldPath, $newPath)
{

    $handle = opendir($oldPath);
    while (false !== ($filename = readdir($handle))) {
        if ($filename === '.' || $filename === '..') {
            continue;
        }

        if (is_dir("{$oldPath}/{$filename}")) {
            readDirs("{$oldPath}/{$filename}", $newPath);
        } else {
            echo "{$oldPath}/{$filename}<hr />";
            if (rename("{$oldPath}/{$filename}", "{$newPath}/{$filename}")) {
                @rmdir("{$oldPath}/{$filename}");
            }
        }
    }

    closedir($handle);
}

/**
 * @param $oldPath
 * @param $newPath
 */
function readDirsV2($oldPath, $newPath)
{

    $handle = opendir($oldPath);
    while (false !== ($filename = readdir($handle))) {
        if ($filename === '.' || $filename === '..') {
            continue;
        }

        if (is_dir("{$oldPath}/{$filename}")) {
            readDirs("{$oldPath}/{$filename}", $newPath);
        } else {
            $_filename = str_replace('.null', '.gif', $filename);
            echo "{$oldPath}/{$_filename}<hr />";
            if (rename("{$oldPath}/{$filename}", "{$newPath}/{$_filename}")) {
                @rmdir("{$oldPath}/{$_filename}");
            }
        }
    }

    closedir($handle);
}

set_time_limit(0);
$oldPath = "D:/Download/test";
$newPath = "D:/Download/test2";
readDirsV2($oldPath, $newPath);