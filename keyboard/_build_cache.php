<?php
  define('INDEX_CACHE', 'index.cache');

  $dirs = array_filter(glob('*'), 'is_dir');
  $items = array('active' => array(), 'deprecated' => array());
  foreach($dirs as $directory){
    $version = '1.0';
    $versions = array_filter(glob($directory . '/*'), 'is_dir');
    if(count($versions) == 0) continue;
    //var_dump($versions);
    $filename = array_pop($versions).'/'.$directory.'.php';
    if(!file_exists($filename)) continue;
    $s = @file_get_contents($filename);

    if(preg_match('/\$pagename\s*=\s*[\'"](.*)[\'"]\s*;/', $s, $sub)){
      $title = $sub[1];
    } else if(preg_match('/\$pagetitle\s*=\s*[\'"](.*)[\'"]\s*;/', $s, $sub)){
      $title = $sub[1];
    } else {
      continue; // not a keyboard help file
    }

    if(substr($title,0,1) == '$') {
      continue;
    }

    if(preg_match('/^(.*)\s+Keyboard\s+Help/i', $title, $sub)) {
      $title = stripslashes($sub[1]);
    }

    $dep = strpos($title, "(deprecated)");
    if($dep !== false) {
      $items['deprecated'][$directory] = trim(substr($title, 0, $dep));
    } else {
      $items['active'][$directory] = $title;
    }
  }

  file_put_contents(INDEX_CACHE, json_encode($items));
