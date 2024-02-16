<?php
  require_once('includes/template.php');

  head([
    'title' => "Startup Window"
  ]);
?>

<h1>Startup Window</h1>

<p class='context-main-image'><img src="<?= cdn('img/developer/100/ui/frmStartup.png') ?>" alt="Startup window" /></p>

<p>When you start <span class="application">Keyman Developer</span>, the splash screen above is displayed for a short period of time
while the software loads.</p>

<h2>Turning off the Splash Screen</h2>

<ol>
  <li>Start <span class="application">Keyman Developer</span>.</li>
  <li>From the Tools menu select Options.</li>
  <li>Clear the Show Splash Screen checkbox in the General tab.</li>
  <li>Click OK.</li>
</ol>

<p>The next time you start Keyman Developer, the splash screen will not appear.</p>
