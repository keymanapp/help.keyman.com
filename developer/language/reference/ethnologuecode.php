<?php
  require_once('includes/template.php');

  
?>

<h1 class="title" id="reference_ethnologuecode">&amp;EthnologueCode</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>&amp;EthnologueCode</strong></code> store specifies the language code a keyboard is designed for, from the ISO 639-3 standard.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre class="language-keyman"><code>store(&amp;Ethnologuecode) "<var>code</var>[ <var>code2</var> [...]]"
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>code</code>, <code>code2</code>...</dt>
  <dd>The ISO 639-3 (formerly Ethnologue) codes for which the keyboard is designed.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>The optional <code>&amp;EthnologueCode</code> store specifies the language the keyboard is made for by use of an ISO 639-3
three-letter language code. This information is intended for use by third-party applications, and is also used by the compiler
to generate metadata for KeymanWeb.</p>

<p>For a list of codes, or more information about Ethnologue, see <a class="ulink" href="http://www.ethnologue.com/" target=
"_blank">www.ethnologue.com</a>.</p>

<p>Multiple codes can be included by separating them with spaces. You should not include punctuation between
codes. However, for legacy reasons, applications that process this store should ignore any punctuation found.</p>

<p>A proposed addition to this field is to add script or country identifiers as needed.</p>

<p>The <code>&amp;EthnologueCode</code> store is deprecated. Keyboard Package
  <a href="/developer/current-version/reference/file-types/metadata#obj-language">metadata</a> should be used instead, which
  is defined by the BCP 47 language code in the <a href="/developer/current-version/context/keyboard-editor#details">keyboard editor</a>.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_ethnologuecode" name="Example:_Using_ethnologuecode">Example: Using <code>&amp;ethnologuecode</code></h3>

<pre><code>store(&amp;ethnologuecode) "ice"    c Icelandic
</code></pre>

<h2>Platforms</h2>

<p>The <code>&amp;ethnologuecode</code> store can be used in keyboards on all platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>Keyman 10.0: The <code>&amp;Ethnologuecode</code> store was deprecated.</p>
<p>The <code>&amp;Ethnologuecode</code> store was introduced in Keyman 6.0.</p>
