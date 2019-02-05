<?php
  require_once('includes/template.php');

  head([
    'title' => "baselayout()"
  ]);
?>

<h1 class="title" id="reference_version">baselayout()</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>baselayout()</strong></code> statement tests the physical hardware keyboard that the Keyman keyboard is running on top of.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>baselayout(<var>layoutName</var>) ... > ...
if(&amp;baselayout = <var>layoutName</var>) ... > ...
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>layoutName</code></dt>
  <dd>The name or identifier of the layout to compare against. This should be an ISO 639 Language Name and ISO3166 Country Code pair, separated by <code>-</code> (hyphen), e.g. <code>"en-US"</code>,
  or it can be the name of a Windows keyboard DLL, e.g. <code>"kbdus.dll"</code>. The second form is self-evidently not portable, as it relies on Windows DLLs, and is best avoided.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>The <code>baselayout()</code> statement allows a keyboard to test the user's physical layout and adjust the ruleset accordingly. For example, several Classical Greek keyboards 
placed the iota subscript on the <span class='key'>|</span> (vertical bar) key. This is reasonably accessible on a US keyboard, but is much harder to find on some European layouts.
Adding an alternate method of accessing the key on a European layout reduces the complexity of using the keyboard.</p>

<p>The <code>baselayout()</code> statement is currently only supported on Keyman Desktop for Windows, as determining the base layout on web platforms is inconsistent. The concept of
a base layout is not present on touch devices. On web and touch devices, the <code>baselayout()</code> test will return <code>true</code> only for <code>"en-US"</code>.</p> 

<p>Typically, the <code>baselayout()</code> form is cleaner to use than the <code>if(&amp;baselayout)</code> form. However, the <code>if()</code> form has one advantage: you can do a
negative test with the <code>!=</code> operator.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_baselayout" name="Example:_Using_baselayout">Example: Using <code>baselayout()</code></h3>

<pre><code>+ '|' > U+0345
baselayout('fr-FR') + '§' > U+0345
</code></pre>

<h2>Platforms</h2>

<p>The <code>baselayout()</code> statement can be used in keyboards on all platforms, but all platforms other than Windows match only on a blank string (<code>""</code>) at present.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✘</td><td>✘</td><td>✘</td><td>✘</td><td>✘</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>Note: full support is available in Keyman Desktop 9.0.511.0 and Keyman Developer 9.0.511.0 and later versions, due to bugs in earlier builds.</p>

<p>The <code>baselayout()</code> statement was introduced in Keyman 9.0.</p>
