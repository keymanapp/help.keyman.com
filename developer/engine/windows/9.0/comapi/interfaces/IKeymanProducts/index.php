<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanProducts Interface"
  ]);
?>

<h1>IKeymanProducts Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProducts/Install">IKeymanProducts::Install</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProducts/Items">IKeymanProducts::Items</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProducts/ItemsByProductID">IKeymanProducts::ItemsByProductID</a></span></dt>
      </dl>
    </div>

    <p>interface IKeymanProducts : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanCollection" title=
    "IKeymanCollection Interface">IKeymanCollection</a> : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
    "IKeymanObject Interface">IKeymanObject</a> : IDispatch</p>

    <p>Collection of all installed products available to Keyman Engine</p>

    <h5><a name="id569025" id="id569025"></a>Interface Methods</h5>

    <table id="id569036">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProducts/Install" title="IKeymanProducts::Install">Install</a>
        </td>

        <td>Method</td>

        <td>Sub Install(ParentWindow As Long, Filename As String, InstallDir As String, AllUsers As Boolean, Force As Boolean)</td>
      </tr>
    </table>

    <h5><a name="id569067" id="id569067"></a>Interface Properties</h5>

    <table id="id569098">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProducts/Items" title="IKeymanProducts::Items">Items</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Items(Index) As IKeymanProduct</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProducts/ItemsByProductID" title=
          "IKeymanProducts::ItemsByProductID">ItemsByProductID</a>
        </td>

        <td>Property Get</td>

        <td>Property Get ItemsByProductID(Index As Long) As IKeymanProduct</td>
      </tr>
    </table>
