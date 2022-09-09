<?php
  require_once('includes/template.php');
  require_once __DIR__ . '/../autoload.php';

  if(!isset($_REQUEST['file'])) {
    die('Require file parameter');
  }

  use Keyman\Site\Common\MarkdownHost;

  $md = new MarkdownHost($_REQUEST['file']);

  $pagetitle = isset($headers['title']) ? $headers['title'] : 'Untitled';

  head([
    'title' => $md->PageTitle()
  ]);

  echo $md->Content();
