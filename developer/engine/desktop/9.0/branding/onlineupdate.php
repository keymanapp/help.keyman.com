<?php
  require_once('includes/template.php');

  head([
    'title' => "onlineupdate.xsl: Online Update dialog"
  ]);
?>

<h1>onlineupdate.xsl: Online Update dialog</h1>

<p>This dialog box is displayed when there is an online update available for the product.</p>

<h2><a name="id492380" id="id492380"></a>XML Parameters</h2>

<pre class="language-markup"><code>&lt;NewVersion>(new version number)&lt;/NewVersion>
&lt;CurrentVersion>(current version number)&lt;/CurrentVersion>
&lt;PatchSize>(patch size in KB)&lt;/PatchSize>
&lt;PatchURL>(url of patch)&lt;/PatchURL>
&lt;DownloadURL>(download url for full upgrade if patch not available)&lt;/DownloadURL>
&lt;NewVersionText>(text for upgrade)&lt;/NewVersionText>
&lt;PatchText>(patch message)&lt;/PatchText>
</code></pre>

<h2><a name="id492423" id="id492423"></a>Targets</h2>

<table class="display">
  <tr>
    <th>Target</th>
    <th>Parameters</th>
    <th>Description</th>
  </tr>
  <tr>
    <td><code>keyman:keyboard_install</code></td>
    <td></td>
    <td>Opens the Browse for Keyboard dialog, and then the Install Keyboard dialog.</td>
  </tr>
  <tr>
    <td><code>keyman:openwebsite</code></td>
    <td></td>
    <td>Opens the URL provided by the DownloadURL parameter</td>
  </tr>
  <tr>
    <td><code>keyman:visitwebsitenow</code></td>
    <td></td>
    <td>Opens the URL provided by the DownloadURL parameter and closes the dialog</td>
  </tr>
  <tr>
    <td><code>keyman:visitwebsitelater</code></td>
    <td></td>
    <td>Cancels the dialog</td>
  </tr>
  <tr>
    <td><code>keyman:installnow</code></td>
    <td></td>
    <td>Closes the dialog and downloads the patch for installation</td>
  </tr>
  <tr>
    <td><code>keyman:installlater</code></td>
    <td></td>
    <td>Cancels the dialog</td>
  </tr>
</table>
