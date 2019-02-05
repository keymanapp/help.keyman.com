<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">keyman.xsl: Keyman Desktop Configuration Window</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_branding_installkeyboard.php">Prev</a> </td><th width="60%" align="center">Reference - Branding Toolkit for Keyman Developer Professional</th><td width="20%" align="right"> <a accesskey="n" href="reference_branding_keyman_addins.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title"><a name="reference_branding_keyman"></a>keyman.xsl: Keyman Desktop Configuration Window</h3></div></div></div><p>
    This is the XSLT that defines the main Keyman Desktop Configuration window.  This is a complex dialog, with many elements,
    and so it has been split into several separate files:
  </p><div class="itemizedlist"><ul type="disc"><li><p>
        <a class="xref" href="reference_branding_keyman_keyboardlist.php" title="keyman_keyboardlist.xsl: Keyman Desktop Configuration window - Keyboards tab">keyman_keyboardlist.xsl: Keyman Desktop Configuration window - Keyboards tab</a>
      </p></li><li><p>
        <a class="xref" href="reference_branding_keyman_options.php" title="keyman_options.xsl: Keyman Desktop Configuration window - Options tab">keyman_options.xsl: Keyman Desktop Configuration window - Options tab</a>
      </p></li><li><p>
        <a class="xref" href="reference_branding_keyman_hotkeys.php" title="keyman_hotkeys.xsl: Keyman Desktop Configuration window - Hotkeys tab">keyman_hotkeys.xsl: Keyman Desktop Configuration window - Hotkeys tab</a>
      </p></li><li><p>
        <a class="xref" href="reference_branding_keyman_addins.php" title="keyman_addins.xsl: Keyman Desktop Configuration window - Addins tab">keyman_addins.xsl: Keyman Desktop Configuration window - Addins tab</a>
      </p></li><li><p>
        <a class="xref" href="reference_branding_keyman_languages.php" title="keyman_addins.xsl: Keyman Desktop Configuration window - Languages tab">keyman_addins.xsl: Keyman Desktop Configuration window - Languages tab</a>
      </p></li><li><p>
        <a class="xref" href="reference_branding_keyman_support.php" title="keyman_support.xsl: Keyman Desktop Configuration window - Support tab">keyman_support.xsl: Keyman Desktop Configuration window - Support tab</a>
      </p></li><li><p>
        <a class="xref" href="reference_branding_keyman_menu.php" title="keyman_menu.xsl: Keyman Desktop Configuration window - Menu">keyman_menu.xsl: Keyman Desktop Configuration window - Menu</a>
      </p></li><li><p>
        <a class="xref" href="reference_branding_keyman_footer.php" title="keyman_footer.xsl: Keyman Desktop Configuration window - Footer">keyman_footer.xsl: Keyman Desktop Configuration window - Footer</a>
      </p></li></ul></div><h4><a name="id798392"></a>XML Parameters</h4><p>
    The XML parameters available for Keyman Desktop Configuration are listed on the pages above.  One general parameter is available:
  </p><pre class="programlisting">
&lt;state&gt;(state information)&lt;/state&gt;
  </pre><p>This special parameter should be referenced in the XSLT as follows:</p><pre class="programlisting">
&lt;div id="state"&gt;&lt;xsl:value-of select="state"/&gt;&lt;/div&gt;
  </pre><p>
    This enables the Configuration dialog to retain state as the contents of the div element are saved by Keyman Desktop Configuration
    when the dialog closes, and passed through to the dialog XSLT in the state parameter.  See the existing Keyman Desktop Configuration
    for example on how this works - this dialog uses the State parameter only to remember that last selected tab.
  </p><h4><a name="id798414"></a>Targets</h4><p>The targets available for Keyman Desktop Configuration are listed on the pages above.  Other general targets are:</p><table id="id798422"><tr>
      <th>Target</th>
      <th>Parameters</th>
      <th>Description</th>
    </tr><tr>
      <td>keyman:footer_activate</td>
      <td></td>
      <td>Opens the Product Activation dialog</td>
    </tr><tr>
      <td>keyman:footer_buy</td>
      <td></td>
      <td>Opens the Product Purchase website</td>
    </tr><tr>
      <td>keyman:footer_ok</td>
      <td></td>
      <td>Applies changes and closes Keyman Desktop Configuration</td>
    </tr><tr>
      <td>keyman:footer_cancel</td>
      <td></td>
      <td>Cancels changes and closes Keyman Desktop Configuration</td>
    </tr></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_branding_installkeyboard.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_branding.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_branding_keyman_addins.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">installkeyboard.xsl: Install Keyboard Dialog </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> keyman_addins.xsl: Keyman Desktop Configuration window - Addins tab</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
