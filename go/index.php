<?php
  $lang = $_GET['language'];
  $kbd = $_GET['keyboard'];
  $kbd = str_replace('Keyboard_','',$kbd);
  $kbd = str_replace('keyboard_','',$kbd);
  $link = '/keyboard/'.$kbd;
  header('location: '.$link);
?>