<?php
  require_once('includes/template.php');

  head([
    'title' => "call statement"
  ]);
?>

<h1 class="title" id="reference_call">call()</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>call()</strong></code> statement calls an external library.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre class="language-keyman"><code>
store(callDefinitionStore) "myimx.dll:KeyEvent"

... > <strong>call</strong>(<var>callDefinitionStore</var>)
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>callDefinitionStore</code></dt>
  <dd>The store which defines the external library function. The format of the store is discussed below.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>The <code><strong>call</strong>()</code> statement calls an Input Method Extension (IMX) DLL. Functionally it behaves like the <a href='use'><code>use()</code> statement</a>,
and can be used anywhere the <code>use()</code> statement is valid except after the <a href='begin.php'><code>begin</code> statement</a>.</p>

<p>As the <code><strong>call</strong>()</code> statement originated on Microsoft Windows, the definition is based on Windows requirements.
The store given must be referencing a function in an external DLL, which should be installed as part of a package into the same path as the
keyboard.</p>

<p>On Javascript-based platforms, including web, Android and iOS, the <code><var>callDefinitionStore</var></code> value is interpreted slightly differently.
The DLL filename is ignored, which means each called function must have a unique name (i.e. you cannot reference two DLLs from the same keyboard that have the same function
name). The compiler will locate a file with the name of the function and a '.call_js' extension, and will embed the source from this file into the compiled keyboard.
In the example above, to compile for KeymanWeb, the file 'KeyEvent.call_js' must exist in the same folder as the .kmn file. The .call_js file must be encoded in UTF-8
(with or without UTF-8 BOM).</p>

<p>The IMX functionality supports both 32-bit and 64-bit DLLs. A 64-bit DLL should be named with a .x64.dll extension, rather than just .dll.</p>

<p>The specification for the Windows DLL is available in the <a href='/developer/current-version/guides/develop/imx'>IMX documentation</a>. The specification for Javascript IMX functions is
available in the <a href='/developer/current-version/guides/develop/imx/web'>IMX Web documentation</a>.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_call" name="Example:_Using_call">Example: Using <code>call()</code></h3>

<pre><code>store(DLLFunction) "myimx.dll:KeyEvent"
+ any(key) > call(DLLFunction)
</code></pre>

<h2>Platforms</h2>

<p>The <code>call()</code> statement can be used in keyboards on the following platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✘</td><td>✘</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2><a name="id486825" id="id486825"></a>Version history</h2>

<p>Keyman 8.0: Added support for x64.</p>
<p>Keyman 8.0: Added support for web IMX.</p>
<p>The call statement was introduced in Keyman 6.0.</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="/developer/current-version/guides/develop/imx/" title="IMX Interface for Keyman">IMX Interface for Keyman Desktop</a></li>
  <li><a href="/developer/current-version/guides/develop/imx/web" title="IMX Interface for KeymanWeb">IMX Interface for KeymanWeb</a></li>
  <li><a href="use" title="use() statement"><code>use()</code> statement</a></li>
</ul>
