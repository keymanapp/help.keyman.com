<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 6: Customising user interface files"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Step 6: Customising user interface files</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="tutorial_branding_5.php">Prev</a> </td><th width="60%" align="center">Branding Tutorial</th><td width="20%" align="right"> <a accesskey="n" href="tutorial_distribution.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="tutorial_branding_6">Step 6: Customising user interface files</h3></div></div></div><p>
    In the Branding Editor, click the <span class="guibutton">Config UI</span> tab.
  </p><p>
    This page lists a number of files that relate to the Keyman Desktop User Interface.  Nearly all the user interface in Keyman Desktop is
    defined as XML/XSLT, which renders to a HTML file for display.  The HTML renderer used in Keyman Desktop is Internet Explorer 5.5 or later.
  </p><p>
    Editing these files will take some HTML code experience.  Tavultesoft also provide a customisation service where we will create the 
    user interface files for you, to your specification.  Contact Tavultesoft Sales for more information.
  </p><p>
    The majority of dialogs in the Keyman Desktop user interface are represented by a single XSL file.  The exception is the Keyman Desktop
    Configuration main dialog, which is represented by keyman.xsl and the keyman_*.xsl files.  Each of the dialogs also uses the
    elements.xsl for common design elements.  Each of these templates is required
    for the Keyman Desktop user interface.  You will need to add any external images that you reference in your XSL templates to the Branding
    source file, with the <span class="guibutton">Import</span> button.
  </p><p>
    You can preview your dialog design by clicking the Test Page button for any of the XSL templates.
  </p><div class="tip" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Tip</h3><p>
      The size of the dialog window for each dialog is controlled in the locale.xml file.  This allows a localized product to
      resize the dialogs if necessary without having to modify the XSL files.  Look for the Dialog element with an Id matching
      the filename of the dialog to modify the dialog size.
    </p></div><div class="note" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Note</h3><p>
      The downloadkeyboard.xsl dialog will not be very useful for a custom product, as none of the Keyman Desktop keyboards on the 
      Tavultesoft website will be installable with your product!
    </p></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="tutorial_branding_5.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="tutorial_branding.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="tutorial_distribution.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Step 5: Customising strings in the product </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Distribution Tutorial</td></tr></table></div>
