<?php
  require_once('includes/template.php');

  head([
    'title' => "Comments"
  ]);
?>

<h1 class="title" id="reference__struct_comments">Comments</h1>

<p>Comments must be started with a <code>&nbsp;c </code> character (case-insensitive), and followed by a space character. The comment continues
to the end of the line and cannot be <a href="long-lines.php" title="Long lines and continuations">line-extended</a>. Comments can only 
be included in the last line of a <a href="long-lines.php" title="Long lines and continuations">line-extended</a> line.</p>

<h2>Example</h2>

<pre class="language-keyman"><code>c This is a comment line
+ 'a' > 'b'    c This line changes "a" to "b"
+ 'c' > \
        'd'    c A comment here is okay too
</code></pre>

<h2>Version history</h2>

<p>Comments were introduced in Keyman 3.0.</p>
