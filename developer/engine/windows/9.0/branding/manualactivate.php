<?php
  require_once('includes/template.php');

  head([
    'title' => "manualactivate.xsl: Manual Activation dialog"
  ]);
?>

<h1>manualactivate.xsl: Manual Activation dialog</h1>

<p>The manual activation dialog is opened when the user does not have Internet access, and provides activation options offline.</p>

<h2><a name="id492266" id="id492266"></a>XML Parameters</h2>

<p>No parameters.</p>

<h2><a name="id492263" id="id492263"></a>Targets</h2>

<table class="display">
  <tr>
    <th>Target</th>
    <th>Parameters</th>
    <th>Description</th>
  </tr>
  <tr>
    <td><code>keyman:savetoclipboard</code></td>
    <td></td>
    <td>Copies the activation request blob to the clipboard</td>
  </tr>
  <tr>
    <td><code>keyman:savetodisk</code></td>
    <td></td>
    <td>Saves the activation request blob and the Tavultesoft Activation Utility to a removable disk</td>
  </tr>
  <tr>
    <td><code>keyman:savetofile</code></td>
    <td></td>
    <td>Saves the activation request blob to a file</td>
  </tr>
  <tr>
    <td><code>keyman:loadfromclipboard</code></td>
    <td></td>
    <td>Loads the activation response blob from the clipboard and attempts to activate. If successful, closes the dialog</td>
  </tr>
  <tr>
    <td><code>keyman:loadfromdisk</code></td>
    <td></td>
    <td>Loads the activation response blob from a removable disk and attempts to activate. If successful, closes the dialog and deletes
    the activation response blob and Tavultesoft Activation Utility from the removable disk</td>
  </tr>
  <tr>
    <td><code>keyman:loadfromfile</code></td>
    <td></td>
    <td>Loads the activation response blob from a file and attempts to activate. If successful, closes the dialog</td>
  </tr>
  <tr>
    <td><code>keyman:cancel</code></td>
    <td></td>
    <td>Cancels the dialog</td>
  </tr>
  <tr>
    <td><code>keyman:help_send</code></td>
    <td></td>
    <td>Opens the help topic identified by context_manualactivate</td>
  </tr>
</table>
