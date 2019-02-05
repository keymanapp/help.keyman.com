<?php
  require_once('includes/template.php');

  head([
    'title' => "Virtual Keys and Virtual Character Keys"
  ]);
?>

<h1 class="title" id="reference__struct_vkeys">Virtual Keys and Virtual Character Keys</h1>

<p>With ordinary rules, you can match any key that produces a character. However, sometimes you may want to match other keys, for
example Backspace, or Ctrl- or Alt-combinations. In order to match keys like these you need to use virtual keys.</p>

<p>Every key on the keyboard is identified by a virtual key code. Virtual keys are identified by square brackets <code>[ ]</code>
containing a combination of zero or more shift-key codes and a virtual key code.</p>

<h2><a name="id535478" id="id535478"></a>Using virtual keys</h2>

<p>Virtual keys are used in the key section of a rule. Virtual keys are not valid in the context of a rule, as the 
context consists solely of characters. As virtual keys can only be output on a few platforms, they should not be used in
the output section of a rule.</p>

<p>A typical use of virtual keys is to make rules to recognise non-character keys, such as <span class='key'>Backspace</span> or 
<span class='key'>Tab</span>; for example:</p>

<pre><code>+ [K_TAB] > "You pressed Tab"
</code></pre>

<p>Virtual keys are also commonly used to recognise <span class='key'>Ctrl</span> or <span class='key'>Alt</span> key combinations, 
like this:</p>

<pre><code>+ [CTRL ALT K_A] > "You pressed Ctrl+Alt+A"
</code></pre>

<p>While Keyman virtual keys are closely related to the Windows virtual keys, there are differences, and the two cannot be used
completely interchangeably. Most of the following discussion relates to physical keyboards.</p>

<p>The key codes refer to the actual key at the given position on a standard US-English keyboard. When used with a non US-English
keyboard driver (selected through Control Panel/Keyboards), differences can arise, and this use is not recommended.</p>

<p>The Right-Alt key has traditionally been used on European keyboards as an additional shift state, usually known as AltGr. The end
user of Keyman keyboards can select an option to emulate Right-Alt with Ctrl+Alt, as Right-Alt is not available on many notebook
keyboards. Thus, it is wise to avoid using Ctrl+Alt combinations and Right-Alt combinations in the same keyboard.</p>

<p>Additionally, it is useful to keep in mind that when this emulation is active, it is not possible to recognise the Ctrl+Right Alt
combination, as this is overridden by Ctrl+Alt (producing Right-Alt). This can have ramifications in keyboards such as German, which
makes use of the Ctrl+AltGr combination.</p>

<p><span class="emphasis"><em>Virtual Keys vs Virtual Character Keys:</em></span> Keyman 6.0 introduced a new feature known as
<a class="link" href="../reference/mnemoniclayout" title="mnemoniclayout system store">mnemonic layouts</a>. This feature requires
that the "white" alphabet/numeric/punctuation keys in the primary section of the keyboard are referenced by the character on
the key cap rather than the key position (as with non-mnemonic layouts). However, all other keys on the keyboard should be referenced
as normal.</p>

<p>It is important to remember that you can choose any character that appears on a given keycap, not just the unshifted character. For
instance, if you use <code>['A']</code>, you will be matching the unshifted A key; you must still explicitly state
the shift state for the key.</p>

<h2><a name="id565141" id="id565141"></a>Reference</h2>

<p>The general format for a virtual character key is:</p>
<pre><code>[ shift-codes 'c' ]
</code></pre>

<p>where <code>'c'</code> is any character on the keyboard. This can include characters on European keyboards.</p>

<p>The general format for a virtual key is:</p>
<pre><code>[ shift-codes K_key ]
</code></pre>

<p>The possible shift codes are:</p>

<table class='display'>
  <tbody>
    <tr>
      <th>Shift Key</th>
      <th>Code</th>
    </tr>

    <tr>
      <td>Either shift key</td>
      <td><code>SHIFT</code></td>
    </tr>

    <tr>
      <td>Either control key</td>
      <td><code>CTRL</code></td>
    </tr>

    <tr>
      <td>Left control key</td>
      <td><code>LCTRL</code></td>
    </tr>

    <tr>
      <td>Right control key (not found on all keyboards)</td>
      <td><code>RCTRL</code></td>
    </tr>

    <tr>
      <td>Either alt key</td>
      <td><code>ALT</code></td>
    </tr>

    <tr>
      <td>Left alt key</td>
      <td><code>LALT</code></td>
    </tr>

    <tr>
      <td>Right alt key or AltGr on European keyboards (not found on all keyboards)</td>
      <td><code>RALT</code></td>
    </tr>

    <tr>
      <td>Caps Lock on</td>
      <td><code>CAPS</code></td>
    </tr>

    <tr>
      <td>Caps Lock off</td>
      <td><code>NCAPS</code></td>
    </tr>
  </tbody>
</table>

<h2 class="title">Using Right Alt / AltGr</h2>

<p>A caveat for using RALT: When using many European keyboards, Windows internally translates the RALT (or AltGr) key to LCTRL+RALT.
Keyman also includes an option to treat CTRL+ALT in the same manner as RALT (this is useful for notebook keyboards that do not have a
RALT or AltGr key. Both of these 'features' mean that you should avoid using more than one of the following shift
combinations in the same keyboard:</p>

<table class='display'>
  <tbody>
    <tr>
      <th>Shift Code</th>
    </tr>

    <tr>
      <td><code>RALT</code></td>
    </tr>

    <tr>
      <td><code>CTRL ALT</code></td>
    </tr>

    <tr>
      <td><code>CTRL RALT</code></td>
    </tr>

    <tr>
      <td><code>LCTRL ALT</code></td>
    </tr>

    <tr>
      <td><code>LCTRL RALT</code></td>
    </tr>
  </tbody>
</table>

<h2>Caps Lock</h2>

<p>If neither CAPS or NCAPS is specified, then the CAPS LOCK key is ignored. This means that if you do have a rule that uses CAPS,
you should make sure that no other rule references that key without NCAPS or CAPS specified. In the following example, the [CAPS K_A]
rule will never be matched, because the [K_A] rule does not take CAPS LOCK into account:</p>

<pre><code>+ [K_A] > 'small a'   c WRONG!
+ [CAPS K_A] > 'BIG A'
</code></pre>

<p>Instead, you should use:</p>

<pre><code>+ [NCAPS K_A] > 'small a'   c Right!
+ [CAPS K_A] > 'BIG A'
</code></pre>

<p>Caps lock is also controlled by <a href='../reference/caps'>Caps lock stores</a>.</p>

<h2>Common virtual key codes</h2>

<p>The following table lists all of the common virtual key codes:</p>

<table class='display'>
  <tbody>
    <tr>
      <th>Key Code</th>
      <th>Key Name</th>
      <th></th>
      <th>Key Code</th>
      <th>Key Name</th>
    </tr>

    <tr>
      <td><code>K_SPACE</code></td>
      <td></td>
      <td></td>
      <td><code>K_oE2</code></td>
      <td>102nd Key (European)</td>
    </tr>

    <tr>
      <td><code>K_A</code></td>
      <td>A</td>
      <td></td>
      <td><code>K_BKSP</code></td>
      <td>Backspace</td>
    </tr>

    <tr>
      <td><code>K_B</code></td>
      <td>B</td>
      <td></td>
      <td><code>K_TAB</code></td>
      <td>Tab</td>
    </tr>

    <tr>
      <td><code>K_C</code></td>
      <td>C</td>
      <td></td>
      <td><code>K_ENTER</code></td>
      <td>Enter</td>
    </tr>

    <tr>
      <td><code>K_D</code></td>
      <td>D</td>
      <td></td>
      <td><code>K_ESC</code></td>
      <td>Escape</td>
    </tr>

    <tr>
      <td><code>K_E</code></td>
      <td>E</td>
      <td></td>
      <td><code>K_LEFT</code></td>
      <td>Left Arrow</td>
    </tr>

    <tr>
      <td><code>K_F</code></td>
      <td>F</td>
      <td></td>
      <td><code>K_UP</code></td>
      <td>Up Arrow</td>
    </tr>

    <tr>
      <td><code>K_G</code></td>
      <td>G</td>
      <td></td>
      <td><code>K_RIGHT</code></td>
      <td>Right Arrow</td>
    </tr>

    <tr>
      <td><code>K_H</code></td>
      <td>H</td>
      <td></td>
      <td><code>K_DOWN</code></td>
      <td>Down Arrow</td>
    </tr>

    <tr>
      <td><code>K_I</code></td>
      <td>I</td>
      <td></td>
      <td><code>K_PGUP</code></td>
      <td>Page Up</td>
    </tr>

    <tr>
      <td><code>K_J</code></td>
      <td>J</td>
      <td></td>
      <td><code>K_PGDN</code></td>
      <td>Page Down</td>
    </tr>

    <tr>
      <td><code>K_K</code></td>
      <td>K</td>
      <td></td>
      <td><code>K_HOME</code></td>
      <td>Home</td>
    </tr>

    <tr>
      <td><code>K_L</code></td>
      <td>L</td>
      <td></td>
      <td><code>K_END</code></td>
      <td>End</td>
    </tr>

    <tr>
      <td><code>K_M</code></td>
      <td>M</td>
      <td></td>
      <td><code>K_INS</code></td>
      <td>Insert</td>
    </tr>

    <tr>
      <td><code>K_N</code></td>
      <td>N</td>
      <td></td>
      <td><code>K_DEL</code></td>
      <td>Delete</td>
    </tr>

    <tr>
      <td><code>K_O</code></td>
      <td>O</td>
      <td></td>
      <td><code>K_F1</code></td>
      <td>F1</td>
    </tr>

    <tr>
      <td><code>K_P</code></td>
      <td>P</td>
      <td></td>
      <td><code>K_F2</code></td>
      <td>F2</td>
    </tr>

    <tr>
      <td><code>K_Q</code></td>
      <td>Q</td>
      <td></td>
      <td><code>K_F3</code></td>
      <td>F3</td>
    </tr>

    <tr>
      <td><code>K_R</code></td>
      <td>R</td>
      <td></td>
      <td><code>K_F4</code></td>
      <td>F4</td>
    </tr>

    <tr>
      <td><code>K_S</code></td>
      <td>S</td>
      <td></td>
      <td><code>K_F5</code></td>
      <td>F5</td>
    </tr>

    <tr>
      <td><code>K_T</code></td>
      <td>T</td>
      <td></td>
      <td><code>K_F6</code></td>
      <td>F6</td>
    </tr>

    <tr>
      <td><code>K_U</code></td>
      <td>U</td>
      <td></td>
      <td><code>K_F7</code></td>
      <td>F7</td>
    </tr>

    <tr>
      <td><code>K_V</code></td>
      <td>V</td>
      <td></td>
      <td><code>K_F8</code></td>
      <td>F8</td>
    </tr>

    <tr>
      <td><code>K_W</code></td>
      <td>W</td>
      <td></td>
      <td><code>K_F9</code></td>
      <td>F9</td>
    </tr>

    <tr>
      <td><code>K_X</code></td>
      <td>X</td>
      <td></td>
      <td><code>K_F10</code></td>
      <td>F10</td>
    </tr>

    <tr>
      <td><code>K_Y</code></td>
      <td>Y</td>
      <td></td>
      <td><code>K_F11</code></td>
      <td>F11</td>
    </tr>

    <tr>
      <td><code>K_Z</code></td>
      <td>Z</td>
      <td></td>
      <td><code>K_F12</code></td>
      <td>F12</td>
    </tr>

    <tr>
      <td><code>K_1</code></td>
      <td>1</td>
      <td></td>
      <td><code>K_KP5</code></td>
      <td>Key Pad 5 (Numlock off)</td>
    </tr>

    <tr>
      <td><code>K_2</code></td>
      <td>2</td>
      <td></td>
      <td><code>K_NP0</code></td>
      <td>Number Pad 0</td>
    </tr>

    <tr>
      <td><code>K_3</code></td>
      <td>3</td>
      <td></td>
      <td><code>K_NP1</code></td>
      <td>Number Pad 1</td>
    </tr>

    <tr>
      <td><code>K_4</code></td>
      <td>4</td>
      <td></td>
      <td><code>K_NP2</code></td>
      <td>Number Pad 2</td>
    </tr>

    <tr>
      <td><code>K_5</code></td>
      <td>5</td>
      <td></td>
      <td><code>K_NP3</code></td>
      <td>Number Pad 3</td>
    </tr>

    <tr>
      <td><code>K_6</code></td>
      <td>6</td>
      <td></td>
      <td><code>K_NP4</code></td>
      <td>Number Pad 4</td>
    </tr>

    <tr>
      <td><code>K_7</code></td>
      <td>7</td>
      <td></td>
      <td><code>K_NP5</code></td>
      <td>Number Pad 5</td>
    </tr>

    <tr>
      <td><code>K_8</code></td>
      <td>8</td>
      <td></td>
      <td><code>K_NP6</code></td>
      <td>Number Pad 6</td>
    </tr>

    <tr>
      <td><code>K_9</code></td>
      <td>9</td>
      <td></td>
      <td><code>K_NP7</code></td>
      <td>Number Pad 7</td>
    </tr>

    <tr>
      <td><code>K_0</code></td>
      <td>0</td>
      <td></td>
      <td><code>K_NP8</code></td>
      <td>Number Pad 8</td>
    </tr>

    <tr>
      <td><code>K_BKQUOTE</code></td>
      <td>`</td>
      <td></td>
      <td><code>K_NP9</code></td>
      <td>Number Pad 9</td>
    </tr>

    <tr>
      <td><code>K_HYPHEN</code></td>
      <td>-</td>
      <td></td>
      <td><code>K_NPSTAR</code></td>
      <td>Number Pad *</td>
    </tr>

    <tr>
      <td><code>K_EQUAL</code></td>
      <td>=</td>
      <td></td>
      <td><code>K_NPPLUS</code></td>
      <td>Number Pad +</td>
    </tr>

    <tr>
      <td><code>K_LBRKT</code></td>
      <td>[</td>
      <td></td>
      <td><code>K_NPMINUS</code></td>
      <td>Number Pad -</td>
    </tr>

    <tr>
      <td><code>K_RBRKT</code></td>
      <td>]</td>
      <td></td>
      <td><code>K_NPDOT</code></td>
      <td>Number Pad .</td>
    </tr>

    <tr>
      <td><code>K_BKSLASH</code></td>
      <td>\</td>
      <td></td>
      <td><code>K_NPSLASH</code></td>
      <td>Number Pad /</td>
    </tr>

    <tr>
      <td><code>K_COLON</code></td>
      <td>;</td>
      <td></td>
      <td></td>
      <td></td>
    </tr>

    <tr>
      <td><code>K_QUOTE</code></td>
      <td>'</td>
      <td></td>
      <td></td>
      <td></td>
    </tr>

    <tr>
      <td><code>K_COMMA</code></td>
      <td>,</td>
      <td></td>
      <td></td>
      <td></td>
    </tr>

    <tr>
      <td><code>K_PERIOD</code></td>
      <td>.</td>
      <td></td>
      <td></td>
      <td></td>
    </tr>

    <tr>
      <td><code>K_SLASH</code></td>
      <td>/</td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>

<p>The following table lists all of the less common virtual key codes:</p>

<table class='display'>
  <tbody>
    <tr>
      <th>Key Code</th>
      <th>Key Name</th>
      <th></th>
      <th>Key Code</th>
      <th>Key Name</th>
    </tr>

    <tr>
      <td><code>K_SEL</code></td>
      <td>Select</td>
      <td></td>
      <td><code>K_?96</code></td>
      <td>Unknown Key 96</td>
    </tr>

    <tr>
      <td><code>K_PRINT</code></td>
      <td>Print</td>
      <td></td>
      <td><code>K_?97</code></td>
      <td>Unknown Key 97</td>
    </tr>

    <tr>
      <td><code>K_EXEC</code></td>
      <td>Execute</td>
      <td></td>
      <td><code>K_?98</code></td>
      <td>Unknown Key 98</td>
    </tr>

    <tr>
      <td><code>K_HELP</code></td>
      <td>Help</td>
      <td></td>
      <td><code>K_?99</code></td>
      <td>Unknown Key 99</td>
    </tr>

    <tr>
      <td><code>K_SEPARATOR</code></td>
      <td>Separator</td>
      <td></td>
      <td><code>K_?9A</code></td>
      <td>Unknown Key 9A</td>
    </tr>

    <tr>
      <td><code>K_F13</code></td>
      <td>F13</td>
      <td></td>
      <td><code>K_?9B</code></td>
      <td>Unknown Key 9B</td>
    </tr>

    <tr>
      <td><code>K_F14</code></td>
      <td>F14</td>
      <td></td>
      <td><code>K_?9C</code></td>
      <td>Unknown Key 9C</td>
    </tr>

    <tr>
      <td><code>K_F15</code></td>
      <td>F15</td>
      <td></td>
      <td><code>K_?9D</code></td>
      <td>Unknown Key 9D</td>
    </tr>

    <tr>
      <td><code>K_F16</code></td>
      <td>F16</td>
      <td></td>
      <td><code>K_?9E</code></td>
      <td>Unknown Key 9E</td>
    </tr>

    <tr>
      <td><code>K_F17</code></td>
      <td>F17</td>
      <td></td>
      <td><code>K_?9F</code></td>
      <td>Unknown Key 9F</td>
    </tr>

    <tr>
      <td><code>K_F18</code></td>
      <td>F18</td>
      <td></td>
      <td><code>K_?A0</code></td>
      <td>Unknown Key A0</td>
    </tr>

    <tr>
      <td><code>K_F19</code></td>
      <td>F19</td>
      <td></td>
      <td><code>K_?A1</code></td>
      <td>Unknown Key A1</td>
    </tr>

    <tr>
      <td><code>K_F20</code></td>
      <td>F20</td>
      <td></td>
      <td><code>K_?A2</code></td>
      <td>Unknown Key A2</td>
    </tr>

    <tr>
      <td><code>K_F21</code></td>
      <td>F21</td>
      <td></td>
      <td><code>K_?A3</code></td>
      <td>Unknown Key A3</td>
    </tr>

    <tr>
      <td><code>K_F22</code></td>
      <td>F22</td>
      <td></td>
      <td><code>K_?A4</code></td>
      <td>Unknown Key A4</td>
    </tr>

    <tr>
      <td><code>K_F23</code></td>
      <td>F23</td>
      <td></td>
      <td><code>K_?A5</code></td>
      <td>Unknown Key A5</td>
    </tr>

    <tr>
      <td><code>K_F24</code></td>
      <td>F24</td>
      <td></td>
      <td><code>K_?A6</code></td>
      <td>Unknown Key A6</td>
    </tr>

    <tr>
      <td><code>K_KANJI?15</code></td>
      <td>Kanji Key #1</td>
      <td></td>
      <td><code>K_?A7</code></td>
      <td>Unknown Key A7</td>
    </tr>

    <tr>
      <td><code>K_KANJI?16</code></td>
      <td>Kanji Key #2</td>
      <td></td>
      <td><code>K_?A8</code></td>
      <td>Unknown Key A8</td>
    </tr>

    <tr>
      <td><code>K_KANJI?17</code></td>
      <td>Kanji Key #3</td>
      <td></td>
      <td><code>K_?A9</code></td>
      <td>Unknown Key A9</td>
    </tr>

    <tr>
      <td><code>K_KANJI?18</code></td>
      <td>Kanji Key #4</td>
      <td></td>
      <td><code>K_?AA</code></td>
      <td>Unknown Key AA</td>
    </tr>

    <tr>
      <td><code>K_KANJI?19</code></td>
      <td>Kanji Key #5</td>
      <td></td>
      <td><code>K_?AB</code></td>
      <td>Unknown Key AB</td>
    </tr>

    <tr>
      <td><code>K_KANJI?1C</code></td>
      <td>Kanji Key #6</td>
      <td></td>
      <td><code>K_?AC</code></td>
      <td>Unknown Key AC</td>
    </tr>

    <tr>
      <td><code>K_KANJI?1D</code></td>
      <td>Kanji Key #7</td>
      <td></td>
      <td><code>K_?AD</code></td>
      <td>Unknown Key AD</td>
    </tr>

    <tr>
      <td><code>K_KANJI?1E</code></td>
      <td>Kanji Key #8</td>
      <td></td>
      <td><code>K_?AE</code></td>
      <td>Unknown Key AE</td>
    </tr>

    <tr>
      <td><code>K_KANJI?1F</code></td>
      <td>Kanji Key #9</td>
      <td></td>
      <td><code>K_?AF</code></td>
      <td>Unknown Key AF</td>
    </tr>

    <tr>
      <td><code>K_oE0</code></td>
      <td>OEM Key E0</td>
      <td></td>
      <td><code>K_?B0</code></td>
      <td>Unknown Key B0</td>
    </tr>

    <tr>
      <td><code>K_oE1</code></td>
      <td>OEM Key E1</td>
      <td></td>
      <td><code>K_?B1</code></td>
      <td>Unknown Key B1</td>
    </tr>

    <tr>
      <td><code>K_oE3</code></td>
      <td>OEM Key E3</td>
      <td></td>
      <td><code>K_?B2</code></td>
      <td>Unknown Key B2</td>
    </tr>

    <tr>
      <td><code>K_oE4</code></td>
      <td>OEM Key E4</td>
      <td></td>
      <td><code>K_?B3</code></td>
      <td>Unknown Key B3</td>
    </tr>

    <tr>
      <td><code>K_oE6</code></td>
      <td>OEM Key E6</td>
      <td></td>
      <td><code>K_?B4</code></td>
      <td>Unknown Key B4</td>
    </tr>

    <tr>
      <td><code>K_oE9</code></td>
      <td>OEM Key E9</td>
      <td></td>
      <td><code>K_?B5</code></td>
      <td>Unknown Key B5</td>
    </tr>

    <tr>
      <td><code>K_oEA</code></td>
      <td>OEM Key EA</td>
      <td></td>
      <td><code>K_?B6</code></td>
      <td>Unknown Key B6</td>
    </tr>

    <tr>
      <td><code>K_oEB</code></td>
      <td>OEM Key EB</td>
      <td></td>
      <td><code>K_?B7</code></td>
      <td>Unknown Key B7</td>
    </tr>

    <tr>
      <td><code>K_oEC</code></td>
      <td>OEM Key EC</td>
      <td></td>
      <td><code>K_?B8</code></td>
      <td>Unknown Key B8</td>
    </tr>

    <tr>
      <td><code>K_oED</code></td>
      <td>OEM Key ED</td>
      <td></td>
      <td><code>K_?B9</code></td>
      <td>Unknown Key B9</td>
    </tr>

    <tr>
      <td><code>K_oEE</code></td>
      <td>OEM Key EE</td>
      <td></td>
      <td><code>K_?C1</code></td>
      <td>Unknown Key C1</td>
    </tr>

    <tr>
      <td><code>K_oEF</code></td>
      <td>OEM Key EF</td>
      <td></td>
      <td><code>K_?C2</code></td>
      <td>Unknown Key C2</td>
    </tr>

    <tr>
      <td><code>K_oF0</code></td>
      <td>OEM Key F0</td>
      <td></td>
      <td><code>K_?C3</code></td>
      <td>Unknown Key C3</td>
    </tr>

    <tr>
      <td><code>K_oF1</code></td>
      <td>OEM Key F1</td>
      <td></td>
      <td><code>K_?C4</code></td>
      <td>Unknown Key C4</td>
    </tr>

    <tr>
      <td><code>K_oF2</code></td>
      <td>OEM Key F2</td>
      <td></td>
      <td><code>K_?C5</code></td>
      <td>Unknown Key C5</td>
    </tr>

    <tr>
      <td><code>K_oF3</code></td>
      <td>OEM Key F3</td>
      <td></td>
      <td><code>K_?C6</code></td>
      <td>Unknown Key C6</td>
    </tr>

    <tr>
      <td><code>K_oF4</code></td>
      <td>OEM Key F4</td>
      <td></td>
      <td><code>K_?C7</code></td>
      <td>Unknown Key C7</td>
    </tr>

    <tr>
      <td><code>K_oF5</code></td>
      <td>OEM Key F5</td>
      <td></td>
      <td><code>K_?C8</code></td>
      <td>Unknown Key C8</td>
    </tr>

    <tr>
      <td><code>K_?00</code></td>
      <td>Unknown Key 00</td>
      <td></td>
      <td><code>K_?C9</code></td>
      <td>Unknown Key C9</td>
    </tr>

    <tr>
      <td><code>K_?05 or K_NPENTER</code></td>
      <td>Number Pad ENTER</td>
      <td></td>
      <td><code>K_?CA</code></td>
      <td>Unknown Key CA</td>
    </tr>

    <tr>
      <td><code>K_?06</code></td>
      <td>Unknown Key 06</td>
      <td></td>
      <td><code>K_?CB</code></td>
      <td>Unknown Key CB</td>
    </tr>

    <tr>
      <td><code>K_?07</code></td>
      <td>Unknown Key 07</td>
      <td></td>
      <td><code>K_?CC</code></td>
      <td>Unknown Key CC</td>
    </tr>

    <tr>
      <td><code>K_?0A</code></td>
      <td>Unknown Key 0A</td>
      <td></td>
      <td><code>K_?CD</code></td>
      <td>Unknown Key CD</td>
    </tr>

    <tr>
      <td><code>K_?0B</code></td>
      <td>Unknown Key 0B</td>
      <td></td>
      <td><code>K_?CE</code></td>
      <td>Unknown Key CE</td>
    </tr>

    <tr>
      <td><code>K_?0E</code></td>
      <td>Unknown Key 0E</td>
      <td></td>
      <td><code>K_?CF</code></td>
      <td>Unknown Key CF</td>
    </tr>

    <tr>
      <td><code>K_?0F</code></td>
      <td>Unknown Key 0F</td>
      <td></td>
      <td><code>K_?D0</code></td>
      <td>Unknown Key D0</td>
    </tr>

    <tr>
      <td><code>K_?1A</code></td>
      <td>Unknown Key 1A</td>
      <td></td>
      <td><code>K_?D1</code></td>
      <td>Unknown Key D1</td>
    </tr>

    <tr>
      <td><code>K_?3A</code></td>
      <td>Unknown Key 3A</td>
      <td></td>
      <td><code>K_?D2</code></td>
      <td>Unknown Key D2</td>
    </tr>

    <tr>
      <td><code>K_?3B</code></td>
      <td>Unknown Key 3B</td>
      <td></td>
      <td><code>K_?D3</code></td>
      <td>Unknown Key D3</td>
    </tr>

    <tr>
      <td><code>K_?3C</code></td>
      <td>Unknown Key 3C</td>
      <td></td>
      <td><code>K_?D4</code></td>
      <td>Unknown Key D4</td>
    </tr>

    <tr>
      <td><code>K_?3D</code></td>
      <td>Unknown Key 3D</td>
      <td></td>
      <td><code>K_?D5</code></td>
      <td>Unknown Key D5</td>
    </tr>

    <tr>
      <td><code>K_?3E</code></td>
      <td>Unknown Key 3E</td>
      <td></td>
      <td><code>K_?D6</code></td>
      <td>Unknown Key D6</td>
    </tr>

    <tr>
      <td><code>K_?3F</code></td>
      <td>Unknown Key 3F</td>
      <td></td>
      <td><code>K_?D7</code></td>
      <td>Unknown Key D7</td>
    </tr>

    <tr>
      <td><code>K_?40</code></td>
      <td>Unknown Key 40</td>
      <td></td>
      <td><code>K_?D8</code></td>
      <td>Unknown Key D8</td>
    </tr>

    <tr>
      <td><code>K_?5B</code></td>
      <td>Unknown Key 5B</td>
      <td></td>
      <td><code>K_?D9</code></td>
      <td>Unknown Key D9</td>
    </tr>

    <tr>
      <td><code>K_?5C</code></td>
      <td>Unknown Key 5C</td>
      <td></td>
      <td><code>K_?DA</code></td>
      <td>Unknown Key DA</td>
    </tr>

    <tr>
      <td><code>K_?5D</code></td>
      <td>Unknown Key 5D</td>
      <td></td>
      <td><code>K_oDF</code></td>
      <td>Unknown Key DF</td>
    </tr>

    <tr>
      <td><code>K_?5E</code></td>
      <td>Unknown Key 5E</td>
      <td></td>
      <td><code>K_?E5</code></td>
      <td>Unknown Key E5</td>
    </tr>

    <tr>
      <td><code>K_?5F</code></td>
      <td>Unknown Key 5F</td>
      <td></td>
      <td><code>K_?E7</code></td>
      <td>Unknown Key E7</td>
    </tr>

    <tr>
      <td><code>K_?88</code></td>
      <td>Unknown Key 88</td>
      <td></td>
      <td><code>K_?E8</code></td>
      <td>Unknown Key E8</td>
    </tr>

    <tr>
      <td><code>K_?89</code></td>
      <td>Unknown Key 89</td>
      <td></td>
      <td><code>K_?F6</code></td>
      <td>Unknown Key F6</td>
    </tr>

    <tr>
      <td><code>K_?8A</code></td>
      <td>Unknown Key 8A</td>
      <td></td>
      <td><code>K_?F7</code></td>
      <td>Unknown Key F7</td>
    </tr>

    <tr>
      <td><code>K_?8B</code></td>
      <td>Unknown Key 8B</td>
      <td></td>
      <td><code>K_?F8</code></td>
      <td>Unknown Key F8</td>
    </tr>

    <tr>
      <td><code>K_?8C</code></td>
      <td>Unknown Key 8C</td>
      <td></td>
      <td><code>K_?F9</code></td>
      <td>Unknown Key F9</td>
    </tr>

    <tr>
      <td><code>K_?8D</code></td>
      <td>Unknown Key 8D</td>
      <td></td>
      <td><code>K_?FA</code></td>
      <td>Unknown Key FA</td>
    </tr>

    <tr>
      <td><code>K_?8E</code></td>
      <td>Unknown Key 8E</td>
      <td></td>
      <td><code>K_?FB</code></td>
      <td>Unknown Key FB</td>
    </tr>

    <tr>
      <td><code>K_?8F</code></td>
      <td>Unknown Key 8F</td>
      <td></td>
      <td><code>K_?FC</code></td>
      <td>Unknown Key FC</td>
    </tr>

    <tr>
      <td><code>K_?92</code></td>
      <td>Unknown Key 92</td>
      <td></td>
      <td><code>K_?FD</code></td>
      <td>Unknown Key FD</td>
    </tr>

    <tr>
      <td><code>K_?94</code></td>
      <td>Unknown Key 94</td>
      <td></td>
      <td><code>K_?FE</code></td>
      <td>Unknown Key FE</td>
    </tr>

    <tr>
      <td><code>K_?95</code></td>
      <td>Unknown Key 95</td>
      <td></td>
      <td><code>K_?FF</code></td>
      <td>Unknown Key FF</td>
    </tr>
  </tbody>
</table>

<p>The following table lists all of the reserved virtual key codes that will not be recognised even if they are on your keyboard,
although they are included in Keyman for completeness:</p>

<table class='display'>
  <tbody>
    <tr>
      <th>Key Code</th>
      <th>Key Name</th>
    </tr>

    <tr>
      <td><code>K_SHIFT</code></td>
      <td>Shift</td>
    </tr>

    <tr>
      <td><code>K_CONTROL</code></td>
      <td>Control</td>
    </tr>

    <tr>
      <td><code>K_ALT</code></td>
      <td>Alt</td>
    </tr>

    <tr>
      <td><code>K_CAPS</code></td>
      <td>Caps Lock</td>
    </tr>

    <tr>
      <td><code>K_NUMLOCK</code></td>
      <td>Num Lock</td>
    </tr>

    <tr>
      <td><code>K_SCROLL</code></td>
      <td>Scroll Lock</td>
    </tr>

    <tr>
      <td><code>K_LBUTTON</code></td>
      <td>Left Mouse Button</td>
    </tr>

    <tr>
      <td><code>K_MBUTTON</code></td>
      <td>Middle Mouse Button</td>
    </tr>

    <tr>
      <td><code>K_RBUTTON</code></td>
      <td>Right Mouse Button</td>
    </tr>

    <tr>
      <td><code>K_CANCEL</code></td>
      <td>Ctrl+Break</td>
    </tr>

    <tr>
      <td><code>K_PAUSE</code></td>
      <td>Pause</td>
    </tr>

    <tr>
      <td><code>K_PRTSCN</code></td>
      <td>Print Screen</td>
    </tr>
  </tbody>
</table>

<h2>Examples</h2>

<pre><code>c override default bksp behaviour for 'ng'
'ng' + [K_BKSP] > nul

+ [SHIFT CTRL K_A] > 'à'
+ [RALT K_E] > 'è'
</code></pre>

<p>Virtual keys should not be used in the output as they will only work on Windows applications and are not portable.</p>
    
<h2>Virtual keys and touch layouts</h2>

<p>Touch layouts do not have physical keyboards, so the concept of virtual keys is in some ways less relevant. However, for 
compatibility and ease of reference, Keyman maintains a mapping between the <a href='us-english'>US English</a> virtual key codes
and the characters emitted by these keys. If a touch key is given one of these virtual keys (e.g. <code>K_A</code>), then the corresponding
US English character (<code>a</code>) will be emitted, if no rule is provided to override that.</p>

<p>Each touch key must be given an identifying key code which is unique to the key layer. Key codes by and large correspond to the virtual
key codes used when creating a keyboard program for a desktop keyboard, and should start with <code>K_</code>, for keys mapped to standard Keyman
virtual key names, e.g. <code>K_HYPHEN</code>, and <code>T_</code> or <code>U_</code> for user-defined names, e.g. <code>T_ZZZ</code>. If keyboard rules exist matching the key code in
context, then the output from the key will be determined by the processing of those rules. It is usually best to include explicit rules
to manage the output from each key, but if no rules matching the key code are included in the keyboard program, and the key code
matches the pattern <code>U_<var>xxxx</var></code> (where <code><var>xxxx</var></code> is a 4-digit uppercase hex string), then the Unicode character <code>U+<var>xxxx</var></code> will be output. The key
code is always required, and a default code will usually be generated automatically by Keyman Developer 9.</p>

<div class="itemizedlist">
  <ul type="opencircle">
    <li class="c1">
      <p><code><var>K_xxxx</var></code> is used for a standard Keyman Desktop key name, e.g. <code>K_W</code>, <code>K_ENTER</code>. You cannot make up your own <code>K_<var>xxxx</var></code> names. Many of
      the <code>K_</code> ids have overloaded output behaviour, for instance, if no rule is matched for <code>K_W</code>, Keyman will output 'w' when it
      is touched. The standard key names are listed above. Typically, you would use only the "common" virtual key codes.</p>
    </li>

    <li class="c1">
      <p><code>T_<var>xxxx</var></code> is used for any user defined names, e.g. <code>T_SCHWA</code>. If you wanted to use it, <code>T_ENTER</code> would also be valid. If no rule
      matches it, the key will have no output behaviour.</p>
    </li>

    <li class="c1">
      <p><code>U_<var>####</var></code> is used as a shortcut for a key that will output that single Unicode value, if no rule matches it. This is similar to
      the overloaded behaviour for <code>K_</code> ids. Thus <code><var>####</var></code> must be a valid hexadecimal value. E.g. <code>U_0259</code> would generate a schwa if no rule
      matches. It is still valid to have a rule such as <code>+ [U_0259] > ...</code></p>
    </li>
  </ul>
</div>

<p>Any key can be used to switch keyboard layers (see below), but the following layer-switching key codes have been added for switching
to some commonly used secondary layers:</p>

<table class='display'>
  <colgroup>
    <col>
    <col>
  </colgroup>

  <thead>
    <tr>
      <th align="left">Identifier</th>
      <th align="left">Value</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td align="left"><code>K_NUMERALS</code></td>
      <td align="left"><code>261</code></td>
    </tr>

    <tr>
      <td align="left"><code>K_SYMBOLS</code></td>
      <td align="left"><code>262</code></td>
    </tr>

    <tr>
      <td align="left"><code>K_CURRENCIES</code></td>
      <td align="left"><code>263</code></td>
    </tr>

    <tr>
      <td align="left"><code>K_SHIFTED</code></td>
      <td align="left"><code>264</code></td>
    </tr>

    <tr>
      <td align="left"><code>K_ALTGR</code></td>
      <td align="left"><code>265</code></td>
    </tr>
  </tbody>
</table>
