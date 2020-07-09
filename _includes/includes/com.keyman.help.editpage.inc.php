<?php
  namespace com\keyman\help\editpage;

  function getPageUrlForEditLink($self, $id, $file) {
    $base = "https://github.com/keymanapp/help.keyman.com/edit/master";
    if($self == '/knowledge-base/index.php' && !empty($id)) {
      // Knowledge Base Article
      require_once('includes/com.keyman.help.kb.inc.php');
      return $base."/knowledge-base/".\com\keyman\help\kb\filename_from_id($id);
    }
    else if($self == '/_includes/md/mdhost.php') {
      // Markdown file
      return $base."/".$file;
    }
    else if(preg_match('/^\/products\/desktop\/(\d+\.\d+)\/docs\/(about|advanced|basic|common|context|start|troubleshooting|langsetup|index)(_(.+))?\.php$/',
      $self, $matches)) {
      // Keyman Desktop help - work back to source xml file name, with a few tricks.

      if(!empty($matches[4])) {
        $path = $matches[2] . "/" . $matches[4];
        // Special cases -- this is not ideal but is okay until we refactor Desktop help
        $specials = array(
          "advanced/tsf" => "advanced/text_services_framework",
          "basic/charactermap" => "basic/toolbox_tasks/charactermap",
          "basic/config_menu" => "basic/config_tasks/config_menu",
          "basic/disable_keyboard" => "basic/keyboard_tasks/disable_keyboard",
          "basic/enable_keyboard" => "basic/keyboard_tasks/enable_keyboard",
          "basic/fonthelper" => "basic/toolbox_tasks/fonthelper",
          "basic/hotkeys_tab" => "basic/config_tasks/hotkeys_tab",
          "basic/keyboards_tab" => "basic/config_tasks/keyboards_tab",
          "basic/options_tab" => "basic/config_tasks/options_tab",
          "basic/osk" => "basic/toolbox_tasks/osk",
          "basic/support_tab" => "basic/config_tasks/support_tab",
          "basic/toolbox" => "basic/toolbox_tasks/toolbox",
          "basic/uninstall" => "basic/engine_tasks/uninstall",
          "basic/uninstall_keyboard" => "basic/keyboard_tasks/uninstall_keyboard",
          "basic/update" => "basic/engine_tasks/update",
          "basic/usage" => "basic/toolbox_tasks/usage",
          "context/character_map" => "context/charactermap",
          "context/font_helper" => "context/fonthelper",
          "langsetup/psrtmsofficelanguage" => "context/langsetup/psrtmsofficelanguage",
          "langsetup/psrtwindowslanguage" => "context/langsetup/psrtwindowslanguage"
          // note context/langsetup is missing source content so we'll ignore for now.
        );
        if(array_key_exists($path, $specials)) $path = $specials[$path];
      } else {
        $path = "index";
      }
      return "https://github.com/keymanapp/keyman/edit/master/windows/src/desktop/help/$path.xml";
    }
    else {
      // Legacy PHP file
      return $base.$self;
    }
  }
