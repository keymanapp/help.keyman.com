<?php
  require_once('includes/template.php');
  require_once('includes/com.keyman.help.kb.inc.php');
  require_once __DIR__ . '/../vendor/autoload.php';

  use function com\keyman\help\kb\filename_from_id;
  use function com\keyman\help\kb\link_from_id;

  $id = null;
  $title = 'Knowledge Base index';

  if(isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    if(!preg_match('/^\d{1,8}$/', $id)) {
      $id = null;
    }
  }

  if($id) {
    $filename = filename_from_id($id);
    $kb = @file_get_contents($filename);
    if($kb === FALSE) {
      $id = null; // just display index?
    } else {
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
  }

  // Required
  head([
    'title' =>'Keyman Support | ' . $title,
    'css' => ['template.css','prism.css'],
    'showMenu' => true,
    'index' => false
  ]);

  if($id) {
    echo "<p>";
    $pid = intval($id,10) - 1;
    if($pid > 0) echo "<a href='".link_from_id($pid)."'>&lt; Previous article</a> &nbsp; ";
    $nid = intval($id,10) + 1;
    if(file_exists(filename_from_id($nid))) {
      echo "<a href='".link_from_id($nid)."'>Next article &gt;</a> ";
    }
    echo "</p><hr>";
    $ParsedownAndAlerts = new \Keyman\Site\Common\GFMAlerts();
    echo $ParsedownAndAlerts->text($kb);
  } else {
    echo "<h1>Knowledge Base index</h1>";
    echo "<ul>";
    $kbs = glob("kb*.md");
    foreach($kbs as $kb) {
      if(preg_match("/^kb(\d+)\.md$/", $kb, $matches)) {
        $id = $matches[1];
        $handle = fopen($kb, "r");
        $title = fgets($handle);
        $title = substr($title, 2);
        fclose($handle);
        echo "<li><a href='".link_from_id($id)."'>KMKB{$matches[1]}: " . htmlspecialchars($title) . "</a></li>";
      }
    }

    echo "</ul>";
  }