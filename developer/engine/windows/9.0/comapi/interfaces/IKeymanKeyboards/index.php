<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboards Interface"
  ]);
?>

<h1>IKeymanKeyboards Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboards/IndexOf">IKeymanKeyboards::IndexOf</a></span></dt>
      </dl>
    </div>

    <p>interface IKeymanKeyboards : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanCollection" title=
    "IKeymanCollection Interface">IKeymanCollection</a> : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
    "IKeymanObject Interface">IKeymanObject</a> : IDispatch</p>

    <p>Base interface for a collection of keyboards</p>

    <h5><a name="id570217" id="id570217"></a>Interface Methods</h5>

    <table id="id570240">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboards/IndexOf" title="IKeymanKeyboards::IndexOf">IndexOf</a>
        </td>

        <td>Method</td>

        <td>Function IndexOf(Name As String) As Long</td>
      </tr>
    </table>
