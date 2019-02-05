<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">KMComp Command-line Options</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="context_frmStartup.php">Prev</a> </td><th width="60%" align="center">Chapter 5. Context Help</th><td width="20%" align="right"> <a accesskey="n" href="context_frmCharacterMapNew.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="context_kmcomp"></a>KMComp Command-line Options</h2></div></div></div><p>
        KMComp is the command-line compiler included in Keyman Developer.
      </p><p>
        The following parameters are available:
      </p><p>
    </p><pre class="programlisting">
kmcomp [-s] [-d] [-pKeymanPath] infile [outfile.kmx [error.log]]
      </pre><p>
  </p><p>
        <code class="code">infile</code> can be either a .kmn file or .kps file
        </p><p>
        <code class="code">outfile.kmx</code> is optional, and can only be specified for a .kmn infile
        </p><p>
        <code class="code">error.log</code> is optional, and can only be specified when outfile.kmx is specified.
      </p><p>
        <code class="code">-d</code> include debug information in the compiled file
        </p><p>
        <code class="code">-s</code> silent; don't display unnecessary information on screen
        </p><p>
        <code class="code">-p</code> set Keyman program path to KeymanPath (when building a redistributable installer)
      </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="context_frmStartup.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="context.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="context_frmCharacterMapNew.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Splash Screen </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Using the Character Map</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
