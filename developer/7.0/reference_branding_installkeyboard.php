<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">installkeyboard.xsl: Install Keyboard Dialog</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_branding_elements.php">Prev</a> </td><th width="60%" align="center">Reference - Branding Toolkit for Keyman Developer Professional</th><td width="20%" align="right"> <a accesskey="n" href="reference_branding_keyman.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title"><a name="reference_branding_installkeyboard"></a>installkeyboard.xsl: Install Keyboard Dialog</h3></div></div></div><p>
    This dialog is displayed when a keyboard is to be installed.
  </p><h4><a name="id798224"></a>XML Parameters - Keyboards</h4><pre class="programlisting">
&lt;KeymanKeyboardFile&gt;
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
  &lt;layoutpositional /&gt; | &lt;layoutmnemonic /&gt;
  [&lt;bitmap&gt;(filename of bitmap in imagepath)&lt;/bitmap&gt;]
&lt;/KeymanKeyboardFile&gt;
  </pre><h4><a name="id798231"></a>XML Parameters - Packages</h4><pre class="programlisting">
&lt;KeymanPackageFile&gt;
  &lt;index&gt;##&lt;/index&gt;
  &lt;description&gt;(Descriptive name of package)&lt;/description&gt;
  &lt;name&gt;(Short name of package)&lt;/name&gt;
  &lt;filename&gt;(Full path and filename of package)&lt;/filename&gt;
  &lt;readme&gt;(Full path and filename of readme temp file)&lt;/readme&gt;
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
  &lt;graphic&gt;(full path and filename of 140x250 pixel graphic temp file for package, if it exists)&lt;/graphic&gt;
  &lt;KeymanKeyboardsPackageFile&gt;
    &lt;index&gt;##&lt;/index&gt;
    &lt;KeymanKeyboardFile&gt;
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
      &lt;layoutpositional /&gt; | &lt;layoutmnemonic /&gt;
      [&lt;bitmap&gt;(filename of bitmap in imagepath)&lt;/bitmap&gt;]
    &lt;/KeymanKeyboardFile&gt;
    ...
  &lt;/KeymanKeyboardsPackageFile&gt;
&lt;/KeymanPackageFile&gt;
  </pre><h4><a name="id798238"></a>Targets</h4><table id="id798242"><tr>
      <th>Target</th>
      <th>Parameters</th>
      <th>Description</th>
    </tr><tr>
      <td>keyman:keyboard_install</td>
      <td></td>
      <td>
        Installs the keyboard and closes the dialog
      </td>
    </tr><tr>
      <td>keyman:keyboard_cancel</td>
      <td></td>
      <td>Cancels the dialog</td>
    </tr></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_branding_elements.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_branding.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_branding_keyman.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">elements.xsl: Basic XSL elements </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> keyman.xsl: Keyman Desktop Configuration Window</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
