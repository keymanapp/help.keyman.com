<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboard::Bitmap Property"
  ]);
?>

<h1>IKeymanKeyboard::Bitmap Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboard::Bitmap</code> property returns an <code>IPicture</code> reference to the icon included in the
keyboard file as specified by <a href='/developer/language/reference/bitmap'><code>&amp;bitmap</code></a>. If no icon is included, a default icon is returned.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IPicture* Bitmap</code></pre>
