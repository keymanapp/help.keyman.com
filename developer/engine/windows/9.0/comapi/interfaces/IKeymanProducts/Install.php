<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanProducts::Install"
  ]);
?>

<h1><a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProducts" title=
      "IKeymanProducts Interface">IKeymanProducts</a>::Install</h1>

    <p>Most products will be installed through an .msi installer using the distribution wizard that is included with Keyman Developer.
    However, if building a custom installation, this function should be used to install and initialize the product for use in Keyman
    Engine.</p>

    <h6><a name="id569131" id="id569131"></a>Declaration</h6>
    <pre class="programlisting">
Sub Install(ParentWindow As Long, Filename As String, InstallDir As String, AllUsers As Boolean, Force As Boolean)
</pre>

    <h6><a name="id569122" id="id569122"></a>Parameters</h6>

    <table id="id569109">
      <tr>
        <th>No</th>

        <th>Name</th>

        <th>Type</th>

        <th>Description</th>
      </tr>

      <tr>
        <td>1</td>

        <td>ParentWindow</td>

        <td>Long</td>

        <td>HWND of window in case any dialogs need to be displayed during the installation process. Pass NULL if no parent window is
        available (e.g. in console application).</td>
      </tr>

      <tr>
        <td>2</td>

        <td>Filename</td>

        <td>String</td>

        <td>Full pathname of the product .pxx file to install</td>
      </tr>

      <tr>
        <td>3</td>

        <td>InstallDir</td>

        <td>String</td>

        <td>Installation directory for product. Usually this folder will contain the .pxx file referenced above, plus the applications
        referenced in the .pxx file. For example, with Keyman Desktop Professional, the folder contains kmshell.exe as well as
        desktoppro.pxx. The files are not copied out of this folder but are referenced in place.</td>
      </tr>

      <tr>
        <td>4</td>

        <td>AllUsers</td>

        <td>Boolean</td>

        <td>This value must be TRUE for Keyman Engine 7.0</td>
      </tr>

      <tr>
        <td>5</td>

        <td>Force</td>

        <td>Boolean</td>

        <td>This value is not used in Keyman Engine 7.0 and should be set to FALSE</td>
      </tr>
    </table>

    <h6><a name="id569210" id="id569210"></a>Example Code</h6>
    <pre class="programlisting">
</pre>
