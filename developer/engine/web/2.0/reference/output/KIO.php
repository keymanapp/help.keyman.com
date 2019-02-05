<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: KIO"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="KIO">KIO</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Index-based output:  Outputs a mapped character according to a previous selection from a <code>KeymanWeb.KA()</code>
  call upon a <a href="/developer/language/reference/store"><code class="language-keyman">store</code></a>
  string, after deleting <code>nd</code> characters.</p>

<?php
syntax("KeymanWeb.KIO(nd, store, index, Pelem);");
params("nd", "number", "The number of characters to be overwritten.",
  "store", "string", "The store string to be used for mapping a character previously detected via <code>KeymanWeb.KA()</code>".
    ", which itself maps to a <a href='/developer/language/reference/any'><code class='language-keyman'>any</code></a> call.",
  "index", "number", "The index id to which the detected character's index in the original matching array ".
    "was saved.  The index id should be incremented by 1 relative to the value specified in <code>KeymanWeb.KA()</code>.",
  "Pelem", "Element", "The HTML element receiving the output.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>This function corresponds most directly to the keyboard language command <a href="/developer/language/reference/index">
    <code class="language-keyman">index</code></a>, which operates upon text <a href="/developer/language/reference/store">
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
  <code>KeymanWeb.KIO()</code>'s role in this process is usually optimized out into individual mappings for performance reasons,
  though it is often involved when <code class="language-keyman">any</code> is involved as part of a rule's
  <code class="language-keyman">context</code>, rather than upon the triggering keystroke itself.</p>
<p>In order to output the desired character corresponding to <code>'a'</code> in the <code>output</code>
  <code class="language-keyman">store</code> above, the code </p>
<?=codebox("KeymanWeb.KIO(0, 'αβγδε', 1, Pelem)")?>
<p>would suffice, overwriting no characters and using the previously-matched index (id = 0 + 1).  Note that the
  <code>KeymanWeb.KIO()</code></a> call must increment the id by 1 due to Keyman's keyboard language rules, which corresponds
  directly to the <code class="language-keyman">index</code> call in the keyboard source above.</p>

<h2>See also</h2>

<p><a href="KA"><code>KeymanWeb.KA()</code></a></p>