<?php
  // Test web server ready, and _common files, and vendor files ready

  if (!file_exists(__DIR__ . '/../keyboard/index.cache')) {
    die("/keyboard/index.cache not ready");
  }
  
  if (!file_exists(__DIR__ . '/../_common/KeymanHosts.php')) {
    die('/_common not ready');
  }
  
  if (!is_dir(__DIR__ . '/../vendor')) {
    die('/vendor not ready');
  }

  echo "ready\n";
