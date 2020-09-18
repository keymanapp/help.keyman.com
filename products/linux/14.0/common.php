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
  <span class="red">A.</span> In Ubuntu and Wasta-Linux, Keyman for Linux can be installed via launchpad:
  <pre><code class="language-bash">sudo add-apt-repository ppa:keymanapp/keyman
sudo apt-get update
sudo apt-get upgrade
sudo apt-get install keyman ibus-keyman onboard</code></pre>
</p>
<p>
  Keyman for Linux packages are also available in any current Debian at:
  <a href='https://packages.debian.org/keyman'>https://packages.debian.org/keyman</a>
</p>
<br/>

<p>
  <span class="red">Q.</span> How do I install a Keyman keyboard?
</p>
<p>
  <span class="red">A.</span> Follow this <a href="guide/installing-keyboard.php">guide</a> for installing Keyman keyboards.
</p>

<br/>
<p>
  <span class="red">Q.</span> What's the relationship between Keyman for Linux and KMFL?
</p>
<p>
  <span class="red">A.</span> Keyman for Linux and KMFL are released together in the Keyman
    <a href="https://en.wikipedia.org/wiki/Ubuntu#Package_Archives">PPA</a>, but are separate. The installation
    instructions above will install Keyman, not KMFL.
</p>

<br/>
<p>
  <span class="red">Q.</span> Can I have Keyman for Linux and KMFL installed at the same time?
</p>
<p>
  <span class="red">A.</span> Yes. To install KMFL on Ubuntu:
<pre><code class="language-bash">sudo add-apt-repository ppa:keymanapp/keyman
sudo apt-get update
sudo apt-get upgrade
sudo apt-get install ibus-kmfl</code></pre>
</p>

<br/>
<p>
  <span class="red">Q.</span> If I already had KMFL isntalled, how can I uninstall KMFL before installing Keyman?
</p>
<p>
  <span class="red">A.</span> It is good to remove any keyboards from ibus e.g. KMFL keyboards before you remove KMFL.
  Then, to remove KMFL:
<pre><code class="language-bash">sudo dpkg --purge ibus-kmfl libkmfl
</code></pre>
</p>


<br/>
<p>
  <span class="red">Q.</span> How do I display the On-screen Keyboard (OSK)?
</p>
<p>
  <span class="red">A.</span> From the launcher, enter <pre><code class="language-bash">onboard</code></pre>
</p>
<p>
  <img src="<?php echo cdn("img/linux/140/onboard.png"); ?>" alt="Onboard" />
</p>

<br/>
<p>
  <span class="red">Q.</span> What Linux distros will Keyman work with?
</p>
<p>
  <span class="red">A.</span> Keyman runs on Debian, Ubuntu, Wasta Linux and can be compiled to run from source in most
    distributions.<br/>
  Note: Keyman for Linux no longer supports Ubuntu 16.04 LTS (Xenial Xerus).
</p>

<br/>
<p>
  <span class="red">Q.</span> Will my existing Windows Keyman keyboard work with Keyman for Linux?
</p>
<p>
  <span class="red">A.</span> Most keyboards will work without change. A small subset of keyboards require features which
    are not yet available in Keyman for Linux. These features will be progressively implemented.
