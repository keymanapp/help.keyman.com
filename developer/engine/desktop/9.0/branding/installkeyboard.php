<?php
  require_once('includes/template.php');

  head([
    'title' => "installkeyboard.xsl: Install Keyboard Dialog"
  ]);
?>

<h1>installkeyboard.xsl: Install Keyboard Dialog</h1>

<p>This dialog is displayed when a keyboard is to be installed.</p>

<h2><a name="id566083" id="id566083"></a>XML Parameters - Keyboards</h2>

<pre class="language-markup"><code>&lt;KeymanKeyboardFile>
  &lt;index>##&lt;/index>
  &lt;name>(Short name of keyboard)&lt;/name>
  &lt;keyboardname>(Descriptive name of keyboard)&lt;/keyboardname>
  &lt;filename>(Full path and filename of keyboard)&lt;/filename>
  [&lt;copyright>(Copyright)&lt;/copyright>]
  [&lt;message>(Keyboard message)&lt;/message>]
  &lt;encodings>
    [&lt;encoding>Unicode&lt;/encoding>]
    [&lt;encoding>Codepage&lt;/encoding>]
  &lt;/encodings>
  &lt;layoutpositional /> | &lt;layoutmnemonic />
  [&lt;bitmap>(filename of bitmap in imagepath)&lt;/bitmap>]
&lt;/KeymanKeyboardFile>
</code></pre>

<h2><a name="id566058" id="id566058"></a>XML Parameters - Packages</h2>

<pre class="language-markup"><code>&lt;KeymanPackageFile>
  &lt;index>##&lt;/index>
  &lt;description>(Descriptive name of package)&lt;/description>
  &lt;name>(Short name of package)&lt;/name>
  &lt;filename>(Full path and filename of package)&lt;/filename>
  &lt;readme>(Full path and filename of readme temp file)&lt;/readme>
  &lt;Fonts>
    &lt;Font>
      &lt;filename>(filename of font)&lt;/filename>
      &lt;name>(descriptive name of font)&lt;/name>
    &lt;/Font>
    ...
  &lt;/Fonts>
  &lt;detail name="version">(version number)&lt;/detail>
  &lt;detail name="copyright">(copyright)&lt;/detail>
  &lt;detail name="author" url="(url of author email)">(author name)&lt;/detail>
  &lt;detail name="website" url="(url of website)">(url of website)&lt;/detail>
  &lt;graphic>(full path and filename of 140x250 pixel graphic temp file for package, if it exists)&lt;/graphic>
  &lt;KeymanKeyboardsPackageFile>
    &lt;index>##&lt;/index>
    &lt;KeymanKeyboardFile>
      &lt;index>##&lt;/index>
      &lt;name>(short name of keyboard)&lt;/name>
      &lt;keyboardname>(descriptive name of keyboard)&lt;/keyboardname>
      &lt;filename>(full path and filename of keyboard temp file)&lt;/filename>
      [&lt;message>(keyboard message)&lt;/message>]
      [&lt;copyright>(copyright)&lt;/copyright>]
      &lt;encodings>
        [&lt;encoding>Unicode&lt;/encoding>]
        [&lt;encoding>Codepage&lt;/encoding>]
      &lt;/encodings>
      &lt;layoutpositional /> | &lt;layoutmnemonic />
      [&lt;bitmap>(filename of bitmap in imagepath)&lt;/bitmap>]
    &lt;/KeymanKeyboardFile>
    ...
  &lt;/KeymanKeyboardsPackageFile>
&lt;/KeymanPackageFile>
</code></pre>

<h2><a name="id564832" id="id564832"></a>Targets</h2>

<table class="display">
  <tr>
    <th>Target</th>
    <th>Parameters</th>
    <th>Description</th>
  </tr>

  <tr>
    <td><code>keyman:keyboard_install</code></td>
    <td></td>
    <td>Installs the keyboard and closes the dialog</td>
  </tr>

  <tr>
    <td><code>keyman:keyboard_cancel</code></td>
    <td></td>
    <td>Cancels the dialog</td>
  </tr>
</table>
