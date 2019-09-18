<?php
  require_once('includes/template.php');

  head([
    'title' => "Distribute Lexical Models to Keyman Applications"
  ]);
?>

<h1 class="title" id="reference__package">Distribute lexical models to Keyman Applications</h1>
<h2>Overview</h2>

<p>Lexical model package files contain one or more lexical models, along with readme files,
  and any other files you wish to include. You should create a package file to bundle your lexical models and help
  into a simple, single file that is easy for an end-user to install.</p>

<p>Internally, as well as your own files, the package file will contain a metadata files "kmp.json", which lists the details Keyman
  needs to install the lexical model package. The package file is a ZIP compatible archive.</p>

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
  <dd>Lexical model files. When Keyman mobile applications install a lexical model package, all included models will be installed as a group.</dd>

  <dt>welcome.htm</dt>
  <dd>Introductory help for the lexical model, HTML format. This will normally be displayed when the package is installed by the user, and is also the entry point
  for help when accessed via Keyman's help system or Keyman Configuration.</dd>

  <dt>kmp.json</dt>
  <dd>A JSON format file contains metadata for the lexical model package such as package version, model versions,
    and lists each of the files in the package. For more explanation of the structure of the JSON file, please read the
    <a href="/developer/12.0/reference/file-types/metadata">metadata</a> documentation.</dd>
</dl>

<h2>Step 1) Share the lexical model package file</h2>

<p>Once the lexical model package .kmp file is created, you can share them via external storage devices (USB drive, SD card, etc).
  If that is not an option, you can upload the .kmp file to a public facing website.
  For this example, the lexical model package for SENĆOŦEN is being uploaded:</p>

<ol>
  <li>nrc.str.sencoten.kmp (the lexical model package .kmp file)</li>
</ol>

<h2>Step 2) Create a link to the KMP file</h2>

<p>Once all the files have been uploaded, you will need to provide a link to the lexical model package .kmp file for
  your device to download and install. This can either be a link on a web page, or a link in an email.
  In this tutorial, a very simple .html web page with a link to the nrc.str.sencoten.kmp file is created:</p>

<pre class='language-markup'><code>&lt;html&gt;
  &lt;head&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;a href="https://keyman.com/test/nrc.str.sencoten.kmp"&gt;Sencoten Lexical Model Package&lt;/a&gt;
  &lt;/body&gt;
&lt;/html&gt;</code></pre>

<p>The link must be in the format <code class="language-markup">http://</code> or <code class="language-markup">https://</code></p>

<p>Upload the web page to your public facing website. Once done, you can install the lexical model package onto your
  mobile devices by downloading the .kmp from your device's internet browser.</p>
