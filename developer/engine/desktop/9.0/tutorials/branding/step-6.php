<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 6: Customising user interface files"
  ]);
?>

<h1>Step 6: Customising user interface files</h1>

<p>In the Branding Editor, click the <span class="guibutton">Config UI</span> tab.</p>

<p>This page lists a number of files that relate to the Keyman Desktop User Interface. Nearly all the user interface in Keyman Desktop
is defined as XML/XSLT, which renders to a HTML file for display. The HTML renderer used in Keyman Desktop is Internet Explorer 5.5 or
later.</p>

<p>Editing these files will take some HTML code experience. Tavultesoft also provide a customisation service where we will create the
user interface files for you, to your specification. Contact Tavultesoft Sales for more information.</p>

<p>The majority of dialogs in the Keyman Desktop user interface are represented by a single XSL file. The exception is the Keyman
Desktop Configuration main dialog, which is represented by keyman.xsl and the keyman_*.xsl files. Each of the dialogs also uses the
elements.xsl for common design elements. Each of these templates is required for the Keyman Desktop user interface. You will need to
add any external images that you reference in your XSL templates to the Branding source file, with the <span class=
"guibutton">Import</span> button.</p>

<p>You can preview your dialog design by clicking the Test Page button for any of the XSL templates.</p>

<aside>
  <h3 class="title">Tip</h3>

  <p>The size of the dialog window for each dialog is controlled in the locale.xml file. This allows a localized product to resize the
  dialogs if necessary without having to modify the XSL files. Look for the Dialog element with an Id matching the filename of the
  dialog to modify the dialog size.</p>
</aside>

<aside>
  <h3 class="title">Note</h3>

  <p>The downloadkeyboard.xsl dialog will not be very useful for a custom product, as none of the Keyman Desktop keyboards on the
  Tavultesoft website will be installable with your product!</p>
</aside>
