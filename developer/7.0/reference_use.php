<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">use statement</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_store.php">Prev</a> </td><th width="60%" align="center">Statements</th><td width="20%" align="right"> <a accesskey="n" href="reference_systemstores_index.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title"><a name="reference_use"></a>use statement</h4></div></div></div><pre class="programlisting">
use(%gnGroup%)
      </pre><p>
        The use statement tells Keyman to switch processing to a new group; after Keyman has 
        gone through the new group, and any other nested groups, it will return to the previous
        one.  The use statement can be used with the match and nomatch rules; it will work the same way.
      </p><p>
        The current output is moved to the context before the new group is entered, so the new group will see the
        output from the fired rule as its context.
      </p><h5><a name="id735739"></a>Example</h5><pre class="programlisting">
any(Vowel) + any(DiacriticKey) &gt; context use(AdjustVowels)
      </pre><h5><a name="id736344"></a>Versions</h5><p>The use statement was introduced in Keyman 3.0.</p><h5><a name="id735942"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference__struct_groups.php" title="Using Groups">Using Groups</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_store.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_statements_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_systemstores_index.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">store statement </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Headers and System Stores</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
