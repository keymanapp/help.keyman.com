<?php
  require_once('includes/template.php');

  head([
    'title' => "KeymanWeb Layout Specifications"
  ]);
?>
<h1 class="title" id="layoutspec">Layout Specifications</h1>

<p>
    Touch-screen layouts for <span class="emphasis"><em>KeymanWeb 10</em></span> are specified as JSON objects containing a member object
    for each specified device type.  Currently supported device types are <span class="emphasis"><em>tablet</em></span>
    and <span class="emphasis"><em>phone</em></span>.  Layouts for <span class="emphasis"><em>desktop</em></span> computers may also be specified but
    desktop on-screen keyboard design is normally managed by the standard <span class="emphasis"><em>Keyman Developer</em></span>
    on-screen keyboard tool rather than the keyboard layout designer.  If the same layout is appropriate for both
    <span class="emphasis"><em>tablet</em></span> and <span class="emphasis"><em>phone</em></span> devices only one need be specified, and will be used
    for either type of device.
  </p><p>
    File encoding for manually-created layout files may use either UTF-8 or 7-bit ANSI coding, but must not include a BOM.
    For easier editing and management without requiring special fonts, embedded Unicode characters with values above 127
    may use the <span class="emphasis"><em>\uXXXX</em></span> notation.
  </p><p>
    For details of the JSON specification, see
    <a class="ulink" href="http://www.ecma-international.org/publications/files/ECMA-ST/ECMA-404.pdf" target="_blank">
    The JSON Data Interchange Format(ECMA-404)</a>.
  </p><div class="informaltable"><table border="1"><colgroup><col><col></colgroup><thead><tr><th align="left">Object name or description</th><th align="left">Object or array element members</th></tr></thead><tbody><tr><td class="rowhead" align="left">(container object)</td><td class="members" align="left"><table width="100%" border="0"><colgroup><col><col><col><col></colgroup><thead><tr><th align="left">Name</th><th align="left">Type</th><th align="left">Description</th><th align="left">Required</th></tr></thead><tbody><tr><td class="rowhead" align="left">tablet</td><td align="left">Object</td><td align="left">Tablet layout specification</td><td align="center">No</td></tr><tr><td class="rowhead" align="left">phone</td><td align="left">Object</td><td align="left">Phone layout specification</td><td align="center">No</td></tr><tr><td class="rowhead" align="left">desktop</td><td align="left">Object</td><td align="left">Desktop OSK layout specification</td><td align="center">No</td></tr></tbody></table></td></tr><tr><td class="rowhead" align="left">(layout specification)</td><td class="members" align="left"><table width="100%" border="0"><colgroup><col><col><col><col></colgroup><thead><tr><th align="left">Name</th><th align="left">Type</th><th align="left">Description</th><th align="left">Required</th></tr></thead><tbody><tr><td class="rowhead" align="left">font</td><td align="left">string</td><td align="left">Key label default font</td><td align="center">No</td></tr><tr><td class="rowhead" align="left">fontsize</td><td align="left">string</td><td align="left">Key label default font size (in <span class="emphasis"><em>em</em></span>)</td><td align="center">No</td></tr><tr><td class="rowhead" align="left">layer</td><td align="left">Object array</td><td align="left">Array of layer specifications</td><td align="center">Yes</td></tr></tbody></table></td></tr><tr><td class="rowhead" align="left">layer</td><td class="members" align="left"><table width="100%" border="0"><colgroup><col><col><col><col></colgroup><thead><tr><th align="left">Name</th><th align="left">Type</th><th align="left">Description</th><th align="left">Required</th></tr></thead><tbody><tr><td class="rowhead" align="left">id</td><td align="left">string</td><td align="left">Layer name</td><td align="center">Yes</td></tr><tr><td class="rowhead" align="left">row</td><td align="left">Object array</td><td align="left">Array of keyboard row specifications</td><td align="center">Yes</td></tr><tr><td class="rowhead" align="left">nextlayer</td><td align="left">string</td><td align="left">Keyboard layer to display after processing keystroke</td><td align="center">No</td></tr></tbody></table></td></tr><tr><td class="rowhead" align="left">row</td><td class="members" align="left"><table width="100%" border="0"><colgroup><col><col><col><col></colgroup><thead><tr><th align="left">Name</th><th align="left">Type</th><th align="left">Description</th><th align="left">Required</th></tr></thead><tbody><tr><td class="rowhead" align="left">id</td><td align="left">string</td><td align="left">Row number</td><td align="center">Yes</td></tr><tr><td class="rowhead" align="left">key</td><td align="left">Object array</td><td align="left">Array of keyboard key specifications</td><td align="center">Yes</td></tr></tbody></table></td></tr><tr><td class="rowhead" align="left">key</td><td class="members" align="left"><table width="100%" border="0"><colgroup><col><col><col><col></colgroup><thead><tr><th align="left">Name</th><th align="left">Type</th><th align="left">Description</th><th align="left">Required</th></tr></thead><tbody><tr><td class="rowhead" align="left">id</td><td align="left">string</td><td align="left">Key identifier</td><td align="center">Yes*</td></tr><tr><td class="rowhead" align="left">text</td><td align="left">string</td><td align="left">Text on key</td><td align="center">No</td></tr><tr><td class="rowhead" align="left">font</td><td align="left">string</td><td align="left">Font name if different from default key label font</td><td align="center">No</td></tr><tr><td class="rowhead" align="left">fontsize</td><td align="left">string</td><td align="left">Font size if different from default key label font size</td><td align="center">No</td></tr><tr><td class="rowhead" align="left">sp</td><td align="left">number</td><td align="left">Key style</td><td align="center">No</td></tr><tr><td class="rowhead" align="left">width</td><td align="left">number</td><td align="left">Key width</td><td align="center">No</td></tr><tr><td class="rowhead" align="left">pad</td><td align="left">number</td><td align="left">Space before key</td><td align="center">No</td></tr><tr><td class="rowhead" align="left">dk</td><td align="left">number</td><td align="left">Deadkey (1) or normal key (0 or omitted) </td><td align="center">No</td></tr><tr><td class="rowhead" align="left">layer</td><td align="left">string</td><td align="left">Modifier key or keys assumed applied when mapping this key</td><td align="center">No</td></tr><tr><td class="rowhead" align="left">nextlayer</td><td align="left">string</td><td align="left">Name of keyboard layer to be displayed after this key is processed</td><td align="center">No</td></tr><tr><td class="rowhead" align="left">sk</td><td align="left">Object array</td><td align="left">Array of pop-up key specifications</td><td align="center">No</td></tr></tbody></table></td></tr></tbody></table></div><p>
    Details of key member specifications are given below:
  </p><div class="informaltable"><table border="1"><colgroup><col><col></colgroup><thead><tr><th align="left">Member name</th><th align="left">Details</th></tr></thead><tbody><tr><td class="rowhead" align="left">id</td><td align="left">
        Each key id must start with <span class="emphasis"><em>K_</em></span>, for keys mapped to
        standard Keyman virtual key names, e.g. <span class="emphasis"><em>K_HYPHEN</em></span>,
        or either <span class="emphasis"><em>U_</em></span> or <span class="emphasis"><em>T_</em></span> for user-defined names.
        Keys identified as <span class="emphasis"><em>U_xxxx[_xxxx...]</em></span> specify one or more Unicode characters
        in hex format, e.g. <span class="emphasis"><em>U_1363</em></span> for the Ethiopic Comma character,
        and will insert those characters if the key id is not matched by a rule.  Other user-defined keys, such as
        <span class="emphasis"><em>T_ZZZ</em></span>, will be ignored unless matched by a rule.
        The key id is required except for key styles 9 or 10 (blank or spacer keys).
      </td></tr><tr><td class="rowhead" align="left">text</td><td align="left">
        Where a key id is of the form <span class="emphasis"><em>K_XXXX</em></span>, the text on the key will be the indicated
        Unicode character if this member is omitted.  However, what the keystroke output will depend on any rules that
        process the keystroke, and may or may not be the same as the key text.
      </td></tr><tr><td class="rowhead" align="left">sp</td><td class="members" align="left"><table width="100%" border="0"><colgroup><col><col></colgroup><thead><tr><th align="left">Value</th><th align="left">Key style</th></tr></thead><tbody><tr><td class="rowhead" align="left">0</td><td align="left">Normal key (default)</td></tr><tr><td class="rowhead" align="left">1</td><td align="left">Shift key</td></tr><tr><td class="rowhead" align="left">2</td><td align="left">Active shift key</td></tr><tr><td class="rowhead" align="left">8</td><td align="left">Deadkey</td></tr><tr><td class="rowhead" align="left">9</td><td align="left">Blank key</td></tr><tr><td class="rowhead" align="left">10</td><td align="left">Spacer</td></tr></tbody></table></td></tr><tr><td class="rowhead" align="left">font</td><td align="left">The font for the key label may be specified if it is necessary to use a different font for that key.</td></tr><tr><td class="rowhead" align="left">fontsize</td><td align="left">The font size for the key label may be specified (in <span class="emphasis"><em>em</em></span> units) if necessary.</td></tr><tr><td class="rowhead" align="left">width</td><td align="left">
        By default, each key has a width of 100 units, with rows then scaled to make the widest row fit on the screen.
        Set the width value if a key should be narrower or wider than the standard width.
      </td></tr><tr><td class="rowhead" align="left">pad</td><td align="left">Space before key, in same units as width (default key width=100 units).</td></tr><tr><td class="rowhead" align="left">layer</td><td align="left">
        Override the default layer type for processing key rules. For example, use <span class="emphasis"><em>'layer':'shift'</em></span>
        in any layer to process a key rule as if it were the <span class="emphasis"><em>shift</em></span> layer, i.e. as
        if the Shift key was down.
      </td></tr><tr><td class="rowhead" align="left">nextlayer</td><td align="left">
        Select the key layer to be displayed after processing the current keystroke. This will usually be used to
        implement custom layer selection, but can also be used to select a different layer after a deadkey or normal key,
        and will override any <span class="emphasis"><em>nextlayer</em></span> value specifed for the entire layer.  The layer to be displayed
        may also be specified using the setlayer() statement in a rule in the keyboard source.
      </td></tr><tr><td class="rowhead" align="left">sk</td><td align="left">
        Pop-up key specifications are identical to normal key specifications except that they cannot be nested.
        (Key size and spacing members <span class="emphasis"><em>width</em></span> and <span class="emphasis"><em>pad</em></span> are ignored for pop-up keys.)
      </td></tr></tbody></table></div><p>
    For many keyboards, it is helpful to associate some keyboard layers with physical keyboard modifier states.
    This is reflected in the layer name, where a layer name of <span class="emphasis"><em>shift</em></span> means that when a key in that
    layer is touched, the keystroke will be processed as if the keyboard Shift key is held.
  </p><p>
    The special layer names of:
    <!-- list from osk.modifierSpecials in kmwosk.ts -->
    <br/>&emsp;
    <span class="emphasis"><em>leftalt</em></span>,
    <span class="emphasis"><em>rightalt</em></span>,
    <span class="emphasis"><em>alt</em></span>,
    <br/>&emsp;
    <span class="emphasis"><em>leftctrl</em></span>,
    <span class="emphasis"><em>rightctrl</em></span>,
    <span class="emphasis"><em>ctrl</em></span>,
    <span class="emphasis"><em>ctrlalt</em></span>,
    <br/>&emsp;
    <span class="emphasis"><em>leftctrl-leftalt</em></span>,
    <span class="emphasis"><em>rightctrl-rightalt</em></span>,
    <span class="emphasis"><em>leftctrl-leftalt-shift</em></span>,
    <span class="emphasis"><em>rightctrl-rightalt-shift</em></span>,
    <br/>&emsp;
    <span class="emphasis"><em>shift</em></span>,
    <span class="emphasis"><em>shift-alt</em></span>,
    <span class="emphasis"><em>shift-ctrl</em></span>,
    <span class="emphasis"><em>shift-ctrl-alt</em></span>,
    <br/>&emsp;
    <span class="emphasis"><em>leftalt-shift</em></span>,
    <span class="emphasis"><em>rightalt-shift</em></span>,
    <span class="emphasis"><em>leftctrl-shift</em></span>, and
    <span class="emphasis"><em>rightctrl-shift</em></span>
    <br/>
    each apply the appropriate modifier keys when processing rules unless overridden by a <span class="emphasis"><em>layer</em></span> value in the
    key specification.  The layer names <span class="emphasis"><em>default</em></span>, <span class="emphasis"><em>numeric</em></span>, <span class="emphasis"><em>symbol</em></span>
    and <span class="emphasis"><em>currency</em></span> are also recognized, but no modifier key is applied for keys in these layers.
  </p><p>
    The following special key identifiers have been added to simplify layer selection:
  </p><div class="informaltable"><table border="1"><colgroup><col><col></colgroup><thead><tr><th align="left">Identifier</th><th align="left">Value</th></tr></thead><tbody><tr><td class="rowhead" align="left">K_NUMERALS</td><td align="left">261</td></tr><tr><td class="rowhead" align="left">K_SYMBOLS</td><td align="left">262</td></tr><tr><td class="rowhead" align="left">K_CURRENCIES</td><td align="left">263</td></tr><tr><td class="rowhead" align="left">K_SHIFTED</td><td align="left">264</td></tr><tr><td class="rowhead" align="left">K_ALTGR</td><td align="left">265</td></tr></tbody></table></div><p>
    A special font is used to provide easily recognizable key graphics for various special purpose keys.
    The following key text strings will be recognized and cause the appropriate graphic to be used for
    the key cap instead of the actual text:
  </p>
  <div class="informaltable">
    <table border="1">
      <colgroup><col><col></colgroup>
      <thead><tr><th align="left">Text string</th><th align="left">Key purpose</th></tr></thead>
      <tbody>
        <tr><td class="rowhead" align="left">*Shift*</td><td align="left">Shift key image (inactive)</td></tr>
        <tr><td class="rowhead" align="left">*Enter*</td><td align="left">Return</td></tr>
        <tr><td class="rowhead" align="left">*Tab*</td><td align="left">Move to next input element in tab order</td></tr>
        <tr><td class="rowhead" align="left">*BkSp*</td><td align="left">Backspace</td></tr>
        <tr><td class="rowhead" align="left">*Menu*</td><td align="left">Display the language menu</td></tr>
        <tr><td class="rowhead" align="left">*Hide*</td><td align="left">Hide the virtual keyboard</td></tr>
        <tr><td class="rowhead" align="left">*Alt*</td><td align="left">Alt key caption</td></tr>
        <tr><td class="rowhead" align="left">*Ctrl*</td><td align="left">Control key caption</td></tr>
        <tr><td class="rowhead" align="left">*Caps*</td><td align="left">Caps Lock caption</td></tr>
        <tr><td class="rowhead" align="left">*ABC*</td><td align="left">Select the upper case alphabetic layer</td></tr>
        <tr><td class="rowhead" align="left">*abc*</td><td align="left">Return to the default (alphabetic) keyboard layer</td></tr>
        <tr><td class="rowhead" align="left">*123*</td><td align="left">Select a numeric keyboard layer</td></tr>
        <tr><td class="rowhead" align="left">*Symbol*</td><td align="left">Select a layer with various non-letter symbols</td></tr>
        <tr><td class="rowhead" align="left">*Currency*</td><td align="left">Select a layer with currency symbols</td></tr>
        <tr><td class="rowhead" align="left">*Shifted*</td><td align="left">Active Shift key image</td></tr>
        <tr><td class="rowhead" align="left">*AltGr*</td><td align="left">Select Control + Alt (AltGr) modifier state</td></tr>
        <tr><td class="rowhead" align="left">*TabLeft*</td><td align="left">Go back to previous input element in tab order</td></tr>
        <tr><td class="rowhead" align="left">*LAlt*</td><td align="left">Select left Alt modifier state</td></tr>
        <tr><td class="rowhead" align="left">*RAlt*</td><td align="left">Select right Alt modifier state</td></tr>
        <tr><td class="rowhead" align="left">*LCtrl*</td><td align="left">Select left Control modifier state</td></tr>
        <tr><td class="rowhead" align="left">*RCtrl*</td><td align="left">Select right Control modifier state</td></tr>
        <tr><td class="rowhead" align="left">*LAltCtrl*</td><td align="left">Select left Alt + left Control modifier state</td></tr>
        <tr><td class="rowhead" align="left">*RAltCtrl*</td><td align="left">Select right Alt + right Control modifier state</td></tr>
        <tr><td class="rowhead" align="left">*LAltCtrlShift*</td><td align="left">Select left Alt + left Control + Shift modifier state</td></tr>
        <tr><td class="rowhead" align="left">*RAltCtrlShift*</td><td align="left">Select right Alt + right Control + Shift modifier state</td></tr>
        <tr><td class="rowhead" align="left">*AltShift*</td><td align="left">Select Alt + Shift modifier state</td></tr>
        <tr><td class="rowhead" align="left">*CtrlShift*</td><td align="left">Select Control + Shift modifier state</td></tr>
        <tr><td class="rowhead" align="left">*AltCtrlShift*</td><td align="left">Select Alt + Control + Shift modifier state</td></tr>
        <tr><td class="rowhead" align="left">*LAltShift*</td><td align="left">Select left Alt + Shift modifier state</td></tr>
        <tr><td class="rowhead" align="left">*RAltShift*</td><td align="left">Select right Alt + Shift modifier state</td></tr>
        <tr><td class="rowhead" align="left">*LCtrlShift*</td><td align="left">Select left Control + Shift modifier state</td></tr>
        <tr><td class="rowhead" align="left">*RCtrlShift*</td><td align="left">Select right Control + Shift modifier state</td></tr>
      </tbody>
    </table>
  </div>