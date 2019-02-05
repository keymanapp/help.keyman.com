<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanLanguages::Items"
  ]);
?>

<h1><a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanLanguages" title=
      "IKeymanLanguages Interface">IKeymanLanguages</a>::Items</h1>

    <p>When changes are made to keyboards, such as hotkeys, or loaded/unloaded state, then Apply must be called for those changes to take
    effect across the system. If a Keyman product is running when Apply is called, then settings will be refreshed on the product.</p>

    <h6><a name="id571804" id="id571804"></a>Declaration</h6>
    <pre class="programlisting">
Property Get Items(Index As Long) As IKeymanLanguage
</pre>

    <h6><a name="id571805" id="id571805"></a>Parameters</h6>

    <table id="id571810">
      <tr>
        <th>No</th>

        <th>Name</th>

        <th>Type</th>

        <th>Description</th>
      </tr>

      <tr>
        <td>1</td>

        <td>Index</td>

        <td>Long</td>

        <td>1-based index of the KeymanLanguage to return</td>
      </tr>
    </table>

    <h6><a name="id571818" id="id571818"></a>Return Value</h6><a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanLanguage" title=
    "IKeymanLanguage Interface">IKeymanLanguage</a>

    <h6><a name="id571828" id="id571828"></a>Example Code</h6>
    <pre class="programlisting">
</pre>
