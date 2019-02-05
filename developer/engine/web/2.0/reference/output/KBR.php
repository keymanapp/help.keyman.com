<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: KBR"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="KBR">KBR</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Cancels previous feedback <a href="/developer/language/reference/beep"><code class="language-keyman">beep</code></a>
  operations across the page.</p>

<?php
syntax("KeymanWeb.KBR();");
params();
returns();
?>

<h2 id="Description" name="Description">Description</h2>

<p>The <code>KeymanWeb.KBR()</code> function is automatically called by <a href="KB"><code>KeymanWeb.KB()</code></a> after a
  short interval (approximately 1/20 of a second) and should not need to be called manually.</a>
</p>