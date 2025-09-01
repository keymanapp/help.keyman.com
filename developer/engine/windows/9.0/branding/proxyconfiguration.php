<?php
  require_once('includes/template.php');

  head([
    'title' => "proxyconfiguration.xsl: Proxy Configuration dialog"
  ]);
?>

<h1>proxyconfiguration.xsl: Proxy Configuration dialog</h1>

<h2><a name="id492562" id="id492562"></a>XML Parameters</h2>

<pre class="language-markup"><code>&lt;Proxy>
  &lt;Server>(proxy server name)&lt;/Server>
  &lt;Port>(proxy server port)&lt;/Port>
&lt;/Proxy>
</code></pre>

<h2><a name="id492531" id="id492531"></a>Targets</h2>

<table class="display">
  <tr>
    <th>Target</th>
    <th>Parameters</th>
    <th>Description</th>
  </tr>
  <tr>
    <td><code>keyman:footer_ok</code></td>
    <td><code>server</code>: Server name from dialog; <code>port</code>: Port value from dialog</td>
    <td>Saves proxy settings and closes the dialog</td>
  </tr>
  <tr>
    <td><code>keyman:footer_cancel</code></td>
    <td></td>
    <td>Cancels the dialog</td>
  </tr>
</table>
