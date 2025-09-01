<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackageSubFiles Interface"
  ]);
?>

<h1>IKeymanPackageSubFiles Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackageSubFiles/Items">IKeymanPackageSubFiles::Items</a></span></dt>
      </dl>
    </div>

    <p>interface IKeymanPackageSubFiles : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanCollection" title=
    "IKeymanCollection Interface">IKeymanCollection</a> : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
    "IKeymanObject Interface">IKeymanObject</a> : IDispatch</p>

    <p>A collection of all the files in a package</p>

    <h5><a name="id574533" id="id574533"></a>Interface Properties</h5>

    <table id="id574538">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackageSubFiles/Items" title="IKeymanPackageSubFiles::Items">Items</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Items(Index) As IKeymanPackageSubFile</td>
      </tr>
    </table>
