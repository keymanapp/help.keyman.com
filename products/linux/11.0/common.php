<?php
require_once('includes/template.php');

head([
  'title' => 'Common Questions',
  'css' => ['template.css', 'prism.css'],
  'js' => ['prism.js']
]);
?>

<h1 class="red">Common Questions</h1>

<p>
  <span class="red">Q.</span> How do I install Keyman for Linux?
</p>
<p>
  <span class="red">A.</span> In Ubuntu, Keyman for Linux can be installed via <a href="https://launchpad.net/keyman">launchpad</a>:
  <pre><code class="language-bash">sudo add-apt-repository ppa:keymanapp/keyman
sudo apt-get update
sudo apt-get install keyman onboard</code></pre>
</p>

<p>
  <span class="red">Q.</span> How do I install a Keyman keyboard?
</p>

<p>
  <span class="red">A.</span> Use Keyman Configuration by running in a terminal: <code class='language-bash'>km-config</code>.
  This brings up a configuration panel where you can "Download" Keyman keyboards from the cloud repository. You can also "Install"
  keyboards via local .kmp keyboard packages. In some keyboard packages, you might need to add the keyboard to
  ibus by adding an "Other" input source.
</p>

<br/>
<p>
  <span class="red">Q.</span> What Linux distros will Keyman work with?
</p>
<p>
  <span class="red">A.</span> Keyman runs on Debian, Ubuntu, Wasta Linux and can be compiled to run from source in most distributions.
</p>

<br/>
<p>
  <span class="red">Q.</span> Will my existing Windows Keyman keyboard work with Keyman for Linux?
</p>
<p>
  <span class="red">A.</span> Most keyboards will work without change. A small subset of keyboards require features which
    are not yet available in Keyman for Linux. These features will be progressively implemented. Keyman for Linux will
    inform you when you attempt to install a keyboard if it is using a currently unsupported feature.