<?php
  $pagetitle = 'Keyman Engine for Android 12.0 Developer Support';
  require_once('includes/template.php');
  
  head([
    'title' => $pagetitle
  ]);
?>
<h1 class="center"><?php echo $pagetitle; ?></h1>

<h2 id="Overview" name="Overview">Overview</h2>

<p>Keyman Engine for Android 12.0 is a Java library for Android 4.1 and later versions which enables a fully customisable keyboard layout, both within an app and system-wide.
Keyboard layouts for Keyman Engine can be created with <a href='/developer/12.0'>Keyman Developer</a>, and a <a href='http://keyman.com/developer/keymanweb/keyboards.php'>library of existing keyboard layouts</a>
is also available.</p>

<h2 id="Guides" name="Guides"><a href='guides/'>Guides</a></h2>

<ul>
  <li><a href='guides/in-app/'>Build an in-app keyboard</a></li>
  <li><a href='guides/system-keyboard/'>Build a system keyboard app</a></li>
</ul>

<h2 id="Classes" name="Classes">Classes</h2>

<dl>
  <dt><code><a href='KMManager/'>KMManager</a></code></dt>
  <dd>The core class for controlling Keyman Engine</dd>

  <dt><code><a href='KeyboardEventHandler/'>KeyboardEventHandler</a></code></dt>
  <dd>Provides keyboard events and methods to notify registered listeners</dd>
</dl>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="/developer/engine/android/12.0/" title="Keyman Engine for Android 12.0">Keyman Engine for Android 12.0</a></li>
  <li><a href="/developer/engine/android/11.0/" title="Keyman Engine for Android 11.0">Keyman Engine for Android 11.0</a></li>
  <li><a href="/developer/engine/android/10.0/" title="Keyman Engine for Android 10.0">Keyman Engine for Android 10.0</a></li>
  <li><a href="/developer/engine/android/2.0/" title="Keyman Engine for Android 2.0">Keyman Engine for Android 2.0</a></li>
  <li><a href="/developer/12.0/" title="Keyman Developer 12.0">Keyman Developer 12.0</a></li>
  <li><a href='http://keyman.com/developer/keymanweb/keyboards.php' title="Keyboard Library">Keyboard Library</a></li>
  <li><a href="/developer/engine/iphone-and-ipad/12.0/" title="Keyman Engine for iPhone and iPad 12.0">
    Keyman Engine for iPhone and iPad 12.0</a></li>
</ul>
