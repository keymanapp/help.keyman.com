<?php
  require_once('includes/template.php');

  head([
    'title' => "group statement"
  ]);
?>

<h1 class="title" id="reference_group">group()</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>group()</strong></code> statement defines a set of rules to be processed together.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>group(<var>groupName</var>)
group(<var>groupName</var>) using keys
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>groupName</code></dt>
  <dd>The unique name of the group, which can be referenced by <a href='use'><code>use()</code> statements</a>.</dd>
</dl>

<p>The <code>group()</code> statement tells Keyman to start a new set of rules. Keyman supports two sorts of groups: key processing groups, and context processing
groups. Key processing groups can include context checking, but context processing groups cannot include key checking. Keyman will use
first the group specified in the <a href='begin.php'><code>begin</code> statement</a>, and move from there onto other groups.</p>

<p>To tell Keyman that the group should include key processing, you should include the <code>using keys</code> section of the statement; if that is
left out, the group checks the context only. The keystroke will remain the same during processing; you can have many groups that each use <code>using keys</code>,
and the keystroke will be the same for all of them. The key section of a rule (including the <code>+</code> sign) is not valid for context processing groups.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_group" name="Example:_Using_group">Example: Using <code>group()</code></h3>

<pre><code>group(main) using keys
group(syllablecheck)
</code></pre>

<h2>Platforms</h2>

<p>The <code>group()</code> statement can be used in keyboards on all platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>The group construct was introduced in Keyman 3.0.</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="../guide/groups" title="Using groups">Using groups</a></li>
  <li><a href="use" title="use() statement"><code>use()</code> statement</a></li>
</ul>