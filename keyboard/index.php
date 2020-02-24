<?php
  require_once('includes/template.php');
  $dirs = array_filter(glob('*'), 'is_dir');
  $items = array();
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
    $items[$directory] = $title;
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
<ul id="keyboard-support-list">
<?php
  asort($items);
  foreach ($items as $filename => $title) {
    echo "<li><a href='$filename'>$title</a></li>";
  }
  ?>
</ul>