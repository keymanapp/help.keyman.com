<?php
  require_once('includes/template.php');

  head([
    'title' => "Hotkey store and HOTKEY statement"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Hotkey store and HOTKEY statement</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_ethnologuecode.php">Prev</a> </td><th width="60%" align="center">Headers and System Stores</th><td width="20%" align="right"> <a accesskey="n" href="reference_includecodes.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_hotkey">Hotkey store and HOTKEY statement</h4></div></div></div><pre class="programlisting">
store( &amp;hotkey ) "%tsHotKey%"

HOTKEY "%tsHotKey%"
      </pre><p>
        The HOTKEY statement specifies the hotkey that Keyman will use to turn the keyboard on.  
        When this hotkey is pressed, any active keyboard will be turned off and the new keyboard will be 
        turned on. The hotkey must be enclosed in quotes.
      </p><p>
        The hotkey can be any letter key, with any combination of the Shift, Control and Alt keys also pressed.
        The specification of the HOTKEY statement follows the Microsoft standard for hotkeys in Windows.
        Inside a double-quoted string, you can combine the letter key with special characters to identify the 
        shift state:
      </p><table><tbody><tr>
      <th>To combine with </th>
      <th>Precede the letter by </th>
    </tr><tr>
      <td>Shift </td>
      <td>+ (plus sign) </td>
    </tr><tr>
      <td>Ctrl </td>
      <td>^ (caret sign) </td>
    </tr><tr>
      <td>Alt </td>
      <td>% (percent sign) </td>
    </tr></tbody></table><p>
        The hotkey can also be in Virtual Key format, so that you can use any key on the keyboard.  This 
        statement is optional.
      </p><h5><a name="id634082"></a>Example</h5><pre class="programlisting">
store( &amp;hotkey ) "^+A"                   c Ctrl+Shift+A
store( &amp;hotkey ) "[Alt Shift K_PAUSE]"   c Alt+Shift+Pause
      </pre><h5><a name="id632929"></a>Versions</h5><p>The virtual key hotkey functionality was introduced in Keyman 3.1.</p><h5><a name="id633226"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference__struct_headers.php" title="Header keywords">Header keywords</a></p></li><li><p><a class="xref" href="reference__struct_vkeys.php" title="Virtual Keys and Virtual Character Keys">Virtual Keys and Virtual Character Keys</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_ethnologuecode.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_systemstores_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_includecodes.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">EthnologueCode system store </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> includecodes system store</td></tr></table></div>
