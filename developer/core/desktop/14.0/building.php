<?php
require_once('includes/template.php');

head([
    'title' => "How to build the keyboard processor"
]);
?>
<h1 class="title">How to build the keyboard processor</h1>
<h2>Prerequisites</h2>
<h3>To build</h3>

<ul>
  <li>Python 3</li>
  <li>Meson build system.</li>
  <li>C++14 or later compiler.</li>
</ul>

<h3>Optional</h3>
<ul>
  <li><a href="https://keyman.com/developer/download">kmcomp</a> (for testing)</li>
  <li>wine (for running kmcomp on non-Windows OS)</li>
  <li><a href="https://hotdoc.github.io/">hotdoc</a> (for building documentation)</li>
</ul>

<h2>Installing Python3</h2>
<h3>Linux</h3>
<p>
  You will be able to install a python3 package in any reputable recent version
  of linux using its package manager if it's not already installed.
</p>

<h3>Mac OS X</h3>
<p>
  You can get the official installer from the official Python site:
  <a href="https://www.python.org/downloads/mac-osx/"/>https://www.python.org/downloads/mac-osx</a>
</p>

<h3>Windows</h3>
<p>
  You can get the official installer from the official Python site:
  <a href="https://www.python.org/downloads/windows/">https://www.python.org/downloads/windows</a>
</p>

<h2>Installing Meson</h2>
<p>
  Ensure you have Python3 correctly installed and can run the command
  <code class="language-sh">pip3</code>.
</p>
<pre><code class="language-sh">$&gt; python3 -m pip install meson</code></pre>

<h2>Building</h2>
<p>In your source directory do the following:</p>
<pre><code class="language-sh">$&gt; cd keyboardprocessor
$&gt; meson build --werror
$&gt; cd build
$&gt; ninja
$&gt; meson test
</code></pre>

<h2>Note on kmcomp</h2>
<p>
  kmcomp is the command-line compiler from Keyman Developer, available from
  <a href="https://keyman.com/developer/"/>keyman.com</a>
  or source in the <a href='https://github.com/keymanapp/keyman/tree/master/developer/src/kmcomp'>Keyman 
  repo</a>. The compiler is currently available as a
  Windows PE executable only, but it does run under WINE.
</p>

<h3>Windows</h3>
<p>
  The search path can be edited through System settings / Advanced system
  settings / Environment Variables / User environment variables.
</p>

<p>
  If you have Keyman Developer installed, kmcomp should already be on
  your path. Otherwise, add the path where you extracted the kmcomp archive.
</p>

<h3>Linux &amp; MacOS</h3>
<p>
  You will need to ensure that <code>kmcomp.exe</code> is in your
  <code>PATH</code> and you have wine installed.  If the build script detects
  both present it will automatically prepend <code>wine</code> on all of its
  invocations of kmcomp.
</p>
