<?php
  require_once('includes/template.php');

  define('INDEX_CACHE', 'index.cache');

  if(!file_exists(INDEX_CACHE)) {
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
  } else {
    $items = json_decode(file_get_contents(INDEX_CACHE), true);
  }

  // Required
  head([
    'title' =>'Keyman Support | Type to the world in your language',
    'css' => ['template.css'],
    'showMenu' => true,
    'index' => false
  ]);
?>
<h2 class="center">Keyboard Layouts Help Index</h2>
<ul class="keyboard-support-list" id="keyboard-support-list">
<?php
  asort($items['active']);
  foreach ($items['active'] as $filename => $title) {
    echo "<li><a href='$filename'>$title</a></li>";
  }
?>
</ul>
<h2>Deprecated keyboards</h2>
<ul class="keyboard-support-list" id="keyboard-support-list-deprecated">
<?php
  asort($items['deprecated']);
  foreach ($items['deprecated'] as $filename => $title) {
    echo "<li><a href='$filename'>$title</a></li>";
  }
?>
</ul>