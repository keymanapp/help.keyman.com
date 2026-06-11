<?php
  /*
   * Keyman is copyright (C) SIL Global. MIT License.
   *
   * Build a link to GitHub to edit a page
   */
  namespace Keyman\Site\com\keyman\help;

  use \Keyman\Site\Common\KeymanVersion;
  use \Keyman\Site\Common\KeymanHosts;

  class EditPage {
    /**
     * Build a link to GitHub to edit a page
     * @param $page   the url to the page (required)
     * @param $file   the actual markdown file to edit (optional, for _mdhost.php)
     * @param $id     the actual knowledge base article id (optional, for /knowledge-base)
     */
    function getPageUrlForEditLink($page, $id, $file) {
      $repo_help = "https://github.com/keymanapp/help.keyman.com/edit/master";
      $repo_app =  "https://github.com/keymanapp/keyman/edit/master";
      $repo_keyboards =  "https://github.com/keymanapp/keyboards/edit/master";

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

      if($page == '/knowledge-base/index.php' && !empty($id)) {
        // Knowledge Base Article
        require_once('includes/com.keyman.help.kb.inc.php');
        return $repo_help."/knowledge-base/".\com\keyman\help\kb\filename_from_id($id);
      }
      else if(preg_match('/^('.$maps.')\/(\d+\.\d+)\/(.*)\.md$/', $file, $matches) && version_compare($matches[2], KeymanVersion::stable_version, '>=')) {
        // Product, Developer, Engine help, version 14.0 and later. Note that this
        // is not a perfect match and in some cases will have missing links
        // because we are not attempting to check for latest version of help
        return "$repo_app/{$map[$matches[1]]}{$matches[3]}.md";
      }
      else if(preg_match('/^(products\/|developer\/engine\/.+|(developer\/(\d+\.\d+)))/', $file, $matches)) {
        // disable editing versions of help earlier than current-version; also
        // matches index pages and other pages in the area.
        return null;
      }
      else if(preg_match('/^\/keyboard\/([a-z0-9_]+)\/([0-9.]+)\/(.*)$/', $page, $matches)) {
        // return "$repo_keyboards/(legacy|release|experimental)/${matches[1]}/source/help/${matches[3]}"
        // We need to split between legacy, experimental, and release, which requires an API
        // call to lookup the source path
        //
        // Note that we will likely need to sync submitted changes to these
        // files with welcome.htm for the keyboard.
        $keyboard = @file_get_contents(KeymanHosts::Instance()->SERVER_api_keyman_com . "/keyboard/${matches[1]}");
        if(!$keyboard) {
          // failed to load, maybe missing or network error
          return null;
        }
        $keyboard = json_decode($keyboard);
        if(!$keyboard || empty($keyboard->sourcePath)) {
          // failed to decode, unlikely, or no source available
          return null;
        }
        return "$repo_keyboards/$keyboard->sourcePath/source/help/${matches[3]}";
      }
      else if($page == '/_includes/md/mdhost.php') {
        // Markdown file
        return $repo_help."/".$file;
      }
      else {
        // Legacy PHP file
        return $repo_help.$page;
      }
    }
  }