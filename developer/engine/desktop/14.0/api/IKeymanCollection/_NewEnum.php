<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanCollection::_NewEnum() Method"
  ]);
?>

<h1>IKeymanCollection::_NewEnum() Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanCollection::_NewEnum()</code> method instantiates an enumerator for the collection. This is required for COM enumeration of the collection.
Generally, languages provide a method of iterating over a collection that uses <code>_NewEnum()</code> internally, and you will not be required to call this
directly.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>IUnknown* _NewEnum(void)</code></pre>
