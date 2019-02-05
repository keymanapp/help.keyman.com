<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">keyman_hotkeys.xsl: Keyman Desktop Configuration window - Hotkeys tab</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_branding_keyman_footer.php">Prev</a> </td><th width="60%" align="center">Reference - Branding Toolkit for Keyman Developer Professional</th><td width="20%" align="right"> <a accesskey="n" href="reference_branding_keyman_keyboardlist.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title"><a name="reference_branding_keyman_hotkeys"></a>keyman_hotkeys.xsl: Keyman Desktop Configuration window - Hotkeys tab</h3></div></div></div><p>
    This tab shows the hotkeys for the active product and installed keyboards on the active product.
  </p><h4><a name="id798585"></a>XML Parameters</h4><p>
    The hotkeys are available in two different locations: KeymanKeyboardInstalled/Hotkey and Hotkeys/Hotkey:
  </p><pre class="programlisting">
&lt;Hotkey&gt;
  &lt;index&gt;##&lt;/index&gt;
  [&lt;Target&gt;(integer target of hotkey)&lt;/Target&gt;]
  &lt;Value&gt;(hotkey string, e.g. Ctrl+Alt+X)&lt;/Value&gt;
&lt;/Hotkey&gt;
  </pre><h4><a name="id798596"></a>Targets</h4><table id="id798599"><tr>
      <th>Target</th>
      <th>Parameters</th>
      <th>Description</th>
    </tr><tr>
      <td>keyman:hotkey_set</td>
      <td>index: Index of the hotkey</td>
      <td>Opens the set hotkey dialog identified by index</td>
    </tr><tr>
      <td>keyman:hotkey_clear</td>
      <td>index: Index of the hotkey</td>
      <td>Clears the hotkey identified by index</td>
    </tr><tr>
      <td>keyman:keyboard_hotkey</td>
      <td>index: The index of the keyboard from the parameters</td>
      <td>Opens the hotkey dialog for the keyboard identified by index</td>
    </tr></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_branding_keyman_footer.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_branding.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_branding_keyman_keyboardlist.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">keyman_footer.xsl: Keyman Desktop Configuration window - Footer </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> keyman_keyboardlist.xsl: Keyman Desktop Configuration window - Keyboards tab</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
