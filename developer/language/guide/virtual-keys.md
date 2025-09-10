---
title: Keys, Virtual Keys and Virtual Character Keys
---

A [rule](rules) is made up of three parts:

```keyman
context + keystroke > output
```

The *keystroke* part of the rule may contain a Unicode character representing
the value on the key cap of the base keyboard, a virtual key, a virtual
character key, or one of the following statements:

[`any()` statement](../reference/any "any() statement")
:   Matches on an array of characters

[`outs()` statement](../reference/outs "outs() statement")
:   Outputs an array of characters

Only a single character, statement, virtual character key or virtual key is
allowed in the keystroke part of the rule.

## Four ways to express a keystroke

The meaning of the _keystroke_ part is affected by the
[`&mnemoniclayout`](../reference/mnemoniclayout) system store value. If this
store is not present, or its value is `0`, then the keyboard is said to be
_positional_. If the store value is `1`, then the keyboard is _mnemonic_.

For hardware keyboards, the keystroke part of a rule can be expressed in four
different ways:

With a _character code_, in a _positional_ keyboard.

: The key definition references the value on the key cap of a US English
  hardware keyboard. Caps Lock and Shift are accounted for (see
  [issue #5460](https://github.com/keymanapp/keyman/issues/5460#issuecomment-966602098)
  for how to use this correctly with KeymanWeb, using [`&CasedKeys`](#cased-keys)).

    ```
    c matches NCAPS SHIFT C01 (aka NCAPS SHIFT K_A on US keyboard)
    c also matches CAPS C01.
    + 'A' >
    ```

With a _virtual key_, in a _positional_ keyboard.

: The key definition references a key by its exact location on a US English
  hardware keyboard, or by an ISO9995 code. [More info](#using-virtual-keys)

   ```
   c matches SHIFT C01 (aka SHIFT K_A on US keyboard)
   c caps lock is ignored, unless you define &CasedKeys
   + [SHIFT K_A] >

   c C01 is an alias for K_A
   + [SHIFT C01] >

   c Explicitly specify Caps Lock with NCAPS and CAPS
   + [NCAPS SHIFT K_A] >
   + [CAPS K_A] >
   ```

With a _character code_, in a _mnemonic_ keyboard.

: This matches the key and modifier state that generates this character on the
  user's base keyboard, accounting for any modifier that might be used to
  generate the character, including Caps Lock.

    ```
    c matches CAPS+D01 or SHIFT+D01 on US English
    c matches CAPS+C01 or SHIFT+C01 on French AZERTY
    + 'Q' >

    c matches SHIFT+K_LBRKT (D11) on US English
    c matches AltGr+E04 on French AZERTY
    + '{' >
    ```

With a virtual character key, in a mnemonic keyboard.

: This matches the key that generates this character on the user's base
  keyboard, along with the specified modifier. [More info](#virtual-character-keys)

    ```
    c matches SHIFT+c on user's base keyboard (i.e. SHIFT B03 on US)
    + [SHIFT 'c'] >

    c matches SHIFT+key that generates comma, i.e. SHIFT B08 on US
    c which means '<' on US English but on French (SHIFT B07) means '?'
    + [SHIFT ','] >
    ```

## Virtual keys {#using-virtual-keys}

Every key on the keyboard is identified by a virtual key code. Virtual
keys are identified by square brackets `[ ]` containing a combination of
zero or more shift-key codes and a virtual key code.

Virtual keys are only used in the key section of a rule. Virtual keys are not
valid in the context of a rule, as the context consists solely of
characters, nor in the output of the rule (note: Keyman for Windows did
unofficially support output of virtual keys until version 14.0, but it never
worked reliably).

A typical use of virtual keys is to make rules to recognise
non-character keys, such as <kbd>Backspace</kbd> or <kbd>Tab</kbd>; for
example:

```keyman
+ [K_TAB] > "You pressed Tab"
```

Virtual keys are also commonly used to recognise <kbd>Ctrl</kbd> or
<kbd>Alt</kbd> key combinations, like this:

```keyman
+ [CTRL ALT K_A] > "You pressed Ctrl+Alt+A"
```

While Keyman virtual keys are closely related to the Windows virtual keys, there
are differences, and the two cannot be used completely interchangeably. Most of
the following discussion relates to physical keyboards.

The key codes refer to the actual key at the given position on a standard
US-English keyboard.

The Right <kbd>Alt</kbd> key has traditionally been used on European keyboards
as an additional modifier state, usually known as <kbd>AltGr</kbd>. The end user
of Keyman keyboards can select an option to emulate Right <kbd>Alt</kbd> with
<kbd>Ctrl</kbd>+<kbd>Alt</kbd>, as Right <kbd>Alt</kbd> is not available on some
notebook keyboards. Thus, it is wise to avoid using
<kbd>Ctrl</kbd>+<kbd>Alt</kbd> combinations and Right <kbd>Alt</kbd>
combinations in the same keyboard.

Additionally, it is useful to keep in mind that when this emulation is active,
it is not possible to recognise the <kbd>Ctrl</kbd>+Right <kbd>Alt</kbd>
combination, as this is overridden by <kbd>Ctrl</kbd>+<kbd>Alt</kbd> (producing
Right <kbd>Alt</kbd>). This can have ramifications in keyboards such as German,
which makes use of the <kbd>Ctrl</kbd>+<kbd>AltGr</kbd> combination.

## Control keys

The keys <kbd>Backspace</kbd>, <kbd>Enter</kbd>, and <kbd>Tab</kbd> have additional
nuance. See [Control keys and control characters](control-keys) for more detail.

## Cased Keys

The [`&CasedKeys` system store](../reference/casedkeys) lets you define a set of
keys on the keyboard that are affected by Caps Lock state. When present, the
compiler will rewrite rules that contain the affected keys to avoid having to
repeat rules. For example, you may have the following rules:

```keyman
store(&CasedKeys) [K_A]
+ [K_A] > 'α'
+ [SHIFT K_A] > 'Α'
```

These would be replaced by the compiler with:

```keyman
store(&CasedKeys) [K_A]
+ [NCAPS K_A] > 'α'
+ [SHIFT CAPS K_A] > 'α'
+ [CAPS K_A] > 'Α'
+ [SHIFT NCAPS K_A] > 'Α'
```

The presence of this store also ensures that Caps Lock is handled correctly for
KeymanWeb keyboards (see
[#5460](https://github.com/keymanapp/keyman/issues/5460#issuecomment-966602098)).

## Virtual character keys {#virtual-character-keys}

Keyman 6.0 introduced a new feature known as [mnemonic layouts](../reference/mnemoniclayout "mnemoniclayout system store"){.link}.
This feature requires that the "white" alphabet/numeric/punctuation keys
in the primary section of the keyboard are referenced by the character
on the key cap rather than the key position (as with non-mnemonic
layouts). However, all other keys on the keyboard should be referenced
as normal.

It is important to remember that you can choose any character that
appears on a given keycap, not just the unshifted character. For
instance, if you use `['A']`, you will be matching the unshifted <kbd>A</kbd> key;
you must still explicitly state the shift state for the key.

## Reference {#reference}

The general format for a virtual character key is:

```keyman
[ shift-codes 'c' ]
```

where `'c'` is any character on the keyboard. This can include
characters on European keyboards.

The general format for a virtual key is:

```keyman
[ shift-codes key-code ]
```

### Key Codes

Key codes can start with `K_`, `T_`, `U_` or can be an ISO9995 code.

`K_xxxx` codes
:   These are used for a standard Keyman Desktop key name, e.g. `K_W`,
    `K_ENTER`. You cannot make up your own `K_xxxx` names. Many of the
    `K_` ids have overloaded output behaviour, for instance, if no rule
    is matched for `K_W`, Keyman will output `w` when the key is pressed
    or touched. The standard key names are listed below. Typically, you
    would use only the "common" virtual key codes.

`T_xxxx` codes
:   These are used for any user defined names, e.g. `T_SCHWA`. If you
    wanted to use it, `T_ENTER` would also be valid. If no rule matches
    it, the key will have no output behaviour. These keys are only valid
    for touch layouts.

`U_####[_....]` codes
:   These are used as a shortcut for a key that will output a string of Unicode
    values, if no rule matches the key. (In Keyman 14 and earlier, only a single
    Unicode value was permitted.) This is similar to the overloaded behaviour
    for `K_` ids. Thus `####` must be valid Unicode codepoint values, in the
    range `0020-10FFFF`, with sequences separated by `_`. E.g. `U_0259` would
    generate a schwa if no rule matches. It is still valid to have a rule such
    as `+ [U_0259] > ...`. These codes are only valid for touch layouts.
    > [!Note]
    > For characters outside the BMP, use Unicode codepoints, not surrogate pairs (e.g. use `U_10000`, never `U_D800_DC00`).

ISO9995 codes
:   These codes refer to keys by position on a standard 101-105 key keyboard.
    See the tables below for the mappings that Keyman recognises. For example,
    `C02` is equivalent to `K_S`.

### Shift Codes
The possible shift codes are:

| Shift Key                                                                 | Code    |
|---------------------------------------------------------------------------|---------|
| Either <kbd>Shift</kbd> key                                                          | `SHIFT` |
| Either <kbd>Control</kbd> key                                                        | `CTRL`  |
| Left <kbd>Control</kbd> key                                                          | `LCTRL` |
| Right <kbd>Control</kbd> key (not found on all keyboards)                            | `RCTRL` |
| Either <kbd>Alt</kbd> key                                                            | `ALT`   |
| Left <kbd>Alt</kbd> key                                                              | `LALT`  |
| Right <kbd>Alt</kbd> key or <kbd>AltGr</kbd> on European keyboards (not found on all keyboards) | `RALT`  |
| <kbd>Caps Lock</kbd> on                                                              | `CAPS`  |
| <kbd>Caps Lock</kbd> off                                                             | `NCAPS` |

#### Using Right Alt / AltGr {#using-right-alt-altgr .title}

A caveat for using `RALT`: When using many European keyboards, Windows
internally translates the Right <kbd>Alt</kbd> (or <kbd>AltGr</kbd>) key to `LCTRL`+`RALT`.
Along with Keyman's option to treat <kbd>Control</kbd>+<kbd>Alt</kbd> in the same manner as
Right <kbd>Alt</kbd>, this means that you should avoid using more than one of
the following shift combinations in the same keyboard:

| Shift Code   |
|--------------|
| `RALT`       |
| `CTRL ALT`   |
| `CTRL RALT`  |
| `LCTRL ALT`  |
| `LCTRL RALT` |

#### Caps Lock {#caps-lock}

If neither `CAPS` or `NCAPS` is specified, then the <kbd>Caps Lock</kbd> key is
ignored. This means that if you do have a rule that uses `CAPS`, you
should make sure that no other rule references that key without `NCAPS` or
`CAPS` specified. In the following example, the `[CAPS K_A]` rule will
never be matched, because the `[K_A]` rule does not take <kbd>Caps Lock</kbd> into
account:

```keyman
+ [K_A] > 'small a'   c WRONG!
+ [CAPS K_A] > 'BIG A'
```

Instead, you should use:

```keyman
+ [NCAPS K_A] > 'small a'   c Right!
+ [CAPS K_A] > 'BIG A'
```

<kbd>Caps Lock</kbd> is also controlled by [Caps lock stores](../reference/caps).

### Virtual Key Visual Layout

<style>
.keyboard {
  text-align: left;
  font-size: 16px;
  font-family: sans-serif;
  white-space: nowrap;
  overflow-x: auto;
}

.keyboard--row {
  display: block;
  height: 3em;
  margin: 0.5em;
}

.keyboard--row > * {
  display: inline-block;
  box-sizing: border-box;
  position: relative;
  cursor: pointer;
  -webkit-user-select: none;

  border-radius: 0.3em;
  margin: 0.06em;
  padding: 0 0.2em;
  width: 3.3em;
  height: 100%;
}

.key--w3 {
  width: 4.6em;
}

.key--w4 {
  width: 5.9em;
}

.key--w5 {
  width: 6.4em;
}

.key--w6 {
  width: 6.5em;
}

.key--space {
  width: 19em;
}

.key--bottom-left > * {
  position: absolute;
  text-align: left;
  bottom: 0.4em;
  left: 0.4em;
}

.key--bottom-right > * {
  position: absolute;
  text-align: right;
  bottom: 0.4em;
  right: 0.4em;
}

.key--word > * {
  font-size: 0.8em;
}

.key--letter > div {
  font-size: 0.7em;
  font-family: Consolas;
  text-align: right;
  float: right;
  clear: right;
}

.key--letter > div.key--letter-sm {
  padding-top: 0.15em;
  font-size: 0.6em;
}

.key--letter > div:first-child {
  margin-top: 1.8em;
}

.key--letter > span {
  font-size: 0.9em;
  display: block;
  position: absolute;
  left: 0.2em;
  text-align: left;
}

.key--letter > span:last-child {
  top: 1.3em;
}

/* Colors */

.keyboard.keyboard--dark .keyboard--row > * {
  background: #333;
  color: #eee;
  border: 1px solid #444;
  box-shadow: 0 0.2em 0 0.05em #222;
  border-bottom-color: #555;
}

.keyboard.keyboard--dark .keyboard--row > .key--letter {
  background: #555;
  border-color: #666;
  box-shadow: 0 0.2em 0 0.05em #444;
  border-bottom-color: #707070;
}

.keyboard.keyboard--dark .keyboard--row > .key--extra {
  background: #336;
  border-color: #447;
  box-shadow: 0 0.2em 0 0.05em #224;
  border-bottom-color: #557;
}

.keyboard.keyboard--dark .key--letter > span {
  color: orange;
}

.keyboard.keyboard--dark .key--letter span.french {
  color: yellow
}

.keyboard.keyboard--dark .key--letter span.german {
  color: red
}

.keyboard.keyboard--dark .key--letter span.brazil {
  color: green
}

/* Light keyboard */

.keyboard.keyboard--light .keyboard--row > * {
  background: #ccc;
  color: #111;
  border: 1px solid #888;
  box-shadow: 0 0.2em 0 0.05em #666;
  border-bottom-color: #ddd;
}

.keyboard.keyboard--light .keyboard--row > .key--letter {
  background: #f0f0f0;
  border-color: #888;
  box-shadow: 0 0.2em 0 0.05em #666;
  border-bottom-color: #ddd;
}

.keyboard.keyboard--light .keyboard--row > .key--extra {
  background: #ccf;
  border-color: #88c;
  box-shadow: 0 0.2em 0 0.05em #668;
  border-bottom-color: #99d;
}

.keyboard.keyboard--light .key--letter > span {
  color: #884400;
}

.keyboard.keyboard--light .key--letter span.french {
  color: #888800
}

.keyboard.keyboard--light .key--letter span.german {
  color: red
}

.keyboard.keyboard--light .key--letter span.brazil {
  color: green
}
</style>
<div class="keyboard keyboard--light">
  <div class="keyboard--row">
    <div class="key--letter"><div>E00</div><div class='key--letter-sm'>K_BKQUOTE</div><span>~</span><span>`</span></div>
    <div class="key--letter"><div>E01</div><div>K_1</div><span>!</span><span>1</span></div>
    <div class="key--letter"><div>E02</div><div>K_2</div><span>@</span><span>2</span></div>
    <div class="key--letter"><div>E03</div><div>K_3</div><span>#</span><span>3</span></div>
    <div class="key--letter"><div>E04</div><div>K_4</div><span>$</span><span>4</span></div>
    <div class="key--letter"><div>E05</div><div>K_5</div><span>%</span><span>5</span></div>
    <div class="key--letter"><div>E06</div><div>K_6</div><span>^</span><span>6</span></div>
    <div class="key--letter"><div>E07</div><div>K_7</div><span>&</span><span>7</span></div>
    <div class="key--letter"><div>E08</div><div>K_8</div><span>*</span><span>8</span></div>
    <div class="key--letter"><div>E09</div><div>K_9</div><span>(</span><span>9</span></div>
    <div class="key--letter"><div>E10</div><div>K_0</div><span>)</span><span>0</span></div>
    <div class="key--letter"><div>E11</div><div class='key--letter-sm'>K_HYPHEN</div><span>_</span><span>-</span></div>
    <div class="key--letter"><div>E12</div><div>K_EQUAL</div><span>+</span><span>=</span></div>
    <div class="key--bottom-right key--word key--w4"><span>Backspace</span></div>
  </div>
  <div class="keyboard--row">
    <div class="key--bottom-left key--word key--w3"><span>Tab</span></div>
    <div class="key--letter"><div>D01</div><div>K_Q</div><span>Q</span><span class='french'>A</span></div>
    <div class="key--letter"><div>D02</div><div>K_W</div><span>W</span><span class='french'>Z</span></div>
    <div class="key--letter"><div>D03</div><div>K_E</div><span>E</span><span></span></div>
    <div class="key--letter"><div>D04</div><div>K_R</div><span>R</span><span></span></div>
    <div class="key--letter"><div>D05</div><div>K_T</div><span>T</span><span></span></div>
    <div class="key--letter"><div>D06</div><div>K_Y</div><span>Y</span><span class='german'>Z</span></div>
    <div class="key--letter"><div>D07</div><div>K_U</div><span>U</span><span></span></div>
    <div class="key--letter"><div>D08</div><div>K_I</div><span>I</span><span></span></div>
    <div class="key--letter"><div>D09</div><div>K_O</div><span>O</span><span></span></div>
    <div class="key--letter"><div>D10</div><div>K_P</div><span>P</span><span></span></div>
    <div class="key--letter"><div>D11</div><div>K_LBRKT</div><span>{</span><span>[</span></div>
    <div class="key--letter"><div>D12</div><div>K_RBRKT</div><span>}</span><span>]</span></div>
    <div class="key--letter key--w3"><div>D13</div><div>K_BKSLASH</div><span>|</span><span>\</span></div>
  </div>
  <div class="keyboard--row">
    <div class="key--bottom-left key--word key--w6"><span>Caps Lock</span></div>
    <div class="key--letter"><div>C01</div><div>K_A</div><span>A</span><span class='french'>Q</span></div>
    <div class="key--letter"><div>C02</div><div>K_S</div><span>S</span><span></span></div>
    <div class="key--letter"><div>C03</div><div>K_D</div><span>D</span><span></span></div>
    <div class="key--letter"><div>C04</div><div>K_F</div><span>F</span><span></span></div>
    <div class="key--letter"><div>C05</div><div>K_G</div><span>G</span><span></span></div>
    <div class="key--letter"><div>C06</div><div>K_H</div><span>H</span><span></span></div>
    <div class="key--letter"><div>C07</div><div>K_J</div><span>J</span><span></span></div>
    <div class="key--letter"><div>C08</div><div>K_K</div><span>K</span><span></span></div>
    <div class="key--letter"><div>C09</div><div>K_L</div><span>L</span><span></span></div>
    <div class="key--letter"><div>C10</div><div>K_COLON</div><span>: <span class='french'>M</span></span><span>;</span></div>
    <div class="key--letter"><div>C11</div><div>K_QUOTE</div><span>"</span><span>'</span></div>
    <div class="key--bottom-right key--word key--w5"><span>Enter</span></div>
  </div>
  <div class="keyboard--row">
    <div class="key--bottom-left key--word key--w3"><span>Shift</span></div>
    <div class="key--letter key--extra"><div>B00</div><div>K_oE2</div><span>|</span><span>\</span></div>
    <div class="key--letter"><div>B01</div><div>K_Z</div><span>Z <span class='german'>Y</span></span><span class='french'>W</span></div>
    <div class="key--letter"><div>B02</div><div>K_X</div><span>X</span><span></span></div>
    <div class="key--letter"><div>B03</div><div>K_C</div><span>C</span><span></span></div>
    <div class="key--letter"><div>B04</div><div>K_V</div><span>V</span><span></span></div>
    <div class="key--letter"><div>B05</div><div>K_B</div><span>B</span><span></span></div>
    <div class="key--letter"><div>B06</div><div>K_N</div><span>N</span><span></span></div>
    <div class="key--letter"><div>B07</div><div>K_M</div><span>M</span><span></span></div>
    <div class="key--letter"><div>B08</div><div>K_COMMA</div><span>&lt;</span><span>,</span></div>
    <div class="key--letter"><div>B09</div><div class='key--letter-sm'>K_PERIOD</div><span>&gt;</span><span>.</span></div>
    <div class="key--letter"><div>B10</div><div>K_SLASH</div><span>?</span><span>/</span></div>
    <div class="key--letter key--extra"><div>B11</div><div>K_?C1</div><span class='brazil'>?</span><span class='brazil'>/</span></div>
    <div class="key--bottom-right key--word key--w3"><span>Shift</span></div>
  </div>
  <div class="keyboard--row">
    <div class="key--bottom-left key--word key--w3"><span>Ctrl</span></div>
    <div class="key--bottom-left key--word key--w3"><span>Win (Cmd)</span></div>
    <div class="key--bottom-right key--word key--w3"><span>Alt (Option)</span></div>
    <div class="key--letter key--right key--space"><div>A03</div><div>K_SPACE</div><span>&nbsp;</span></div>
    <div class="key--bottom-right key--word key--w3"><span>Alt (Option)</span></div>
    <div class="key--bottom-right key--word key--w3"><span>Win (Cmd)</span></div>
    <div class="key--bottom-right key--word key--w3"><span>Context</span></div>
    <div class="key--bottom-right key--word key--w3"><span>Ctrl</span></div>
  </div>
</div>

Notes:
* This layout shows US English "QWERTY", with a few of the variations for French
  "AZERTY" and German "QWERTZ". It does not show variations for punctuation and
  some additional alphabetic letters, just to maintain clarity.
* The keys shown in blue are not present on all keyboards:
  * Left hand blue key `[K_oE2]` / `[B00]` is found on European layouts, among others.
  * Right hand blue key `[K_?C1]` / `[B11]` is found on Brazilian Portuguese ABNT layout.


### Common virtual key codes {#common-virtual-key-codes}

The following table lists all of the common virtual key codes:

| Key Code    | ISO9995 | Key Name |     | Key Code    | ISO9995 | Key Name                |
|-------------|---------|----------|-----|-------------|---------|-------------------------|
| `K_SPACE`   | `A03`   |          |     | `K_oE2`     | `B00`   | Key right of left-shift (European layouts)  |
| `K_A`       | `C01`   | A        |     | `K_BKSP`    | `E14`   | Backspace               |
| `K_B`       | `B05`   | B        |     | `K_TAB`     | `D00`   | Tab                     |
| `K_C`       | `B03`   | C        |     | `K_ENTER`   | `C13`   | Enter                   |
| `K_D`       | `C03`   | D        |     | `K_ESC`     |         | Escape                  |
| `K_E`       | `D03`   | E        |     | `K_LEFT`    |         | Left Arrow              |
| `K_F`       | `C04`   | F        |     | `K_UP`      |         | Up Arrow                |
| `K_G`       | `C05`   | G        |     | `K_RIGHT`   |         | Right Arrow             |
| `K_H`       | `C06`   | H        |     | `K_DOWN`    |         | Down Arrow              |
| `K_I`       | `D08`   | I        |     | `K_PGUP`    |         | Page Up                 |
| `K_J`       | `C07`   | J        |     | `K_PGDN`    |         | Page Down               |
| `K_K`       | `C08`   | K        |     | `K_HOME`    |         | Home                    |
| `K_L`       | `C09`   | L        |     | `K_END`     |         | End                     |
| `K_M`       | `B07`   | M        |     | `K_INS`     |         | Insert                  |
| `K_N`       | `B06`   | N        |     | `K_DEL`     |         | Delete                  |
| `K_O`       | `D09`   | O        |     | `K_F1`      |         | F1                      |
| `K_P`       | `D10`   | P        |     | `K_F2`      |         | F2                      |
| `K_Q`       | `D01`   | Q        |     | `K_F3`      |         | F3                      |
| `K_R`       | `D04`   | R        |     | `K_F4`      |         | F4                      |
| `K_S`       | `C02`   | S        |     | `K_F5`      |         | F5                      |
| `K_T`       | `D05`   | T        |     | `K_F6`      |         | F6                      |
| `K_U`       | `D07`   | U        |     | `K_F7`      |         | F7                      |
| `K_V`       | `B04`   | V        |     | `K_F8`      |         | F8                      |
| `K_W`       | `D02`   | W        |     | `K_F9`      |         | F9                      |
| `K_X`       | `B02`   | X        |     | `K_F10`     |         | F10                     |
| `K_Y`       | `D06`   | Y        |     | `K_F11`     |         | F11                     |
| `K_Z`       | `B01`   | Z        |     | `K_F12`     |         | F12                     |
| `K_1`       | `E01`   | 1        |     | `K_KP5`     |         | Key Pad 5 (Numlock off) |
| `K_2`       | `E02`   | 2        |     | `K_NP0`     |         | Number Pad 0            |
| `K_3`       | `E03`   | 3        |     | `K_NP1`     |         | Number Pad 1            |
| `K_4`       | `E04`   | 4        |     | `K_NP2`     |         | Number Pad 2            |
| `K_5`       | `E05`   | 5        |     | `K_NP3`     |         | Number Pad 3            |
| `K_6`       | `E06`   | 6        |     | `K_NP4`     |         | Number Pad 4            |
| `K_7`       | `E07`   | 7        |     | `K_NP5`     |         | Number Pad 5            |
| `K_8`       | `E08`   | 8        |     | `K_NP6`     |         | Number Pad 6            |
| `K_9`       | `E09`   | 9        |     | `K_NP7`     |         | Number Pad 7            |
| `K_0`       | `E10`   | 0        |     | `K_NP8`     |         | Number Pad 8            |
| `K_BKQUOTE` | `E00`   | &#x60;   |     | `K_NP9`     |         | Number Pad 9            |
| `K_HYPHEN`  | `E11`   | \-       |     | `K_NPSTAR`  |         | Number Pad \*           |
| `K_EQUAL`   | `E12`   | =        |     | `K_NPPLUS`  |         | Number Pad +            |
| `K_LBRKT`   | `D11`   | \[       |     | `K_NPMINUS` |         | Number Pad -            |
| `K_RBRKT`   | `D12`   | \]       |     | `K_NPDOT`   |         | Number Pad .            |
| `K_BKSLASH` | `D13`   | \\       |     | `K_NPSLASH` |         | Number Pad /            |
| `K_COLON`   | `C10`   | ;        |     |             |         |                         |
| `K_QUOTE`   | `C11`   | '        |     | `K_?C1`     | `B11`   | ABNT2 Brazilian Portuguese key left of right shift |
| `K_COMMA`   | `B08`   | ,        |     |             |         |                         |
| `K_PERIOD`  | `B09`   | .        |     |             |         |                         |
| `K_SLASH`   | `B10`   | /        |     |             |         |                         |

The following table lists all of the less common virtual key codes:

| Key Code             | Key Name         |     | Key Code | Key Name       |
|----------------------|------------------|-----|----------|----------------|
| `K_SEL`              | Select           |     | `K_?96`  | Unknown Key 96 |
| `K_PRINT`            | Print            |     | `K_?97`  | Unknown Key 97 |
| `K_EXEC`             | Execute          |     | `K_?98`  | Unknown Key 98 |
| `K_HELP`             | Help             |     | `K_?99`  | Unknown Key 99 |
| `K_SEPARATOR`        | Separator        |     | `K_?9A`  | Unknown Key 9A |
| `K_F13`              | F13              |     | `K_?9B`  | Unknown Key 9B |
| `K_F14`              | F14              |     | `K_?9C`  | Unknown Key 9C |
| `K_F15`              | F15              |     | `K_?9D`  | Unknown Key 9D |
| `K_F16`              | F16              |     | `K_?9E`  | Unknown Key 9E |
| `K_F17`              | F17              |     | `K_?9F`  | Unknown Key 9F |
| `K_F18`              | F18              |     | `K_?A0`  | Unknown Key A0 |
| `K_F19`              | F19              |     | `K_?A1`  | Unknown Key A1 |
| `K_F20`              | F20              |     | `K_?A2`  | Unknown Key A2 |
| `K_F21`              | F21              |     | `K_?A3`  | Unknown Key A3 |
| `K_F22`              | F22              |     | `K_?A4`  | Unknown Key A4 |
| `K_F23`              | F23              |     | `K_?A5`  | Unknown Key A5 |
| `K_F24`              | F24              |     | `K_?A6`  | Unknown Key A6 |
| `K_KANJI?15`         | Kanji Key \#1    |     | `K_?A7`  | Unknown Key A7 |
| `K_KANJI?16`         | Kanji Key \#2    |     | `K_?A8`  | Unknown Key A8 |
| `K_KANJI?17`         | Kanji Key \#3    |     | `K_?A9`  | Unknown Key A9 |
| `K_KANJI?18`         | Kanji Key \#4    |     | `K_?AA`  | Unknown Key AA |
| `K_KANJI?19`         | Kanji Key \#5    |     | `K_?AB`  | Unknown Key AB |
| `K_KANJI?1C`         | Kanji Key \#6    |     | `K_?AC`  | Unknown Key AC |
| `K_KANJI?1D`         | Kanji Key \#7    |     | `K_?AD`  | Unknown Key AD |
| `K_KANJI?1E`         | Kanji Key \#8    |     | `K_?AE`  | Unknown Key AE |
| `K_KANJI?1F`         | Kanji Key \#9    |     | `K_?AF`  | Unknown Key AF |
| `K_oE0`              | OEM Key E0       |     | `K_?B0`  | Unknown Key B0 |
| `K_oE1`              | OEM Key E1       |     | `K_?B1`  | Unknown Key B1 |
| `K_oE3`              | OEM Key E3       |     | `K_?B2`  | Unknown Key B2 |
| `K_oE4`              | OEM Key E4       |     | `K_?B3`  | Unknown Key B3 |
| `K_oE6`              | OEM Key E6       |     | `K_?B4`  | Unknown Key B4 |
| `K_oE9`              | OEM Key E9       |     | `K_?B5`  | Unknown Key B5 |
| `K_oEA`              | OEM Key EA       |     | `K_?B6`  | Unknown Key B6 |
| `K_oEB`              | OEM Key EB       |     | `K_?B7`  | Unknown Key B7 |
| `K_oEC`              | OEM Key EC       |     | `K_?B8`  | Unknown Key B8 |
| `K_oED`              | OEM Key ED       |     | `K_?B9`  | Unknown Key B9 |
| `K_oEE`              | OEM Key EE       |     | `K_?C1`  | Unknown Key C1 |
| `K_oEF`              | OEM Key EF       |     | `K_?C2`  | Unknown Key C2 |
| `K_oF0`              | OEM Key F0       |     | `K_?C3`  | Unknown Key C3 |
| `K_oF1`              | OEM Key F1       |     | `K_?C4`  | Unknown Key C4 |
| `K_oF2`              | OEM Key F2       |     | `K_?C5`  | Unknown Key C5 |
| `K_oF3`              | OEM Key F3       |     | `K_?C6`  | Unknown Key C6 |
| `K_oF4`              | OEM Key F4       |     | `K_?C7`  | Unknown Key C7 |
| `K_oF5`              | OEM Key F5       |     | `K_?C8`  | Unknown Key C8 |
| `K_?00`              | Unknown Key 00   |     | `K_?C9`  | Unknown Key C9 |
| `K_?05 or K_NPENTER` | Number Pad ENTER |     | `K_?CA`  | Unknown Key CA |
| `K_?06`              | Unknown Key 06   |     | `K_?CB`  | Unknown Key CB |
| `K_?07`              | Unknown Key 07   |     | `K_?CC`  | Unknown Key CC |
| `K_?0A`              | Unknown Key 0A   |     | `K_?CD`  | Unknown Key CD |
| `K_?0B`              | Unknown Key 0B   |     | `K_?CE`  | Unknown Key CE |
| `K_?0E`              | Unknown Key 0E   |     | `K_?CF`  | Unknown Key CF |
| `K_?0F`              | Unknown Key 0F   |     | `K_?D0`  | Unknown Key D0 |
| `K_?1A`              | Unknown Key 1A   |     | `K_?D1`  | Unknown Key D1 |
| `K_?3A`              | Unknown Key 3A   |     | `K_?D2`  | Unknown Key D2 |
| `K_?3B`              | Unknown Key 3B   |     | `K_?D3`  | Unknown Key D3 |
| `K_?3C`              | Unknown Key 3C   |     | `K_?D4`  | Unknown Key D4 |
| `K_?3D`              | Unknown Key 3D   |     | `K_?D5`  | Unknown Key D5 |
| `K_?3E`              | Unknown Key 3E   |     | `K_?D6`  | Unknown Key D6 |
| `K_?3F`              | Unknown Key 3F   |     | `K_?D7`  | Unknown Key D7 |
| `K_?40`              | Unknown Key 40   |     | `K_?D8`  | Unknown Key D8 |
| `K_?5B`              | Unknown Key 5B   |     | `K_?D9`  | Unknown Key D9 |
| `K_?5C`              | Unknown Key 5C   |     | `K_?DA`  | Unknown Key DA |
| `K_?5D`              | Unknown Key 5D   |     | `K_oDF`  | Unknown Key DF |
| `K_?5E`              | Unknown Key 5E   |     | `K_?E5`  | Unknown Key E5 |
| `K_?5F`              | Unknown Key 5F   |     | `K_?E7`  | Unknown Key E7 |
| `K_?88`              | Unknown Key 88   |     | `K_?E8`  | Unknown Key E8 |
| `K_?89`              | Unknown Key 89   |     | `K_?F6`  | Unknown Key F6 |
| `K_?8A`              | Unknown Key 8A   |     | `K_?F7`  | Unknown Key F7 |
| `K_?8B`              | Unknown Key 8B   |     | `K_?F8`  | Unknown Key F8 |
| `K_?8C`              | Unknown Key 8C   |     | `K_?F9`  | Unknown Key F9 |
| `K_?8D`              | Unknown Key 8D   |     | `K_?FA`  | Unknown Key FA |
| `K_?8E`              | Unknown Key 8E   |     | `K_?FB`  | Unknown Key FB |
| `K_?8F`              | Unknown Key 8F   |     | `K_?FC`  | Unknown Key FC |
| `K_?92`              | Unknown Key 92   |     | `K_?FD`  | Unknown Key FD |
| `K_?94`              | Unknown Key 94   |     | `K_?FE`  | Unknown Key FE |
| `K_?95`              | Unknown Key 95   |     | `K_?FF`  | Unknown Key FF |

The following table lists all of the reserved virtual key codes that
will not be recognised even if they are on your keyboard, although they
are included in Keyman for completeness:

| Key Code    | Key Name            |
|-------------|---------------------|
| `K_SHIFT`   | Shift               |
| `K_CONTROL` | Control             |
| `K_ALT`     | Alt                 |
| `K_CAPS`    | Caps Lock           |
| `K_NUMLOCK` | Num Lock            |
| `K_SCROLL`  | Scroll Lock         |
| `K_LBUTTON` | Left Mouse Button   |
| `K_MBUTTON` | Middle Mouse Button |
| `K_RBUTTON` | Right Mouse Button  |
| `K_CANCEL`  | Ctrl+Break          |
| `K_PAUSE`   | Pause               |
| `K_PRTSCN`  | Print Screen        |

## Examples {#examples}

```keyman
c override default bksp behaviour for 'ng'
'ng' + [K_BKSP] > nul

+ [SHIFT CTRL K_A] > 'à'
+ [RALT K_E] > 'è'
```

## Virtual keys and touch layouts {#virtual-keys-and-touch-layouts}

Touch layouts do not have physical keyboards, so the concept of virtual
keys is in some ways less relevant. However, for compatibility and ease
of reference, Keyman maintains a mapping between the [US
English](us-english) virtual key codes and the characters emitted by
these keys. If a touch key is given one of these virtual keys (e.g.
`K_A`), then the corresponding US English character (`a`) will be
emitted, if no rule is provided to override that.

Each touch key must be given an identifying key code which is unique to
the key layer. Key codes by and large correspond to the virtual key
codes used when creating a keyboard program for a desktop keyboard, and
should start with `K_`, for keys mapped to standard Keyman virtual key
names, e.g. `K_HYPHEN`, and `T_` or `U_` for user-defined names, e.g.
`T_ZZZ`. If keyboard rules exist matching the key code in context, then
the output from the key will be determined by the processing of those
rules. The key code is always required, and a default
code will usually be generated automatically by Keyman Developer.

It is usually best to include explicit rules to manage the output
from each key, but if no rules matching the key code are included in the
keyboard program, and the key code matches the pattern `U_xxxx` (where
`xxxx` is a 4-digit uppercase hex string), then the Unicode character
`U+xxxx` will be output. Additionally, if the key code matches the pattern
`U_xxxx_yyyy...` (where `xxxx` and
`yyyy` are 4 to 6-digit hex strings), then the Unicode characters
`U+xxxx` and `U+yyyy` will be output. `U_xxxx_yyyy` requires store(&VERSION) '15.0'.

Any key can be used to switch keyboard layers (see below), but the
following layer-switching key codes have been added for switching to
some commonly used secondary layers:

| Identifier     | Value |
|:---------------|:------|
| `K_NUMERALS`   | `261` |
| `K_SYMBOLS`    | `262` |
| `K_CURRENCIES` | `263` |
| `K_SHIFTED`    | `264` |
| `K_ALTGR`      | `265` |
