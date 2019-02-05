<?php
  /**
    Generate the CDN versioned files for updated resources.  If a file hasn't changed, its md5 won't change, either, and then
    the cached file will remain.
  */
  
  generate_hash(".", "./deploy/cdn.php");
  
  function generate_hashed_version_dir($source, $deploy, $folder) {
    $deploy_folder = $deploy . substr($folder, strlen($source));
    if(!file_exists($deploy_folder)) {
      mkdir($deploy_folder);
    }
    
    $d = opendir($folder);
    while(($f = readdir($d)) !== false) {
      if($f == '.' || $f == '..') continue;
      $f = "$folder\\$f";
      if(is_dir($f)) {
        generate_hashed_version_dir($source, $deploy, $f);
      } else {
        generate_hashed_version_file($source, $deploy, $f);
      }
    }
    closedir($d);
  }
  
  function generate_hashed_version_file($source, $deploy, $source_file) {
    global $resource_list, $s_root;
    
    $hash = md5_file($source_file);
    $source_file_short = substr($source_file, strlen($source));
    if(preg_match('/^(.+)\.([a-z0-9]+)$/i', $source_file_short, $matches)) {
      $dest_file = "{$matches[1]}.$hash.{$matches[2]}";
    } else {
      $dest_file = $source_file_short;
    }
    if(!file_exists($deploy . $dest_file)) {
      echo $source_file . " => " . $deploy . $dest_file . "\n";
     
      // Copy the new hashed filename into the deploy folder
      copy($source_file, $deploy . $dest_file);
    }
    
    // We always copy the base file as well, because some resources make assumptions about related filenames.
    // That's not ideal but it saves pain later :)
    copy($source_file, $deploy . $source_file_short);
    
    $resource_list[str_replace("\\","/",$source_file_short)] = str_replace("\\", "/", $dest_file);
  }

  function generate_hash($root, $resource_file) {
    global $resource_list;
    $resource_list = array();
    
    $deploy = $root . "\\deploy";
    $source = $root . "\\dev";

    if(!file_exists($deploy)) {
      mkdir($deploy);
    }
    
    generate_hashed_version_dir($source, $deploy, $source);
  
    $resource_text = "<?php \$cdn = " . var_export($resource_list, true) . "; ?>";
    file_put_contents($resource_file, $resource_text);
  }
?>
