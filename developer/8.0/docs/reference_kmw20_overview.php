<?php
  require_once('includes/template.php');

  head([
    'title' => "KeymanWeb 2.0 Overview"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">KeymanWeb 2.0 Overview</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_kmw20_index.php">Prev</a> </td><th width="60%" align="center">KeymanWeb 2.0</th><td width="20%" align="right"> <a accesskey="n" href="reference_kmw20_core.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="reference_kmw20_overview">KeymanWeb 2.0 Overview</h3></div></div></div><p>
    <span class="emphasis"><em>KeymanWeb</em></span> is a cross-browser JavaScript input method solution.
  </p><p>
    The <span class="emphasis"><em>KeymanWeb 2 API</em></span> provides Javascript functions to allow a website developer 
    to integrate the use of <span class="emphasis"><em>KeymanWeb</em></span> multi-lingual keyboard mapping into a website, 
    using either a standard or a custom-designed user-interface.  The functions are 
    exposed as API calls to the <span class="emphasis"><em>KeymanWeb</em></span> core, the <span class="emphasis"><em>On-Screen Keyboard</em></span> module, 
    a <span class="emphasis"><em>Utility function</em></span> library, or one of the standard <span class="emphasis"><em>User Interface</em></span> modules.
  </p><p>
    A <span class="emphasis"><em>KeymanWeb</em></span> instance is automatically constructed when you include the compiled KeymanWeb script
    (kmw-release.js) in your web page source.
  </p><p>
    The <span class="emphasis"><em>KeymanWeb API</em></span> comprises the following objects:
  </p><div class="informaltable"><table border="1"><colgroup><col><col></colgroup><thead><tr><th align="left">Object</th><th align="left">Exposed as</th></tr></thead><tbody><tr><td align="left"><span class="emphasis"><em>Core</em></span></td><td align="left"><code class="code">window.tavultesoft.keymanweb</code></td></tr><tr><td align="left"><span class="emphasis"><em>On-Screen keyboard</em></span></td><td align="left"><code class="code">window.tavultesoft.keymanweb.osk</code></td></tr><tr><td align="left"><span class="emphasis"><em>Utility Functions</em></span></td><td align="left"><code class="code">window.tavultesoft.keymanweb.util</code></td></tr><tr><td align="left"><span class="emphasis"><em>User Interface</em></span></td><td align="left"><code class="code">window.tavultesoft.keymanweb.ui</code></td></tr></tbody></table></div><p>
    All exposed functions are called using standard Javascript syntax, e.g.: 
  </p><pre class="programlisting">
var result=object.functionName(arguments)
  </pre><p>
    One way to access the API functions is to define a global scope 
    variable <span class="emphasis"><em>kmw</em></span> and invoke all functions relative 
    to that variable, e.g.:
  </p><pre class="programlisting">
var kmw = window.tavultesoft.keymanweb;
kmw.helpURL = myURL;
kmw.osk.show();
  </pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_kmw20_index.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_kmw20_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_kmw20_core.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">KeymanWeb 2.0 </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> KeymanWeb Core Module</td></tr></table></div>
