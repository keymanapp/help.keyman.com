<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanOption Interface"
  ]);
?>

<h1>IKeymanOption Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanOption/DefaultValue">IKeymanOption::DefaultValue</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanOption/Enabled">IKeymanOption::Enabled</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanOption/Group">IKeymanOption::Group</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanOption/Name">IKeymanOption::Name</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanOption/Value">IKeymanOption::Value</a></span></dt>
      </dl>
    </div>

    <p>interface IKeymanOption : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
    "IKeymanObject Interface">IKeymanObject</a> : IDispatch</p>

    <p>A user-configurable option for the Keyman Engine. Options are per-user but not per-product.</p>

    <h5><a name="id572395" id="id572395"></a>Interface Properties</h5>

    <table id="id572401">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanOption/DefaultValue" title="IKeymanOption::DefaultValue">DefaultValue</a>
        </td>

        <td>Property Get</td>

        <td>Property Get DefaultValue As Boolean</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanOption/Enabled" title="IKeymanOption::Enabled">Enabled</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Enabled As Boolean</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanOption/Group" title="IKeymanOption::Group">Group</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Group As String</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanOption/Name" title="IKeymanOption::Name">Name</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Name As String</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanOption/Value" title="IKeymanOption::Value">Value</a>
        </td>

        <td>Property Get/Let</td>

        <td>Property Get/Let Value As Boolean</td>
      </tr>
    </table>
