<?php
  require_once('includes/servervars.php');

  function current_url($folder_only = false)
  {
    global $site_protocol;
  	$s = str_replace("\\", "/", $folder_only ? dirname($_SERVER['PHP_SELF']) : $_SERVER['PHP_SELF']);
  	if(substr($s, strlen($s)-1) != '/') $s .= '/';
  	return $site_protocol.$_SERVER['HTTP_HOST'] . $s;
  }
    
  function util_loadpage($page, $from_current_url = true)
  {
    global $site_protocol;
    //$page = stripwhitespace($page);
    session_write_close();
    if(substr($page, 0, 5) == 'http:' || substr($page, 0, 6) == 'https:' || substr($page, 0, 6) == 'about:')
      header("Location: ".$page);
    else
      header("Location: ".($from_current_url ? current_url(true) : $site_protocol.$_SERVER['HTTP_HOST'].'/').$page);
    echo(chr(13).chr(10));
    //ob_end_flush();
    flush();
    
    exit;
  }
?>