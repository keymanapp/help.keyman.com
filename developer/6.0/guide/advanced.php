<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT
PAGE:           Programmer's Guide - Advanced Keyboard Creation

TITLE:          Advanced Keyboard Creation

BODY

SECTION:        Introduction
TEXT:           Whenever you want to do much more in a keyboard than simple character substitution, you will generally
                need to make use of advanced features such as stores, deadkeys, and multiple groups. The tutorial has
                already shown some basic usage of stores and deadkeys, but has not covered other possibilities of their
                use. In this topic we will examine a keyboard that demonstrates some other uses
                of stores and deadkeys, and introduces the use of multiple groups for complex processing.
TEXT:           We recommend that you read the topics on <a href="../reference/_struct_groups.html">groups</a>,
                <a href="../reference/_struct_stores.html">stores</a>, and <a href="../reference/deadkey.html">deadkeys</a>
                before continuing.
                
TEXT:           The keyboard we will examine is <a href="javascript:loadkbd.hhclick();">IPAMenu.kmn</a>
                (found in the Keyman Developer Samples folder), which contains
                the beginnings of a menu-based keyboard for using the International Phonetic Alphabet (IPA). You
                will need a Unicode font with IPA characters (such as Lucida Sans Unicode or
                <a href="http://home.att.net/~jameskass/">Code2000</a>) to properly use this keyboard, but you should be
                able to follow the code even without. For more information about the IPA,
                see <a href="http://www2.arts.gla.ac.uk/IPA/ipa.html">The International Phonetic Association</a>.
                
TEXT:           Most of the IPA glyphs are modifications of glyphs from the Latin alphabet, used to represent differing
                sounds used in language. Because of this, it seemed reasonable to place all glyphs derived from <b>a</b> on the
                <b>a</b> key, and so on. We have implemented a few of the vowel symbols in this keyboard:
                
                <img src="../img/ipa.gif">
ENDSECTION

SECTION:        Overview of the keyboard
TEXT:           The basic operation of the keyboard is the displaying of a menu when a key is pressed, followed by the output
                of a single character when the user makes a selection from that menu with a number key.
                
                The first thing to notice is the organisation of most of the input and output into stores:
                (Note that you will need a Unicode font that has IPA characters to view this example correctly)

CODELINE:       store( choices ) '1234567890'

                store( a_menu )  '[1æ 2a 3ɑ 4ɐ 5ʌ 6ɒ]'
                store( e_menu )  '[1ɛ 2ɜ 3ə 4e 5ɘ 6ɚ 7ɝ 8ɞ]'
                store( o_menu )  '[1o 2ø 3ɔ]'

                store( a_chars ) 'æaɑɐʌɒ' dk(a_err) dk(a_err) dk(a_err) dk(a_err)
                store( e_chars ) 'ɛɜəeɘɚɝɞ' dk(e_err) dk(e_err)
                store( o_chars ) 'oøɔ' dk(o_err) dk(o_err) dk(o_err) dk(o_err) dk(o_err) dk(o_err) dk(o_err)

TEXT:           An important point to notice is the use of deadkeys in these stores: this is a new feature for Keyman 6.2;
                we'll explain their purpose here later.
                
TEXT:           The next thing that stands out is that the file has six separate groups, four of which handle keystrokes
                and two which manipulate context only:

CODELINE:       group( first )
                group( main ) using keys
                group( final )
                group( a_group ) using keys
                group( e_group ) using keys
                group( o_group ) using keys

ENDSECTION

SECTION:        Primary Operation of the Keyboard

TEXT:           When a key is pressed, execution begins at the group indicated by the <b>begin</b> statement, in this case
                the <b>first</b> group. Because this group does not specify <b>using keys</b>, it is limited to context
                manipulation only: the output of this rule is dependent only on what came before the current keystroke, and
                becomes the context for any further groups that are called from this one.
                
TEXT:           Let's suppose the <b>a</b> key has been pressed with no context. The <b>first</b> group will have nothing to
                match on, so the <b>nomatch</b> rule fires and passes control to the <b>main</b> group. Here the <b>a</b> key
                is matched, and the <b>a_menu</b> store is output, displaying the menu of a-like characters.
                
                Now the user is presented with a menu of options to choose from. Suppose he types <b>1</b>. Once again the
                <b>first</b> group gains control first, but this time matches the first rule, with the <b>a_menu</b> string
                on the context, so control is passed to the <b>a_menu</b> group to handle the keystroke. Here the <b>1</b> is
                matched as an entry in the <b>choices</b> store, and the corresponding character in the <b>a_chars</b> store -
                in this case <b>Ã¦</b> - is output. Finally, control goes from here to the <b>final</b> group, which fails to
                match anything in the context (which now includes the output from the previous group).

ENDSECTION

SECTION:        Error Handling

TEXT:           One issue this keyboard has to deal with is if the user tries to select an option that's not in the menu -
                when this happens, it should beep and remain at the menu, so the user can try again. Also, if the user wants to
                dismiss the menu, we should allow the use of Backspace to delete it - this is simply done with a rule matching
                [K_BKSP] and outputting <b>nul</b>.
                
                There are two rules which handle the user selecting a nonexistent option: if the current menu has fewer than
                10 entries, the user can press a number key indicating a menu entry that is not there - this situation will
                be matched by the any(choices) rule. The other occasion is if the user presses any other key which is not
                valid for selecting a menu option. This is handled by the nomatch rule in the group. For both these cases
                we want the output to be the same: a beep, and remain at the menu. To do this we will use deadkeys as error
                flags, one for each menu. By padding the <b>a_char, e_char, o_char</b> stores to 10 characters with these
                deadkeys, the output for this first situation will be the error flag. Similarly, we can output these deadkeys
                in the nomatch rules, to mark an error.
                
                The actual error handling is now done with the <b>final</b> group, which matches the error flags on the output
                and outputs the beep and the appropriate menu again.
ENDSECTION

SECTION:        Conclusion

TEXT:           Although this example went nowhere near the limits of what can be done with multiple groups, it gave a
                demonstration of some of the ways multiple groups can be made to interact for more powerful processing. 
                You should now have some understanding of the use of advanced features in Keyman Developer, and be able
                to begin using them to improve your keyboards.
ENDSECTION

COMMENT:        The following is used to load the ipamenu sample keyboard in Tike.
HTML:         <object id=loadkbd type="application/x-oleobject" classid="clsid:adb880a6-d8ff-11cf-9377-00aa003b7a11"
                codebase="hhctrl.ocx#Version=4,72,8252,0" width=1 height=1>
                <param name="Command" value="ShortCut">                   <!-- Run a program -->
                <param name="Item1"   value=",tike,samples\examples\ipamenu.kmn">     <!-- Window class, exe, params -->
              </object>

ENDBODY

FOOTER

ENDPAGE
ENDFORMAT
); ?>
