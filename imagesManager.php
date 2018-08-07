<?php

/**
 * Creates a list of image html tags from a directory
 * @param $dir Path of the directory in which the images are
 * @return string List of image html tags
 */
    function getHtmlImagesList($dir) {
        $files = scandir($dir);
        $res = "";
        foreach ($files as $file) {
            if ($file != "." && $file != "..") {
                $res .= htmlImgTag($dir, $file);
            }
        }
        return $res;
    };

    function htmlImgTag($dir, $file) {
        $name = pathinfo($file, PATHINFO_FILENAME);
        return '<img id="' . $name . '" crossorigin="anonymous" src="' . $dir . '/' . $file . '"><br/>';
    }

    function getEntityImagesList($dir) {
        $files = scandir($dir);
        $res = "";
        foreach ($files as $file) {
            if ($file != "." && $file != "..") {
                $filename = pathinfo($file, PATHINFO_FILENAME);
                $res .= entityImgTag($filename);
            }
        }
        return $res;
    }
    function entityImgTag($filename) {
        return '<a-entity template="src: #link" data-src="#' . $filename . '" data-thumb="#' . $filename . '"></a-entity>';
    }
?>