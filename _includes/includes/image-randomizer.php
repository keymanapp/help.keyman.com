<?php

function randomzer($folder) {
  if(!empty($_SERVER['DOCUMENT_ROOT']) && !empty($folder)) {
    $imgDir = $_SERVER['DOCUMENT_ROOT'] . '/cdn/dev/' . $folder;
    $img = glob($imgDir . '*.{png,jpg,jpeg,gif}', GLOB_BRACE);
    if(!empty($img)) {
      shuffle($img);
      return str_replace($_SERVER['DOCUMENT_ROOT'], '', $img[0]);
    }
  }
  echo "Invalid Path!";
}

?>