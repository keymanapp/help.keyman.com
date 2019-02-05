<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanErrors Interface"
  ]);
?>

<h1>IKeymanErrors Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanErrors/Clear">IKeymanErrors::Clear</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanErrors/Items">IKeymanErrors::Items</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanErrors/RebootRequired">IKeymanErrors::RebootRequired</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanErrors/SetReboot">IKeymanErrors::SetReboot</a></span></dt>
      </dl>
    </div>

    <p>interface IKeymanErrors : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanCollection" title=
    "IKeymanCollection Interface">IKeymanCollection</a> : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
    "IKeymanObject Interface">IKeymanObject</a> : IDispatch</p>

    <p>A collection of any errors that Keyman Engine has generated. During some processes, multiple errors may be generated. This
    collection should be checked if an exception is received, as it will generally contain further information about the error. The
    RebootRequired property should also be checked after running any of the installation or uninstallation processes in Keyman Engine.</p>

    <h5><a name="id570800" id="id570800"></a>Interface Methods</h5>

    <table id="id570798">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanErrors/Clear" title="IKeymanErrors::Clear">Clear</a>
        </td>

        <td>Method</td>

        <td>Sub Clear</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanErrors/SetReboot" title="IKeymanErrors::SetReboot">SetReboot</a>
        </td>

        <td>Method</td>

        <td>Sub SetReboot</td>
      </tr>
    </table>

    <h5><a name="id570811" id="id570811"></a>Interface Properties</h5>

    <table id="id570809">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanErrors/Items" title="IKeymanErrors::Items">Items</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Items(Index As Long) As IKeymanError</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanErrors/RebootRequired" title="IKeymanErrors::RebootRequired">RebootRequired</a>
        </td>

        <td>Property Get</td>

        <td>Property Get RebootRequired As Boolean</td>
      </tr>
    </table>
