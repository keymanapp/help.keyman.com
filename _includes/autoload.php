<?php
  spl_autoload_register(function ($class_name) {
    if(preg_match('/^Keyman\\\\Site\\\\com\\\\keyman\\\\help\\\\(.+)/', $class_name, $matches)) {
      $success = @include(__DIR__ . "/2020/{$matches[1]}.php");
      if($success === FALSE) {
        debug_print_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
        die("Unable to find class $class_name");
      }
    }
  });

  spl_autoload_register(function ($class_name) {
    if(preg_match('/^Keyman\\\\Site\\\\Common\\\\(.+)/', $class_name, $matches)) {
      $success = @include(__DIR__ . "/../_common/{$matches[1]}.php");
      if($success === FALSE) {
        debug_print_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
        die("Unable to find class $class_name");
      }
    }
  });
