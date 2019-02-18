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
  Keyboards are installed with Keyman Configuration. Using a terminal, enter <code class='language-bash'>km-config</code>.
</p>
<p>
  <img src="<?php echo cdn("img/linux/110/km-config.png"); ?>" alt="Keyman Configuration" />
</p>

<h2 class="red">Download from Keyman cloud respository</h2>
<p>
  From Keyman Configuration, click "Download". At the search page, enter the keyboard you want to download.
</p>
<p>
  <img src="<?php echo cdn("img/linux/110/search-khmer-angkor.png"); ?>" alt="Search for khmer_angkor keyboard" />
</p>
<p>
  Clicking the keyboard brings the keyboard page which has a link for installation.
</p>
<p>
  <img src="<?php echo cdn("img/linux/110/download-khmer-angkor.png"); ?>" alt="Install khmer_angkor" />
</p>

<h2 class="red">Install Local .kmp keyboard package</h2>
<p>
  Keyman for Linux can also install keyboards from local .kmp keyboard packages. From Keyman Configuration,
  click "Install". Then browse to the local .kmp keyboard package and install.
</p>
<p>
  <img src="<?php echo cdn("img/linux/110/package-khmer-angkor-welcome.png"); ?>" alt="Package khmer_angkor" />
</p>
<p>
  The keyboard should appear in km-config.
</p>
<p>
  <img src="<?php echo cdn("img/linux/110/km-config-khmer-angkor.png"); ?>" alt="Keyman Configuration khmer_angkor" />
</p>


<h3 class="red">Installing the Input Service to be used in gnome-shell</h3>
<p>
  Note that km-config only installs the keyboard into IBus. The step to "install the Input Source in Region & Language
  Settings" is needed for it to be used in gnome-shell. Access your system Settings and click "Region & Language".
</p>
<p>
  <img src="<?php echo cdn("img/linux/110/region-and-language.png"); ?>" alt="Settings: Region & Language" />
</p>
<p>
  Click "+" to add the input source. Click the 3 dots to search for other input sources.
</p>
<p>
  <img src="<?php echo cdn("img/linux/110/add-input-source.png"); ?>" alt="Add Input Source" />
</p>
<p>
  Search for the keyboard you added.
</p>
<p>
  <img src="<?php echo cdn("img/linux/110/add-input-source-khmer.png"); ?>" alt="Add Input Source: Khmer" />
</p>
<br/>
<p>
  <img src="<?php echo cdn("img/linux/110/add-input-source-khmer-angkor.png"); ?>" alt="Add Input Source: khmer_angkor" />
</p>
<p>
  Your input source is now accessible in IBus. Use the shortcut Windows-spacebar to switch input source.
</p>
<p>
  <img src="<?php echo cdn("img/linux/110/region-language-khmer-angkor.png"); ?>" alt="Region & Language: kkmer_angkor" />
</p>
