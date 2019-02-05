<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardsInstalled::Apply"
  ]);
?>

<h1><a class="link" href=
      "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardsInstalled" title=
      "IKeymanKeyboardsInstalled Interface">IKeymanKeyboardsInstalled</a>::Apply</h1>

    <p>When changes are made to keyboards, such as hotkeys, or loaded/unloaded state, then Apply must be called for those changes to take
    effect across the system. If a Keyman product is running when Apply is called, then settings will be refreshed on the product.</p>

    <h6><a name="id573905" id="id573905"></a>Declaration</h6>
    <pre class="programlisting">
Sub Apply
</pre>

    <h6><a name="id573898" id="id573898"></a>Parameters</h6>

    <table id="id573899">
      <tr>
        <th>No</th>

        <th>Name</th>

        <th>Type</th>

        <th>Description</th>
      </tr>
    </table>

    <h6><a name="id571687" id="id571687"></a>Example Code</h6>
    <pre class="programlisting">
</pre>
