<?php
    require_once('includes/template.php');
    $class = 'Manager';
    $method = 'downloadLexicalModel';
    $param1 = 'withID';
    $param2 = 'languageID';
    $param3 = 'isUpdate';
    $param4 = 'fetchRepositoryIfNeeded';
    $param5 = 'url';
    $methodSyntax1 = sprintf('%s.%s(%s: String, %s: String, %s: Bool, %s: Bool = true)', $class, $method, $param1, $param2, $param3, $param4);
    $methodSyntax2 = sprintf('%s.%s(%s: URL)', $class, $method, $param5);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>Manager.downloadLexicalModel()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?= $method.'()' ?></strong></code> method installs dictionaries (lexical models) for active use.</p>

<h2 id="Syntax1" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?= $methodSyntax1 ?></code></pre>

<h3 id="Parameters2" name="Parameters">Parameters</h3>
<dl>
    <dt><code><?= $param1 ?></code></dt>
    <dd>ID of the dictionary.</dd>
</dl>

<dl>
    <dt><code><?= $param2 ?></code></dt>
    <dd>ID of the language.</dd>
</dl>

<dl>
    <dt><code><?= $param3 ?></code></dt>
    <dd>Boolean  to keep the dictionary files on failure.</dd>
</dl>

<dl>
    <dt><code><?= $param4 ?></code></dt>
    <dd>Fetch the list of language resources from the API if necessary.</dd>
</dl>

<h2 id="Description1" name="Description">Description</h2>
<p>This syntax can be used to asynchronously fetch dictionary files.</p>

<h3 id="Example:_Using_method1" name="Example:_Using_method">Example 1: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrates the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-swift"><code>Manager.shared.downloadLexicalModel(withID: model.id, languageID: model.languageID, isUpdate: false)
</code></pre>

<br><hr>

<h2 id="Syntax2" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?= $methodSyntax2 ?></code></pre>

<h3 id="Parameters2" name="Parameters">Parameters</h3>
<dl>
    <dt><code><?= $param5 ?></code></dt>
    <dd>URL to a .MODEL.KMP package containing the dictionary.</dd>
</dl>

<h2 id="Description2" name="Description">Description</h2>
<p>This syntax can be used to asynchronously fetch the dictionary files.</p>

<h3 id="Example:_Using_method2" name="Example:_Using_method">Example 2: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrates the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-swift"><code>let url = URL(string: "https://example.com/en.example.model.kmp")
Manager.shared.downloadLexicalModel(from: url!)
</code></pre>
