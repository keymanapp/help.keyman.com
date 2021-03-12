<?php
  declare(strict_types=1);

  namespace Keyman\Site\Common;

  use Keyman\Site\Common\KeymanHosts;

  class MarkdownHost {
    private $content, $pagetitle;

    function PageTitle() {
      return $this->pagetitle;
    }

    function Content() {
      return $this->content;
    }

    function __construct($file) {
      $this->pagetitle = 'TODO'; // If page title is not set, this hints to the developer to fix it

      $file = realpath(__DIR__ . '/../') . DIRECTORY_SEPARATOR . $file;
      $contents = trim(file_get_contents($file));
      $contents = str_replace("\r\n", "\n", $contents);

      $contents = KeymanHosts::Instance()->fixupHostReferences($contents);

      // This header specification comes from YAML originally and is not common across
      // markdown implementations. While Parsedown does not currently parse this out,
      // it seems a sensible approach to use. The header section is delineated by `---`
      // and `---` must be the first three characters of the file (no BOM!); note that
      // the full spec supports metadata sections anywhere but we only support top-of-file.
      //
      // Currently we support only the 'title' and 'redirect' keywords.
      //
      // title: must be a plain text title
      // redirect: must be a relative or absolute url
      //
      // ---
      // keyword: content
      // keyword: content
      // ---
      //
      // source: https://yaml.org/spec/1.2/spec.html#id2760395
      // source: https://pandoc.org/MANUAL.html#extension-yaml_metadata_block
      //

      $lines = explode("\n", $contents);

      $found = count($lines) > 3 && rtrim($lines[0]) == '---';
      $headers = [];
      for($i = 1; $i < count($lines); $i++) {
        if($lines[$i] == '---') break;
        if(!preg_match('/^([a-z0-9_-]+):(.+)$/', $lines[$i], $match)) {
          $found = false;
          break;
        } else {
          $headers[$match[1]] = $match[2];
        }
      }
      $found = $found && $i < count($lines);

      if($found) $contents = implode("\n", array_slice($lines, $i));

      if(isset($headers['redirect'])) {
        header("Location: {$headers['redirect']}");
        exit;
      }

      $this->pagetitle = isset($headers['title']) ? $headers['title'] : 'Untitled';

      // Performs the parsing + prettification of Markdown for display through PHP.
      $Parsedown = new \ParsedownExtra();

      // Does the magic.
      $this->content =
       "<h1>" . htmlentities($this->pagetitle) . "</h1>\n" .
       "<div class='markdown'>" .
       $Parsedown->text($contents) .
       "</div>";
    }
  }

