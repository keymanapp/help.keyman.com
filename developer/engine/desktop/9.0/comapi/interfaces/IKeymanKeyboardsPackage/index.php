<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardsPackage Interface"
  ]);
?>

<h1>IKeymanKeyboardsPackage Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardsPackage/Items">IKeymanKeyboardsPackage::Items</a></span></dt>
      </dl>
    </div>

    <p>interface IKeymanKeyboardsPackage : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboards" title=
    "IKeymanKeyboards Interface">IKeymanKeyboards</a> : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanCollection" title=
    "IKeymanCollection Interface">IKeymanCollection</a> : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
    "IKeymanObject Interface">IKeymanObject</a> : IDispatch</p>

    <p>A collection of keyboards as part of a package</p>

    <h5><a name="id570336" id="id570336"></a>Interface Properties</h5>

    <table id="id570332">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardsPackage/Items" title="IKeymanKeyboardsPackage::Items">Items</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Items(Index) As IKeymanKeyboard</td>
      </tr>
    </table>
