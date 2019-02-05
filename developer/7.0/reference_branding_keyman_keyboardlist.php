<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">keyman_keyboardlist.xsl: Keyman Desktop Configuration window - Keyboards tab</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_branding_keyman_hotkeys.php">Prev</a> </td><th width="60%" align="center">Reference - Branding Toolkit for Keyman Developer Professional</th><td width="20%" align="right"> <a accesskey="n" href="reference_branding_keyman_languages.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title"><a name="reference_branding_keyman_keyboardlist"></a>keyman_keyboardlist.xsl: Keyman Desktop Configuration window - Keyboards tab</h3></div></div></div><p>
    This tab shows the list of installed keyboards for the active product.
  </p><h4><a name="id798676"></a>XML Parameters</h4>

  The list of keyboards and packages is returned as XML from Keyman Engine as multiple KeymanKeyboardInstalled and KeymanPackageInstalled
  elements, described below:

  <pre class="programlisting">
&lt;ImagePath&gt;(temppath to keyboard icons)&lt;/ImagePath&gt;

&lt;KeymanKeyboardInstalled&gt;
  &lt;index&gt;##&lt;/index&gt;
  &lt;name&gt;(Short name of keyboard)&lt;/name&gt;
  &lt;keyboardname&gt;(Descriptive name of keyboard)&lt;/keyboardname&gt;
  &lt;filename&gt;(Full path and filename of keyboard)&lt;/filename&gt;
  [&lt;copyright&gt;(Copyright)&lt;/copyright&gt;]
  [&lt;message&gt;(Keyboard message)&lt;/message&gt;]
  &lt;encodings&gt;
    [&lt;encoding&gt;Unicode&lt;/encoding&gt;]
    [&lt;encoding&gt;Codepage&lt;/encoding&gt;]
  &lt;/encodings&gt;
  [&lt;installedbyadmin /&gt;
  [&lt;loaded /&gt;]
  [&lt;visualkeyboard /&gt;]
  &lt;layoutpositional /&gt; | &lt;layoutmnemonic /&gt;
  &lt;ownerproductname&gt;(Name of owning product)&lt;/ownerproductname&gt;
  [&lt;keymanid&gt;##&lt;/keymanid&gt;]
  [&lt;bitmap&gt;(filename of bitmap in ImagePath)&lt;/bitmap&gt;]
&lt;/KeymanKeyboardInstalled&gt;
  
&lt;KeymanPackageInstalled&gt;
  &lt;index&gt;##&lt;/index&gt;
  &lt;description&gt;(Descriptive name of package)&lt;/description&gt;
  [&lt;installedbyadmin /&gt;]
  &lt;name&gt;(Short name of package)&lt;/name&gt;
  &lt;filename&gt;(Full path and filename of package)&lt;/filename&gt;
  &lt;KeymanKeyboardsPackageInstalled&gt;
    &lt;index&gt;##&lt;/index&gt;
    &lt;KeymanKeyboardInstalled]
      &lt;index&gt;##&lt;/index&gt;
      &lt;name&gt;(short name of keyboard)&lt;/name&gt;
      &lt;keyboardname&gt;(descriptive name of keyboard)&lt;/keyboardname&gt;
      &lt;filename&gt;(full path and filename of keyboard temp file)&lt;/filename&gt;
      [&lt;message&gt;(keyboard message)&lt;/message&gt;]
      [&lt;copyright&gt;(copyright)&lt;/copyright&gt;]
      &lt;encodings&gt;
        [&lt;encoding&gt;Unicode&lt;/encoding&gt;]
        [&lt;encoding&gt;Codepage&lt;/encoding&gt;]
      &lt;/encodings&gt;
      [&lt;installedbyadmin /&gt;
      [&lt;loaded /&gt;]
      [&lt;visualkeyboard /&gt;]
      &lt;layoutpositional /&gt; | &lt;layoutmnemonic /&gt;
      [&lt;bitmap&gt;(filename of bitmap in imagepath)&lt;/bitmap&gt;]
      [&lt;keymanid&gt;##&lt;/keymanid&gt;]
      &lt;ownerproductname&gt;(Name of owning product)&lt;/ownerproductname&gt;
    &lt;/KeymanKeyboardInstalled&gt;
    ...
  &lt;/KeymanKeyboardsPackageInstalled&gt;
  &lt;Fonts&gt;
    &lt;Font&gt;
      &lt;filename&gt;(filename of font)&lt;/filename&gt;
      &lt;name&gt;(descriptive name of font)&lt;/name&gt;
    &lt;/Font&gt;
    ...
  &lt;/Fonts&gt;
  &lt;detail name="version"&gt;(version number)&lt;/detail&gt;
  &lt;detail name="copyright"&gt;(copyright)&lt;/detail&gt;
  &lt;detail name="author" url="(url of author email)"&gt;(author name)&lt;/detail&gt;
  &lt;detail name="website" url="(url of website)"&gt;(url of website)&lt;/detail&gt;
&lt;/KeymanPackageInstalled&gt;
  </pre><h4><a name="id798683"></a>Targets</h4><table id="id798687"><tr>
      <th>Target</th>
      <th>Parameters</th>
      <th>Description</th>
    </tr><tr>
      <td>keyman:keyboard_install</td>
      <td></td>
      <td>
        Opens the Browse for Keyboard dialog, and then the Install Keyboard dialog.
      </td>
    </tr><tr>
      <td>keyman:keyboard_download</td>
      <td></td>
      <td>Opens the Download Keyboard dialog</td>
    </tr><tr>
      <td>keyman:keyboard_uninstall</td>
      <td>index: The index of the keyboard from the parameters</td>
      <td>Uninstalls the keyboard identified by index</td>
    </tr><tr>
      <td>keyman:keyboard_clickcheck</td>
      <td>index: The index of the keyboard from the parameters</td>
      <td>Toggle the loaded state of the keyboard identified by index</td>
    </tr><tr>
      <td>keyman:keyboard_installvisualkeyboard</td>
      <td>index: The index of the keyboard from the parameters</td>
      <td>Opens the Browse for On Screen Keyboard dialog and installs the OSK for the keyboard identified by index</td>
    </tr><tr>
      <td>keyman:keyboard_uninstallvisualkeyboard</td>
      <td>index: The index of the keyboard from the parameters</td>
      <td>Uninstalls the OSK for the keyboard identified by index</td>
    </tr><tr>
      <td>keyman:keyboard_hotkey</td>
      <td>index: The index of the keyboard from the parameters</td>
      <td>Opens the hotkey dialog for the keyboard identified by index</td>
    </tr><tr>
      <td>keyman:package_uninstall</td>
      <td>index: The index of the package from the parameters</td>
      <td>Uninstalls the package identified by index</td>
    </tr><tr>
      <td>keyman:package_welcome</td>
      <td>index: The index of the package from the parameters</td>
      <td>Opens the package Welcome.htm documentation for the package identified by index</td>
    </tr></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_branding_keyman_hotkeys.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_branding.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_branding_keyman_languages.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">keyman_hotkeys.xsl: Keyman Desktop Configuration window - Hotkeys tab </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> keyman_addins.xsl: Keyman Desktop Configuration window - Languages tab</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
