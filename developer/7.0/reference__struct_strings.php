<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Strings</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference__struct_stores.php">Prev</a> </td><th width="60%" align="center">Language Structure</th><td width="20%" align="right"> <a accesskey="n" href="reference__struct_unicode.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title"><a name="reference__struct_strings"></a>Strings</h4></div></div></div><p>
        A string is a sequence of characters.  Strings can be 
        made up of multiple concatenated substrings.  There is no general limit on the length of a string,
        although Keyman does impose limits on strings in various situations.
      </p><p>
        The following string formats are available:
      </p><table><tbody><tr>
      <th>Type </th>
      <th>Description </th>
      <th>Example </th>
    </tr><tr>
      <td>Quoted strings </td>
      <td>a list of characters, enclosed either by " or ' quote characters.  Can only use characters in the range decimal 32 - 255.  To use quotes in the string, enclose with the other quote type. </td>
      <td>
        <pre class="programlisting">store (vowels) "aeiou"</pre>
        <pre class="programlisting">+ '"' &gt; 'quote'</pre>
      </td>
    </tr><tr>
      <td>Decimal character codes </td>
      <td>a single character, in decimal format.  Range d32 - d1114111. </td>
      <td>
        <pre class="programlisting">+ d32 &gt; 'space'</pre>
      </td>
    </tr><tr>
      <td>Hexadecimal character codes</td>
      <td>a single character in hexadecimal format. Range x20 - x10FFFF. </td>
      <td>
        <pre class="programlisting">+ x20 &gt; 'space'</pre>
      </td>
    </tr><tr>
      <td>Octal character codes</td>
      <td>a single character in octal format.  Not recommended - only included for historical reasons.  Range 40 - 4177777.</td>
      <td>
        <pre class="programlisting">+ 40 &gt; 'space'</pre>
      </td>
    </tr><tr>
      <td>Unicode character codes </td>
      <td>a single character in U+xxxxxx format.  Recommended for Unicode.  Range U+0020 - U+10FFFF. </td>
      <td>
        <pre class="programlisting">+ U+0020 &gt; 'space'</pre>
      </td>
    </tr></tbody></table><p>
        Strings are concatenated by listing them together, separated by spaces. For example, the following two lines are equivalent:
      </p><p>
    </p><pre class="programlisting">
U+0041 U+0042 d67 d68 "abc" 

"ABCDabc"
      </pre><p>
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference__struct_stores.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_language_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference__struct_unicode.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Using Stores </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Unicode and ANSI</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
