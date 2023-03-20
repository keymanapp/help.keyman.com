<?php
require_once('includes/template.php');

head([
    'title' => "'Toggle' Interface"
]);
?>
<h1 class="title" id="toggle">"Toggle" Interface</h1>

<p>
  The "toggle" user interface provides a drop-down list of supported input languages and keyboards,
  and moves with the focus to appear at the right hand side of the focused element:
</p>

<span class="inlinemediaobject"><img src="images/ui_toggle.png"></span>

<p>
  The "toggle" interface also supports the use of "hot keys" to simplify keyboard use:
</p>

<div class="informaltable">
  <table border="1">
    <colgroup>
      <col>
      <col>
    </colgroup>
    <thead>
    <tr>
      <th align="left">Hot key</th>
      <th align="left">Action</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td align="left"><span class="emphasis"><em>Ctrl /</em></span></td>
      <td align="left">enable/disable currently selected keyboard</td>
    </tr>
    <tr>
      <td align="left"><span class="emphasis"><em>Ctrl Shift /</em></span></td>
      <td align="left">select next listed keyboard</td>
    </tr>
    <tr>
      <td align="left"><span class="emphasis"><em>Alt /</em></span></td>
      <td align="left">enable/disable OSK display</td>
    </tr>
    </tbody>
  </table>
</div>