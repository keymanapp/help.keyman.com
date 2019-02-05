<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardFile::Install"
  ]);
?>

<h1><a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardFile"
      title="IKeymanKeyboardFile Interface">IKeymanKeyboardFile</a>::Install</h1>

    <p>Installs the keyboard into the Keyman Engine environment. If the parent product for the keyboard is not installed, then the
    installation will fail.</p>

    <h6><a name="id569687" id="id569687"></a>Declaration</h6>
    <pre class="programlisting">
Sub Install(AllUsers As Boolean, Force As Boolean)
</pre>

    <h6><a name="id569693" id="id569693"></a>Parameters</h6>

    <table id="id569698">
      <tr>
        <th>No</th>

        <th>Name</th>

        <th>Type</th>

        <th>Description</th>
      </tr>

      <tr>
        <td>1</td>

        <td>AllUsers</td>

        <td>Boolean</td>

        <td>Set to True to install for all users. Requires administrative privileges</td>
      </tr>

      <tr>
        <td>2</td>

        <td>Force</td>

        <td>Boolean</td>

        <td>If True, then will install the keyboard, even if it is already installed, and overwrites the existing keyboard. Can be useful
        if the keyboard installation has been corrupted, for example, by end user intervention. If False, then an error will be raised if
        the keyboard is already installed.</td>
      </tr>
    </table>

    <h6><a name="id569724" id="id569724"></a>Example Code</h6>
    <pre class="programlisting">
</pre>
