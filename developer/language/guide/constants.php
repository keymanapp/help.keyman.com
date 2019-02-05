<?php
  require_once('includes/template.php');

  head([
    'title' => "Named Constants"
  ]);
?>

<h1 class="title" id="reference__struct_constants">Named Constants</h1>

<p>Named constants allow you to use a descriptive name for a character, instead of its code. To define a named constant, use
<code>store(<var>charname</var>) <var>charcode</var></code>. When you wish to refer to the code, use either <code>outs(<var>charname</var>)</code> 
or <code>$<var>charname</var></code>.</p>

<p>The dollar referencing can only be used with named constants. You cannot use it for stores that have more than one character in
them, or for keys or other non-character stores. Named constants are supported for characters above plane 0.</p>

<p>Named constants can also be loaded from a file with the <a class="link" href="../reference/includecodes" title=
"&amp;includecodes system store"><code>&amp;includecodes</code> system store</a>. For instance, the Unicode Character Names can be used by
referencing unicodedata.txt. The format of this file is documented in the <code>&amp;includecodes</code> documentation.</p>

<h2>Example</h2>

<pre><code>store(CCedilla) U+00E7
+ [RALT K_C] > $CCedilla
</code></pre>

<h2>Version history</h2>

<p>Named constants were introduced in Keyman 6.0.</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="../reference/outs" title="outs statement"><code>outs</code> statement</a></li>
  <li><a href="../reference/store" title="store statement"><code>store</code> statement</a></li>
  <li><a href="../reference/includecodes" title="&amp;includecodes system store"><code>&amp;includecodes</code> system store</a></li>
</ul>
