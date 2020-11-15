<?php
  declare(strict_types=1);

  namespace Keyman\Site\Common;

  class JsonApiFailure {
    public const
      ERROR_InvalidParameters = 'ERROR_InvalidParameters',
      ERROR_NotFound = 'ERROR_NotFound';

    static function Failure($httpcode, $errorcode, $message) {
      header("HTTP/1.0 $httpcode $errorcode");
      header("Content-Type: application/json");
      \Sentry\captureMessage("Error $errorcode: $message", \Sentry\Severity::error());
      $data = ['error' => $errorcode, 'message' => $message];
      echo json_encode($data, JSON_UNESCAPED_SLASHES);
      exit;
    }

    static function InvalidParameters($expected) {
      self::Failure(400, JsonApiFailure::ERROR_InvalidParameters, "Invalid parameters passed to function (expected: $expected)");
    }
  }