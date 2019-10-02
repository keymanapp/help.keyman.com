<?php
require_once('includes/template.php');
require_once('includes/session-embed.php');
require_once('includes/session-formfactor.php');

head([
    'title' => 'Using the Keyman Browser - Keyman for Android Help',
    'css' => ['template.css', 'app-info-a.css', 'embed.css', 'formfactor.css'],
    'embedded' => $embed_android
]);
?>

<h2>Using the Keyman Browser</h2>

<?php
  // We need to condition here.  While CSS selection can affect visibility, it
  // won't prevent offlining scripts from following the links and breaking
  // the desired mirrored content for offline help.
  if(!$embed_android) {
    formFactorSelect();
  }
?>

<p>
  Step 1) Click the Keyman Browser button in the Keyman app
</p><p>
  Step 2) Enter the URL of a website to visit into the address bar, for example <strong>google.com</strong>.
  Keyman Browser will load the page and detect your language if it is present, and reformat it to show your
  language instead of square boxes.
</p><p>
  Step 3) Use the bookmark button to save the current page for browsing later.
</p><p>
  Step 4) Use the Globe icon to swap between languages.
</p>

<?php
  include('./_shared/help_links.php');
?>
