<?php
  require_once('parsedown-1.7.3/Parsedown.php');

  require_once('includes/template.php');

  $id = null;
  $title = 'Knowledge Base index';

  if(isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    if(!preg_match('/^\d{1,8}$/', $id)) {
      $id = null;
    }
  }

  if($id) {
    $id = intval($id, 10);
    $filename = sprintf("kb%04.4d.md", $id);
    $kb = @file_get_contents($filename);
    if($kb === FALSE) {
      $id = null;
    }

    // We test the first line of the file for a title.

    $text = explode('\n', $kb);
    if(count($text) > 0) {
      if(substr($text[0], 0, 2) == '# ') {
        $title = trim(substr($text[0], 2));
      } else {
        $title = $filename;
      }
    }
  }

  // Required
  head([
    'title' =>'Keyman Support | ' . $title,
    'css' => ['template.css','index.css'],
    'showMenu' => true,
    'index' => false
  ]);

  if($id) {
    $Parsedown = new Parsedown();
    echo $Parsedown->text($kb);
  } else {
    echo "<h1>Knowledge Base index</h1>";
    echo "<ul>";
    $kbs = glob("kb*.md");
    foreach($kbs as $kb) {
      if(preg_match("/^kb(\d+)\.md$/", $kb, $matches)) {
        $id = intval($matches[1]);
        $handle = fopen($kb, "r");
        $title = fgets($handle);
        $title = substr($title, 2);
        fclose($handle);
        echo "<li><a href='/kb/$id'>" . htmlspecialchars($title) . "</a></li>";
      }
    }

    echo "</ul>";
  }