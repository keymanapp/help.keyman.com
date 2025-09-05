<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanHotkeys Interface"
  ]);
?>

<h1>IKeymanHotkeys Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanHotkeys/Add">IKeymanHotkeys::Add</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanHotkeys/Apply">IKeymanHotkeys::Apply</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanHotkeys/Clear">IKeymanHotkeys::Clear</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanHotkeys/Delete">IKeymanHotkeys::Delete</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanHotkeys/Items">IKeymanHotkeys::Items</a></span></dt>
      </dl>
    </div>

    <p>interface IKeymanHotkeys : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanCollection" title=
    "IKeymanCollection Interface">IKeymanCollection</a> : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
    "IKeymanObject Interface">IKeymanObject</a> : IDispatch</p>

    <p>A collection of all the hotkeys for a product.</p>

    <h5><a name="id577887" id="id577887"></a>Interface Methods</h5>

    <table id="id577897">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanHotkeys/Add" title="IKeymanHotkeys::Add">Add</a>
        </td>

        <td>Method</td>

        <td>Function Add(Value As Long, Target As Long) As IKeymanHotkey</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanHotkeys/Apply" title="IKeymanHotkeys::Apply">Apply</a>
        </td>

        <td>Method</td>

        <td>Sub Apply</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanHotkeys/Clear" title="IKeymanHotkeys::Clear">Clear</a>
        </td>

        <td>Method</td>

        <td>Sub Clear</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanHotkeys/Delete" title="IKeymanHotkeys::Delete">Delete</a>
        </td>

        <td>Method</td>

        <td>Sub Delete(Index As Long)</td>
      </tr>
    </table>

    <h5><a name="id577973" id="id577973"></a>Interface Properties</h5>

    <table id="id577970">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanHotkeys/Items" title="IKeymanHotkeys::Items">Items</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Items(Index As Long) As IKeymanHotkey</td>
      </tr>
    </table>
