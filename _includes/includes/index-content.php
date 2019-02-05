<?php

function get_file_titles($path) {
  $files = glob($path.'*');
  $items = array(); $dirs = array();
  foreach($files as $file) {
    if($file == '.' || $file == '..') {
      continue;
    }
    if($file == '_nav.php' || $file == 'index.php') {
      continue;
    }
    if(preg_match('/^__/', $file)) {
      // These files should not be indexed as they are includes
      continue;
    }

    if(is_dir($path.$file)) {
      if(file_exists($path.$file.'/index.php')) {
        $dirs[$file] = get_file_title($path.$file.'/index.php');
      }
    } else if(preg_match('/\.php$/', $file)) {
      $items[$file] = get_file_title($path.$file);
    }
  }
  
  asort($items, SORT_FLAG_CASE|SORT_STRING);
  asort($dirs, SORT_FLAG_CASE|SORT_STRING);
  
  return $items + $dirs;
}

function get_file_title($filename) {
  $s = @file_get_contents($filename);
  if(preg_match('/<h[12][^>]*>(.+?)<\/h[12]>/i', $s, $sub)) {
    $title = $sub[1];
  } else {
    $title = $filename;
  }
  return $title;
}

function build_index_content() {
  global $index_content;
  
  $items = get_file_titles('');
  
  $this_file = basename($_SERVER['PHP_SELF']);
  
  $index_content = "<ul>";
  foreach($items as $file => $title) {
    if($file == $this_file) { 
      $index_content .= "<li class='current'>$title</li>";
    } else {
      $index_content .= "<li><a href='$file' title='".strip_tags($title)."'>$title</a></li>";
    }
  }
  $index_content .= "</ul>";
  
  $path = './';
  $depth = 0;
  while(file_exists($path . 'index.php')) {
    $title = get_file_title($path . 'index.php');
    if($this_file == 'index.php' && $depth == 0) {
      $index_content = "<ul><li><div class='current'>$title</div>$index_content</li></ul>";
    } else {
      $index_content = "<ul><li><a href='$path'>$title</a>$index_content</li></ul>";
    }
    $path = '../' . $path;
    if(++$depth > 2) break;
  }
}

?>