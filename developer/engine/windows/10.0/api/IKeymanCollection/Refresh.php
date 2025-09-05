<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanCollection::Refresh() Method"
  ]);
?>

<h1>IKeymanCollection::Refresh() Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanCollection::Refresh()</code> method refreshes the collection. All existing elements in the
collection are invalidated, even if nothing has changed.</p>

<p>Generally, it is better to call the top-level <code><a href='../IKeyman/Refresh'>IKeyman::Refresh</a></code> as that will ensure that 
the Keyman API snapshot is internally consistent. See <code><a href='../IKeyman/Refresh'>IKeyman::Refresh</a></code> for more information
on Keyman API snapshots.</p>
</p>

<h2>Specification</h2>

<pre class="language-clike"><code>void Refresh(void)</code></pre>
