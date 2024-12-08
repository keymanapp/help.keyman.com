<?php
  if(empty($_REQUEST['q'])) {
    header('Location: /keyboard');
    exit;
  }

  $q = $_REQUEST['q'];
  if(preg_match('/[:\/]/', $q)) {
    header('HTTP/1.0 400 Invalid parameter');
    exit;
  }
  if(isset($_REQUEST['v'])) {
    $v = "$q/{$_REQUEST['v']}";
    if(!file_exists("$v/$q.php")) {
      unset($v);
    }
  }
  if(!isset($v)) {
    $versions = array_filter(glob($q . '/*'), 'is_dir');
    if(count($versions) == 0) {
      //Debug purposes: echo "Failed to find any versioned files\n";
      header('Location: /keyboard');
      exit;
    }
    // We need to sort the returned array because it will be sorted by string
    // which makes '10.0' < '9.0'.
    usort($versions, 'version_compare');
    $v = array_pop($versions);
  }

  $filename = "$v/$q";
  if(!file_exists("$filename.php")) {
    //Debug purposes: echo "Failed to find target filename\n";
    header('Location: /keyboard');
    exit;
  }

  //Debug purposes: echo "Location: /keyboard/$filename";
  header("Location: /keyboard/$filename");
?>