<?php
  require_once('includes/template.php');

  head([
    'title' => "keyman.xsl: Keyman Desktop Configuration Window"
  ]);
?>

<h1>keyman.xsl: Keyman Desktop Configuration Window</h1>

<p>This is the XSLT that defines the main Keyman Desktop Configuration window. This is a complex dialog, with many elements, and so it
has been split into several separate files:</p>

<ul type="disc">
  <li>
    <a href="keyman_keyboardlist" title="keyman_keyboardlist.xsl: Keyman Desktop Configuration window - Keyboards tab">keyman_keyboardlist.xsl: Keyman Desktop
    Configuration window - Keyboards tab</a>
  </li>

  <li>
    <a href="keyman_options" title="keyman_options.xsl: Keyman Desktop Configuration window - Options tab">keyman_options.xsl: Keyman Desktop Configuration window -
    Options tab</a>
  </li>

  <li>
    <a href="keyman_hotkeys" title="keyman_hotkeys.xsl: Keyman Desktop Configuration window - Hotkeys tab">keyman_hotkeys.xsl: Keyman Desktop Configuration window -
    Hotkeys tab</a>
  </li>

  <li>
    <a href="keyman_support" title="keyman_support.xsl: Keyman Desktop Configuration window - Support tab">keyman_support.xsl: Keyman Desktop Configuration window -
    Support tab</a>
  </li>

  <li>
    <a href="keyman_menu" title="keyman_menu.xsl: Keyman Desktop Configuration window - Menu">keyman_menu.xsl: Keyman Desktop Configuration window - Menu</a>
  </li>

  <li>
    <a href="keyman_footer" title="keyman_footer.xsl: Keyman Desktop Configuration window - Footer">keyman_footer.xsl: Keyman Desktop Configuration window -
    Footer</a>
  </li>
</ul>

<h2><a name="id509152" id="id509152"></a>XML Parameters</h2>

<p>The XML parameters available for Keyman Desktop Configuration are listed on the pages above. One general parameter is available:</p>

<pre class="language-markup"><code>&lt;state>(state information)&lt;/state>
</code></pre>

<p>This special parameter should be referenced in the XSLT as follows:</p>
<pre class="language-markup"><code>&lt;div id="state">&lt;xsl:value-of select="state"/>&lt;/div>
</code></pre>

<p>This enables the Configuration dialog to retain state as the contents of the div element are saved by Keyman Desktop Configuration
when the dialog closes, and passed through to the dialog XSLT in the state parameter. See the existing Keyman Desktop Configuration for
example on how this works - this dialog uses the State parameter only to remember that last selected tab.</p>

<h2><a name="id509184" id="id509184"></a>Targets</h2>

<p>The targets available for Keyman Desktop Configuration are listed on the pages above. Other general targets are:</p>

<table class="display">
  <tr>
    <th>Target</th>
    <th>Parameters</th>
    <th>Description</th>
  </tr>

  <tr>
    <td><code>keyman:footer_activate</code></td>
    <td></td>
    <td>Opens the Product Activation dialog</td>
  </tr>

  <tr>
    <td><code>keyman:footer_buy</code></td>
    <td></td>
    <td>Opens the Product Purchase website</td>
  </tr>

  <tr>
    <td><code>keyman:footer_ok</code></td>
    <td></td>
    <td>Applies changes and closes Keyman Desktop Configuration</td>
  </tr>

  <tr>
    <td><code>keyman:footer_cancel</code></td>
    <td></td>
    <td>Cancels changes and closes Keyman Desktop Configuration</td>
  </tr>
</table>
