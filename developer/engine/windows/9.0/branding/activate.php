<?php
  require_once('includes/template.php');

  head([
    'title' => "activate.xsl: Product Activation Dialog"
  ]);
?>

<h1>activate.xsl: Product Activation Dialog</h1>

<h2><a name="id536333" id="id536333"></a>XML Parameters</h2>
<pre class='language-markup'><code>&lt;allowelevate />
&lt;licencenumber>(previously entered licence code)&lt;/licencenumber>
</code></pre>

<h2><a name="id536380" id="id536380"></a>Targets</h2>

<table class="display">
  <tr>
    <th>Target</th>
    <th>Parameters</th>
    <th>Description</th>
  </tr>

  <tr>
    <td><code>keyman:activate</code></td>
    <td><code>code</code>: licence code that user has entered</td>
    <td>Attempt to activate product with the licence code specified by code. If successful, closes the dialog</td>
  </tr>

  <tr>
    <td><code>keyman:cancel</code></td>
    <td></td>
    <td>Close the dialog without activating</td>
  </tr>

  <tr>
    <td><code>keyman:manualactivation</td>
    <td><code>code</code>: licence code that user has entered</td>
    <td>Validates the licence code and then opens the manual activation dialog box to continue. If successful, closes this dialog.</td>
  </tr>

  <tr>
    <td><code>keyman:elevatedactivation</code></td>
    <td><code>code</code>: licence code that user has entered</td>
    <td>Attempts to activate Keyman as an elevated user on Windows Vista</td>
  </tr>
</table>
