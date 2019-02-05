<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">nul statement</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_notany.php">Prev</a> </td><th width="60%" align="center">Statements</th><td width="20%" align="right"> <a accesskey="n" href="reference_outs.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title"><a name="reference_nul"></a>nul statement</h4></div></div></div><pre class="programlisting">
nul
      </pre><p>
        The nul statement will delete the context and key on the left hand side of the rule from the 
        output; it is equivalent to having an empty output (which is not allowed).  The nul statement
        probably will not be used often, because there are not many times you would want to delete the
        context and keystroke.  The nul command must be the only character or command on the right
        hand side of the rule.
      </p><p>
        nul can be used in the context in one special situation.  It is used at the start of the 
        context to tell Keyman to find a match only if the 'nul' statement is before the start of the
        context buffer.  For example, you may use this to test if the user is typing a character at the
        start of a paragraph, and use a different character in this situation.
      </p><p>
        Be careful when using nul in the context.  Unless the user is using a Text Services Framework 
        aware application, context will be empty after cursor movement, menu access, or many other
        situations.  This means that the nul keyword may match in such situations, where you are not 
        expecting it, for example in the middle of a word.
      </p><p>
        In a Text Services Framework application, the nul keyword will match at the start of a text buffer,
        and nowhere else.  For example, in Word 2002, it will match at the start of the document, after a 
        page, column or section break, at the start of a header or footer, at the start of a table cell and
        other similar situations.
      </p><h5><a name="id736091"></a>Example</h5><pre class="programlisting">
any(cons) + any(key) &gt; nul      c delete consonant and current keystroke
nul + 'a' &gt; 'A'                 c match 'a' only if context buffer is empty
      </pre><h5><a name="id736228"></a>Versions</h5><p>The nul statement was introduced in Keyman 3.0.</p><h5><a name="id735862"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference_context.php" title="context statement">context statement</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_notany.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_statements_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_outs.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">notany statement </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> outs statement</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
