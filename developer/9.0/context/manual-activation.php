<?php
  require_once('includes/template.php');

  head([
    'title' => "Keyman Developer Activation Dialog"
  ]);
?>

<h1>Keyman Developer Manual Activation Dialog</h1>

<p class='context-main-image'><img src="<?= cdn('img/developer/90/ui/frmManualActivation.png') ?>" alt="Manual Activation dialog" /></p>

<p>If you cannot activate Keyman Developer automatically (e.g. if you do not have web access), then you can run a manual activation.</p>

<ol type="1">
  <li>Start <span class="application">Keyman Developer</span>.</li>

  <li>From the Help menu select Activate or Upgrade.</li>

  <li>Enter the license number that you received (usually via email) when you registered Keyman Developer.</li>

  <li>Click the <span class="guibutton">Activate Options</span> link. If you entered a valid license number, the Manual Activation dialog will
  be displayed.</li>
  
  <li>Click Copy to Clipboard to copy the activation request code to the clipboard. Paste this code 
  into <a href='https://secure.tavultesoft.com/support/activate.php' target='_blank'>Online Manual Activation</a>.</li>
  
  <li>When you receive the response code from Tavultesoft Support, paste the response in with the Paste from clipboard button, and click Activate.</li>
</ol>
