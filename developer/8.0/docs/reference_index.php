<?php
  require_once('includes/template.php');

  head([
    'title' => "index statement"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">index statement</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_if.php">Prev</a> </td><th width="60%" align="center">Statements</th><td width="20%" align="right"> <a accesskey="n" href="reference_match.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_index">index statement</h4></div></div></div><pre class="programlisting">
    index(%snStore%,%nOffset%)
  </pre><p>
    The index statement gets the offset of the character from the left side of the rule
    at offset nOffset.  The offset refers to the position, including other characters,
    to the any statement which has saved the offset which it found the character in.
    The index will output the character at that offset from the store snStore.  If used
    carefully, the index and any combination can be very powerful.  In previous versions
    of Keyman, the index statement was only valid in the output; it can now be used also
    in the context (but not the key section), as long as the source it refers to is before
    it.
  </p><p>
    snStore: The store to output from
    nOffset: The offset in the input to retrieve the any information from.
  </p><h5><a name="id596649"></a>Example</h5><pre class="programlisting">
any(cons) "W" + any(key) &gt; index(keyout,3) "w" index(cons,1)
  </pre><p>
    The following example shows how the index statement can be used in the left hand side of a rule.  If
    a repeating vowel is found, then this rule puts a circumflex on top of both vowels when '^' is pressed.
  </p><pre class="programlisting">
store(vowel)     'aeiou'
store(vowelcirc) 'âêîôû'
any(vowel) index(vowel,1) + '^' &gt; index(vowelcirc,1) index(vowelcirc,2)
  </pre><h5><a name="id597553"></a>Versions</h5><p>
    The index statement was introduced in Keyman 3.0. As of version 6.0, it can
    also be used in the left-hand side of a rule.
  </p><h5><a name="id597352"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p>
        <a class="xref" href="reference__struct_stores.php" title="Using Stores">Using Stores</a>
      </p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_if.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_statements_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_match.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">if statement </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> match rule</td></tr></table></div>
