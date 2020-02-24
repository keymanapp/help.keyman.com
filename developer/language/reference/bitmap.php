<?php
  require_once('includes/template.php');

  head([
    'title' => "&amp;bitmap"
  ]);
?>

<h1 class="title" id="reference_bitmap">&amp;bitmap</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>&amp;bitmap</strong></code> store defines an icon which is used in the user interface to indicate that the keyboard is active.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>store(&amp;bitmap) "<var>filename</var>"
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>filename</code></dt>
  <dd>The filename, relative to the keyboard source, of the bitmap or icon file to use.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>The bitmap can be in two different formats: .bmp or .ico. A .bmp file must be a 16x16 image. Keyman supports .ico files with multiple
image sizes, and the appropriate size will be used if available. (For HiDPI screens on Windows, two image sizes is sufficient for up to 
300% scaling: 16x16 and 48x48.) The .ico format also supports full alpha transparency.</p>

<p>Specify the full filename, including the file extension, in quotes. If the icon is in a different folder, then use a relative path
to reference it.</p>

<p>The older <code>BITMAP</code> and <code>BITMAPS</code> header statements are deprecated and should not be used.</p>

<p>The <code>&amp;bitmap</code> store is not required. A generic keyboard icon will be displayed if no bitmap is specified.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_bitmap" name="Example:_Using_bitmap">Example: Using <code>&amp;bitmap</code></h3>

<pre><code>store(&amp;bitmap) "keyboard.ico"
</code></pre>

<h2>Platforms</h2>

<p>The <code>&amp;bitmap</code> store is used on the following platforms. It is ignored on all other platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✘</td><td>✘</td><td>✘</td><td>✘</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>Keyman 9: Hi DPI support, including .ico files with multiple resolutions.</p>
<p>Keyman 8: Added support for .ico files.</p>
<p>Keyman 7: A generic keyboard icon is displayed if no bitmap is specified for the keyboard.</p>
<p>Keyman 5: Added the <code>&amp;bitmap</code> store, and made optional.</p>
<p>Keyman 4: Added the <code>BITMAP</code> header statement.</p>
<p>Keyman 3: Added the <code>BITMAPS</code> header statement was introduced.</p>
