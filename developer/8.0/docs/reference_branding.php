<?php
  require_once('includes/template.php');

  head([
    'title' => "Reference - Branding Toolkit for Keyman Developer Professional"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Reference - Branding Toolkit for Keyman Developer Professional</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_locale_index.php">Prev</a> </td><th width="60%" align="center">Chapter 4. Reference</th><td width="20%" align="right"> <a accesskey="n" href="reference_branding_activate.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both" id="reference_branding">Reference - Branding Toolkit for Keyman Developer Professional</h2></div></div></div><div class="toc"><dl><dt><span class="section"><a href="reference_branding_activate.php">activate.xsl: Product Activation Dialog</a></span></dt><dt><span class="section"><a href="reference_branding_downloadkeyboard.php">downloadkeyboard.xsl: Download Keyboard Dialog</a></span></dt><dt><span class="section"><a href="reference_branding_elements.php">elements.xsl: Basic XSL elements</a></span></dt><dt><span class="section"><a href="reference_branding_installkeyboard.php">installkeyboard.xsl: Install Keyboard Dialog</a></span></dt><dt><span class="section"><a href="reference_branding_keyman.php">keyman.xsl: Keyman Desktop Configuration Window</a></span></dt><dt><span class="section"><a href="reference_branding_keyman_addins.php">keyman_addins.xsl: Keyman Desktop Configuration window - Addins tab</a></span></dt><dt><span class="section"><a href="reference_branding_keyman_footer.php">keyman_footer.xsl: Keyman Desktop Configuration window - Footer</a></span></dt><dt><span class="section"><a href="reference_branding_keyman_hotkeys.php">keyman_hotkeys.xsl: Keyman Desktop Configuration window - Hotkeys tab</a></span></dt><dt><span class="section"><a href="reference_branding_keyman_keyboardlist.php">keyman_keyboardlist.xsl: Keyman Desktop Configuration window - Keyboards tab</a></span></dt><dt><span class="section"><a href="reference_branding_keyman_languages.php">keyman_addins.xsl: Keyman Desktop Configuration window - Languages tab</a></span></dt><dt><span class="section"><a href="reference_branding_keyman_menu.php">keyman_menu.xsl: Keyman Desktop Configuration window - Menu</a></span></dt><dt><span class="section"><a href="reference_branding_keyman_options.php">keyman_options.xsl: Keyman Desktop Configuration window - Options tab</a></span></dt><dt><span class="section"><a href="reference_branding_keyman_support.php">keyman_support.xsl: Keyman Desktop Configuration window - Support tab</a></span></dt><dt><span class="section"><a href="reference_branding_manualactivate.php">manualactivate.xsl: Manual Activation dialog</a></span></dt><dt><span class="section"><a href="reference_branding_onlineupdate.php">onlineupdate.xsl: Online Update dialog</a></span></dt><dt><span class="section"><a href="reference_branding_proxyconfiguration.php">proxyconfiguration.xsl: Proxy Configuration dialog</a></span></dt><dt><span class="section"><a href="reference_branding_splash.php">splash.xsl: Splash dialog</a></span></dt><dt><span class="section"><a href="reference_branding_welcome.php">welcome.xsl: Welcome dialog</a></span></dt></dl></div><div class="note" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Note</h3><p>
      You must purchase a licence for the Branding Pack before you can use the Branding Editor or
      the Distribution Editor in Keyman Developer.
    </p></div><p>
    This reference sections details the customisable screens, actions and parameters for each dialog.  Some generic
    parameters and targets are available for every screen.
  </p><h3><a name="id672438"></a>XML Parameters</h3><p>
    XML Parameters are passed in as part of the XML to the XSLT.  The parameters are generally easy to use, for example,
    in the Keyboard Install dialog (installkeyboard.xsl), you can retrieve the descriptive name of the keyboard to be installed with the
    following code:
  </p><pre class="programlisting">
&lt;xsl:value-of select="/Keyman/KeymanKeyboardFile/keyboardname" /&gt;
  </pre><p>
    The following parameters are passed into every dialog and window:
  </p><pre class="programlisting">
&lt;templatepath&gt;(path to templates, for img src and includes)&lt;/templatepath&gt;
&lt;scripttemplatepath&gt;(path to templates for embedding in script)&lt;/scripttemplatepath&gt;
&lt;defaultlocalepath&gt;(path to default locale file)&lt;/defaultlocalepath&gt;
&lt;localepath&gt;(path to currently selected locale file)&lt;/localepath&gt;
  </pre><h3><a name="id669227"></a>Targets</h3><p>Keyman Desktop Configuration is controlled by linking to specially formed URLs, for example:</p><pre class="programlisting">
&lt;a href='keyman:link?url=http://www.tavultesoft.com'&gt;Open the Tavultesoft website&lt;/a&gt;
  </pre><p>
    This example will open the Tavultesoft website in the user's default browser.  Note that if just the
    http://www.tavultesoft.com URL had been passed, the website would have been opened within Keyman Desktop
    Configuration, which is probably not the desired behaviour!
  </p><table id="id669242"><tr>
      <th rowspan="1" colspan="1">Target</th>
      <th rowspan="1" colspan="1">Parameters</th>
      <th rowspan="1" colspan="1">Description</th>
    </tr><tr>
      <td rowspan="1" colspan="1">keyman:link</td>
      <td rowspan="1" colspan="1">url: url of website to open</td>
      <td rowspan="1" colspan="1">
        Opens website url in user's default web browser.  This should be used whenever linking to a website,
        instead of directly referencing the site, or using target='_blank' as both of these would open within
        the Keyman Desktop Configuration context.
      </td>
    </tr></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_locale_index.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_branding_activate.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Localization of Keyman Desktop </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> activate.xsl: Product Activation Dialog</td></tr></table></div>
