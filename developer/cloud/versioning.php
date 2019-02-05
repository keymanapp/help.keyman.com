<?php
require_once('includes/template.php');
require_once('includes/__docheader.php');

$baselanguage = "language-javascript";

// Required
head([
  'title' =>'KeymanWeb Versioning',
]);

?>

<div class='body_text'>
<h1>KeymanWeb Versioning</h1>

<p>As of version 10.0, all platform editions of Keyman have aligned to the same versioning scheme. This allows us to
simplify checks for feature support. However, for earlier releases, you should use the following lookup table:</p>

<table class='display'>
<thead>
  <tr>
    <th>KeymanWeb Version</th><th>Keyman Desktop Version</th>
  </tr>
</thead>
<tbody>
  <tr><td>10.0</td><td>10.0</td></tr>
  <tr><td>2.0</td><td>9.0</td></tr>
  <tr><td>1.0</td><td>7.0</td></tr>
</tbody>
</table>

<p>When passing in version parameters to cloud API functionality, ensure you use the Keyman Desktop versioning scheme,
not the KeymanWeb versioning scheme, as this reflects the keyboard layout version requirements more closely.</p>

<h2>See Also</h2>

<ul>
  <li><a href='/developer/language/reference/version'><code>&amp;version</code> system store</a></li>
</ul>
