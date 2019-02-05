<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:      Virtual Keys and Virtual Character Keys

TEXT:         Virtual keys provide a mechanism for recognising any key combination on the keyboard.  
              Any key that does not normally generate a character, except for a few listed below, can be
              matched by this technique.

TEXT:         The key codes refer to the actual key at the given position on a standard US-English keyboard.  When
              used with a non US-English keyboard driver (selected through Control Panel/Keyboards), differences 
              can arise, and this use is not recommended.

TEXT:         The Right-Alt key has traditionally been used on European keyboards as an additional shift state, 
              usually known as AltGr.  The end user of Keyman keyboards can select an option to emulate Right-Alt with
              Ctrl+Alt, as Right-Alt is not available on many notebook keyboards.  Thus, it is wise to avoid using Ctrl+Alt
              combinations in the same keyboard as Right-Alt combinations.

              Additionally, it is useful to keep in mind that when this emulation is active, it is not possible to 
              recognise the Ctrl+Right Alt combination, as this is overridden by Ctrl+Alt (producing Right-Alt).  
              This can have ramifications in keyboards such as German, which makes use of the Ctrl+AltGr combination.

TEXT:         <b>Virtual Keys vs Virtual Character Keys:</b> Keyman 6.0 introduced a new feature known as 
              <a href='mnemonic.html'>mnemonic layouts</a>.  This feature requires that the "white"
              alphabet/numeric/punctuation keys in the primary section of the keyboard are referenced by the character
              on the key cap rather than the key position (as with non-mnemonic layouts).  However, all other keys on 
              the keyboard should be referenced as normal.

              It is important to remember that you can choose any character that appears on a given keycap, not just the
              unshifted character.  For instance, if you use <code>['A']</code>, you will be matching the unshifted A key;
              you must still explicitly state the shift state for the key.

ENDSECTION

SECTION:      Reference

TEXT:         The general format for a virtual character key is:

TUTECODE:     [ shift-codes 'c' ]

TEXT          where <i>c</i> is any character on the keyboard.

TEXT:         The general format for a virtual key is:

TUTECODE:     [ shift-codes K_key ]

TEXT:         The possible shift codes are:

VTABLE:       "150",        "300"
              "Shift Code", "Meaning"
              "SHIFT",      "Either shift key"
              "CTRL",       "Either control key"
              "ALT",        "Either alt key"
              "LCTRL",      "Left control key"
              "RCTRL",      "Right control key (not found on all keyboards)"
              "LALT",       "Left alt key"
              "RALT",       "Right alt key or AltGr on European keyboards (not found on all keyboards)"
              "CAPS",       "Caps Lock is on"
              "NCAPS",      "Caps Lock is off"

TEXT:         A caveat for using RALT: When using many European keyboards, Windows internally translates the RALT (or AltGr) key to
              LCTRL+RALT.  Keyman also includes an option to treat CTRL+ALT in the same manner as RALT (this is useful for notebook 
              keyboards that do not have a RALT or AltGr key.  Both of these 'features' mean that you should avoid using more than one 
              of the following shift combinations in the same keyboard:

VTABLE:       "300"
              "Shift Code"
              "RALT"
              "CTRL ALT"
              "CTRL RALT"
              "LCTRL ALT"
              "LCTRL RALT"

TEXT:         The following table lists all of the common virtual key codes:

VTABLE:       "100",        "130",      "20",           "100",      "130"
              "Key Code",   "Key Name", "&nbsp;&nbsp;", "Key Code", "Key Name"
              "K_SPACE",    "Spacebar", "&nbsp;",              "K_oE2",      "102nd Key (European)"      
              "K_A",        "A", "&nbsp;",                     "K_BKSP",     "Backspace"          
              "K_B",        "B", "&nbsp;",                     "K_TAB",      "Tab"         
              "K_C",        "C", "&nbsp;",                     "K_ENTER",    "Enter"      
              "K_D",        "D", "&nbsp;",                     "K_ESC",      "Escape"      
              "K_E",        "E", "&nbsp;",                     "K_LEFT",     "Left Arrow"  
              "K_F",        "F", "&nbsp;",                     "K_UP",       "Up Arrow"        
              "K_G",        "G", "&nbsp;",                     "K_RIGHT",    "Right Arrow"   
              "K_H",        "H", "&nbsp;",                     "K_DOWN",     "Down Arrow"       
              "K_I",        "I", "&nbsp;",                     "K_PGUP",     "Page Up"         
              "K_J",        "J", "&nbsp;",                     "K_PGDN",     "Page Down"    
              "K_K",        "K", "&nbsp;",                     "K_HOME",     "Home"   
              "K_L",        "L", "&nbsp;",                     "K_END",      "End"
              "K_M",        "M", "&nbsp;",                     "K_INS",      "Insert"
              "K_N",        "N", "&nbsp;",                     "K_DEL",      "Delete"
              "K_O",        "O", "&nbsp;",                     "K_F1",       "F1"
              "K_P",        "P", "&nbsp;",                     "K_F2",       "F2"
              "K_Q",        "Q", "&nbsp;",                     "K_F3",       "F3"
              "K_R",        "R", "&nbsp;",                     "K_F4",       "F4"
              "K_S",        "S", "&nbsp;",                     "K_F5",       "F5"
              "K_T",        "T", "&nbsp;",                     "K_F6",       "F6"
              "K_U",        "U", "&nbsp;",                     "K_F7",       "F7"
              "K_V",        "V", "&nbsp;",                     "K_F8",       "F8"
              "K_W",        "W", "&nbsp;",                     "K_F9",       "F9"
              "K_X",        "X", "&nbsp;",                     "K_F10",      "F10"
              "K_Y",        "Y", "&nbsp;",                     "K_F11",      "F11"
              "K_Z",        "Z", "&nbsp;",                     "K_F12",      "F12"
              "K_1",        "1", "&nbsp;",                     "K_KP5",      "Key Pad 5 (Numlock off)"
              "K_2",        "2", "&nbsp;",                     "K_NP0",      "Number Pad 0"
              "K_3",        "3", "&nbsp;",                     "K_NP1",      "Number Pad 1"
              "K_4",        "4", "&nbsp;",                     "K_NP2",      "Number Pad 2"
              "K_5",        "5", "&nbsp;",                     "K_NP3",      "Number Pad 3"
              "K_6",        "6", "&nbsp;",                     "K_NP4",      "Number Pad 4"
              "K_7",        "7", "&nbsp;",                     "K_NP5",      "Number Pad 5"
              "K_8",        "8", "&nbsp;",                     "K_NP6",      "Number Pad 6"
              "K_9",        "9", "&nbsp;",                     "K_NP7",      "Number Pad 7"
              "K_0",        "0", "&nbsp;",                     "K_NP8",      "Number Pad 8"
              "K_BKQUOTE",  "`", "&nbsp;",                     "K_NP9",      "Number Pad 9"
              "K_HYPHEN",   "-", "&nbsp;",                     "K_NPSTAR",   "Number Pad *"
              "K_EQUAL",    "=", "&nbsp;",                     "K_NPPLUS",   "Number Pad +"
              "K_LBRKT",    "[", "&nbsp;",                     "K_NPMINUS",  "Number Pad -"
              "K_RBRKT",    "]", "&nbsp;",                     "K_NPDOT",    "Number Pad ."
              "K_BKSLASH",  "\", "&nbsp;",                     "K_NPSLASH",  "Number Pad /"
              "K_COLON",    ";", "", "", ""
              "K_QUOTE",    "'", "", "", ""
              "K_COMMA",    ",", "", "", ""
              "K_PERIOD",   ".", "", "", ""
              "K_SLASH",    "/", "", "", ""

TEXT:         The following table lists all of the less common virtual key codes:

VTABLE:       "100",        "130",      "20",           "100",      "130"
              "Key Code",   "Key Name", "&nbsp;&nbsp;",             "Key Code",   "Key Name"
              "K_SEL",      "Select", "&nbsp;",                     "K_?96",      "Unknown Key 96"
              "K_PRINT",    "Print", "&nbsp;",                      "K_?97",      "Unknown Key 97"
              "K_EXEC",     "Execute", "&nbsp;",                    "K_?98",      "Unknown Key 98"
              "K_HELP",     "Help", "&nbsp;",                       "K_?99",      "Unknown Key 99"
              "K_SEPARATOR","Separator", "&nbsp;",                  "K_?9A",      "Unknown Key 9A"
              "K_F13",      "F13", "&nbsp;",                        "K_?9B",      "Unknown Key 9B"
              "K_F14",      "F14", "&nbsp;",                        "K_?9C",      "Unknown Key 9C"
              "K_F15",      "F15", "&nbsp;",                        "K_?9D",      "Unknown Key 9D"
              "K_F16",      "F16", "&nbsp;",                        "K_?9E",      "Unknown Key 9E"
              "K_F17",      "F17", "&nbsp;",                        "K_?9F",      "Unknown Key 9F"
              "K_F18",      "F18", "&nbsp;",                        "K_?A0",      "Unknown Key A0"
              "K_F19",      "F19", "&nbsp;",                        "K_?A1",      "Unknown Key A1"
              "K_F20",      "F20", "&nbsp;",                        "K_?A2",      "Unknown Key A2"
              "K_F21",      "F21", "&nbsp;",                        "K_?A3",      "Unknown Key A3"
              "K_F22",      "F22", "&nbsp;",                        "K_?A4",      "Unknown Key A4"
              "K_F23",      "F23", "&nbsp;",                        "K_?A5",      "Unknown Key A5"
              "K_F24",      "F24", "&nbsp;",                        "K_?A6",      "Unknown Key A6"
              "K_KANJI?15", "Kanji Key #1", "&nbsp;",               "K_?A7",      "Unknown Key A7"
              "K_KANJI?16", "Kanji Key #2", "&nbsp;",               "K_?A8",      "Unknown Key A8"
              "K_KANJI?17", "Kanji Key #3", "&nbsp;",               "K_?A9",      "Unknown Key A9"
              "K_KANJI?18", "Kanji Key #4", "&nbsp;",               "K_?AA",      "Unknown Key AA"
              "K_KANJI?19", "Kanji Key #5", "&nbsp;",               "K_?AB",      "Unknown Key AB"
              "K_KANJI?1C", "Kanji Key #6", "&nbsp;",               "K_?AC",      "Unknown Key AC"
              "K_KANJI?1D", "Kanji Key #7", "&nbsp;",               "K_?AD",      "Unknown Key AD"
              "K_KANJI?1E", "Kanji Key #8", "&nbsp;",               "K_?AE",      "Unknown Key AE"
              "K_KANJI?1F", "Kanji Key #9", "&nbsp;",               "K_?AF",      "Unknown Key AF"
              "K_oE0",      "OEM Key E0", "&nbsp;",                 "K_?B0",      "Unknown Key B0"
              "K_oE1",      "OEM Key E1", "&nbsp;",                 "K_?B1",      "Unknown Key B1"
              "K_oE3",      "OEM Key E3", "&nbsp;",                 "K_?B2",      "Unknown Key B2"
              "K_oE4",      "OEM Key E4", "&nbsp;",                 "K_?B3",      "Unknown Key B3"
              "K_oE6",      "OEM Key E6", "&nbsp;",                 "K_?B4",      "Unknown Key B4"
              "K_oE9",      "OEM Key E9", "&nbsp;",                 "K_?B5",      "Unknown Key B5"
              "K_oEA",      "OEM Key EA", "&nbsp;",                 "K_?B6",      "Unknown Key B6"
              "K_oEB",      "OEM Key EB", "&nbsp;",                 "K_?B7",      "Unknown Key B7"
              "K_oEC",      "OEM Key EC", "&nbsp;",                 "K_?B8",      "Unknown Key B8"
              "K_oED",      "OEM Key ED", "&nbsp;",                 "K_?B9",      "Unknown Key B9"
              "K_oEE",      "OEM Key EE", "&nbsp;",                 "K_?C1",      "Unknown Key C1"
              "K_oEF",      "OEM Key EF", "&nbsp;",                 "K_?C2",      "Unknown Key C2"
              "K_oF0",      "OEM Key F0", "&nbsp;",                 "K_?C3",      "Unknown Key C3"
              "K_oF1",      "OEM Key F1", "&nbsp;",                 "K_?C4",      "Unknown Key C4"
              "K_oF2",      "OEM Key F2", "&nbsp;",                 "K_?C5",      "Unknown Key C5"
              "K_oF3",      "OEM Key F3", "&nbsp;",                 "K_?C6",      "Unknown Key C6"
              "K_oF4",      "OEM Key F4", "&nbsp;",                 "K_?C7",      "Unknown Key C7"
              "K_oF5",      "OEM Key F5", "&nbsp;",                 "K_?C8",      "Unknown Key C8"
              "K_?00",      "Unknown Key 00", "&nbsp;",            "K_?C9",      "Unknown Key C9"
              "K_?05",      "Unknown Key 05", "&nbsp;",            "K_?CA",      "Unknown Key CA"
              "K_?06",      "Unknown Key 06", "&nbsp;",            "K_?CB",      "Unknown Key CB"
              "K_?07",      "Unknown Key 07", "&nbsp;",            "K_?CC",      "Unknown Key CC"
              "K_?0A",      "Unknown Key 0A", "&nbsp;",            "K_?CD",      "Unknown Key CD"
              "K_?0B",      "Unknown Key 0B", "&nbsp;",            "K_?CE",      "Unknown Key CE"
              "K_?0E",      "Unknown Key 0E", "&nbsp;",            "K_?CF",      "Unknown Key CF"
              "K_?0F",      "Unknown Key 0F", "&nbsp;",            "K_?D0",      "Unknown Key D0"
              "K_?1A",      "Unknown Key 1A", "&nbsp;",            "K_?D1",      "Unknown Key D1"
              "K_?3A",      "Unknown Key 3A", "&nbsp;",            "K_?D2",      "Unknown Key D2"
              "K_?3B",      "Unknown Key 3B", "&nbsp;",            "K_?D3",      "Unknown Key D3"
              "K_?3C",      "Unknown Key 3C", "&nbsp;",            "K_?D4",      "Unknown Key D4"
              "K_?3D",      "Unknown Key 3D", "&nbsp;",            "K_?D5",      "Unknown Key D5"
              "K_?3E",      "Unknown Key 3E", "&nbsp;",            "K_?D6",      "Unknown Key D6"
              "K_?3F",      "Unknown Key 3F", "&nbsp;",            "K_?D7",      "Unknown Key D7"
              "K_?40",      "Unknown Key 40", "&nbsp;",            "K_?D8",      "Unknown Key D8"
              "K_?5B",      "Unknown Key 5B", "&nbsp;",            "K_?D9",      "Unknown Key D9"
              "K_?5C",      "Unknown Key 5C", "&nbsp;",            "K_?DA",      "Unknown Key DA"
              "K_?5D",      "Unknown Key 5D", "&nbsp;",            "K_oDF",      "Unknown Key DF"
              "K_?5E",      "Unknown Key 5E", "&nbsp;",            "K_?E5",      "Unknown Key E5"
              "K_?5F",      "Unknown Key 5F", "&nbsp;",            "K_?E7",      "Unknown Key E7"
              "K_?88",      "Unknown Key 88", "&nbsp;",            "K_?E8",      "Unknown Key E8"
              "K_?89",      "Unknown Key 89", "&nbsp;",            "K_?F6",      "Unknown Key F6"
              "K_?8A",      "Unknown Key 8A", "&nbsp;",            "K_?F7",      "Unknown Key F7"
              "K_?8B",      "Unknown Key 8B", "&nbsp;",            "K_?F8",      "Unknown Key F8"
              "K_?8C",      "Unknown Key 8C", "&nbsp;",            "K_?F9",      "Unknown Key F9"
              "K_?8D",      "Unknown Key 8D", "&nbsp;",            "K_?FA",      "Unknown Key FA"
              "K_?8E",      "Unknown Key 8E", "&nbsp;",            "K_?FB",      "Unknown Key FB"
              "K_?8F",      "Unknown Key 8F", "&nbsp;",            "K_?FC",      "Unknown Key FC"
              "K_?92",      "Unknown Key 92", "&nbsp;",            "K_?FD",      "Unknown Key FD"
              "K_?93",      "Unknown Key 93", "&nbsp;",            "K_?FE",      "Unknown Key FE"
              "K_?94",      "Unknown Key 94", "&nbsp;",            "K_?FF",      "Unknown Key FF"
              "K_?95",      "Unknown Key 95", "", "", ""


TEXT:         The following table lists all of the reserved virtual key codes that will not be recognised even if they
              are on your keyboard, although they are included in Keyman for completeness:

VTABLE:       "100",        "100"
              "Key Code",   "Key name"
              "K_SHIFT",    "Shift"
              "K_CONTROL",  "Control"
              "K_ALT",      "Alt"
              "K_CAPS",     "Caps Lock"
              "K_NUMLOCK",  "Num Lock"
              "K_SCROLL",   "Scroll Lock"
              "K_LBUTTON",  "Left Mouse Button"
              "K_MBUTTON",  "Middle Mouse Button"
              "K_RBUTTON",  "Right Mouse Button"
              "K_CANCEL",   "Ctrl+Break"
              "K_PAUSE",    "Pause"
              "K_PRTSCN",   "Print Screen"

TEXT:         Some examples are:

TUTECODE:     c override default bksp behaviour for 'ng'
              'ng' + [K_BKSP] > nul

              + [SHIFT CTRL K_A] > 'à'
              + [RALT K_E] > 'ê'

TEXT:         Virtual keys also work in the output (sending keystrokes to an application), 
              but they are not officially supported and may not work in all circumstances.

REF
); ?>
