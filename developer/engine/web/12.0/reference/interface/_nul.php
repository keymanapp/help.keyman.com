<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: nul"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="KN">nul (KN)</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p><a href="/developer/language/reference/nul"><code class="language-keyman">nul</code></a> context check:  Returns <code>true</code>
  if the length of the <a href="/developer/language/reference/context"><code class="language-keyman">context</code></a>
  is less than or equal to <code>n</code> characters.</p>

<?php
syntax("keyman.interface.nul(n, Pelem);", "KeymanWeb.KN(n, Pelem); // Shorthand");
params("n", "number", "The length of <code class='language-keyman'>context</code> to check.",
  "Pelem", "Element", "The element whose <code class='language-keyman'>context</code> is being examined.");
returns("boolean", "<code>true</code> if the context is not longer than <code>n</code> characters, otherwise <code>false</code>.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>This is of particular use in handling the <a href="/developer/language/reference/nul">Developer rule
    <code class="language-keyman">nul</code></a> and is subject to the caveats listed therein.
</p>

<h2>See also</h2>

<p><a href="context"><code>keyman.interface.context()</code></a></p>