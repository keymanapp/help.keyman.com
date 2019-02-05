<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanHotkeys::Add"
  ]);
?>

<h1><a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanHotkeys" title=
      "IKeymanHotkeys Interface">IKeymanHotkeys</a>::Add</h1>

    <p>Add a hotkey definition to the product. If the product does not recognise the target value, then the target value will have no
    effect.</p>

    <h6><a name="id578001" id="id578001"></a>Declaration</h6>
    <pre class="programlisting">
Function Add(Value As Long, Target As Long) As IKeymanHotkey
</pre>

    <h6><a name="id578020" id="id578020"></a>Parameters</h6>

    <table id="id578038">
      <tr>
        <th>No</th>

        <th>Name</th>

        <th>Type</th>

        <th>Description</th>
      </tr>

      <tr>
        <td>1</td>

        <td>Value</td>

        <td>Long</td>

        <td>The value of the hotkey. See tagKeymanKeyboardHotkey for hotkey specification.</td>
      </tr>

      <tr>
        <td>2</td>

        <td>Target</td>

        <td>Long</td>

        <td>The product-specific target value for the shortcut. Keyman Engine defines: khKeymanOff = 0; khKeyboardMenu = 1;
        khVisualKeyboard = 2; khKeymanConfiguration = 3;</td>
      </tr>
    </table>

    <h6><a name="id578063" id="id578063"></a>Return Value</h6><a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanHotkey" title=
    "IKeymanHotkey Interface">IKeymanHotkey</a>

    <h6><a name="id578065" id="id578065"></a>Example Code</h6>
    <pre class="programlisting">
</pre>
