<?php
  require_once('includes/template.php');

  head([
    'title' => "Setup Bootstrapper"
  ]);
?>

<h1>Setup Bootstrapper</h1>

<p>The Keyman Desktop installation bootstrapper is a self-extracting executable file that contains a Windows Installer technology MSI
file, and optionally keyboards. The bootstrapper is used whenever a package installer is created.</p>

<p>The bootstrapper:</p>

<ol type="1">
  <li>Checks the system before starting the installation to ensure that all prerequisites are met, and optionally downloads and
  installs the prerequisites.</li>

  <li>Optionally checks online for an updated version of Keyman Desktop before installing.</li>

  <li>Starts the Keyman Desktop Windows Installer MSI package.</li>

  <li>Installs any keyboards included.</li>

  <li>Starts Keyman Desktop after the install completes.</li>
</ol>

<h2>Command Line Options</h2>

<p>The following command line parameters are supported in the bootstrapper:</p>

<table class='display'>
  <tbody>
    <tr>
      <td><code class='language-none'>-c</code></td>

      <td>Continue setup after Windows restarts (this parameter is not normally required)</td>
    </tr>

    <tr>
      <td><code class='language-none'>-s</code></td>

      <td>Run a silent installation</td>
    </tr>

    <tr>
      <td><code class='language-none'>-o</code></td>

      <td>Do not check online for updates or prerequisites (useful with -s)</td>
    </tr>

    <tr>
      <td><code class='language-none'>-x <var>extractpath</var></code></td>

      <td>Extract all the files from the self-extracting executable to the path <code><var>extractpath</var></code> and exit the bootstrapper.</td>
    </tr>
  </tbody>
</table>
