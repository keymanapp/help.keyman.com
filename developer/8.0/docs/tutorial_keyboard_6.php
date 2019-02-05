<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 6: Stores, 'any', and 'index'"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Step 6: Stores, 'any', and 'index'</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="tutorial_keyboard_5.php">Prev</a> </td><th width="60%" align="center">Keyboard Tutorial</th><td width="20%" align="right"> <a accesskey="n" href="tutorial_keyboard_7.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="tutorial_keyboard_6">Step 6: Stores, 'any', and 'index'</h3></div></div></div><h4><a name="id662217"></a>Stores, 'any', and 'index'</h4><p>
    When we have many similar rules, as in the last example on the previous page, we can group them
    together into one rule by using stores. A store is a set of characters that are grouped under a
    single name. Stores are used in rules with the <a class="link" href="reference_any.php" title="any statement"><code class="code">any</code>
    </a> and <a class="link" href="reference_index.php" title="index statement"><code class="code">index</code></a> statements. We create a store
    with a <a class="link" href="reference_store.php" title="store statement"><code class="code">store</code> statement</a>:
  </p><pre class="programlisting">
store(vowels) "aeiou"
    </pre><p>
    This creates a store called "vowels", which contains the five lowercase vowels. Note that we could
    also have written the content of the store using ANSI or Unicode character codes, in the same way
    as the output.
  </p><p>
    The <code class="code">any</code> statement is used to match a character from a specific store. For example, the following rule
    will replace any vowel with a period, when used with the store above:
  </p><pre class="programlisting">
+ any(vowels) &gt; "."
  </pre><p>
    The <code class="code">any</code> statement can be used in the context or in the key part of a rule. It cannot be used in
    the output.
  </p><p>
    The second statement that is used with stores is the <code class="code">index</code> statement. It is usually used in the output
    of a rule, and will output the character from a particular store at the same position as the character
    matched by a specified <code class="code">any</code> statement. This is best shown with an example; this rule will convert all
    input to uppercase:
  </p><pre class="programlisting">
store(lowercase) "abcdefghijklmnopqrstuvwxyz"
store(uppercase) "ABCDEFGHIJKLMNOPQRSTUVWXYZ"

+ any(lowercase) &gt; index(uppercase,1)
  </pre><p>
    When a letter, such as "j" is typed, the <code class="code">any</code> statement finds its position in the "lowercase" store; the
    <code class="code">index</code> statement then gets this index from the <code class="code">any</code> statement, and outputs the character at the same
    position in the "uppercase" store, in this case "J".
  </p><p>
    The <code class="code">index</code> statement has two parts: the store from which it takes the output character, and the number
    of the <code class="code">any</code> statement that it gets the character position from. This number is found by counting the
    characters in the context and key parts of the rule up to the any statement. Again, a few examples may
    help to illustrate this:
  </p><pre class="programlisting">
  "a" + any(somestore) &gt; index(otherstore,2)         c The 'any' statement
  c is character #2
  "ab" any(somestore) + "c" &gt; index(otherstore,3)    c The 'any' statement
  c is character #3

  c Here the 'index' statement references the second 'any' statement used,
  c which is character #4
  U+0041 any(somestore) "B" + any(otherstore) &gt; index(thirdstore,4)

  c You can have multiple 'index' statements in the output, which can
  c reference the same or different 'any's
  any(store1) + any(store2) &gt; index(store1,2) index(store2,1) index(store3,2)
  </pre><h4><a name="id662315"></a>Using stores in the Quick French keyboard</h4><p>
    We can now reduce the number of rules needed for the Quick French keyboard by using stores. We will make
    five stores: one for the unaccented vowels, and one each for vowels with acute accents, grave accents,
    circumflexes, and diereses. For clarity, the <code class="code">group</code> statement is repeated below:
  </p><pre class="programlisting">
group(Main) using keys

store( plainvowels )  'a'    'e'    'i'    'o'    'u'      'A'    'E'    'I'    'O'    'U'
store( acutevowels )  U+00E1 U+00E9 U+00ED U+00F3 U+00FA   U+00C1 U+00C9 U+00CD U+00D3 U+00DA
store( gravevowels )  U+00E0 U+00E8 U+00EC U+00F2 U+00F9   U+00C0 U+00C8 U+00CC U+00D2 U+00D9
store( circumvowels ) U+00E2 U+00EA U+00EE U+00F4 U+00FB   U+00C2 U+00CA U+00CE U+00D4 U+00DB
store( dresisvowels ) U+00E4 U+00EB U+00EF U+00F6 U+00FC   U+00C4 U+00CB U+00CF U+00D6 U+00DC

"'" + any( plainvowels ) &gt; index( acutevowels, 2 )
"`" + any( plainvowels ) &gt; index( gravevowels, 2 )
"^" + any( plainvowels ) &gt; index( circumvowels, 2 )
'"' + any( plainvowels ) &gt; index( dresisvowels, 2 )
  </pre><p>
    This is far clearer than the long list of rules that we used earlier. Obviously we should add one or two
    more ordinary rules to produce upper- and lower-case 'ç', 'ý', and also the angled quotes
    '«' and '»'. Then we will have almost finished the keyboard:
  </p><pre class="programlisting">
"'" + "y" &gt; U+00FD    c Acute-accented Y
"'" + "Y" &gt; U+00DD

"'" + "c" &gt; U+00E7    c C-cedilla
"'" + "C" &gt; U+00C7

"&lt;" + "&lt;" &gt; U+00AB    c Angled quotes
"&gt;" + "&gt;" &gt; U+00BB
  </pre><p>
    All we need to do now is to test the keyboard.
  </p><p>
    <a class="xref" href="tutorial_keyboard_7.php" title="Step 7: Testing the Keyboard">Step 7: Testing the Keyboard</a>
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="tutorial_keyboard_5.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="tutorial_keyboard.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="tutorial_keyboard_7.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Step 5: Rules with Context </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Step 7: Testing the Keyboard</td></tr></table></div>
