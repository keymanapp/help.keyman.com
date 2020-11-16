<?php
  declare(strict_types=1);

  namespace Keyman\Site\Common;

  class KeymanHosts {
    // Four tiers. These use the following rough patterns:
    // * development = [x.]keyman.com.local
    // * Staging = [x.]keyman-staging.com
    // * Production = [x.]keyman.com
    // * Test = GitHub actions, localhost:8888 (uses staging tier for other hosts)
    const TIER_DEVELOPMENT = "TIER_DEVELOPMENT";
    const TIER_STAGING = "TIER_STAGING";
    const TIER_PRODUCTION = "TIER_PRODUCTION";
    const TIER_TEST = "TIER_TEST";

    public
      $s_keyman_com, $api_keyman_com, $help_keyman_com, $downloads_keyman_com,
      $keyman_com, $keymanweb_com, $r_keymanweb_com, $blog_keyman_com,
      $donate_keyman_com, $translate_keyman_com;

    public
      $s_keyman_com_host, $api_keyman_com_host, $help_keyman_com_host, $downloads_keyman_com_host,
      $keyman_com_host,  $keymanweb_com_host, $r_keymanweb_com_host, $blog_keyman_com_host,
      $donate_keyman_com_host, $translate_keyman_com_host;

    private $tier;

    private static $instance;

    public static function Instance(): KeymanHosts {
      if(!self::$instance)
        self::Rebuild();
      return self::$instance;
    }

    public function Tier() {
      return $this->tier;
    }

    public static function Rebuild() {
      self::$instance = new KeymanHosts();
    }

    /**
     * Returns $contents after regex'ing the Keyman live hosts for Markdown files
     * @param $contents
     * @return $contents
     */
    public function fixupHostReferences($contents) {
      // Regex Keyman hosts
      $contents = str_replace("https://s.keyman.com", $this->s_keyman_com, $contents);
      $contents = str_replace("https://api.keyman.com", $this->api_keyman_com, $contents);
      $contents = str_replace("https://help.keyman.com", $this->help_keyman_com, $contents);
      $contents = str_replace("https://downloads.keyman.com", $this->downloads_keyman_com, $contents);
      $contents = str_replace("https://keyman.com", $this->keyman_com, $contents);
      $contents = str_replace("https://keymanweb.com", $this->keymanweb_com, $contents);
      $contents = str_replace("https://r.keymanweb.com", $this->r_keymanweb_com, $contents);
      $contents = str_replace("https://blog.keyman.com", $this->blog_keyman_com, $contents);
      $contents = str_replace("https://donate.keyman.com", $this->donate_keyman_com, $contents);
      $contents = str_replace("https://translate.keyman.com", $this->translate_keyman_com, $contents);

      return $contents;
    }

    function __construct() {
      if(isset($_SERVER['KEYMANHOSTS_TIER']) && in_array($_SERVER['KEYMANHOSTS_TIER'],
          [KeymanHosts::TIER_DEVELOPMENT, KeymanHosts::TIER_STAGING,
           KeymanHosts::TIER_PRODUCTION, KeymanHosts::TIER_TEST])) {
        $this->tier = $_SERVER['KEYMANHOSTS_TIER'];
      } else if(file_exists(__DIR__ . '/../tier.txt')) {
        $this->tier = trim(file_get_contents(__DIR__ . '/../tier.txt'));
      } else {
        $this->tier = KeymanHosts::TIER_DEVELOPMENT;
      }

      switch($this->tier) {
      // Not all these are currently used but helps to cleanup confusion
      case KeymanHosts::TIER_PRODUCTION:
      case KeymanHosts::TIER_STAGING:
        $site_suffix = '';
        $site_protocol = 'https://';
        break;
      case KeymanHosts::TIER_TEST:
        $site_suffix = '';
        $site_protocol = 'http://';
        break;
      case KeymanHosts::TIER_DEVELOPMENT:
        $site_suffix = '.local';
        $site_protocol = 'http://';
        break;
      }

      $this->blog_keyman_com = "https://blog.keyman.com";
      $this->donate_keyman_com = "https://donate.keyman.com";
      $this->translate_keyman_com = "https://translate.keyman.com";

      if(in_array($this->tier, [KeymanHosts::TIER_STAGING, KeymanHosts::TIER_TEST])) {
        // As we build more staging areas, change these over as well. Assumption that we'll stage across multiple sites is a
        // little presumptuous but we can live with it.
        $this->s_keyman_com = "https://s.keyman.com";
        $this->api_keyman_com = "https://api.keyman-staging.com";
        $this->help_keyman_com = "https://help.keyman-staging.com";
        $this->downloads_keyman_com = "https://downloads.keyman.com";
        $this->keyman_com = "https://keyman-staging.com";
        $this->keymanweb_com = "https://keymanweb.com";
        $this->r_keymanweb_com = "https://r.keymanweb.com";
      } else {
        // TODO: allow override of these with e.g. KEYMANHOSTS_API_KEYMAN_COM='https://api.keyman.com';
        $this->s_keyman_com = "{$site_protocol}s.keyman.com{$site_suffix}";
        $this->api_keyman_com = "{$site_protocol}api.keyman.com{$site_suffix}";
        $this->help_keyman_com = "{$site_protocol}help.keyman.com{$site_suffix}";
        $this->downloads_keyman_com = "{$site_protocol}downloads.keyman.com{$site_suffix}";
        $this->keyman_com = "{$site_protocol}keyman.com{$site_suffix}";
        $this->keymanweb_com = "{$site_protocol}keymanweb.com{$site_suffix}";
        $this->r_keymanweb_com = "https://r.keymanweb.com"; /// local dev domain is usually not available
      }

      $this->blog_keyman_com_host = preg_replace('/^http(s)?:\/\/(.+)$/', '$2', $this->blog_keyman_com);
      $this->s_keyman_com_host  = preg_replace('/^http(s)?:\/\/(.+)$/', '$2', $this->s_keyman_com);
      $this->api_keyman_com_host = preg_replace('/^http(s)?:\/\/(.+)$/', '$2', $this->api_keyman_com);
      $this->help_keyman_com_host = preg_replace('/^http(s)?:\/\/(.+)$/', '$2', $this->help_keyman_com);
      $this->downloads_keyman_com_host = preg_replace('/^http(s)?:\/\/(.+)$/', '$2', $this->downloads_keyman_com);
      $this->keyman_com_host = preg_replace('/^http(s)?:\/\/(.+)$/', '$2', $this->keyman_com);
      $this->keymanweb_com_host = preg_replace('/^http(s)?:\/\/(.+)$/', '$2', $this->keymanweb_com);
      $this->r_keymanweb_com_host = preg_replace('/^http(s)?:\/\/(.+)$/', '$2', $this->r_keymanweb_com);
      $this->donate_keyman_com_host = preg_replace('/^http(s)?:\/\/(.+)$/', '$2', $this->donate_keyman_com);
      $this->translate_keyman_com_host = preg_replace('/^http(s)?:\/\/(.+)$/', '$2', $this->translate_keyman_com);
    }
  }
