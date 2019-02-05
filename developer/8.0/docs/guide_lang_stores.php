<?php
  require_once('includes/template.php');

  head([
    'title' => "Programmer's Guide - Stores"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Programmer's Guide - Stores</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="guide_lang_rules.php">Prev</a> </td><th width="60%" align="center">Keyman Keyboard Language Guide</th><td width="20%" align="right"> <a accesskey="n" href="guide_lang_vkeys.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="guide_lang_stores">Programmer's Guide - Stores</h3></div></div></div><p>
        Stores are a method of grouping multiple characters together, in order to deal
        with them all in a similar way. The most common use of stores is to reduce the
        number of rules required in a keyboard by allowing a single rule to match
        multiple characters through the use of stores and the <code class="code">any</code> statement. An
        example of this is given in the <a class="link" href="tutorial_keyboard_7.php" title="Step 7: Testing the Keyboard">tutorial</a>.
      </p><p>
        <a class="link" href="reference__struct_headers.php" title="Header keywords">System stores</a> are stores with a name beginning with &amp;, 
        which have a special purpose, usually defining properties or behaviour of the keyboard.
      </p><p>
        Stores with only a single character are usually used to define
        <a class="link" href="reference__struct_constants.php" title="Named Constants">named constants</a>.
      </p><h4><a name="id590267"></a>Creating Stores</h4><p>
        Stores are created with the <code class="code">store</code> statement:
      </p><pre class="programlisting">
store( %storename% ) %storecontents%
   </pre><p>
        Where <em class="parameter"><code>storename</code></em> is an identifier you give to the store, and <em class="parameter"><code>storecontents</code></em>
        is the store's contents, expressed as a string or a sequence of Unicode or ANSI
        character constants. Virtual keys and deadkeys can also be used in stores.
      </p><p>
        All stores must be given unique identifiers, and are visible throughout the
        keyboard file. A store statement can be placed anywhere in a keyboard source
        file, and its visibility is unaffected.
      </p><h4><a name="id590238"></a>Using Stores</h4><p>
        Stores are most often used with the <code class="code">any</code> and <code class="code">index</code> keywords. The
        <code class="code">any</code> keyword is used in the context or key section of the rule, and will
        match any character in the specified store, remembering its index.
      </p><pre class="programlisting">
any( %store% )
      </pre><p>
        The <code class="code">index</code> statement is used to look up a character in a store at the index
        where a specified <code class="code">any</code> statement matched a character. The <code class="code">any</code>
        statement used to obtain the index is referenced by its position in the context
        and key, a 1-based number.
      </p><pre class="programlisting">
index( %store%, %position% )
  </pre><p>
        Note that an <code class="code">index</code> statement may reference an <code class="code">any</code> statement which
        uses a different store: the only requirement is that the stores used by each have
        the same length.
      </p><p>
        Example:
      </p><p>
    </p><pre class="programlisting">
any(vowel) + '^' &gt; index(vowel_circum, 1)
      </pre><p>
  </p><h4><a name="id590177"></a>Outputting Stores</h4><p>
        The <code class="code">outs</code> statement can be used to output the contents of a store. This
        can be used in another store, or in the context or output of a rule.
      </p><pre class="programlisting">
outs( %storename% )
      </pre><p>
        The <code class="code">IPAMenu.kmn</code> sample keyboard gives an example of the use of stores and
        <code class="code">outs</code> to create a menu-based keyboard for entry of characters from the
        International Phonetic Alphabet.
      </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="guide_lang_rules.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="index_guide_language.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="guide_lang_vkeys.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Programmer's Guide - Rules </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Programmer's Guide - Virtual Keys</td></tr></table></div>
