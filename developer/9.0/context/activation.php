<?php
  require_once('includes/template.php');

  head([
    'title' => "Keyman Developer Activation Dialog"
  ]);
?>

<h1>Keyman Developer Activation Dialog</h1>

<p class='context-main-image'><img src="<?= cdn('img/developer/90/ui/frmActivation.png') ?>" alt="Activation dialog" /></p>

<p>When you acquire a license for <span class="application">Keyman Developer</span>, you will receive an activation code from
Tavultesoft by email.</p>

<ol type="1">
  <li>Start <span class="application">Keyman Developer</span>.</li>

  <li>From the Help menu select Activate or Upgrade.</li>

  <li>Enter the license number that you received (usually via email) when you registered Keyman Developer.</li>

  <li>Click the <span class="guibutton">Activate</span> button. If you entered a valid license number, the following message will be
    displayed:<br />
    <img class='context-main-image' src="<?= cdn('img/developer/90/ui/frmActivation_Successful.png');?>">
  </li>

  <li>Click <span class="guibutton">OK</span>.</li>
</ol>

<h2>Commands</h2>

<dl>
  <dt><a href='manual-activation'>Activation Options link</a></dt>
  <dd>Click this link after entering your license number to activate Keyman Developer via email or other methods.</dd>
  
  <dt><a href='activation-modules'>Buy Modules button</a></dt>
  <dd>Click the Buy Modules button to purchase add-on modules for Keyman Developer such as the Branding Pack.</dd>
</dl>

<h2><a name="id560347" id="id560347"></a>What to do if activation does not work</h2>

<ol type="1">
  <li>Make sure that you have entered the license key exactly as shown.</li>

  <li>If you make a significant hardware upgrade to your computer, you may need to reactivate Keyman Developer. If the activation
    detects too many hardware changes, you should contact Tavultesoft Support for assistance to reactivate your license.</li>
</ol>
