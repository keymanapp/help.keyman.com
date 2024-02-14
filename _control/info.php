<?php
  require_once __DIR__ . '/../_includes/autoload.php';
  use Keyman\Site\Common\KeymanHosts;
    // require_once('includes/template.php');

  echo "<p>TIER: " . KeymanHosts::Instance()->Tier() . "</p>";

  echo "<p><a href='./alive'>Alive</a></p>";
  echo "<p><a href='./ready'>Ready</a></p>";
