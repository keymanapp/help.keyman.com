<?php
  require_once('includes/template.php');

  head([
    'title' => "activate.xsl: Product Activation Dialog"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">activate.xsl: Product Activation Dialog</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_branding.php">Prev</a> </td><th width="60%" align="center">Reference - Branding Toolkit for Keyman Developer Professional</th><td width="20%" align="right"> <a accesskey="n" href="reference_branding_downloadkeyboard.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="reference_branding_activate">activate.xsl: Product Activation Dialog</h3></div></div></div><h4><a name="id669467"></a>XML Parameters</h4><pre class="programlisting">
&lt;allowelevate /&gt;
&lt;licencenumber&gt;(previously entered licence code)&lt;/licencenumber&gt;
  </pre><h4><a name="id669474"></a>Targets</h4><table id="id669478"><tr>
      <th>Target</th>
      <th>Parameters</th>
      <th>Description</th>
    </tr><tr>
      <td>keyman:activate</td>
      <td>code: licence code that user has entered</td>
      <td>Attempt to activate product with the licence code specified by code.  If successful, closes the dialog</td>
    </tr><tr>
      <td>keyman:cancel</td>
      <td></td>
      <td>Close the dialog without activating</td>
    </tr><tr>
      <td>keyman:manualactivation</td>
      <td>code: licence code that user has entered</td>
      <td>
        Validates the licence code and then
        opens the manual activation dialog box to continue.  If successful, closes this dialog.
      </td>
    </tr><tr>
      <td>keyman:elevatedactivation</td>
      <td>code: licence code that user has entered</td>
      <td>Attempts to activate Keyman as an elevated user on Windows Vista</td>
    </tr></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_branding.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_branding.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_branding_downloadkeyboard.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Reference - Branding Toolkit for Keyman Developer Professional </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> downloadkeyboard.xsl: Download Keyboard Dialog</td></tr></table></div>
