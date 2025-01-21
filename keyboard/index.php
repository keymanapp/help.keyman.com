<?php
  require_once('includes/template.php');

  define('INDEX_CACHE', 'index.cache');
  $items = json_decode(file_get_contents(INDEX_CACHE), true);

  // Required
  head([
    'title' =>'Keyman Support | Type to the world in your language',
    'css' => ['template.css'],
    'showMenu' => true,
    'index' => false
  ]);
?>
<h1><center>Keyboard Layouts Help Index</center></h1><br>
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