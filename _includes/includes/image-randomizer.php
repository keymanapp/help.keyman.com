<?php

if(!empty($_SERVER['DOCUMENT_ROOT'])) {
  $imgDir = $_SERVER['DOCUMENT_ROOT'] . '/cdn/dev/img/sil-logos-2024/';
  $img = glob($imgDir . '*.{png,jpg,jpeg,gif}', GLOB_BRACE);
  if(!empty($img)) {
    shuffle($img);
    return str_replace($_SERVER['DOCUMENT_ROOT'], '', $img[0]);
  }
}
echo "Invalid Path!";

?>