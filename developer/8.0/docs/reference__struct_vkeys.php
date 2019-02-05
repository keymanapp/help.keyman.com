<?php
  require_once('includes/template.php');

  head([
    'title' => "Virtual Keys and Virtual Character Keys"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Virtual Keys and Virtual Character Keys</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference__struct_unicode.php">Prev</a> </td><th width="60%" align="center">Language Structure</th><td width="20%" align="right"> <a accesskey="n" href="reference_statements_index.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference__struct_vkeys">Virtual Keys and Virtual Character Keys</h4></div></div></div><p>
    Virtual keys provide a mechanism for recognising any key combination on the keyboard.
    Any key that does not normally generate a character, except for a few listed below, can be
    matched by this technique.
  </p><p>
    The key codes refer to the actual key at the given position on a standard US-English keyboard.  When
    used with a non US-English keyboard driver (selected through Control Panel/Keyboards), differences
    can arise, and this use is not recommended.
  </p><p>
    The Right-Alt key has traditionally been used on European keyboards as an additional shift state,
    usually known as AltGr.  The end user of Keyman keyboards can select an option to emulate Right-Alt with
    Ctrl+Alt, as Right-Alt is not available on many notebook keyboards.  Thus, it is wise to avoid using Ctrl+Alt
    combinations in the same keyboard as Right-Alt combinations.
  </p><p>
    Additionally, it is useful to keep in mind that when this emulation is active, it is not possible to
    recognise the Ctrl+Right Alt combination, as this is overridden by Ctrl+Alt (producing Right-Alt).
    This can have ramifications in keyboards such as German, which makes use of the Ctrl+AltGr combination.
  </p><p>
    <span class="emphasis"><em>Virtual Keys vs Virtual Character Keys:</em></span> Keyman 6.0 introduced a new feature known as
    <a class="link" href="reference_mnemoniclayout.php" title="mnemoniclayout system store">mnemonic layouts</a>.  This feature requires that the "white"
    alphabet/numeric/punctuation keys in the primary section of the keyboard are referenced by the character
    on the key cap rather than the key position (as with non-mnemonic layouts).  However, all other keys on
    the keyboard should be referenced as normal.
  </p><p>
    It is important to remember that you can choose any character that appears on a given keycap, not just the
    unshifted character.  For instance, if you use <code class="code">['A']</code>, you will be matching the unshifted A key;
    you must still explicitly state the shift state for the key.
  </p><h5><a name="id643821"></a>Reference</h5><p>
    The general format for a virtual character key is:
  </p><pre class="programlisting">
    [ shift-codes 'c' ]
  </pre><p>
    where <code class="code">c</code> is any character on the keyboard.
  </p><p>
    The general format for a virtual key is:
  </p><pre class="programlisting">
    [ shift-codes K_key ]
  </pre><p>
    The possible shift codes are:
  </p><table><tbody><tr>
        <th>Shift Key</th>
        <th>Code</th>
      </tr><tr>
        <td>Either shift key </td>
        <td>SHIFT </td>
      </tr><tr>
        <td>Either control key </td>
        <td>CTRL </td>
      </tr><tr>
        <td>Left control key </td>
        <td>LCTRL </td>
      </tr><tr>
        <td>Right control key (not found on all keyboards) </td>
        <td>RCTRL </td>
      </tr><tr>
        <td>Either alt key </td>
        <td>ALT </td>
      </tr><tr>
        <td>Left alt key </td>
        <td>LALT </td>
      </tr><tr>
        <td>Right alt key or AltGr on European keyboards (not found on all keyboards) </td>
        <td>RALT </td>
      </tr><tr>
        <td>Caps Lock on </td>
        <td>CAPS </td>
      </tr><tr>
        <td>Caps Lock off </td>
        <td>NCAPS </td>
      </tr></tbody></table><div class="tip" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Tip</h3><p>
      A caveat for using RALT: When using many European keyboards, Windows internally translates the RALT (or AltGr) key to
      LCTRL+RALT.  Keyman also includes an option to treat CTRL+ALT in the same manner as RALT (this is useful for notebook
      keyboards that do not have a RALT or AltGr key.  Both of these 'features' mean that you should avoid using more than one
      of the following shift combinations in the same keyboard:
    </p><table><tbody><tr>
          <td>Shift Code </td>
        </tr><tr>
          <td>RALT </td>
        </tr><tr>
          <td>CTRL ALT</td>
        </tr><tr>
          <td>CTRL RALT</td>
        </tr><tr>
          <td>LCTRL ALT</td>
        </tr><tr>
          <td>LCTRL RALT</td>
        </tr></tbody></table></div><div class="note" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Note</h3><p>
      If neither CAPS or NCAPS is specified, then the CAPS LOCK key is ignored.  This means that if you do have a rule that uses
      CAPS, you should make sure that no other rule references that key without NCAPS or CAPS specified.  In the following example,
      the [CAPS K_A] rule will never be matched, because the [K_A] rule does not take CAPS LOCK into account:
    </p><pre class="programlisting">
      + [K_A] &gt; 'small a'   c WRONG!
      + [CAPS K_A] &gt; 'BIG A'
    </pre><p>
      Instead, you should use:
    </p><pre class="programlisting">
      + [NCAPS K_A] &gt; 'small a'   c Right!
      + [CAPS K_A] &gt; 'BIG A'
    </pre></div><p>
    The following table lists all of the common virtual key codes:
  </p><table><tbody><tr>
        <td>Key Code </td>
        <td>Key Name </td>
        <td> </td>
        <td>Key Code </td>
        <td>Key Name </td>
      </tr><tr>
        <td>K_SPACE </td>
        <td> </td>
        <td> </td>
        <td>K_oE2 </td>
        <td>102nd Key (European) </td>
      </tr><tr>
        <td>K_A </td>
        <td>A </td>
        <td> </td>
        <td>K_BKSP </td>
        <td>Backspace </td>
      </tr><tr>
        <td>K_B </td>
        <td>B </td>
        <td> </td>
        <td>K_TAB </td>
        <td>Tab </td>
      </tr><tr>
        <td>K_C </td>
        <td>C </td>
        <td> </td>
        <td>K_ENTER </td>
        <td>Enter </td>
      </tr><tr>
        <td>K_D </td>
        <td>D </td>
        <td> </td>
        <td>K_ESC </td>
        <td>Escape </td>
      </tr><tr>
        <td>K_E </td>
        <td>E </td>
        <td> </td>
        <td>K_LEFT </td>
        <td>Left Arrow </td>
      </tr><tr>
        <td>K_F </td>
        <td>F </td>
        <td> </td>
        <td>K_UP </td>
        <td>Up Arrow</td>
      </tr><tr>
        <td>K_G </td>
        <td>G </td>
        <td> </td>
        <td>K_RIGHT </td>
        <td>Right Arrow</td>
      </tr><tr>
        <td>K_H </td>
        <td>H </td>
        <td> </td>
        <td>K_DOWN </td>
        <td>Down Arrow</td>
      </tr><tr>
        <td>K_I </td>
        <td>I </td>
        <td> </td>
        <td>K_PGUP </td>
        <td>Page Up </td>
      </tr><tr>
        <td>K_J </td>
        <td>J </td>
        <td> </td>
        <td>K_PGDN </td>
        <td>Page Down </td>
      </tr><tr>
        <td>K_K </td>
        <td>K </td>
        <td> </td>
        <td>K_HOME </td>
        <td>Home </td>
      </tr><tr>
        <td>K_L </td>
        <td>L </td>
        <td> </td>
        <td>K_END </td>
        <td>End </td>
      </tr><tr>
        <td>K_M </td>
        <td>M </td>
        <td> </td>
        <td>K_INS </td>
        <td>Insert </td>
      </tr><tr>
        <td>K_N </td>
        <td>N </td>
        <td> </td>
        <td>K_DEL </td>
        <td>Delete </td>
      </tr><tr>
        <td>K_O </td>
        <td>O </td>
        <td> </td>
        <td>K_F1 </td>
        <td>F1 </td>
      </tr><tr>
        <td>K_P </td>
        <td>P </td>
        <td> </td>
        <td>K_F2 </td>
        <td>F2 </td>
      </tr><tr>
        <td>K_Q </td>
        <td>Q </td>
        <td> </td>
        <td>K_F3 </td>
        <td>F3 </td>
      </tr><tr>
        <td>K_R </td>
        <td>R </td>
        <td> </td>
        <td>K_F4 </td>
        <td>F4 </td>
      </tr><tr>
        <td>K_S </td>
        <td>S </td>
        <td> </td>
        <td>K_F5 </td>
        <td>F5 </td>
      </tr><tr>
        <td>K_T </td>
        <td>T </td>
        <td> </td>
        <td>K_F6 </td>
        <td>F6 </td>
      </tr><tr>
        <td>K_U </td>
        <td>U </td>
        <td> </td>
        <td>K_F7 </td>
        <td>F7 </td>
      </tr><tr>
        <td>K_V </td>
        <td>V </td>
        <td> </td>
        <td>K_F8 </td>
        <td>F8 </td>
      </tr><tr>
        <td>K_W </td>
        <td>W </td>
        <td> </td>
        <td>K_F9 </td>
        <td>F9 </td>
      </tr><tr>
        <td>K_X </td>
        <td>X </td>
        <td> </td>
        <td>K_F10 </td>
        <td>F10 </td>
      </tr><tr>
        <td>K_Y </td>
        <td>Y </td>
        <td> </td>
        <td>K_F11 </td>
        <td>F11 </td>
      </tr><tr>
        <td>K_Z </td>
        <td>Z </td>
        <td> </td>
        <td>K_F12 </td>
        <td>F12 </td>
      </tr><tr>
        <td>K_1 </td>
        <td>1 </td>
        <td> </td>
        <td>K_KP5 </td>
        <td>Key Pad 5 (Numlock off) </td>
      </tr><tr>
        <td>K_2 </td>
        <td>2 </td>
        <td> </td>
        <td>K_NP0 </td>
        <td>Number Pad 0 </td>
      </tr><tr>
        <td>K_3 </td>
        <td>3 </td>
        <td> </td>
        <td>K_NP1 </td>
        <td>Number Pad 1 </td>
      </tr><tr>
        <td>K_4 </td>
        <td>4 </td>
        <td> </td>
        <td>K_NP2 </td>
        <td>Number Pad 2 </td>
      </tr><tr>
        <td>K_5 </td>
        <td>5 </td>
        <td> </td>
        <td>K_NP3 </td>
        <td>Number Pad 3 </td>
      </tr><tr>
        <td>K_6 </td>
        <td>6 </td>
        <td> </td>
        <td>K_NP4 </td>
        <td>Number Pad 4 </td>
      </tr><tr>
        <td>K_7 </td>
        <td>7 </td>
        <td> </td>
        <td>K_NP5 </td>
        <td>Number Pad 5 </td>
      </tr><tr>
        <td>K_8 </td>
        <td>8 </td>
        <td> </td>
        <td>K_NP6 </td>
        <td>Number Pad 6 </td>
      </tr><tr>
        <td>K_9 </td>
        <td>9 </td>
        <td> </td>
        <td>K_NP7 </td>
        <td>Number Pad 7 </td>
      </tr><tr>
        <td>K_0 </td>
        <td>0 </td>
        <td> </td>
        <td>K_NP8 </td>
        <td>Number Pad 8 </td>
      </tr><tr>
        <td>K_BKQUOTE </td>
        <td>` </td>
        <td> </td>
        <td>K_NP9 </td>
        <td>Number Pad 9 </td>
      </tr><tr>
        <td>K_HYPHEN </td>
        <td>- </td>
        <td> </td>
        <td>K_NPSTAR </td>
        <td>Number Pad * </td>
      </tr><tr>
        <td>K_EQUAL </td>
        <td>= </td>
        <td> </td>
        <td>K_NPPLUS </td>
        <td>Number Pad + </td>
      </tr><tr>
        <td>K_LBRKT </td>
        <td>[ </td>
        <td> </td>
        <td>K_NPMINUS </td>
        <td>Number Pad - </td>
      </tr><tr>
        <td>K_RBRKT </td>
        <td>] </td>
        <td> </td>
        <td>K_NPDOT </td>
        <td>Number Pad . </td>
      </tr><tr>
        <td>K_BKSLASH </td>
        <td>\ </td>
        <td> </td>
        <td>K_NPSLASH </td>
        <td>Number Pad / </td>
      </tr><tr>
        <td>K_COLON </td>
        <td>; </td>
        <td> </td>
        <td> </td>
        <td> </td>
      </tr><tr>
        <td>K_QUOTE </td>
        <td>' </td>
        <td> </td>
        <td> </td>
        <td> </td>
      </tr><tr>
        <td>K_COMMA </td>
        <td>, </td>
        <td> </td>
        <td> </td>
        <td> </td>
      </tr><tr>
        <td>K_PERIOD </td>
        <td>. </td>
        <td> </td>
        <td> </td>
        <td> </td>
      </tr><tr>
        <td>K_SLASH </td>
        <td>/ </td>
        <td> </td>
        <td> </td>
        <td> </td>
      </tr></tbody></table><p>
    The following table lists all of the less common virtual key codes:
  </p><table><tbody><tr>
        <td>Key Code </td>
        <td>Key Name </td>
        <td> </td>
        <td>Key Code </td>
        <td>Key Name </td>
      </tr><tr>
        <td>K_SEL </td>
        <td>Select </td>
        <td> </td>
        <td>K_?96 </td>
        <td>Unknown Key 96 </td>
      </tr><tr>
        <td>K_PRINT </td>
        <td>Print </td>
        <td> </td>
        <td>K_?97 </td>
        <td>Unknown Key 97 </td>
      </tr><tr>
        <td>K_EXEC </td>
        <td>Execute </td>
        <td> </td>
        <td>K_?98 </td>
        <td>Unknown Key 98 </td>
      </tr><tr>
        <td>K_HELP </td>
        <td>Help </td>
        <td> </td>
        <td>K_?99 </td>
        <td>Unknown Key 99 </td>
      </tr><tr>
        <td>K_SEPARATOR </td>
        <td>Separator </td>
        <td> </td>
        <td>K_?9A </td>
        <td>Unknown Key 9A </td>
      </tr><tr>
        <td>K_F13 </td>
        <td>F13 </td>
        <td> </td>
        <td>K_?9B </td>
        <td>Unknown Key 9B </td>
      </tr><tr>
        <td>K_F14 </td>
        <td>F14 </td>
        <td> </td>
        <td>K_?9C </td>
        <td>Unknown Key 9C </td>
      </tr><tr>
        <td>K_F15 </td>
        <td>F15 </td>
        <td> </td>
        <td>K_?9D </td>
        <td>Unknown Key 9D </td>
      </tr><tr>
        <td>K_F16 </td>
        <td>F16 </td>
        <td> </td>
        <td>K_?9E </td>
        <td>Unknown Key 9E </td>
      </tr><tr>
        <td>K_F17 </td>
        <td>F17 </td>
        <td> </td>
        <td>K_?9F </td>
        <td>Unknown Key 9F </td>
      </tr><tr>
        <td>K_F18 </td>
        <td>F18 </td>
        <td> </td>
        <td>K_?A0 </td>
        <td>Unknown Key A0 </td>
      </tr><tr>
        <td>K_F19 </td>
        <td>F19 </td>
        <td> </td>
        <td>K_?A1 </td>
        <td>Unknown Key A1 </td>
      </tr><tr>
        <td>K_F20 </td>
        <td>F20 </td>
        <td> </td>
        <td>K_?A2 </td>
        <td>Unknown Key A2 </td>
      </tr><tr>
        <td>K_F21 </td>
        <td>F21 </td>
        <td> </td>
        <td>K_?A3 </td>
        <td>Unknown Key A3 </td>
      </tr><tr>
        <td>K_F22 </td>
        <td>F22 </td>
        <td> </td>
        <td>K_?A4 </td>
        <td>Unknown Key A4 </td>
      </tr><tr>
        <td>K_F23 </td>
        <td>F23 </td>
        <td> </td>
        <td>K_?A5 </td>
        <td>Unknown Key A5 </td>
      </tr><tr>
        <td>K_F24 </td>
        <td>F24 </td>
        <td> </td>
        <td>K_?A6 </td>
        <td>Unknown Key A6 </td>
      </tr><tr>
        <td>K_KANJI?15 </td>
        <td>Kanji Key #1 </td>
        <td> </td>
        <td>K_?A7 </td>
        <td>Unknown Key A7 </td>
      </tr><tr>
        <td>K_KANJI?16 </td>
        <td>Kanji Key #2 </td>
        <td> </td>
        <td>K_?A8 </td>
        <td>Unknown Key A8 </td>
      </tr><tr>
        <td>K_KANJI?17 </td>
        <td>Kanji Key #3 </td>
        <td> </td>
        <td>K_?A9 </td>
        <td>Unknown Key A9 </td>
      </tr><tr>
        <td>K_KANJI?18 </td>
        <td>Kanji Key #4 </td>
        <td> </td>
        <td>K_?AA </td>
        <td>Unknown Key AA </td>
      </tr><tr>
        <td>K_KANJI?19 </td>
        <td>Kanji Key #5 </td>
        <td> </td>
        <td>K_?AB </td>
        <td>Unknown Key AB </td>
      </tr><tr>
        <td>K_KANJI?1C </td>
        <td>Kanji Key #6 </td>
        <td> </td>
        <td>K_?AC </td>
        <td>Unknown Key AC </td>
      </tr><tr>
        <td>K_KANJI?1D </td>
        <td>Kanji Key #7 </td>
        <td> </td>
        <td>K_?AD </td>
        <td>Unknown Key AD </td>
      </tr><tr>
        <td>K_KANJI?1E </td>
        <td>Kanji Key #8 </td>
        <td> </td>
        <td>K_?AE </td>
        <td>Unknown Key AE </td>
      </tr><tr>
        <td>K_KANJI?1F </td>
        <td>Kanji Key #9 </td>
        <td> </td>
        <td>K_?AF </td>
        <td>Unknown Key AF </td>
      </tr><tr>
        <td>K_oE0 </td>
        <td>OEM Key E0 </td>
        <td> </td>
        <td>K_?B0 </td>
        <td>Unknown Key B0 </td>
      </tr><tr>
        <td>K_oE1 </td>
        <td>OEM Key E1 </td>
        <td> </td>
        <td>K_?B1 </td>
        <td>Unknown Key B1 </td>
      </tr><tr>
        <td>K_oE3 </td>
        <td>OEM Key E3 </td>
        <td> </td>
        <td>K_?B2 </td>
        <td>Unknown Key B2 </td>
      </tr><tr>
        <td>K_oE4 </td>
        <td>OEM Key E4 </td>
        <td> </td>
        <td>K_?B3 </td>
        <td>Unknown Key B3 </td>
      </tr><tr>
        <td>K_oE6 </td>
        <td>OEM Key E6 </td>
        <td> </td>
        <td>K_?B4 </td>
        <td>Unknown Key B4 </td>
      </tr><tr>
        <td>K_oE9 </td>
        <td>OEM Key E9 </td>
        <td> </td>
        <td>K_?B5 </td>
        <td>Unknown Key B5 </td>
      </tr><tr>
        <td>K_oEA </td>
        <td>OEM Key EA </td>
        <td> </td>
        <td>K_?B6 </td>
        <td>Unknown Key B6 </td>
      </tr><tr>
        <td>K_oEB </td>
        <td>OEM Key EB </td>
        <td> </td>
        <td>K_?B7 </td>
        <td>Unknown Key B7 </td>
      </tr><tr>
        <td>K_oEC </td>
        <td>OEM Key EC </td>
        <td> </td>
        <td>K_?B8 </td>
        <td>Unknown Key B8 </td>
      </tr><tr>
        <td>K_oED </td>
        <td>OEM Key ED </td>
        <td> </td>
        <td>K_?B9 </td>
        <td>Unknown Key B9 </td>
      </tr><tr>
        <td>K_oEE </td>
        <td>OEM Key EE </td>
        <td> </td>
        <td>K_?C1 </td>
        <td>Unknown Key C1 </td>
      </tr><tr>
        <td>K_oEF </td>
        <td>OEM Key EF </td>
        <td> </td>
        <td>K_?C2 </td>
        <td>Unknown Key C2 </td>
      </tr><tr>
        <td>K_oF0 </td>
        <td>OEM Key F0 </td>
        <td> </td>
        <td>K_?C3 </td>
        <td>Unknown Key C3 </td>
      </tr><tr>
        <td>K_oF1 </td>
        <td>OEM Key F1 </td>
        <td> </td>
        <td>K_?C4 </td>
        <td>Unknown Key C4 </td>
      </tr><tr>
        <td>K_oF2 </td>
        <td>OEM Key F2 </td>
        <td> </td>
        <td>K_?C5 </td>
        <td>Unknown Key C5 </td>
      </tr><tr>
        <td>K_oF3 </td>
        <td>OEM Key F3 </td>
        <td> </td>
        <td>K_?C6 </td>
        <td>Unknown Key C6 </td>
      </tr><tr>
        <td>K_oF4 </td>
        <td>OEM Key F4 </td>
        <td> </td>
        <td>K_?C7 </td>
        <td>Unknown Key C7 </td>
      </tr><tr>
        <td>K_oF5 </td>
        <td>OEM Key F5 </td>
        <td> </td>
        <td>K_?C8 </td>
        <td>Unknown Key C8 </td>
      </tr><tr>
        <td>K_?00 </td>
        <td>Unknown Key 00 </td>
        <td> </td>
        <td>K_?C9 </td>
        <td>Unknown Key C9 </td>
      </tr><tr>
        <td>K_?05 or K_NPENTER </td>
        <td>Number Pad ENTER</td>
        <td> </td>
        <td>K_?CA </td>
        <td>Unknown Key CA </td>
      </tr><tr>
        <td>K_?06 </td>
        <td>Unknown Key 06 </td>
        <td> </td>
        <td>K_?CB </td>
        <td>Unknown Key CB </td>
      </tr><tr>
        <td>K_?07 </td>
        <td>Unknown Key 07 </td>
        <td> </td>
        <td>K_?CC </td>
        <td>Unknown Key CC </td>
      </tr><tr>
        <td>K_?0A </td>
        <td>Unknown Key 0A </td>
        <td> </td>
        <td>K_?CD </td>
        <td>Unknown Key CD </td>
      </tr><tr>
        <td>K_?0B </td>
        <td>Unknown Key 0B </td>
        <td> </td>
        <td>K_?CE </td>
        <td>Unknown Key CE </td>
      </tr><tr>
        <td>K_?0E </td>
        <td>Unknown Key 0E </td>
        <td> </td>
        <td>K_?CF </td>
        <td>Unknown Key CF </td>
      </tr><tr>
        <td>K_?0F </td>
        <td>Unknown Key 0F </td>
        <td> </td>
        <td>K_?D0 </td>
        <td>Unknown Key D0 </td>
      </tr><tr>
        <td>K_?1A </td>
        <td>Unknown Key 1A </td>
        <td> </td>
        <td>K_?D1 </td>
        <td>Unknown Key D1 </td>
      </tr><tr>
        <td>K_?3A </td>
        <td>Unknown Key 3A </td>
        <td> </td>
        <td>K_?D2 </td>
        <td>Unknown Key D2 </td>
      </tr><tr>
        <td>K_?3B </td>
        <td>Unknown Key 3B </td>
        <td> </td>
        <td>K_?D3 </td>
        <td>Unknown Key D3 </td>
      </tr><tr>
        <td>K_?3C </td>
        <td>Unknown Key 3C </td>
        <td> </td>
        <td>K_?D4 </td>
        <td>Unknown Key D4 </td>
      </tr><tr>
        <td>K_?3D </td>
        <td>Unknown Key 3D </td>
        <td> </td>
        <td>K_?D5 </td>
        <td>Unknown Key D5 </td>
      </tr><tr>
        <td>K_?3E </td>
        <td>Unknown Key 3E </td>
        <td> </td>
        <td>K_?D6 </td>
        <td>Unknown Key D6 </td>
      </tr><tr>
        <td>K_?3F </td>
        <td>Unknown Key 3F </td>
        <td> </td>
        <td>K_?D7 </td>
        <td>Unknown Key D7 </td>
      </tr><tr>
        <td>K_?40 </td>
        <td>Unknown Key 40 </td>
        <td> </td>
        <td>K_?D8 </td>
        <td>Unknown Key D8 </td>
      </tr><tr>
        <td>K_?5B </td>
        <td>Unknown Key 5B </td>
        <td> </td>
        <td>K_?D9 </td>
        <td>Unknown Key D9 </td>
      </tr><tr>
        <td>K_?5C </td>
        <td>Unknown Key 5C </td>
        <td> </td>
        <td>K_?DA </td>
        <td>Unknown Key DA </td>
      </tr><tr>
        <td>K_?5D </td>
        <td>Unknown Key 5D </td>
        <td> </td>
        <td>K_oDF </td>
        <td>Unknown Key DF </td>
      </tr><tr>
        <td>K_?5E </td>
        <td>Unknown Key 5E </td>
        <td> </td>
        <td>K_?E5 </td>
        <td>Unknown Key E5 </td>
      </tr><tr>
        <td>K_?5F </td>
        <td>Unknown Key 5F </td>
        <td> </td>
        <td>K_?E7 </td>
        <td>Unknown Key E7 </td>
      </tr><tr>
        <td>K_?88 </td>
        <td>Unknown Key 88 </td>
        <td> </td>
        <td>K_?E8 </td>
        <td>Unknown Key E8 </td>
      </tr><tr>
        <td>K_?89 </td>
        <td>Unknown Key 89 </td>
        <td> </td>
        <td>K_?F6 </td>
        <td>Unknown Key F6 </td>
      </tr><tr>
        <td>K_?8A </td>
        <td>Unknown Key 8A </td>
        <td> </td>
        <td>K_?F7 </td>
        <td>Unknown Key F7 </td>
      </tr><tr>
        <td>K_?8B </td>
        <td>Unknown Key 8B </td>
        <td> </td>
        <td>K_?F8 </td>
        <td>Unknown Key F8 </td>
      </tr><tr>
        <td>K_?8C </td>
        <td>Unknown Key 8C </td>
        <td> </td>
        <td>K_?F9 </td>
        <td>Unknown Key F9 </td>
      </tr><tr>
        <td>K_?8D </td>
        <td>Unknown Key 8D </td>
        <td> </td>
        <td>K_?FA </td>
        <td>Unknown Key FA </td>
      </tr><tr>
        <td>K_?8E </td>
        <td>Unknown Key 8E </td>
        <td> </td>
        <td>K_?FB </td>
        <td>Unknown Key FB </td>
      </tr><tr>
        <td>K_?8F </td>
        <td>Unknown Key 8F </td>
        <td> </td>
        <td>K_?FC </td>
        <td>Unknown Key FC </td>
      </tr><tr>
        <td>K_?92 </td>
        <td>Unknown Key 92 </td>
        <td> </td>
        <td>K_?FD </td>
        <td>Unknown Key FD </td>
      </tr><tr>
        <td>K_?94 </td>
        <td>Unknown Key 94 </td>
        <td> </td>
        <td>K_?FE </td>
        <td>Unknown Key FE </td>
      </tr><tr>
        <td>K_?95 </td>
        <td>Unknown Key 95 </td>
        <td> </td>
        <td>K_?FF </td>
        <td>Unknown Key FF </td>
      </tr></tbody></table><p>
    The following table lists all of the reserved virtual key codes that will not be recognised even if they
    are on your keyboard, although they are included in Keyman for completeness:
  </p><table><tbody><tr>
        <th>Key Code</th>
        <th>Key Name</th>
      </tr><tr>
        <td>K_SHIFT </td>
        <td>Shift </td>
      </tr><tr>
        <td>K_CONTROL </td>
        <td>Control </td>
      </tr><tr>
        <td>K_ALT </td>
        <td>Alt </td>
      </tr><tr>
        <td>K_CAPS </td>
        <td>Caps Lock </td>
      </tr><tr>
        <td>K_NUMLOCK </td>
        <td>Num Lock </td>
      </tr><tr>
        <td>K_SCROLL </td>
        <td>Scroll Lock </td>
      </tr><tr>
        <td>K_LBUTTON </td>
        <td>Left Mouse Button </td>
      </tr><tr>
        <td>K_MBUTTON </td>
        <td>Middle Mouse Button </td>
      </tr><tr>
        <td>K_RBUTTON </td>
        <td>Right Mouse Button </td>
      </tr><tr>
        <td>K_CANCEL </td>
        <td>Ctrl+Break </td>
      </tr><tr>
        <td>K_PAUSE </td>
        <td>Pause </td>
      </tr><tr>
        <td>K_PRTSCN </td>
        <td>Print Screen </td>
      </tr></tbody></table><p>
    Some examples are:
  </p><pre class="programlisting">
    c override default bksp behaviour for 'ng'
    'ng' + [K_BKSP] &gt; nul

    + [SHIFT CTRL K_A] &gt; 'à'
    + [RALT K_E] &gt; 'è'
  </pre><p>
    Virtual keys also work in the output (sending keystrokes to an application),
    but they are not officially supported and may not work in all circumstances.
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference__struct_unicode.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_language_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_statements_index.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Unicode and ANSI </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Statements</td></tr></table></div>
