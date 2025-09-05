<?php
  require_once('includes/template.php');

  head([
    'title' => "splash.xsl: Splash dialog"
  ]);
?>

<h1>splash.xsl: Splash dialog</h1>

<h2><a name="id492580" id="id492580"></a>XML Parameters</h2>

<pre class="language-markup"><code>[&lt;Evaluation />]
&lt;EvaluationText>("You are on day 1 of 30")&lt;/EvaluationText>
&lt;Version>(Version 1.2.3.4)&lt;/Version>
[&lt;EvaluationExpired />]
[&lt;LicenceNumber>1234-ABCD-5678-EFGH-90IJ&lt;/LicenceNumber>]
&lt;ProductID>1234&lt;/ProductID>
[&lt;activationserver name="{hostname}" />]
&lt;Server>https://secure.tavultesoft.com/&lt;/Server>
</code></pre>

<h2><a name="id492615" id="id492615"></a>Targets</h2>

<table class="display">
  <tr>
    <th>Target</th>
    <th>Parameters</th>
    <th>Description</th>
  </tr>
  <tr>
    <td><code>keyman:buy</code></td>
    <td></td>
    <td>Opens the Tavultesoft Online Store website</td>
  </tr>
  <tr>
    <td><code>keyman:activate</code></td>
    <td></td>
    <td>Opens the Product Activation dialog</td>
  </tr>
  <tr>
    <td><code>keyman:evaluate</code></td>
    <td></td>
    <td>If the evaluation period has not expired, starts the product in Evaluation mode</td>
  </tr>
  <tr>
    <td><code>keyman:exit</code></td>
    <td></td>
    <td>Cancels the splash dialog and exits the product</td>
  </tr>
</table>
