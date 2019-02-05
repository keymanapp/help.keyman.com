<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Programmer's Guide - Advanced Keyboard Creation</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="index_guide_language.php">Prev</a> </td><th width="60%" align="center">Keyman Keyboard Language Guide</th><td width="20%" align="right"> <a accesskey="n" href="guide_lang_constraints.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title"><a name="guide_lang_advanced"></a>Programmer's Guide - Advanced Keyboard Creation</h3></div></div></div><h4><a name="id754684"></a>Introduction</h4><p>
    Whenever you want to do much more in a keyboard than simple character substitution, you will generally
    need to make use of advanced features such as stores, deadkeys, and multiple groups. The tutorial has
    already shown some basic usage of stores and deadkeys, but has not covered other possibilities of their
    use. In this topic we will examine a keyboard that demonstrates some other uses
    of stores and deadkeys, and introduces the use of multiple groups for complex processing.
  </p><p>
    We recommend that you read the topics on <a class="link" href="reference__struct_groups.php" title="Using Groups">groups</a>,
    <a class="link" href="reference__struct_stores.php" title="Using Stores">stores</a>, and <a class="link" href="reference_deadkey.php" title="deadkey statement">deadkeys</a>
    before continuing.
  </p><p>
    The keyboard we will examine is <a class="ulink" href="javascript:loadkbd.hhclic" target="_blank">IPAMenu.kmn</a>
    (found in the Keyman Developer Samples folder), which contains
    the beginnings of a menu-based keyboard for using the International Phonetic Alphabet (IPA). You
    will need a Unicode font with IPA characters (such as Lucida Sans Unicode or
    <a class="ulink" href="http://home.att.net/~jameskass/" target="_blank">Code2000</a>) to properly use this keyboard, but you should be
    able to follow the code even without. For more information about the IPA,
    see <a class="ulink" href="http://www2.arts.gla.ac.uk/IPA/ipa.php" target="_blank">The International Phonetic Association</a>.
  </p><p>
    Most of the IPA glyphs are modifications of glyphs from the Latin alphabet, used to represent differing
    sounds used in language. Because of this, it seemed reasonable to place all glyphs derived from "a" on the
    "a" key, and so on. We have implemented a few of the vowel symbols in this keyboard:

    <span class="inlinemediaobject"><img src="images/ipa.gif"></span>
  </p><h4><a name="id754626"></a>Overview of the Keyboard</h4><p>
    The basic operation of the keyboard is the displaying of a menu when a key is pressed, followed by the output
    of a single character when the user makes a selection from that menu with a number key.
  </p><p>
    The first thing to notice is the organisation of most of the input and output into stores:
  </p><pre class="programlisting">
store( choices ) '1234567890'
store( a_menu )  '[1 2a 3- 4- 5- 6-]'
store( e_menu )  '[1- 2- 3- 4e 5- 6- 7- 8-]'
store( o_menu )  '[1o 2- 3-]'
store( a_chars ) '&#65533;a----' dk(a_err) dk(a_err) dk(a_err) dk(a_err)
store( e_chars ) '---e----' dk(e_err) dk(e_err)
store( o_chars ) 'o--' dk(o_err) dk(o_err) dk(o_err) dk(o_err) dk(o_err) dk(o_err) dk(o_err)
  </pre><p>
    An important point to notice is the use of deadkeys in these stores: this is a new feature for Keyman 6.0;
    we'll explain their purpose here later.
  </p><p>
    The next thing that stands out is that the file has six separate groups, four of which handle keystrokes
    and two which manipulate context only:
  </p><p>
    </p><pre class="programlisting">group( first )</pre><p>
  </p><p>
    </p><pre class="programlisting">group( main ) using keys</pre><p>
  </p><p>
    </p><pre class="programlisting">group( final )</pre><p>
  </p><p>
    </p><pre class="programlisting">group( a_group ) using keys</pre><p>
  </p><p>
    </p><pre class="programlisting">group( e_group ) using keys</pre><p>
  </p><p>
    </p><pre class="programlisting">group( o_group ) using keys</pre><p>
  </p><h4><a name="id754561"></a>Primary Operation of the Keyboard</h4><p>
    When a key is pressed, execution begins at the group indicated by the </p><pre class="programlisting">begin</pre><p> statement, in this case
    the </p><pre class="programlisting">first</pre><p> group. Because this group does not specify </p><pre class="programlisting">using keys</pre><p>, it is limited to context
    manipulation only: the output of this rule is dependent only on what came before the current keystroke, and
    becomes the context for any further groups that are called from this one.
  </p><p>
    Let's suppose the "a" key has been pressed with no context. The </p><pre class="programlisting">first</pre><p> group will have nothing to
    match on, so the </p><pre class="programlisting">nomatch</pre><p> rule fires and passes control to the </p><pre class="programlisting">main</pre><p> group. Here the "a" key
    is matched, and the </p><pre class="programlisting">a_menu</pre><p> store is output, displaying the menu of a-like characters.
  </p><p>
    Now the user is presented with a menu of options to choose from. Suppose he types "1". Once again the
    </p><pre class="programlisting">first</pre><p> group gains control first, but this time matches the first rule, with the </p><pre class="programlisting">a_menu</pre><p> string
    on the context, so control is passed to the </p><pre class="programlisting">a_menu</pre><p> group to handle the keystroke. Here the "1" is
    matched as an entry in the </p><pre class="programlisting">choices</pre><p> store, and the corresponding character in the </p><pre class="programlisting">a_chars</pre><p> store -
    in this case "&#65533;" - is output. Finally, control goes from here to the </p><pre class="programlisting">final</pre><p> group, which fails to
    match anything in the context (which now includes the output from the previous group).
  </p><h4><a name="id754469"></a>Error Handling</h4><p>
    One issue this keyboard has to deal with is if the user tries to select an option that's not in the menu -
    when this happens, it should beep and remain at the menu, so the user can try again. Also, if the user wants to
    dismiss the menu, we should allow the use of Backspace to delete it - this is simply done with a rule matching
    [K_BKSP] and outputting "nul".
  </p><p>
    There are two rules which handle the user selecting a nonexistent option: if the current menu has fewer than
    10 entries, the user can press a number key indicating a menu entry that is not there - this situation will
    be matched by the any(choices) rule. The other occasion is if the user presses any other key which is not
    valid for selecting a menu option. This is handled by the nomatch rule in the group. For both these cases
    we want the output to be the same: a beep, and remain at the menu. To do this we will use deadkeys as error
    flags, one for each menu. By padding the </p><pre class="programlisting">a_char, e_char, o_char</pre><p> stores to 10 characters with these
    deadkeys, the output for this first situation will be the error flag. Similarly, we can output these deadkeys
    in the nomatch rules, to mark an error.
  </p><p>
    The actual error handling is now done with the </p><pre class="programlisting">final</pre><p> group, which matches the error flags on the output
    and outputs the beep and the appropriate menu again.
  </p><h4><a name="id754355"></a>Conclusion</h4><p>
    Although this example went nowhere near the limits of what can be done with multiple groups, it gave a
    demonstration of some of the ways multiple groups can be made to interact for more powerful processing.
    You should now have some understanding of the use of advanced features in Keyman Developer, and be able
    to begin using them to improve your keyboards.
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="index_guide_language.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="index_guide_language.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="guide_lang_constraints.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Keyman Keyboard Language Guide </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Programmer's Guide - Constraints</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
