<?php /*
  Name:             servervars
  Copyright:        Copyright (C) 2005 Tavultesoft Pty Ltd.
  Documentation:    
  Description:      
  Create Date:      17 Oct 2009

  Modified Date:    17 Oct 2009
  Authors:          mcdurdin
  Related Files:    
  Dependencies:     

  Bugs:             
  Todo:             
  Notes:            
  History:          17 Oct 2009 - mcdurdin - Alter help base dir
                    20 Jun 2014 - jmdurdin - correct local server references, add codebox() function
                    13 Jun 2017 - jahorton - Modified codebox() function to use <pre><code>
*/
  if(file_exists($_SERVER['DOCUMENT_ROOT'].'/cdn/deploy/cdn.php')) {
    require_once($_SERVER['DOCUMENT_ROOT'].'/cdn/deploy/cdn.php');
  }
  
  $site_url = 'help.keyman.com';
  
  // We allow the site to strip off everything post its basic siteurl 
  
  function GetHostSuffix() {
    global $site_url;
    $name = $_SERVER['SERVER_NAME'];
    if(stripos($name, $site_url.'.') == 0) {
      return substr($name, strlen($site_url), 1024);
    }
    return '';
  }
  
  $site_suffix = GetHostSuffix();

  // $site_protocol is used only by util.php at this time. 
  $site_protocol = (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443) ? 'https://' : 'http://';
    
  if($site_suffix == '') {
    $TestServer = false;
   
    $site_tavultesoft = 'www.tavultesoft.com';
    $site_securetavultesoft = 'secure.tavultesoft.com';
    $resourceDomain="r.keymanweb.com"; 
  } else {
    $TestServer = true;
    $site_tavultesoft = 'testsite.tavultesoft.local';
    $site_securetavultesoft = 'secure.testsite.tavultesoft.local';
    $resourceDomain="r.keymanweb.com";
  }

  $staticDomain = "s.keyman.com{$site_suffix}/help";
  $staticDomainRoot="http://s.keyman.com{$site_suffix}";

  $downloadsDomain = "downloads.keyman.com"; //{$site_suffix}";

  function cdn($file) {
    global $cdn, $staticDomain, $TestServer;
    $use_cdn = !$TestServer || (isset($_REQUEST['cdn']) && $_REQUEST['cdn'] == 'force');
    if($use_cdn && $cdn && array_key_exists('/'.$file, $cdn)) {
      return "/cdn/deploy{$cdn['/'.$file]}";
    }
    return "/cdn/dev/{$file}";
  }

  function build_downloads_keyman_com_url($file) {
    global $downloadsDomain, $TestServer;

    $use_https = !$TestServer;
    if($use_https == true) {
      return "https://$downloadsDomain/$file";
    } else {
      return "http://$downloadsDomain/$file";
    }
  }
  
  /* The following function is needed for some pages but was only contained in an obsolete header file */
  $codeboxcount = 0;
  function codebox($s, $lang='')
  {
    if($lang != '') {
      $lang = "class='".$lang."' ";
    }

    global $codeboxcount;
    $s = htmlspecialchars($s);
    $codeboxcount++;
    return <<<END
<pre><code id='code$codeboxcount' $lang style='width:100%'>$s</code></pre>
END;
  } 
?>