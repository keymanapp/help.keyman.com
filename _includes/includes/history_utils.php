<?php
/**
 * Created by PhpStorm.
 * User: joshua
 * Date: 9/27/2017
 * Time: 11:51 AM
 */

require_once("includes/servervars.php");
require_once __DIR__ . '/../../vendor/autoload.php';

function display_history($platform, $version = '1.0'){
  global $site_suffix;

  // Reads straight from a file.  Likely to be useful for the history-exposing API.
  $url = build_downloads_keyman_com_url("api/history/$platform/$version"); // Longform: "api/historydata.php?platform=$platform?version=$version".

  $contents = @file_get_contents($url);

  if($contents === FALSE) {
    //header('HTTP/1.0 400 Invalid parameter');
    echo "Unable to retrieve current history data for this platform.";
    return;
  }

  // Append title
  if ($version == '2.0') {
    $platform_title = [
      'android' => '# Keyman for Android Version History',
      'ios' => '# Keyman for iOS  Version History',
      'linux' => '# Keyman for Linux Version History',
      'mac' => '# Keyman for macOS Version History',
      'web' => '# KeymanWeb Version History',
      'windows' => '# Keyman for Windows Version History',
      'developer' => '# Keyman Developer Version History'
    ];

    $contents = $platform_title[$platform] . $contents;
  }

  // Performs the parsing + prettification of Markdown for display through PHP.
  $Parsedown = new \ParsedownExtra();

  // Definition of a few adjustments to our history.md spec for nicer website display
  // Only needed if using header.php, not if using template.php.
  //$regex_header_line = "/^# [^\n]+/";

  $regex_dated_version_src = "/(\d\d\d\d-\d\d-\d\d) (\d+.\d+(.\d+)? (?:stable|beta|alpha))/"; // (\d+.\d+.\d+) [stable|beta|alpha]
  $regex_dated_version_dst = "\${2}\n Published \${1}.";

  // The actual replacements.
  //$contents = preg_replace($regex_header_line, "", $contents);
  $contents = preg_replace($regex_dated_version_src, $regex_dated_version_dst, $contents);

  // Does the magic.
  echo $Parsedown->text($contents);
}

?>