<?php
  require_once('includes/template.php');

  head([
    'title' => "keyman_keyboardlist.xsl: Keyman Desktop Configuration window - Keyboards tab"
  ]);
?>

<h1>keyman_keyboardlist.xsl: Keyman Desktop Configuration window - Keyboards tab</h1>

<p>This tab shows the list of installed keyboards for the active product.</p>

<h2><a name="id486877" id="id486877"></a>XML Parameters</h2>

<p>The list of keyboards and packages is returned as XML from Keyman Engine as
multiple KeymanKeyboardInstalled and KeymanPackageInstalled elements, described below:</p>

<pre class="language-markup"><code>&lt;ImagePath>(temppath to keyboard icons)&lt;/ImagePath>

&lt;KeymanKeyboardInstalled>
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
  [&lt;installedbyadmin />
  [&lt;loaded />]
  [&lt;visualkeyboard />]
  &lt;layoutpositional /> | &lt;layoutmnemonic />
  &lt;ownerproductname>(Name of owning product)&lt;/ownerproductname>
  [&lt;keymanid>##&lt;/keymanid>]
  [&lt;bitmap>(filename of bitmap in ImagePath)&lt;/bitmap>]
&lt;/KeymanKeyboardInstalled>
  
&lt;KeymanPackageInstalled>
  &lt;index>##&lt;/index>
  &lt;description>(Descriptive name of package)&lt;/description>
  [&lt;installedbyadmin />]
  &lt;name>(Short name of package)&lt;/name>
  &lt;filename>(Full path and filename of package)&lt;/filename>
  &lt;KeymanKeyboardsPackageInstalled>
    &lt;index>##&lt;/index>
    &lt;KeymanKeyboardInstalled]
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
      [&lt;installedbyadmin />
      [&lt;loaded />]
      [&lt;visualkeyboard />]
      &lt;layoutpositional /> | &lt;layoutmnemonic />
      [&lt;bitmap>(filename of bitmap in imagepath)&lt;/bitmap>]
      [&lt;keymanid>##&lt;/keymanid>]
      &lt;ownerproductname>(Name of owning product)&lt;/ownerproductname>
    &lt;/KeymanKeyboardInstalled>
    ...
  &lt;/KeymanKeyboardsPackageInstalled>
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
&lt;/KeymanPackageInstalled>
</code></pre>

<h2><a name="id487098" id="id487098"></a>Targets</h2>

<table class="display">
  <tr>
    <th>Target</th>
    <th>Parameters</th>
    <th>Description</th>
  </tr>
  <tr>
    <td><code>keyman:keyboard_install</code></td>
    <td></td>
    <td>Opens the Browse for Keyboard dialog, and then the Install Keyboard dialog.</td>
  </tr>
  <tr>
    <td><code>keyman:keyboard_download</code></td>
    <td></td>
    <td>Opens the Download Keyboard dialog</td>
  </tr>
  <tr>
    <td><code>keyman:keyboard_uninstall</code></td>
    <td><code>index</code>: The index of the keyboard from the parameters</td>
    <td>Uninstalls the keyboard identified by index</td>
  </tr>
  <tr>
    <td><code>keyman:keyboard_clickcheck</code></td>
    <td><code>index</code>: The index of the keyboard from the parameters</td>
    <td>Toggle the loaded state of the keyboard identified by index</td>
  </tr>
  <tr>
    <td><code>keyman:keyboard_installvisualkeyboard</code></td>
    <td><code>index</code>: The index of the keyboard from the parameters</td>
    <td>Opens the Browse for On Screen Keyboard dialog and installs the OSK for the keyboard identified by index</td>
  </tr>
  <tr>
    <td><code>keyman:keyboard_uninstallvisualkeyboard</code></td>
    <td><code>index</code>: The index of the keyboard from the parameters</td>
    <td>Uninstalls the OSK for the keyboard identified by index</td>
  </tr>
  <tr>
    <td><code>keyman:keyboard_hotkey</code></td>
    <td><code>index</code>: The index of the keyboard from the parameters</td>
    <td>Opens the hotkey dialog for the keyboard identified by index</td>
  </tr>
  <tr>
    <td><code>keyman:package_uninstall</code></td>
    <td><code>index</code>: The index of the package from the parameters</td>
    <td>Uninstalls the package identified by index</td>
  </tr>
  <tr>
    <td><code>keyman:package_welcome</code></td>
    <td><code>index</code>: The index of the package from the parameters</td>
    <td>Opens the package Welcome.htm documentation for the package identified by index</td>
  </tr>
</table>
