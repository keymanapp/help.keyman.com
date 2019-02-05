<?php
  require_once('includes/template.php');

  head([
    'title' => "keyman_addins.xsl: Keyman Desktop Configuration window - Languages tab"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">keyman_addins.xsl: Keyman Desktop Configuration window - Languages tab</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_branding_keyman_keyboardlist.php">Prev</a> </td><th width="60%" align="center">Reference - Branding Toolkit for Keyman Developer Professional</th><td width="20%" align="right"> <a accesskey="n" href="reference_branding_keyman_menu.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="reference_branding_keyman_languages">keyman_addins.xsl: Keyman Desktop Configuration window - Languages tab</h3></div></div></div><p>
    This tab shows the languages installed on the system and their relationship to Keyman keyboards.
  </p><h4><a name="id670273"></a>XML Parameters</h4><p>
    The languages are listed as children of KeymanLanguages:
  </p><pre class="programlisting">
&lt;KeymanLanguage&gt;
  &lt;index&gt;##&lt;/index&gt;
  &lt;hkl&gt;(integer HKL value)&lt;/hkl&gt;
  &lt;layoutname&gt;(Name of layout from Windows)&lt;/layoutname&gt;
  &lt;localename&gt;(Name of locale from Windows)&lt;/localename&gt;
  [&lt;description&gt;&lt;/description&gt;]
  [&lt;isime /&gt;]
  [&lt;iskeymanlayout /&gt;]
  [&lt;keymankeyboardname&gt;&lt;/keymankeyboardname&gt;]
&lt;/KeymanLanguage&gt;
  </pre><h4><a name="id670284"></a>Targets</h4><table id="id670288"><tr>
      <th>Target</th>
      <th>Parameters</th>
      <th>Description</th>
    </tr><tr>
      <td>keyman:language_keyboardchange</td>
      <td>index: Index of the language; value: Index of the Keyman keyboard (-1 for none)</td>
      <td>Associates the Keyman keyboard identified by value with the language identified by index</td>
    </tr><tr>
      <td>keyman:language_controlpanel</td>
      <td></td>
      <td>Opens the languages control panel applet</td>
    </tr></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_branding_keyman_keyboardlist.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_branding.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_branding_keyman_menu.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">keyman_keyboardlist.xsl: Keyman Desktop Configuration window - Keyboards tab </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> keyman_menu.xsl: Keyman Desktop Configuration window - Menu</td></tr></table></div>
