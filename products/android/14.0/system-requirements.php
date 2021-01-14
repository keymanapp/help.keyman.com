<?php
require_once('includes/template.php');
require_once('includes/session-embed.php');
require_once('includes/session-formfactor.php');

head([
  'title' => 'System Requirements - Keyman for Android Help',
  'css' => ['template.css', 'app-info-a.css', 'embed.css', 'formfactor.css'],
  'embedded' => $embed_android
]);
?>

<h2>Minimum System Requirements</h2>

<?php
// We need to condition here.  While CSS selection can affect visibility, it
// won't prevent offlining scripts from following the links and breaking
// the desired mirrored content for offline help.
if(!$embed_android) {
  formFactorSelect();
}
?>

<h3>Minimum Android Version</h3>
<p>
  Keyman for Android will run on Android phones and tablets that have a minimum version of
  <a href='https://developer.android.com/about/versions/lollipop'>Android 5.0 (Lollipop)</a>.
</p>

<h3>Device Permissions</h3>
<p>
  Network and external storage permissions are required to download and install keyboards/dictionaries from the Keyman servers.
</p>

<?php
include('./_shared/help_links.php');
?>
