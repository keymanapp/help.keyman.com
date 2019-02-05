<?php
  require_once('includes/template.php');

  head([
    'title' => "Using Stores"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Using Stores</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference__struct_silkey.php">Prev</a> </td><th width="60%" align="center">Language Structure</th><td width="20%" align="right"> <a accesskey="n" href="reference__struct_strings.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference__struct_stores">Using Stores</h4></div></div></div><p>
        Stores provide a facility to match a character against an array of characters.  They can also be used to 
        give mnemonic names to strings.  Keyman 5.0 introduced the concept of <a class="link" href="reference__struct_headers.php" title="Header keywords">system
        stores</a> that replace the header statements used in earlier versions of Keyman.
      </p><p>
        The most common use of stores is to reduce the number of rules required in a keyboard by matching multiple
        characters rather than a single character in a rule.  This is accomplished with the <a class="link" href="reference_any.php" title="any statement">any</a>
        and <a class="link" href="reference_index.php" title="index statement">index</a> statements.  The any statement, on the left hand side of a rule, will
        match any character in a given store, while the index statement, on the right hand side of the same rule,
        will return the character at the corresponding position in another store.  In the following example, the index
        statement 
      </p><pre class="programlisting">
store(lowercase) "aeiou"
store(uppercase) "AEIOU"

+ any(lowercase) &gt; index(uppercase, 1)    c translate vowels to upper case
      </pre><p>
        Starting with version 6.0 of Keyman, <a class="link" href="reference_deadkey.php" title="deadkey statement">deadkeys</a> and 
        <a class="link" href="reference__struct_vkeys.php" title="Virtual Keys and Virtual Character Keys">virtual keys</a> are permitted in store statements.
      </p><p>
        The following statements are used with stores:
      </p><table><tbody><tr>
      <td><a class="link" href="reference_any.php" title="any statement">any</a></td>
      <td>Matches on an array of characters</td>
    </tr><tr>
      <td><a class="link" href="reference_index.php" title="index statement">index</a></td>
      <td>Outputs from an array of characters </td>
    </tr><tr>
      <td><a class="link" href="reference_outs.php" title="outs statement">outs</a></td>
      <td>Outputs an array of characters </td>
    </tr><tr>
      <td><a class="link" href="reference_store.php" title="store statement">store</a></td>
      <td>Defines an array of characters </td>
    </tr></tbody></table><p>In Keyman Developer 7.0, stores have a maximum length of 4095 characters (note that some elements such as virtual keys take
  more than one character in the store).  In earlier versions, this limit was 255 characters.</p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference__struct_silkey.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_language_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference__struct_strings.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Compile Targets (Keyman, KeymanWeb, and SILKey) </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Strings</td></tr></table></div>
