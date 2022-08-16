<?php

  global $PageVersion; // thank you PHP for weird scopes!
  $PageVersion = new PageVersion();

  class PageVersion {
    public $active;
    public $versions, $basePath, $versionedPath, $subPath, $path;
    public $currentVersion;

    function __construct() {
      $url = $_SERVER['REQUEST_URI'];

      $this->active = $this->ParseURL($url, $this->basePath, $this->versionedPath, $this->subPath);
      if($this->active) {
        $this->path = $_SERVER['DOCUMENT_ROOT'] . $this->basePath . '/';
        $this->versions = $this::GetContentVersions($this->path);
        if(sizeof($this->versions) == 0) {
          $this->active = false;
        } else {
          $this->currentVersion = $this::getCurrentVersion($this->versions);
          if($this->versionedPath == 'current-version') $this->versionedPath = $this->currentVersion;
        }
      }
    }

    ///
    /// Write canonical rel for versioned content; we only want indexing on current version
    /// content now
    ///
    static function WriteHead() {
      global $PageVersion;
      if(!$PageVersion->active) return;

      if($PageVersion->subPath == '' || $PageVersion->subPath[strlen($PageVersion->subPath)-1] == '/') {
        $file = $PageVersion->subPath.'index';
      } else {
        $file = $PageVersion->subPath;
      }

      $folder = "{$_SERVER['DOCUMENT_ROOT']}{$PageVersion->basePath}/{$PageVersion->currentVersion}/";
      if(file_exists("{$folder}{$file}.php") || file_exists("{$folder}/{$file}.md")) {
        // Only give a canonical link if the content exists in the current version
        echo "<link rel='canonical' href='{$PageVersion->basePath}/current-version/{$PageVersion->subPath}'>";
      }
    }

    ///
    /// Write the picker between different versions of this content
    ///
    static function WriteSelector() {
      global $PageVersion;
      if(!$PageVersion->active) return;

      if($PageVersion->subPath == '' || $PageVersion->subPath[strlen($PageVersion->subPath)-1] == '/') {
        $file = $PageVersion->subPath.'index';
      } else {
        $file = $PageVersion->subPath;
      }

      // Build the menu
      echo "<div id='version-selector'>Other versions";
      echo "<div>";

      foreach($PageVersion->versions as $version) {
        $folder = "{$_SERVER['DOCUMENT_ROOT']}{$PageVersion->basePath}/{$version}/";
        if(!file_exists("{$folder}{$file}.php") && !file_exists("{$folder}/{$file}.md")) {
          // We don't have the same content in that version, so point to home page
          if($version == $PageVersion->currentVersion) {
            $text = "Version $version (home page, current version)";
            $target = "{$PageVersion->basePath}/current-version/";
          } else {
            $text = "Version $version (home page)";
            $target = "{$PageVersion->basePath}/$version/";
          }
        } else {
          if($version == $PageVersion->currentVersion) {
            $text = "Version $version (current version)";
            $target = "{$PageVersion->basePath}/current-version/{$PageVersion->subPath}";
          } else {
            $text = "Version $version";
            $target = "{$PageVersion->basePath}/$version/{$PageVersion->subPath}";
          }
        }

        if($version == $PageVersion->versionedPath) {
          echo "<span>$text</span>";
        } else {
          echo "<a href='$target'>$text</a>";
        }
      }

      echo "</div></div>";
    }

    ///
    /// Test that the url is in a versioned folder (only support products|developer at present)
    ///
    static private function ParseURL($url, &$basePath, &$versionedPath, &$subPath) {
      if(preg_match('/^(\/(products|developer).*)\/(\d+\.\d+|current-version)\/(.*)$/', $url, $matches)) {
        $basePath = $matches[1];
        $versionedPath = $matches[3];
        $subPath = $matches[4];
        return true;
      }
      return false;
    }

    ///
    /// Get the list of available versions of content for a given path
    ///
    static private function GetContentVersions($path) {
      $versions = [];
      $folders = glob($path . "*", GLOB_ONLYDIR);
      foreach($folders as $folder) {
        $bfolder = basename($folder);
        if(preg_match('/^\d+\.\d+$/', $bfolder)) $versions[] = $bfolder;
      }

      usort($versions, 'version_compare_reverse');

      return $versions;
    }

    ///
    /// Finding current version: we start by using the newest version found in the
    /// folder. However, if the global current-version is found in the array, then
    /// that overrides, as we may have alpha content that is not yet current.
    ///
    static private function GetCurrentVersion($versions) {
      $currentVersion = $versions[0];

      $rootwebconfig = @file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/.htaccess');
      if(preg_match('/current-version:(\d+\.\d+)/', $rootwebconfig, $matches) &&
          in_array($matches[1], $versions)) {
        $currentVersion = $matches[1];
      }

      return $currentVersion;
    }
  }

  function version_compare_reverse($a, $b) {
    return -version_compare($a, $b);
  }