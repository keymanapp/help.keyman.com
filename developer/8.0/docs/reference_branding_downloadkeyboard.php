<?php
  require_once('includes/template.php');

  head([
    'title' => "downloadkeyboard.xsl: Download Keyboard Dialog"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">downloadkeyboard.xsl: Download Keyboard Dialog</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_branding_activate.php">Prev</a> </td><th width="60%" align="center">Reference - Branding Toolkit for Keyman Developer Professional</th><td width="20%" align="right"> <a accesskey="n" href="reference_branding_elements.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="reference_branding_downloadkeyboard">downloadkeyboard.xsl: Download Keyboard Dialog</h3></div></div></div><p>
    This dialog includes an iframe that references tavultesoft.com's Keyboard Downloads site.  It is possible
    to replace this with a reference to your own website, remembering that if you do so, the download links or
    buttons should link to keyman:download?url=http://yoursite.com/keyboard-download.kmp
  </p><h4><a name="id669566"></a>XML Parameters</h4><h4><a name="id669570"></a>Targets</h4><table id="id669574"><tr>
      <th>Target</th>
      <th>Parameters</th>
      <th>Description</th>
    </tr><tr>
      <td>keyman:download</td>
      <td>url: URL to download file from</td>
      <td>
        Downloads the keyboard from URL for automatic installation.  Note: only .kmp, .kmx and .kxx files are supported.
        A special case in this dialog tests the chkDownloadOnly element in the HTML if it exists when keyman:download is called.  If
        the element exists and is checked then the file is saved to disk at the location that the user chooses.  This special case
        exists due to the source page coming from an external site (normally tavultesoft.com), limiting cross site scripting.
      </td>
    </tr><tr>
      <td>keyman:footer_cancel</td>
      <td></td>
      <td>Cancel the dialog</td>
    </tr></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_branding_activate.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_branding.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_branding_elements.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">activate.xsl: Product Activation Dialog </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> elements.xsl: Basic XSL elements</td></tr></table></div>
