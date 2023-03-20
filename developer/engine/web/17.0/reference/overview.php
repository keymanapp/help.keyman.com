<?php
  require_once('includes/template.php');

  head([
    'title' => "KeymanWeb 17.0 Overview"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="overview">Overview</h1>

<p>
    <span class="emphasis"><em>KeymanWeb</em></span> is a cross-browser JavaScript input method solution.
  </p><p>
    The <span class="emphasis"><em>KeymanWeb 10 API</em></span> provides JavaScript functions to allow a website developer
    to integrate the use of <span class="emphasis"><em>KeymanWeb</em></span> multi-lingual keyboard mapping into a website,
    using either a standard or a custom-designed user-interface.  The functions are
    exposed as API calls to the <span class="emphasis"><em>KeymanWeb</em></span> core, the <span class="emphasis"><em>On-Screen Keyboard</em></span> module,
    a <span class="emphasis"><em>Utility function</em></span> library, or one of the standard <span class="emphasis"><em>User Interface</em></span> modules.
  </p><p>
    A <span class="emphasis"><em>KeymanWeb</em></span> instance is automatically constructed when you include the compiled KeymanWeb script
    (kmw-release.js) in your web page source.
  </p><p>
  The <span class="emphasis"><em>KeymanWeb API</em></span> comprises the following objects:
</p>
<dl>
  <dt><em>Core</em></dt>
  <dd>Exposed as <a href="core"><code>keyman</code></a>.</dd>
  <dt><em>On-Screen Keyboard</em></dt>
  <dd>Exposed as <a href="osk"><code>keyman.osk</code></a>.</dd>
  <dt><em>Utility Functions</em></dt>
  <dd>Exposed as <a href="util"><code>keyman.util</code></a>.</dd>
  <dt><em>User Interface</em></dt>
  <dd>Exposed as <a href="ui"><code>keyman.ui</code></a>.</dd>
</dl>
</div>