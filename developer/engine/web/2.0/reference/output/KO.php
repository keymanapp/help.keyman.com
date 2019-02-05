<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: KO"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="KO">KO</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Outputs the specified string to an element, overwriting <code>nd</code> characters before the caret.</p>

<?php
syntax("KeymanWeb.KO(nd, Pelem, str);");
params("nd", "number", "The number of characters to overwrite.  Passively ignores values less than zero.",
  "Pelem", "Element", "The input element to receive the output text.",
  "str", "string", "The output text to write to the input element.");
returns();
?>

<h2 id="Description" name="Description">Description</h2>

<p>This is a core element of keyboard input management within KeymanWeb, typically called automatically during keystroke
  processing events.  For comparison with <a href="/developer/language/guide/rules">Developer 'rules'</a> from keyboard source code, in the rule
</p>
<?=codebox(<<<END
"a" + "'" > "á"
END
, "language-keyman");
?>
<p>a keyboard would, after checking that the initial context (<code>"a"</code>) matches, use</p>
<?=codebox('KeymanWeb.KO(1, Pelem, "á");');?>
<p>to erase one character <code>"a"</code> and output one character <code>"á"</code>, effectively performing the desired
  replacement.</p>

<h2>See also</h2>

<p><a href="KCM"><code>KeymanWeb.KCM()</code></a></p>