<?php
    require_once('includes/template.php');
    $class = '';
    $event = 'onPackageInstalled';
    $param1 = 'keyboardsInstalled';
    $eventSyntax = sprintf('public void %s(List&lt;<var>HashMap&lt;String key, String value&gt;&gt; %s</var>)', $event, $param1);
    head(['title' => $event.'()']);
?>

<h1>onPackageInstalled()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $event.'()' ?></strong></code> event is called when a keyboard package has been installed.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $eventSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
<dd>The information dictionaries of the keyboards installed from a keyboard package with keys and values defined as <code>List&lt;HashMap&lt;String key, String value&gt;&gt;</code>.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>
<p>Implement this method to handle keyboard package installed event.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method” name="Example:_Using_method">Example: Using <code><?php echo $event.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $event.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    @Override
    public void onPackageInstalled(List<HashMap&lt;String key, String value&gt;> keyboardsInstalled) {
        // handle keyboard package installed event here
    }
</code></pre>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="onLexicalModelInstalled.php" title="Title."><code>onLexicalModelInstalled()</code></a></li>
</ul>
