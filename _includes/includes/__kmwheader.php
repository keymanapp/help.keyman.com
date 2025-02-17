<!-- Start of Code -->
<?php

require_once("includes/servervars.php");
use Keyman\Site\Common\KeymanHosts;

// Variables used to manage and trigger debugging tests.
// Simply defining the variable below is enough to trigger debug mode.
// $dev_path = 'http://barrow-2.phnompenh.keyman.com/keymanweb/release/unminified/web';

function get_version($tier)
{
  $kmwbuild = @file_get_contents(KeymanHosts::Instance()->SERVER_api_keyman_com . "/version/web/$tier");

  if($kmwbuild) {
    $kmwbuild = json_decode($kmwbuild);
  }

  if ($kmwbuild && property_exists($kmwbuild, 'version')) {
    $kmwbuild = $kmwbuild->version;
  } else {
    // If the get-version API fails, we'll use the latest known version
    $kmwbuild = "0";
  }

  return $kmwbuild;
}

///  Function get_kmwbuild($maj_version)
///  $maj_version (optional) - specifies the particular major-version number the page should utilize.
///                          - Defaults to the current 'stable' version if not specified, or version 10's stored info if
///                            the API is inaccessible.
function get_kmwbuild()
{
  $tiers = ["stable", "beta", "alpha"];

  if(func_num_args() > 0) { // $maj_version is specified!
    $maj_version = func_get_arg(0);
  } else {
    // In reference to https://stackoverflow.com/questions/10272282/how-to-secure-serverphp-self,
    // as PHP_SELF is not entirely secure but is necessary to get the URL of the including page.
    $phpSelf = filter_input(INPUT_SERVER, 'PHP_SELF', FILTER_SANITIZE_URL);

    // Matches the web section URL string /developer/engine/web/__._/, taking the major version number component.
    preg_match('/developer\/engine\/web\/([0-9]+)\.[0-9]+\//i', $phpSelf, $matches);

    if(count($matches) > 1) {  // $maj_version specified by the including page's URL.
      $maj_version = $matches[1];
    } else {  // $maj_version unspecified.
      $maj_version = 10;
      $tiers = ["stable"];
    }
  }

  for($i = 0; $i < count($tiers); $i++) {
    $kmwbuild = get_version($tiers[$i]);

    $dotPos = strpos($kmwbuild, ".");
    $v = substr($kmwbuild, 0, $dotPos ? $dotPos : strlen($kmwbuild));

    // If a particular version was specified and this doesn't match it, reset the value.
    // Ignore this if the function directly set $maj_version due to no provided argument.
    if($v != $maj_version && count($tiers) > 1) {
      $kmwbuild = "";
    } else {
      break;
    }
  }

  // Found it?  Good, return.
  if($kmwbuild) {
    return $kmwbuild;
  }

  // In case of no match, the defaults:
  switch($maj_version) {
    case 11:
      return "11.0.201";
    case 10:
      return "10.0.103";
    case 2:
      return "2.0.473";
    default:
      global $TestServer;
      if($TestServer) {
        return false;   // We should never get this except briefly while documenting a new major version.
                        // Maybe we could get away with "$maj_version.0.1", but that wouldn't be as detectable of an error.
      } else {
        return "10.0.103";
      }

  }
}

function get_cdn_path($kmwbuild)
{
  return "https://s.keyman.com/kmw/engine/$kmwbuild";
}

function get_kmw_resources() {
  global $debug, $dev_path;

  if(!isset($debug)) {
    return "./";
  } else if (isset($dev_path)) {
    return "./resources/";
  }
}

function get_major_version($versionString) {
  // Matches the web section URL string /developer/engine/web/__._/, taking the major version number component.
  preg_match('/([0-9]+)\.[0-9]+/i', $versionString, $matches);

  if(count($matches) > 1) {  // $maj_version specified by the including page's URL.
    $maj_version = (int)$matches[1];
  } else {
    $maj_version = 2;
  }

  return $maj_version;
}

function get_kmw_path($kmwbuild) {
  global $debug, $dev_path;

  if(!isset($debug)) {
    return get_cdn_path($kmwbuild);
  } else if(!isset($dev_path)) {
    return get_cdn_path($kmwbuild)."/src";
  } else{
    return $dev_path;
  }
}

///  Function setup_kmw($version)
///  $version (optional)     - specifies the particular major-version number the page should utilize.
///                          - Defaults to the current 'stable' version if not specified, or version 10's stored info if
///                            the API is inaccessible.
function setup_kmw() {
  if(func_num_args() > 0) {
    $kmwbuild = get_kmwbuild(func_get_arg(0));
  } else {
    $kmwbuild = get_kmwbuild();
  }

  $cdn_path = get_cdn_path($kmwbuild);

  global $dev_path;

  if (!isset($dev_path)) {
    echo "<script src='$cdn_path/keymanweb.js'></script>\n";
    $resources = "./";
  } else {
    $resources = './resources/';
    echo "<script src='$dev_path/keymanweb.js'></script>\n";
  }


  echo "<script>";
  if(get_major_version($kmwbuild) >= 10) {
    echo "var kmw = keyman;";
  } else {
    echo "var kmw = tavultesoft.keymanweb;";
  }
  echo "</script>\n";

  return $kmwbuild;
}
?>