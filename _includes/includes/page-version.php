<?php

  // Mappings for files that got renamed at some point. Has to be in
  // both directions.
  global $FileMappings;
  $FileMappings = [
    'whats-new' => 'whatsnew',
    'whatsnew' => 'whats-new',
  ];

  global $PageVersion; // thank you PHP for weird scopes!
  $PageVersion = new PageVersion();

  class PageVersion {
    public $active;
    public $versions, $basePath, $versionedPath, $subPath, $path;
    public $currentVersion;

    public $file, $currentFolder, $currentFileExists;

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
          if($this->versionedPath == 'latest-version') $this->versionedPath = $this->versions[0];

          if($this->subPath == '' || $this->subPath[strlen($this->subPath)-1] == '/') {
            $this->file = $this->subPath.'index';
          } else {
            $this->file = $this->subPath;
          }

          $this->currentFolder = "{$_SERVER['DOCUMENT_ROOT']}{$this->basePath}/{$this->currentVersion}/";
          $path = PageVersion::GetVersionedFilePath($this->basePath, $this->file, $this->currentVersion, $this->currentVersion);
          $this->currentFileExists = $path ? true : false;
        }
      }
    }

    function isCurrentPageOlder() {
      return version_compare($this->versionedPath, $this->currentVersion, '<');
    }

    function isCurrentPageNewer() {
      return version_compare($this->versionedPath, $this->currentVersion, '>');
    }

    function isCurrentPageCurrent() {
      return version_compare($this->versionedPath, $this->currentVersion, '==');
    }

    ///
    /// Write canonical rel for versioned content; we only want indexing on current version
    /// content now
    ///
    static function WriteHead() {
      global $PageVersion;
      if(!$PageVersion->active || !$PageVersion->currentFileExists) {
        return;
      }
      $target = PageVersion::GetVersionedFilePath($PageVersion->basePath, $PageVersion->file, $PageVersion->currentVersion, $PageVersion->currentVersion);
      echo "<link rel='canonical' href='{$target}'>";
    }

    ///
    /// Write a banner if there are different versions of this content
    ///
    static function WriteBanner() {
      global $PageVersion;
      if(!$PageVersion->active) return;

      if($PageVersion->isCurrentPageCurrent() || !$PageVersion->currentFileExists) {
        // Don't show the banner if we are on the current version
        return;
      }

      if($PageVersion->isCurrentPageOlder()) {
        $message = 'You are viewing an old version of this documentation';
      } else {
        $message = 'You are viewing an incomplete pre-release version of this documentation';
      }

      $alertIcon =
        '<svg class="octicon octicon-alert mr-2" viewBox="0 0 16 16" version="1.1" width="22" height="22" '.
        'style="vertical-align: bottom; padding-right: 4px" aria-hidden="true">'.
        '<path fill="orange" d="M6.457 1.047c.659-1.234 2.427-1.234 3.086 0l6.082 11.378A1.75 1.75 0 0 '.
        '1 14.082 15H1.918a1.75 1.75 0 0 1-1.543-2.575Zm1.763.707a.25.25 0 0 0-.44 0L1.698 13.132a.25.25 '.
        '0 0 0 .22.368h12.164a.25.25 0 0 0 .22-.368Zm.53 3.996v2.5a.75.75 0 0 1-1.5 0v-2.5a.75.75 0 0 1 1.5 '.
        '0ZM9 11a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z"></path></svg>';
      $target = PageVersion::GetVersionedFilePath($PageVersion->basePath, $PageVersion->file, $PageVersion->currentVersion, $PageVersion->currentVersion);
      $html =
        "<div id='version-banner'>$alertIcon $message. ".
        "<a href='{$target}'>Click here</a>".
        " to open the current version, {$PageVersion->currentVersion}.</div>";
      echo $html;
    }

    static private function GetVersionedFilePath($baseFolder, $file, $version, $currentVersion) {
      global $FileMappings;
      $folder = "{$_SERVER['DOCUMENT_ROOT']}{$baseFolder}/{$version}/";
      $subPath = $file;

      $file_exists = file_exists("{$folder}{$file}.php") || file_exists("{$folder}{$file}.md");
      if(!$file_exists && array_key_exists($file, $FileMappings)) {
        $file = $FileMappings[$file];
        $subPath = $file;
        $file_exists = file_exists("{$folder}{$file}.php") || file_exists("{$folder}{$file}.md");
      }
      if (!$file_exists) {
        return null;
      }
      if ($version == $currentVersion) {
        return "{$baseFolder}/current-version/{$subPath}";
      }
      return "{$baseFolder}/$version/{$subPath}";
    }

    ///
    /// Write the picker between different versions of this content
    ///
    static function WriteSelector() {
      global $PageVersion;
      if(!$PageVersion->active) return;

      // Build the menu
      $html = "<div id='version-selector'>Other versions";
      $html .= "<div>";

      $found = false;

      foreach($PageVersion->versions as $version) {
        $target = PageVersion::GetVersionedFilePath($PageVersion->basePath, $PageVersion->file, $version, $PageVersion->currentVersion);
        if (!$target) {
          // Skip links to versions that don't have this exact page
          continue;
        }

        $found = true;
        if($version == $PageVersion->currentVersion) {
          $text = "Version $version (current version)";
        } else {
          $text = "Version $version";
        }

        if($version == $PageVersion->versionedPath) {
          $html .= "<span>$text</span>";
        } else {
          $html .= "<a href='$target'>$text</a>";
        }
      }

      $html .= "</div></div>";
      if($found) {
        echo $html;
      }
    }

    ///
    /// Test that the url is in a versioned folder (only support products|developer at present)
    ///
    static private function ParseURL($url, &$basePath, &$versionedPath, &$subPath) {
      if(preg_match('/^(\/(products|developer).*)\/(\d+\.\d+|latest-version|current-version)\/(.*)$/', $url, $matches)) {
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

      return $versions; // versions [18.0,17.0,16.0,...,1.0]
    }

    ///
    /// Finding current version: we start by using the newest version found in the
    /// folder. However, if the global current-version is found in the array, then
    /// that overrides, as we may have alpha content that is not yet current.
    ///
    static private function GetCurrentVersion($versions) {
      $currentVersion = $versions[0];

      $configFile = PHP_OS_FAMILY === "Linux" ? '/.htaccess' : '/web.config';
      $rootwebconfig = @file_get_contents($_SERVER['DOCUMENT_ROOT'] . $configFile);
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