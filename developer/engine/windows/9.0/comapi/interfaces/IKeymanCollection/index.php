<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanCollection Interface"
  ]);
?>

<h1>IKeymanCollection Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanCollection/Count">IKeymanCollection::Count</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanCollection/Refresh">IKeymanCollection::Refresh</a></span></dt>
      </dl>
    </div>

    <p>interface IKeymanCollection : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
    "IKeymanObject Interface">IKeymanObject</a> : IDispatch</p>

    <p>Base interface for a collection of Keyman items. Item indices start at 1, not 0.</p>

    <h5><a name="id568251" id="id568251"></a>Interface Methods</h5>

    <table id="id568242">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanCollection/Refresh" title="IKeymanCollection::Refresh">Refresh</a>
        </td>

        <td>Method</td>

        <td>Sub Refresh</td>
      </tr>
    </table>

    <h5><a name="id568256" id="id568256"></a>Interface Properties</h5>

    <table id="id568274">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanCollection/Count" title="IKeymanCollection::Count">Count</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Count As Long</td>
      </tr>
    </table>
