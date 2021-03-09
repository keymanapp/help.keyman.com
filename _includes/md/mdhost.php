<?php
  require_once('includes/template.php');
  require_once("includes/ext/parsedown/Parsedown.php");
  require_once("includes/ext/parsedown/ParsedownExtra.php");

  $pagetitle = 'TODO';

  if(!isset($_REQUEST['file'])) {
    die('Require file parameter');
  }

  $file = realpath(__DIR__ . '/../../') . DIRECTORY_SEPARATOR . $_REQUEST['file'];
  $contents = trim(file_get_contents($file));
  $contents = str_replace("\r\n", "\n", $contents);

  // This header specification comes from YAML originally and is not common across
  // markdown implementations. While Parsedown does not currently parse this out,
  // it seems a sensible approach to use. The header section is delineated by `---`
  // and `---` must be the first three characters of the file (no BOM!); note that
  // the full spec supports metadata sections anywhere but we only support top-of-file.
  //
  // Currently we support only the 'title' and 'redirect' keywords.
  //
  // title: must be a plain text title
  // redirect: must be a relative or absolute url
  //
  // ---
  // keyword: content
  // keyword: content
  // ---
  //
  // source: https://yaml.org/spec/1.2/spec.html#id2760395
  // source: https://pandoc.org/MANUAL.html#extension-yaml_metadata_block
  //
  if(preg_match('/^---\n(([a-z0-9_-]+:.+\n)+)---(\n)?((.|\n)*)$/i', $contents, $match)) {
    $metadata = $match[1];
    $contents = $match[4];
  } else {
    $metadata = 'title: untitled';
  }

  if(preg_match('/^redirect: (.+)/m', $metadata, $match)) {
    header("Location: {$match[1]}");
    exit;
  }

  if(preg_match('/^title: (.+)/m', $metadata, $match)) {
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
  $Parsedown = new ParsedownExtra();

  // Does the magic.
  echo $Parsedown->text($contents);
?>