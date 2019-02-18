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

<br/>
<p>
  <span class="red">Q.</span> How do I install a Keyman keyboard?
</p>
<p>
  <span class="red">A.</span> Follow this <a href="installing-keyboard.php">guide</a> for installing Keyman keyboards.
</p>

<br/>
<p>
  <span class="red">Q.</span> How do I display the On-screen Keyboard (OSK)?
</p>
<p>
  <span class="red">A.</span> From the launcher, enter <pre><code class="language-bash">onboard</code></pre>
</p>
<p>
  <img src="<?php echo cdn("img/linux/110/onboard.png"); ?>" alt="Onboard" />
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
    are not yet available in Keyman for Linux. These features will be progressively implemented.
