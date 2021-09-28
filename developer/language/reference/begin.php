<?php
  require_once('includes/template.php');

  head([
    'title' => "begin rule"
  ]);
?>

<h1 class="title" id="reference_begin">begin</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>begin</strong></code> rule defines the starting group for the keyboard.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>begin <var>[encoding]</var> > use(<var>startGroup</var>)
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>encoding</code></dt>
  <dd><code>ANSI</code> or <code>Unicode</code>. If omitted, assumes <code>ANSI</code>.</dd>

  <dt><code>startGroup</code></dt>
  <dd>The group that processing will start at.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>The <code>begin</code> rule tells Keyman which group should be processed first when it receives a keystroke. You can specify either ANSI or
Unicode starting groups in a single <code>begin</code> rule. If <code><var>encoding</var></code> is omitted, the ANSI option is assumed, which
matches the legacy Keyman 4.0 and older <code>begin</code> rule.</p>

<p>In this context, <code>ANSI</code> means the current legacy system codepage for the computer.</p>

<p>You can include two <code>begin</code> rules in a single keyboard file. In this case, one must be Unicode and the other ANSI. Keyman will
determine which group to use on the basis of the active application.</p>

<p>Keyboards which do not contain a <code>begin Unicode</code> rule are supported only on Keyman Desktop. All other platforms will only work with Unicode.</p>

<p>The right hand side of the <code>begin</code> rule can have only a <a href='use'><code>use()</code> statement</a>. The <code>begin</code> rule is the
only rule that is not part of a group, and is required for every keyboard.</p>

<h2>Examples</h2>

<h3>Example: using <code>begin</code> in a Unicode keyboard</h3>

<pre><code>begin Unicode &gt; use(main)

group(main) using keys
</code></pre>

<h2>Platforms</h2>

<p>The <code>begin</code> statement can be used in keyboards on all platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>This line originated in SIL-CC, and a simplified version was used in Keyman for consistency. The ANSI/Unicode distinction was
introduced in Keyman 5.</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="../guide/overview" title="Keyman language overview">Keyman language overview</a></li>
  <li><a href="../guide/groups" title="Using groups">Using groups</a></li>
  <li><a href="group" title="group() statement"><code>group()</code> statement</a></li>
</ul>
