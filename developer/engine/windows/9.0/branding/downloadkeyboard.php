<?php
  require_once('includes/template.php');

  head([
    'title' => "downloadkeyboard.xsl: Download Keyboard Dialog"
  ]);
?>

<h1>downloadkeyboard.xsl: Download Keyboard Dialog</h1>

<p>This dialog includes an iframe that references tavultesoft.com's Keyboard Downloads site. It is possible to replace this with a
reference to your own website, remembering that if you do so, the download links or buttons should link to
<code>keyman:download?url=http://yoursite.com/keyboard-download.kmp</code></p>

<h2><a name="id535461" id="id535461"></a>XML Parameters</h2>

<p>No parameters.</p>

<h2><a name="id535881" id="id535881"></a>Targets</h2>

<table class="display">
  <tr>
    <th>Target</th>
    <th>Parameters</th>
    <th>Description</th>
  </tr>

  <tr>
    <td><code>keyman:download</code></td>
    <td><code>url</code>: URL to download file from</td>
    <td>Downloads the keyboard from URL for automatic installation. Note: only .kmp, .kmx and .kxx files are supported. A special case
    in this dialog tests the chkDownloadOnly element in the HTML if it exists when keyman:download is called. If the element exists and
    is checked then the file is saved to disk at the location that the user chooses. This special case exists due to the source page
    coming from an external site (normally tavultesoft.com), limiting cross site scripting.</td>
  </tr>

  <tr>
    <td><code>keyman:footer_cancel</code></td>
    <td></td>
    <td>Cancel the dialog</td>
  </tr>
</table>
