<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: any"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="KA">any (KA) (Deprecated)</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>(Deprecated) Returns whether or not the char <code>ch</code> is found within the <a href="/developer/language/reference/any">
    <code class="language-keyman">any</code></a>(<a href="/developer/language/reference/store"><code class="language-keyman">store</code></a>)
  string, setting the internally-tracked index 'n' accordingly.</p>

<?php
syntax("keyman.interface.any(index, ch, storeText);", "KeymanWeb.KA(index, ch, storeText); // Shorthand");
params("index", "number", "The index id (starting from zero) at which the detected character will be internally tracked.",
  "ch", "string", "The input character to find in the text store.",
  "storeText", "string", "The contents of the specified text <code class='language-keyman'>store</code>.");
returns("boolean", "<code>true</code> if the input character has a match in the text store, otherwise <code>false</code>.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>This function corresponds most directly to the keyboard language command <a href="/developer/language/reference/any">
    <code class="language-keyman">any</code></a>, which operates upon text <a href="/developer/language/reference/store">
    <code class="language-keyman">store</code></a>s to allow for array-based input-output text matching.  For example,
</p>

<?=codebox(<<<END
store(keys)   'abcde'
store(output) 'αβγδε'
+ any(keys) > index(output,1)
END
, "language-keyman");
?>
<p>facilitates mapping the characters <code>'abcde'</code> to their respective entry in the output store <code>'αβγδε'</code>.
<code>keyman.interface.any()</code>'s role in this process is usually optimized out into individual mappings for performance reasons,
  though it is often involved when <code class="language-keyman">any</code> is involved as part of a rule's
  <code class="language-keyman">context</code>, rather than upon the triggering keystroke itself.</p>
<p>In order to check if the character <code>'a'</code> has a match in the <code>keys</code> <code class="language-keyman">store</code>
above, the code </p>
<?=codebox("keyman.interface.any(0, 'a', 'abcde')")?>
<p>would suffice, setting an internally-tracked index (id=0) to hold the index value 0.   Note that the internally-tracked
  index (id=0) is decremented relative to the index appearing in the <code class="language-keyman">index</code> call in
  the keyboard source above; the corresponding <a href="indexOutput"><code>keyman.interface.indexOutput()</code></a> call increments the id by
  1 due to Keyman's keyboard language rules.</p>

<h2>See also</h2>

<p><a href="indexOutput"><code>keyman.interface.indexOutput()</code></a></p>
