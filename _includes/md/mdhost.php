<?php
  require_once('includes/template.php');
  require_once("includes/ext/parsedown/Parsedown.php");

  $pagetitle = 'TODO';

  if(!isset($_REQUEST['file'])) {
    die('Require file parameter');
  }

  $file = realpath(__DIR__ . '/../../') . DIRECTORY_SEPARATOR . $_REQUEST['file'];
  $contents = trim(file_get_contents($file));
  $contents = str_replace("\r\n", "\n", $contents);

  if(preg_match('/^---\n(.+)\n---\n(.+)/s', $contents, $match)) {
    $metadata = $match[1];
    $contents = $match[2];
  } else {
    $metadata = 'title: untitled';
  }

  if(preg_match('/^title: (.+)/', $metadata, $match)) {
    $pagetitle = $match[1];
  } else {
    $pagetitle = 'Untitled';
  }
  
  head([
    'title' => $pagetitle
  ]);
?>

<h1><?= $pagetitle ?></h1>

<?php
  // Performs the parsing + prettification of Markdown for display through PHP.
  $Parsedown = new Parsedown();

  // Does the magic.
  echo $Parsedown->text($contents);
?>