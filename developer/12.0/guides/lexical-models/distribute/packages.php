<?php
  require_once('includes/template.php');

  head([
    'title' => "Distribute Lexical Models to Keyman Applications"
  ]);
?>

<h1 class="title" id="reference__package">Distribute lexical models to Keyman Applications</h1>
<h2>Overview</h2>

<p>Lexical model package files contain one lexical model, along with readme files,
  and any other files you wish to include. You must create a package file to bundle your lexical model and help documentation
  into a simple, single file that is easy for an end-user to install.</p>

<p>The package file is a ZIP compatible archive.</p>

<aside>
  <h3>Tip</h3>
  <p>You can distribute keyboards and lexical models in package files, but you can't include both in the same package file.</p>
</aside>

<h4>Keyman for Android and Keyman for iPhone and iPad</h4>
<p>Keyman mobile applications can install the same lexical model package files.</p>

<h2>Package file contents</h2>

<p>A package can have a variety of different files contained within. The following files and file types are recognized by the package installer:</p>

<dl>
  <dt>*.model.js</dt>
  <dd>Lexical model file. When Keyman mobile applications install a lexical model package, the included model will be installed
    and associated with the specified languages.</dd>

  <dt>welcome.htm</dt>
  <dd>Introductory help for the lexical model, HTML format. This will normally be displayed when the package is installed by the user, and is also the entry point
  for help when accessed via Keyman's help system or Keyman Configuration.</dd>
</dl>

<h2>Step 1) Share the lexical model package file</h2>

<p>Once the lexical model package .kmp file is created, you can share them via external storage devices (USB drive, SD card, etc).
  If that is not an option, you can upload the .kmp file to a public facing website.
  For this example, the lexical model package for SENĆOŦEN is being uploaded:</p>

<ol>
  <li>nrc.str.sencoten.model.kmp (the lexical model package .kmp file)</li>
</ol>

<h2>Step 2) Create a link to the KMP file</h2>

<p>Once all the files have been uploaded, you will need to provide a link to the lexical model package .kmp file for
  your device to download and install. This can either be a link on a web page, or a link in an email.
  In this tutorial, a very simple .html web page with a link to the nrc.str.sencoten.kmp file is created:</p>

<pre class='language-markup'><code>&lt;html&gt;
  &lt;head&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;a href="https://keyman.com/test/nrc.str.sencoten.model.kmp"&gt;Sencoten Lexical Model Package&lt;/a&gt;
  &lt;/body&gt;
&lt;/html&gt;</code></pre>

<p>The link must be in the format <code class="language-markup">http://</code> or <code class="language-markup">https://</code></p>

<p>Upload the web page to your public facing website. Once done, you can install the lexical model package onto your
  mobile devices by downloading the .kmp from your device's internet browser.</p>
