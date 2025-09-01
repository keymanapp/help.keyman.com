<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanAddinsInstalled Interface"
  ]);
?>

<h1>IKeymanAddinsInstalled Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanAddinsInstalled/Install">IKeymanAddinsInstalled::Install</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanAddinsInstalled/Items">IKeymanAddinsInstalled::Items</a></span></dt>
      </dl>
    </div>

    <p>interface IKeymanAddinsInstalled : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanAddins" title=
    "IKeymanAddins Interface">IKeymanAddins</a> : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanCollection" title=
    "IKeymanCollection Interface">IKeymanCollection</a> : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
    "IKeymanObject Interface">IKeymanObject</a> : IDispatch</p>

    <p>Collection of all installed addins available to Keyman Engine</p>

    <h5><a name="id568856" id="id568856"></a>Interface Methods</h5>

    <table id="id568862">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanAddinsInstalled/Install" title="IKeymanAddinsInstalled::Install">Install</a>
        </td>

        <td>Method</td>

        <td>Sub Install(Filename As String, Force As Boolean)</td>
      </tr>
    </table>

    <h5><a name="id568885" id="id568885"></a>Interface Properties</h5>

    <table id="id568884">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanAddinsInstalled/Items" title="IKeymanAddinsInstalled::Items">Items</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Items(Index) As IKeymanAddinInstalled</td>
      </tr>
    </table>
