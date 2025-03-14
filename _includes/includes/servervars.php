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
  require_once __DIR__ . '/../autoload.php';

  if(file_exists($_SERVER['DOCUMENT_ROOT'].'/cdn/deploy/cdn.php')) {
    require_once($_SERVER['DOCUMENT_ROOT'].'/cdn/deploy/cdn.php');
  }

  use Keyman\Site\Common\KeymanHosts;

  $keyman_com = KeymanHosts::Instance()->keyman_com;

  // $site_protocol is used only by util.php at this time.
  $site_protocol = (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443) ? 'https://' : 'http://';
  $site_tavultesoft = 'www.tavultesoft.com';

  function cdn($file) {
    global $cdn;
    $use_cdn =
      KeymanHosts::Instance()->Tier() == KeymanHosts::TIER_PRODUCTION ||
      KeymanHosts::Instance()->Tier() == KeymanHosts::TIER_STAGING ||
      (isset($_REQUEST['cdn']) && $_REQUEST['cdn'] == 'force');
    if($use_cdn && $cdn && array_key_exists('/'.$file, $cdn)) {
      return "/cdn/deploy{$cdn['/'.$file]}";
    }
    return "/cdn/dev/{$file}";
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