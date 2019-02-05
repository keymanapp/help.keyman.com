<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardsInstalled Interface"
  ]);
?>

<h1>IKeymanKeyboardsInstalled Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardsInstalled/Items">IKeymanKeyboardsInstalled::Items</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardsInstalled/GetKeyboardFromFile">IKeymanKeyboardsInstalled::GetKeyboardFromFile</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardsInstalled/Install">IKeymanKeyboardsInstalled::Install</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardsInstalled/Apply">IKeymanKeyboardsInstalled::Apply</a></span></dt>
      </dl>
    </div>

    <p>interface IKeymanKeyboardsInstalled : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboards" title=
    "IKeymanKeyboards Interface">IKeymanKeyboards</a> : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanCollection" title=
    "IKeymanCollection Interface">IKeymanCollection</a> : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
    "IKeymanObject Interface">IKeymanObject</a> : IDispatch</p>

    <p>A collection of keyboards that are currently installed</p>

    <h5><a name="id573640" id="id573640"></a>Interface Methods</h5>

    <table id="id573647">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardsInstalled/Apply" title="IKeymanKeyboardsInstalled::Apply">Apply</a>
        </td>

        <td>Method</td>

        <td>Sub Apply</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardsInstalled/GetKeyboardFromFile" title=
          "IKeymanKeyboardsInstalled::GetKeyboardFromFile">GetKeyboardFromFile</a>
        </td>

        <td>Method</td>

        <td>Function GetKeyboardFromFile(Filename as String) as IKeymanKeyboardFile</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardsInstalled/Install" title=
          "IKeymanKeyboardsInstalled::Install">Install</a>
        </td>

        <td>Method</td>

        <td>Sub Install(Filename as String, AllUsers as Boolean, Force as Boolean)</td>
      </tr>
    </table>

    <h5><a name="id573696" id="id573696"></a>Interface Properties</h5>

    <table id="id573670">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardsInstalled/Items" title="IKeymanKeyboardsInstalled::Items">Items</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Items(Index) As IKeymanKeyboardInstalled</td>
      </tr>
    </table>
