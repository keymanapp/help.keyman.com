<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanOptions Interface"
  ]);
?>

<h1>IKeymanOptions Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanOptions/Apply">IKeymanOptions::Apply</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanOptions/Items">IKeymanOptions::Items</a></span></dt>
      </dl>
    </div>

    <p>interface IKeymanOptions : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanCollection" title=
    "IKeymanCollection Interface">IKeymanCollection</a> : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
    "IKeymanObject Interface">IKeymanObject</a> : IDispatch</p>

    <p>A collection of all the options available for configuration in Keyman Engine.</p>

    <h5><a name="id572230" id="id572230"></a>Interface Methods</h5>

    <table id="id572255">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanOptions/Apply" title="IKeymanOptions::Apply">Apply</a>
        </td>

        <td>Method</td>

        <td>Sub Apply</td>
      </tr>
    </table>

    <h5><a name="id572262" id="id572262"></a>Interface Properties</h5>

    <table id="id572252">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanOptions/Items" title="IKeymanOptions::Items">Items</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Items(Index) As IKeymanOption</td>
      </tr>
    </table>
