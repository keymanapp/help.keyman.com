<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanObject::SerializeXML Method"
  ]);
?>

<h1>IKeymanObject::SerializeXML Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanObject::SerializeXML</code> method serializes the properties and owned objects of the object as XML. The
content of the XML varies by interface. Some objects will serialize image data as well, for example keyboard files will serialize
an icon for the keyboard, which will be saved to disk as a temporary file.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>string SerializeXML(KeymanSerializeFlags Flags, string ImagePath, out string[] References)</code></pre>

<h2>Parameters</h2>

<dl>
  <dt><code>Flags</code></dt>
  <dd>Can be <code>0</code> or <code>ksfExportImages</code>.</dd>
</dl>

<dl>
  <dt><code>ImagePath</code></dt>
  <dd>If <code>ksfExportImages</code> is set, then this must contain a valid fully qualified path where temporary image files will be saved.</dd>
</dl>

<dl>
  <dt><code>References</code></dt>
  <dd>If <code>ksfExportImages</code> is set, then on return includes a list of all image files generated for the XML.</dd>
</dl>

<h2>Return Value</h2>

<p><code>IKeymanObject::SerializeXML</code> returns a well-formed snippet of XML in a string.</p>
