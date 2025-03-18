<?php
  declare(strict_types=1);

  namespace Keyman\Site\com\keyman\help;

  use Keyman\Site\Common\KeymanSentry;

  require_once(__DIR__ . '/../../_common/KeymanSentry.php');

  const SENTRY_DSN = 'https://fcc8fe39792f49f3a94ea831cad5c9d6@o1005580.ingest.sentry.io/5983515';

  class HelpKeymanComSentry {
    static function init() {
      KeymanSentry::Init(SENTRY_DSN);
    }
    static function GetBrowserHTML() {
      return KeymanSentry::GetBrowserHTML(SENTRY_DSN);
    }
  }