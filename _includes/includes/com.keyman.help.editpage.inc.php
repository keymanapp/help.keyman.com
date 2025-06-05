<?php
  namespace com\keyman\help\editpage;

  use \Keyman\Site\Common\KeymanVersion;

  // TODO: it may be better to have a file in the root of each folder which
  //       determines the root path for editing and any parameters relating
  //       to it.

  function getPageUrlForEditLink($self, $id, $file) {
    $base = "https://github.com/keymanapp/help.keyman.com/edit/master";
    $app =  "https://github.com/keymanapp/keyman/edit/master";

    // Map from help.keyman.com URL to path in keymanapp/keyman repository
    $map = [
      'products/android' => 'android/docs/help/',
      'products/iphone-and-ipad' => 'ios/docs/help/',
      'products/linux' => 'linux/docs/help/',
      'products/mac' => 'mac/docs/help/',
      'products/windows' => 'windows/docs/help/',
      'developer' => 'developer/docs/help/',
      'developer/engine/android' => 'android/docs/engine/',
      'developer/engine/iphone-and-ipad' => 'ios/docs/engine/',
      'developer/engine/web' => 'web/docs/engine/',
      'developer/engine/windows' => 'windows/docs/engine/',
    ];
    $maps = preg_replace('/\//', '\\/', join('|', array_keys($map)));

    if($self == '/knowledge-base/index.php' && !empty($id)) {
      // Knowledge Base Article
      require_once('includes/com.keyman.help.kb.inc.php');
      return $base."/knowledge-base/".\com\keyman\help\kb\filename_from_id($id);
    }
    else if(preg_match('/^('.$maps.')\/(\d+\.\d+)\/(.*)\.md$/', $file, $matches) && version_compare($matches[2], KeymanVersion::stable_version, '>=')) {
      // Product, Developer, Engine help, version 14.0 and later. Note that this
      // is not a perfect match and in some cases will have missing links
      // because we are not attempting to check for latest version of help
      return "$app/{$map[$matches[1]]}{$matches[3]}.md";
    }
    else if(preg_match('/^(products\/|developer\/engine\/.+|(developer\/(\d+\.\d+)))/', $file, $matches)) {
      // disable editing versions of help earlier than current-version; also
      // matches index pages and other pages in the area.
      return null;
    }
    else if(preg_match('/^\/keyboard\/([a-z0-9_]+)\/(\d+\.\d+)\/(.*)$/', $self, $matches)) {
      // edit keyboards
      //
      // TODO: return "$keyboards/release|experimental/${matches[1]}/source/help/${matches[3]}"
      //       need to split between legacy, experimental, and release, which requires an API
      //       lookup. For now, prevent direct editing, as there is also a problem with desync
      //       of php and welcome.htm, which means direct edit like this is probably unhelpful.
      //
      return null;
    }
    else if($self == '/_includes/md/mdhost.php') {
      // Markdown file
      return $base."/".$file;
    }
    else {
      // Legacy PHP file
      return $base.$self;
    }
  }
