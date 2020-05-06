<?php
  namespace com\keyman\help\editpage\test;

  // TODO: let's work on moving this to a testing framework that we run in unit tests for all PRs in future

  require_once("../includes/com.keyman.help.editpage.inc.php");

  $g = glob("../../products/desktop/13.0/docs/*.php", GLOB_MARK);

  foreach($g as $q) {
    $q = substr($q, 5); // remove ../../
    $q = \com\keyman\help\editpage\getPageUrlForEditLink($q, '', '');
    $s = substr($q, strlen("https://github.com/keymanapp/keyman/edit/master/"));
    if(!file_exists("c:\\projects\\keyman\\app\\$s")) {
      // IGNORE: "windows/src/desktop/help/context/langsetup.xml"
      if($s != "windows/src/desktop/help/context/langsetup.xml")
        echo "missing: $s\n";
    }
  }
