<?php
/**
 * Created by PhpStorm.
 * User: joshua
 * Date: 9/27/2017
 * Time: 11:51 AM
 */

require_once("includes/servervars.php");
require_once __DIR__ . '/../../vendor/autoload.php';

function get_history($platform, $version = '1.0') {
  // Reads straight from a file.  Likely to be useful for the history-exposing API.
  $url = build_downloads_keyman_com_url("api/history/$platform/$version"); // Longform: "api/historydata.php?platform=$platform?version=$version".

  $contents = @file_get_contents($url);

  if($contents === FALSE) {
    //header('HTTP/1.0 400 Invalid parameter');
    $contents = "Unable to retrieve current history data for this platform.";
  }

  return $contents;
}

function display_history($platform, $version = '1.0'){
  $contents = get_history($platform, $version);

  // API version 2.0 handles Keyman 14.0+
  if ($version == '2.0') {
    // Append title
    $platform_title = [
      'android' => '# Keyman for Android Version History',
      'ios' => '# Keyman for iPhone and iPad Version History',
      'linux' => '# Keyman for Linux Version History',
      'mac' => '# Keyman for macOS Version History',
      'web' => '# KeymanWeb Version History',
      'windows' => '# Keyman for Windows Version History',
      'developer' => '# Keyman Developer Version History'
    ];

    if($platform != '') {
      $contents = $platform_title[$platform] . $contents;
    }

    // Adjust the publish dates of API 2.0 for displaying on website
    $regex_dated_version_src = "/(\d+.\d+(.\d+)? (?:stable|beta|alpha)) (\d{4}-\d{2}-\d{2})/";
    $regex_dated_version_dst = "\${1}\n Published \${3}.";

    // The actual replacements.
    //$contents = preg_replace($regex_header_line, "", $contents);
    $contents = preg_replace($regex_dated_version_src, $regex_dated_version_dst, $contents);

    // Include previous Keyman history (minus its title)
    $previous_contents = $platform ? get_history($platform, '1.0') : get_history('1.0');
    $previous_contents = preg_replace('/^#.*/', '<br>', $previous_contents);
    $contents = $contents . $previous_contents;
  }

  $regex_dated_version_src = "/(\d{4}-\d{2}-\d{2}) (\d+.\d+(.\d+)? (?:stable|beta|alpha))/";
  $regex_dated_version_dst = "\${2}\n Published \${1}.";

  // The actual replacements.
  //$contents = preg_replace($regex_header_line, "", $contents);
  $contents = preg_replace($regex_dated_version_src, $regex_dated_version_dst, $contents);

  // Tighten formatting -- h3, remove redundant paragraphs
  $contents = preg_replace('/^## /m', '### ', $contents);
  $contents = preg_replace("/\n\n\\* /", "\n* ", $contents);

  // Include links to PRs
  $contents = preg_replace('/\(#(\d+)\)/', '([#${1}](https://github.com/keymanapp/keyman/pull/${1}))', $contents);

  // Performs the parsing + prettification of Markdown for display through PHP.
  $Parsedown = new \ParsedownExtra();
  $processedContent = $Parsedown->text($contents);

  // Assign IDs to headings
  $processedContent = assignHeadingIDs($processedContent);

  echo $processedContent;
}

function assignHeadingIDs($content) {
  $pattern = '/<(h[23])>(.*?)<\/\1>/i';

  $callback = function ($matches) {
      $tag = $matches[1];
      $text = $matches[2];
      $id = strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', trim($text)));
      return "<$tag id=\"$id\">$text</$tag>";
  };

  $content = preg_replace_callback($pattern, $callback, $content);

  return $content;
}

?>
