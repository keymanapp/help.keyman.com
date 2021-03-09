<?php
  require_once('includes/template.php');

  head([
    'title' => "Advanced Lexical Models Topics",
    'css' => ['template.css', 'prism.css', 'dev-lexical-models.css']
  ]);
?>

<h1 class="title">Advanced Lexical Models Topics</h1>

<aside>
  <p>For the following topics, <strong> knowledge of TypeScript or JavaScript is required</strong>. </p>
</aside>

<p> The Keyman lexical model engine is capable of much more sophisticated
lexical models than the one described in the
<a href="../tutorial">tutorial</a>.  To make advanced models, you will need to
modify the <a href="model-definition-file.php">model definition file</a>, also
known as the
<a href="../../../reference/file-types/model-ts.php"><code>.model.ts</code> file</a>.</p>

<p> Once you understand how to change the model.ts file, you can attempt these
customizations to an existing wordlist project: </p>
<dl>
  <dt><a href="punctuation.php">Changing the default punctuation</a></dt>
  <dt><a href="search-term-to-key.php">Creating a custom search key function</a></dt>
  <dt><a href="word-breaker.php">Customizing the word breaker</a></dt>
</dl>
