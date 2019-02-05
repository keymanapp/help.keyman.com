<?php
  if(file_exists('../nav.php'))
    require_once('../nav.php');
  //enumerate files
  
  global $index_content;
  
  $files = glob('*.php');
  $items = array();
  foreach($files as $file) {
    if($file == '_nav.php') {
      continue;
    }
    $s = @file_get_contents($file);
    if(preg_match('/<h1[^>]*>(.+?)<\/h1>/i', $s, $sub)) {
      $title = $sub[1];
    } else {
      $title = $file;
      //continue; // not a valid .php file
    }
    
    $items[$file] = $title;
  }
  
  $index_content = "<ul>";
  foreach($items as $file => $title) {
    $index_content .= "<li><a href='$file' title='".strip_tags($title)."'>$title</a></li>";
  }
  $index_content .= "</ul>";
?>