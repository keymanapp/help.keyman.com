<?php
  require_once('includes/template.php');

  head([
    'title' => "Programmer's Guide - Virtual Keys"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Programmer's Guide - Virtual Keys</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="guide_lang_stores.php">Prev</a> </td><th width="60%" align="center">Keyman Keyboard Language Guide</th><td width="20%" align="right"> <a accesskey="n" href="guide_lang_options.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="guide_lang_vkeys">Programmer's Guide - Virtual Keys</h3></div></div></div><p>
        With ordinary rules, you can match any key that produces a character. However,
        sometimes you may want to match other keys, for example Backspace, or Ctrl- or
        Alt-combinations. In order to match keys like these you need to use virtual keys.\
      </p><p>
        Every key on the keyboard is identified by a virtual key code. Virtual
        keys are identified by square brackets '[ ]' containing a combination of zero or
        more shift-key codes and a virtual key code.
        <a class="link" href="reference__struct_vkeys.php" title="Virtual Keys and Virtual Character Keys">A list of all virtual key codes</a> can
        be found in the reference section of this help file. You can also use the
        Virtual Key Identifier on the Tools menu in TIKE to identify a virtual key code.
      </p><h4><a name="id589930"></a>Using Virtual Keys</h4><p>
        Virtual keys are used in the key section of a rule, or in special cases in the
        output. However, virtual keys are not valid in the context of a rule, as the
        context consists solely of characters.
      </p><p>
        A typical use of virtual keys is to make rules to recognise non-character keys,
        such as Backspace or Tab; for example:
      </p><pre class="programlisting">
+ [K_TAB] &gt; "You pressed Tab"
      </pre><p>
        Virtual keys are also commonly used to recognise Ctrl- or Alt-key combinations,
        like this:
      </p><pre class="programlisting">
+ [CTRL ALT K_A] &gt; "You pressed Ctrl+Alt+A"
      </pre><p>
        The valid shift-key codes are:
      </p><table><tbody><tr>
      <th>Shift Key</th>
      <th>Code</th>
    </tr><tr>
      <td>Shift </td>
      <td>SHIFT </td>
    </tr><tr>
      <td>Either Ctrl </td>
      <td>CTRL </td>
    </tr><tr>
      <td>Left Ctrl </td>
      <td>LCTRL </td>
    </tr><tr>
      <td>Right Ctrl </td>
      <td>RCTRL </td>
    </tr><tr>
      <td>Either Alt </td>
      <td>ALT </td>
    </tr><tr>
      <td>Left Alt </td>
      <td>LALT </td>
    </tr><tr>
      <td>Right Alt </td>
      <td>RALT </td>
    </tr><tr>
      <td>Caps Lock on </td>
      <td>CAPS </td>
    </tr><tr>
      <td>Caps Lock off </td>
      <td>NCAPS </td>
    </tr></tbody></table><h4><a name="id643291"></a>AltGr and Other Special Keys</h4><p>
        The AltGr Key is common on European keyboards, where it enables the use of a
        second character on some keys. A frequently asked question is how to correctly
        create a keyboard that uses AltGr-key combinations.
      </p><p>
        Positionally, and physically the AltGr key is just the right-hand Alt key; with
        this in mind, you can create a rule to use it like this:
      </p><pre class="programlisting">
+ [RALT K_A] &gt; "You pressed AltGr+A"
      </pre><p>
        If you have a European keyboard layour set up in Control Panel, you might need
        to enable the option "Simulate AltGr with Ctrl+Alt" for this to work correctly.
        This is because some European layouts convert a Right-Alt press into Ctrl+Alt.
      </p><p>
        You can also enable this option to support keyboards without a right-alt key
        (such as many notebooks). This will allow the use of the Ctrl+Alt key
        combination to simulate Right Alt.
      </p><p>
        Some keyboards, especially European keyboards, may have one or more additional
        keys. These can often only be distinguished with its virtual key codes. If you
        wish to use these keys in a keyboard, you must identify their key codes with
        the Virtual Key Identifier (located in the Tools menu).
      </p><h4><a name="id643316"></a>Virtual Keys in Output</h4><p>
        In a few specialised situations, you may need to output virtual keys, such as
        Ctrl- or other shifted combinations. To do this, you may specify a virtual key
        code in the output of a rule. However, it is best to avoid this if possible, as 
        virtual keys have different meanings in different applications.
      </p><h4><a name="id643323"></a>Related Topics</h4><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference__struct_vkeys.php" title="Virtual Keys and Virtual Character Keys">Virtual Keys and Virtual Character Keys</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="guide_lang_stores.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="index_guide_language.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="guide_lang_options.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Programmer's Guide - Stores </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Programmer's Guide - Keyboard Options</td></tr></table></div>
