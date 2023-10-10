<?php
  require_once('includes/template.php');

  head([
    'title' => "Distribute Keyboards to Keyman Applications"
  ]);
?>

<h1 class="title" id="reference__package">Distribute keyboards to Keyman Applications</h1>
<h2>Overview</h2>

<p>Keyboard package files contain one or more keyboards, along with readme files, fonts (if your keyboard requires a custom font),
  and any other files you wish to include. You should create a package file to bundle your keyboard with fonts and help
  into a simple, single file that is easy for an end-user to install.</p>

<p>Internally, as well as your own files, the package file will contain metadata files "kmp.inf" and "kmp.json", which list the details Keyman
  needs to install the package. The package file is a ZIP compatible archive.</p>

<aside>
  <h3>Tip</h3>
  <p>You can distribute keyboards and lexical models in package files, but you can't include both in the same package file.</p>
</aside>

<h4>Keyman Desktop</h4>
<p>Keyman Desktop can install package files, including installing fonts, creating Start Menu shortcuts, and adding appropriate registry entries
  for uninstallation.</p>

<p>On Windows, the context menu for a package file has one additional entry: "Install".</p>

<h4>Keyman for macOS</h4>
<p>Keyman for macOS can install package files with fonts and keyboards, and shortcuts in the package will be available
through the keyboard's entry in Keyman Configuration.</p>

<h4>Keyman for Android and Keyman for iPhone and iPad</h4>
<p>Keyman mobile applications can install the same package files as Keyman Desktop, as long as the package includes
  keyboards for touch layouts.</p>

<h2>Package file contents</h2>

<p>A package can have a variety of different files contained within. The following files and file types are recognized by the package installer:</p>

<dl>
  <dt>*.kmx (Desktop and macOS only)</dt>
  <dd>Keyboard files. Each of these will be installed. Keyman Configuration will not allow installation or uninstallation of a single keyboard from a package.
  They will always be treated as a group for installation and uninstallation.</dd>

  <dt>*.kvk (Desktop and macOS only)</dt>
  <dd>On Screen Keyboard files, associated with each keyboard file.</dd>

  <dt>*.js (mobile only)</dt>
  <dd>Touch layout Keyboard files. When Keyman mobile applications install a keyboard package, all included keyboards will be installed as a group.
    With Keyman Developer 10, the keyboard version information is in kmp.json, and no longer within the JS file names.</dd>

  <dt>welcome.htm</dt>
  <dd>Introductory help for the keyboard, HTML format. This will normally be displayed when the package is installed by the user, and is also the entry point
  for help when accessed via Keyman's help system or Keyman Configuration.</dd>

  <dt>readme.htm</dt>
  <dd>Displayed before a package is installed, together with brief metadata about the package, to allow the user to determine if they wish to continue installation
  of the package.</dd>

  <dt>kmp.inf (Legacy versions of Keyman)</dt>
  <dd>A Windows .ini format file that lists each of the files in the package, together with metadata.</dd>

  <dt>kmp.json</dt>
  <dd>A JSON format file contains metadata for the keyboard package such as package version, keyboard versions,
    and lists each of the files in the package. For more explanation of the structure of the JSON file, please read the
    <a href="../../reference/file-types/metadata">metadata</a> documentation.</dd>

  <dt>*.ttf, *.otf, *.ttc</dt>
  <dd>Truetype font files that will be installed with the package, and uninstalled when the package is removed.
    On mobile, these fonts will be available only within the Keyman app and the on-screen-keyboard, not in other apps.</dd>
</dl>

<h2>Step 1) Share the keyboard package file</h2>

<p>Once the keyboard package .kmp file is created, you can share them via external storage devices (USB drive, SD card, etc).
  You can also share the package file via a cloud storage system (Google Drive, Dropbox or similar service), then share the
  link to your device via text, note or email. Alternatively, you can upload the .kmp file to a public facing website.
  For this example, the keyboard package for Khmer Angkor is being uploaded:</p>

<ol>
  <li>khmer_angkor.kmp (the keyboard package .kmp file)</li>
</ol>

<h2>Step 2) Create a link to the KMP file</h2>

<p>Once all the files have been uploaded, you will need to provide a link to the keyboard package .kmp file for
  your device to download and install. This can either be a link on a web page, or a link in an email.
  In this tutorial, a very simple .html web page with a link to the khmer_angkor.kmp file is created:</p>

<pre class='language-markup'><code>&lt;html&gt;
  &lt;head&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;a href="https://keyman.com/test/khmer_angkor.kmp"&gt;Custom Keyboard URL&lt;/a&gt;
  &lt;/body&gt;
&lt;/html&gt;</code></pre>

<p>The link must be in the format <code class="language-markup">http://</code> or <code class="language-markup">https://</code></p>

<p>Upload the web page to your public facing website. Once done, you can install the keyboard package onto your mobile devices by following these steps:</p>

<ul>
  <li><a href="install-kmp-ios">Installing custom keyboards to your iPhone or iPad</a></li>
  <li><a href="install-kmp-android">Installing custom keyboards to your Android device</a></li>
</ul>
