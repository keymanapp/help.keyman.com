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
  $lines = explode("\n", $contents);

  $found = count($lines) > 3 && rtrim($lines[0]) == '---';
  $headers = [];
  for($i = 1; $i < count($lines); $i++) {
    if($lines[$i] == '---') break;
    if(!preg_match('/^([a-z0-9_-]+):(.+)$/', $lines[$i], $match)) {
      $found = false;
      break;
    } else {
      $headers[$match[1]] = trim($match[2]);
    }
  }
  $found = $found && $i < count($lines);

  if($found) $contents = implode("\n", array_slice($lines, $i));

  if(isset($headers['redirect'])) {
    header("Location: {$headers['redirect']}");
    exit;
  }

  $pagetitle = isset($headers['title']) ? $headers['title'] : 'Untitled';

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