<?php
  require_once('includes/template.php');

  head([
    'title' => "keyman_options.xsl: Keyman Desktop Configuration window - Options tab"
  ]);
?>

<h1>keyman_options.xsl: Keyman Desktop Configuration window - Options tab</h1>


<p>This tab shows the options for the active product.</p>

<h2><a name="id492079" id="id492079"></a>XML Parameters</h2>

<p>The options are available in two nodes: KeymanOptions and KeymanDesktopOptions. The KeymanOptions node lists options that pertain to
the Keyman Engine, whereas the KeymanDesktopOptions node lists options that pertain only to the Keyman Desktop-based product. Each
option is a subnode of one of the two nodes above:</p>

<pre class="language-markup"><code>&lt;KeymanOption>
  &lt;index>##&lt;/index>
  &lt;name>(locale string identifier for option)&lt;/name>
  [&lt;value />]
  &lt;group>(locale string identifier for option group)&lt;/group>
  [&lt;enabled />]
&lt;/KeymanOption>
</code></pre>

<h2><a name="id492099" id="id492099"></a>Targets</h2>

<table class="display">
  <tr>
    <th>Target</th>
    <th>Parameters</th>
    <th>Description</th>
  </tr>
  <tr>
    <td><code>keyman:options_clickcheck</code></td>
    <td><code>index</code>: Index of the option</td>
    <td>Toggles the option identified by index</td>
  </tr>
  <tr>
    <td><code>keyman:select_uilanguage</code></td>
    <td></td>
    <td>Opens the Select Language dialog box; if OK is clicked, reloads the language for the entire user interface.</td>
  </tr>
</table>
