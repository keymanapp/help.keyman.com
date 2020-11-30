<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardLanguagesFile::Items[Index] Property"
  ]);
?>

<h1>IKeymanKeyboardLanguagesFile::Items[Index] Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardLanguagesFile::Items[Index]</code> property returns a reference to the installed language identified by <code>Index</code>. If the
index is out of range, exception <a href='../IKeymanError/ErrorCode'><code>KMN_E_Collection_InvalidIndex</code></a> is raised.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanKeyboardLanguage* Items[long Index]</code></pre>

<h2>Parameters</h2>

<dl>
  <dt>Index</dt>
  <dd>A zero-based index.</dd>
</dl>
