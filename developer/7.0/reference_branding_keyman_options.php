<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">keyman_options.xsl: Keyman Desktop Configuration window - Options tab</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_branding_keyman_menu.php">Prev</a> </td><th width="60%" align="center">Reference - Branding Toolkit for Keyman Developer Professional</th><td width="20%" align="right"> <a accesskey="n" href="reference_branding_keyman_support.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title"><a name="reference_branding_keyman_options"></a>keyman_options.xsl: Keyman Desktop Configuration window - Options tab</h3></div></div></div><p>
    This tab shows the options for the active product.
  </p><h4><a name="id798940"></a>XML Parameters</h4><p>
    The options are available in two nodes: KeymanOptions and KeymanDesktopOptions.  The KeymanOptions node lists options that
    pertain to the Keyman Engine, whereas the KeymanDesktopOptions node lists options that pertain only to the Keyman Desktop-based product.
    Each option is a subnode of one of the two nodes above:
  </p><pre class="programlisting">
&lt;KeymanOption&gt;
  &lt;index&gt;##&lt;/index&gt;
  &lt;name&gt;(locale string identifier for option)&lt;/name&gt;
  [&lt;value /&gt;]
  &lt;group&gt;(locale string identifier for option group)&lt;/group&gt;
  [&lt;enabled /&gt;]
&lt;/KeymanOption&gt;
  </pre><h4><a name="id798951"></a>Targets</h4><table id="id798954"><tr>
      <th>Target</th>
      <th>Parameters</th>
      <th>Description</th>
    </tr><tr>
      <td>keyman:options_clickcheck</td>
      <td>index: Index of the option</td>
      <td>
        Toggles the option identified by index
      </td>
    </tr><tr>
      <td>keyman:select_uilanguage</td>
      <td></td>
      <td>Opens the Select Language dialog box; if OK is clicked, reloads the language for the entire user interface.</td>
    </tr></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_branding_keyman_menu.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_branding.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_branding_keyman_support.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">keyman_menu.xsl: Keyman Desktop Configuration window - Menu </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> keyman_support.xsl: Keyman Desktop Configuration window - Support tab</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
