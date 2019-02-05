<?php
  require_once('includes/template.php');

  head([
    'title' => "keyman_support.xsl: Keyman Desktop Configuration window - Support tab"
  ]);
?>

<h1>keyman_support.xsl: Keyman Desktop Configuration window - Support tab</h1>

<p>This tab shows support information for the product.</p>

<h2><a name="id492151" id="id492151"></a>XML Parameters</h2>

<pre class="language-markup"><code>&lt;support>
  &lt;productid>(product ID)&lt;/productid>
  &lt;productname>(product name)&lt;/productname>
  &lt;version>(product version)&lt;/version>
  &lt;engineversion>(engine version)&lt;/engineversion>
  &lt;engineinstallpath>(engine install path)&lt;/engineinstallpath>
  &lt;activationstate>
    &lt;activated /> | &lt;trialdaycount>(days available in trial)&lt;/trialdaycount>&lt;daysused>(days used in trial)&lt;/daysused>
  &lt;/activationstate>
&lt;/support>
</code></pre>

<h2><a name="id492164" id="id492164"></a>Targets</h2>

<table class="display">
  <tr>
    <th>Target</th>
    <th>Parameters</th>
    <th>Description</th>
  </tr>
  <tr>
    <td><code>keyman:support_diagnostics</code></td>
    <td></td>
    <td>Opens Tavultesoft Diagnostics tool</td>
  </tr>
  <tr>
    <td><code>keyman:support_online</code></td>
    <td></td>
    <td>Opens Tavultesoft Online Support website</td>
  </tr>
  <tr>
    <td><code>keyman:support_updatecheck</code></td>
    <td></td>
    <td>Checks for updates for the product online</td>
  </tr>
  <tr>
    <td><code>keyman:support_proxyconfig</code></td>
    <td></td>
    <td>Opens the Proxy Configuration dialog box</td>
  </tr>
</table>
