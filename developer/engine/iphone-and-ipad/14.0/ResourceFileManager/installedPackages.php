<?php
    require_once('includes/template.php');
    $class = 'ResourceFileManager';
    $field = 'installedPackages';
    $title = $class.'.'.$field;
    $fieldSyntax1 = sprintf('%s.shared.%s: [ KeymanPackage ]', $class, $field);
    head(['title' => $title]);
?>

<h1>.installedPackages()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?= $title ?></strong></code> field enumerates all packages installed
into the KeymanEngine.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?= $fieldSyntax1 ?></code></pre>

<h3 id="Value" name="Value">Value</h3>
<p>An array of <code>KeyboardKeymanPackage</code> and <code>LexicalModelKeymanPackage</code> instances.</p>

<h2 id="See_also" name="See_also">See also</h2>

<dl>
    <dt><code><a href='getInstalledPackage.php'>getInstalledPackage&lt;Resource: LanguageResource&gt;(for: Resource) -&gt; Resource.Package? </a></code></dt>
    <dd>Finds the installed package for an already-installed resource.</dd>
</dl>
