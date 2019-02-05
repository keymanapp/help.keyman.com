<?php
  require_once('includes/template.php');

  head([
    'title' => "welcome.xsl: Welcome dialog"
  ]);
?>

<h1>welcome.xsl: Welcome dialog</h1>

<h2><a name="id492685" id="id492685"></a>XML Parameters</h2>

<p>No parameters.</p>

<h2><a name="id492710" id="id492710"></a>Targets</h2>

<table class="display">
  <tr>
    <th>Target</th>
    <th>Parameters</th>
    <th>Description</th>
  </tr>
  <tr>
    <td><code>keyman:dontshowwelcome</code></td>
    <td></td>
    <td>Turns off the Welcome screen for next time</td>
  </tr>
  <tr>
    <td><code>keyman:showwelcome</code></td>
    <td></td>
    <td>Turns on the Welcome screen for next time</td>
  </tr>
  <tr>
    <td><code>keyman:keyboard_download</code></td>
    <td></td>
    <td>Opens the Download Keyboard dialig</td>
  </tr>
  <tr>
    <td><code>keyman:close</code></td>
    <td></td>
    <td>Closes the Welcome dialog</td>
  </tr>
</table>
