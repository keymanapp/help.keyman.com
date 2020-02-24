<?php
require_once('includes/template.php');

head([
  'title' => 'Installing Keyboards with Keyman for Linux',
  'css' => ['template.css', 'prism.css'],
  'js' => ['prism.js']
]);
?>

<h1 class="red">Installing Keyboards with Keyman for Linux</h1>
<p>
  Keyboards are installed with Keyman Configuration. From the launcher, enter <code class='language-bash'>Keyman Configuration</code>.
</p>
<p>
  <img src="<?php echo cdn("img/linux/120/km-config.png"); ?>" alt="Keyman Configuration" />
</p>

<h2 class="red">Download from Keyman cloud repository</h2>
<p>
  From Keyman Configuration, click "Download". At the search page, enter the keyboard you want to download.
</p>
<p>
  <img src="<?php echo cdn("img/linux/120/search-khmer-angkor.png"); ?>" alt="Search for khmer_angkor keyboard" />
</p>
<p>
  Clicking the keyboard brings the keyboard page which has a link for installation.
</p>
<p>
  <img src="<?php echo cdn("img/linux/120/download-khmer-angkor.png"); ?>" alt="Install khmer_angkor" />
</p>

<h2 class="red">Install Local .kmp keyboard package</h2>
<p>
  Keyman for Linux can also install keyboards from local .kmp keyboard packages. From Keyman Configuration,
  click "Install". Then browse to the local .kmp keyboard package and install.
</p>
<p>
  <img src="<?php echo cdn("img/linux/120/package-khmer-angkor-welcome.png"); ?>" alt="Package khmer_angkor" />
</p>
<p>
  The keyboard should appear in Keyman Configuration.
</p>
<p>
  <img src="<?php echo cdn("img/linux/120/km-config-khmer-angkor.png"); ?>" alt="Keyman Configuration khmer_angkor" />
</p>

<h3 class="red">Install the Input Source in Region & Language Settings</h3>
<p>
  This section is only relevant for Ubuntu. At this point the keyboard should be ready to use on Wasta.
</p>
<p>
  Note that Keyman Configuration only installs the keyboard into IBus. In order to use the keyboard in Ubuntu,
  access your system Settings and click "Region & Language".
</p>
<p>
  <img src="<?php echo cdn("img/linux/120/region-and-language.png"); ?>" alt="Settings: Region & Language" />
</p>
<p>
  Click "+" to add the input source. Click the 3 dots to search for other input sources.
</p>
<p>
  <img src="<?php echo cdn("img/linux/120/add-input-source.png"); ?>" alt="Add Input Source" />
</p>
<p>
  Search for the keyboard you added.
</p>
<p>
  <img src="<?php echo cdn("img/linux/120/add-input-source-khmer.png"); ?>" alt="Add Input Source: Khmer" />
</p>
<br/>
<p>
  <img src="<?php echo cdn("img/linux/120/add-input-source-khmer-angkor.png"); ?>" alt="Add Input Source: khmer_angkor" />
</p>
<p>
  Your input source is now accessible in IBus. Use the shortcut Windows-spacebar to switch input source.
</p>
<p>
  <img src="<?php echo cdn("img/linux/120/region-language-khmer-angkor.png"); ?>" alt="Region & Language: khmer_angkor" />
</p>
