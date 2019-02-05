<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanLanguages Interface"
  ]);
?>

<h1>IKeymanLanguages Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanLanguages/Apply">IKeymanLanguages::Apply</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanLanguages/Items">IKeymanLanguages::Items</a></span></dt>
      </dl>
    </div>

    <p>interface IKeymanLanguages : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanCollection" title=
    "IKeymanCollection Interface">IKeymanCollection</a> : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
    "IKeymanObject Interface">IKeymanObject</a> : IDispatch</p>

    <p>Returns the list of languages that are configured on the system, and the associations with Keyman keyboards.</p>

    <h5><a name="id571670" id="id571670"></a>Interface Methods</h5>

    <table id="id571673">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanLanguages/Apply" title="IKeymanLanguages::Apply">Apply</a>
        </td>

        <td>Method</td>

        <td>Sub Apply</td>
      </tr>
    </table>

    <h5><a name="id571732" id="id571732"></a>Interface Properties</h5>

    <table id="id571710">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanLanguages/Items" title="IKeymanLanguages::Items">Items</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Items(Index As Long) As IKeymanLanguage</td>
      </tr>
    </table>
