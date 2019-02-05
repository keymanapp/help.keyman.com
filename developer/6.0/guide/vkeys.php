<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT
PAGE:         Programmer's Guide - Virtual Keys

TITLE:        Virtual Keys

BODY

SECTION:      Virtual Keys

TEXT:         With ordinary rules, you can match any key that produces a character. However,
              sometimes you may want to match other keys, for example Backspace, or Ctrl- or
              Alt-combinations. In order to match keys like these you need to use virtual keys.

              Every key on the keyboard is identified by a virtual key code. Virtual
              keys are identified by square brackets '[ ]' containing a combination of zero or
              more shift-key codes and a virtual key code.
              <a href="../reference/_struct_vkeys.html">A list of all virtual key codes</a> can
              be found in the reference section of this help file. You can also use the
              Virtual Key Identifier on the Tools menu in TIKE to identify a virtual key code.

ENDSECTION

SECTION:      Using Virtual Keys

TEXT:         Virtual keys are used in the key section of a rule, or in special cases in the
              output. However, virtual keys are not valid in the context of a rule, as the
              context consists solely of characters.

              A typical use of virtual keys is to make rules to recognise non-character keys,
              such as Backspace or Tab; for example:

TUTECODE:     + [K_TAB] > "You pressed Tab"

TEXT:         Virtual keys are also commonly used to recognise Ctrl- or Alt-key combinations,
              like this:

TUTECODE:      + [CTRL ALT K_A] > "You pressed Ctrl+Alt+A"

TEXT:         The valid shift-key codes are:

VTABLE:       "250",            "100"
              "Shift Key",      "Code"
              "Shift",          "SHIFT"
              "Either Ctrl",    "CTRL"
              "Left Ctrl",      "LCTRL"
              "Right Ctrl",     "RCTRL"
              "Either Alt",     "ALT"
              "Left Alt",       "LALT"
              "Right Alt",      "RALT"
              "Caps Lock on",   "CAPS"
              "Caps Lock off",  "NCAPS"

ENDSECTION

SECTION:      AltGr and Other Special Keys

TEXT:         The AltGr Key is common on European keyboards, where it enables the use of a
              second character on some keys. A frequently asked question is how to correctly
              create a keyboard that uses AltGr-key combinations.

              Positionally, and physically the AltGr key is just the right-hand Alt key; with
              this in mind, you can create a rule to use it like this:

TUTECODE:     + [RALT K_A] > "You pressed AltGr+A"

TEXT:         If you have a European keyboard layour set up in Control Panel, you might need
              to enable the option "Simulate AltGr with Ctrl+Alt" for this to work correctly.
              This is because some European layouts convert a Right-Alt press into Ctrl+Alt.

              You can also enable this option to support keyboards without a right-alt key
              (such as many notebooks). This will allow the use of the Ctrl+Alt key
              combination to simulate Right Alt.

TEXT:         Some keyboards, especially European keyboards, may have one or more additional
              keys. These can often only be distinguished with its virtual key codes. If you
              wish to use these keys in a keyboard, you must identify their key codes with
              the Virtual Key Identifier (located in the Tools menu).

ENDSECTION

SECTION:      Virtual Keys in Output

TEXT:         In a few specialised situations, you may need to output virtual keys, such as
              Ctrl- or other shifted combinations. To do this, you may specify a virtual key
              code in the output of a rule. However, it is best to avoid this if possible, as 
              virtual keys have different meanings in different applications.

ENDSECTION

RELATED:      "Virtual Key Codes", "../reference/_struct_vkeys.html"

ENDBODY

FOOTER

ENDPAGE
ENDFORMAT
); ?>
