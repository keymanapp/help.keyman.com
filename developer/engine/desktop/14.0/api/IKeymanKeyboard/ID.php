<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboard::ID Property"
  ]);
?>

<h1>IKeymanKeyboard::ID Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboard::ID</code> property returns
the base name of the keyboard .kmx file, sans extension. The full filename,
including path, of the keyboard is available in the <a href='Filename'><code>Filename</code></a> property.</p>

<p>No two keyboards
can share the same identifier in a Keyman Engine installation. The identifier
is case insensitive and should consist of letters, digits and underscores, although
some legacy identifiers may contain other characters as well. The initial character of
an identifier should be a letter.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly string ID</code></pre>
