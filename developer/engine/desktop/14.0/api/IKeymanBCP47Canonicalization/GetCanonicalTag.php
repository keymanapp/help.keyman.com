<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanBCP47Canonicalization::GetCanonicalTag Method"
  ]);
?>

<h1>IKeymanBCP47Canonicalization::GetCanonicalTag Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanBCP47Canonicalization::GetCanonicalTag</code> method returns a canonical tag according to data from
<a href="https://github.com/silnrsi/langtags">SIL langtags.json</a>. The method will convert ISO639-3 language tags, ISO639-1 language tags, remove suppressed
script tags, and append a default region if one is not present.</p>

<p><b>Note:</b> This tag may not always be identical to a Windows canonical tag. A region subtag may be present in the canonical
tag which may later be removed by Windows, if Windows believes the language is used in only one region.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>string GetCanonicalTag(string Tag)</code></pre>

<h2>Parameters</h2>

<dl>
  <dt><code>Tag</code></dt>
  <dd>The BCP 47 tag to canonicalize.</dd>
</dl>
