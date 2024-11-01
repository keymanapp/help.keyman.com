<?php
  /* This is a legacy workaround for old help files that reference header.php instead of includes/header.php */
  $folders = explode("/",$_SERVER["REQUEST_URI"]);
  require_once('includes/kb_doc_template.php');
  if(!isset($IncludeKeymanWeb)) $IncludeKeymanWeb = false;
  // Required
  if(!isset($pagetitle)) {
    error_log("\$pagetitle is not set for ".$_SERVER['PHP_SELF']);
    $pagetitle = '?';
  }
  if($folders[1] == 'keyboard'){
    $canonicalLink = "/keyboard/" . $folders[2] . "/current-version";
    head([
      'title' =>$pagetitle,
      'language' => isset($language) ? $language : '',
      'pagename' => isset($pagename) ? $pagename : $pagetitle,
      'css' => ['template.css','keyboard.css','keys.css'],
      'js' => ['kbd-docs.js'],
      'showMenu' => true,
      'includeKMW' => $IncludeKeymanWeb,
      'canonicalLink' => $canonicalLink,
    ]);
  }else{
    head([
      'title' =>$pagetitle,
      'language' => isset($language) ? $language : '',
      'pagename' => isset($pagename) ? $pagename : $pagetitle,
      'css' => ['template.css','keyboard.css','keys.css'],
      'showMenu' => true,
      'includeKMW' => $IncludeKeymanWeb
    ]);
  }
?>