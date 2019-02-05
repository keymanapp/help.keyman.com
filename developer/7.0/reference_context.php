<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">context statement</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_call.php">Prev</a> </td><th width="60%" align="center">Statements</th><td width="20%" align="right"> <a accesskey="n" href="reference_deadkey.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title"><a name="reference_context"></a>context statement</h4></div></div></div><pre class="programlisting">
context

context(%i%)
      </pre><p>
        The context statement reproduces the context stored from the rule match, or
        a single character of it, into the output.  Use the context statement as
        much as possible as it is significantly faster than using the index statement.
      </p><p>
        A single character from the context can be output (on the right-hand side of
        a rule) or matched (on the left-hand side of a rule) using context(i), which
        produces the ith character of the stored context.
      </p><p>
        Note that although the context(n) statement can be used in the left-hand side
        of a rule, the context statement cannot.
      </p><h5><a name="id734879"></a>Example</h5><pre class="programlisting">
any(cons) "W" + any(key) &gt; context index(keyout,3)
        
"contex" + "t" &gt; context(2) context(6)     c outputs "ox"
      </pre><h5><a name="id735293"></a>Versions</h5><p>The context(n) construct was introduced in version 6.0.</p><h5><a name="id735538"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference__struct.php" title="Language Structure">Language Structure</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_call.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_statements_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_deadkey.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">call statement </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> deadkey statement</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
