<?php
  require_once('includes/template.php');

  if(!isset($_REQUEST['file'])) {
    die('Require file parameter');
  }

  use Keyman\Site\Common\MarkdownHost;

  $md = new MarkdownHost($_REQUEST['file']);

  head([
    'title' => $md->PageTitle()
  ]);

  echo $md->Content();
