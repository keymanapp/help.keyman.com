<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardsInstalled::Install"
  ]);
?>

<h1><a class="link" href=
      "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardsInstalled" title=
      "IKeymanKeyboardsInstalled Interface">IKeymanKeyboardsInstalled</a>::Install</h1>

    <p>Installs the keyboard into the Keyman Engine environment. If the parent product for the keyboard is not installed, then the
    installation will fail.</p>

    <h6><a name="id573839" id="id573839"></a>Declaration</h6>
    <pre class="programlisting">
Sub Install(Filename as String, AllUsers as Boolean, Force as Boolean)
</pre>

    <h6><a name="id573834" id="id573834"></a>Parameters</h6>

    <table id="id573824">
      <tr>
        <th>No</th>

        <th>Name</th>

        <th>Type</th>

        <th>Description</th>
      </tr>

      <tr>
        <td>1</td>

        <td>File</td>

        <td>String</td>

        <td>Full path and filename of the keyboard to install</td>
      </tr>

      <tr>
        <td>2</td>

        <td>AllUsers</td>

        <td>Boolean</td>

        <td>Set to True to install for all users. Requires administrative privileges</td>
      </tr>

      <tr>
        <td>3</td>

        <td>Force</td>

        <td>Boolean</td>

        <td>If True, then will install the keyboard, even if it is already installed, and overwrites the existing keyboard. Can be useful
        if the keyboard installation has been corrupted, for example, by end user intervention. If False, then an error will be raised if
        the keyboard is already installed.</td>
      </tr>
    </table>

    <h6><a name="id573870" id="id573870"></a>Example Code</h6>
    <pre class="programlisting">
</pre>
