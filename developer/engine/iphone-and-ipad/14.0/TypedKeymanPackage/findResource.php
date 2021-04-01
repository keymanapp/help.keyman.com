<?php
    require_once('includes/template.php');
    $class = 'TypedKeymanPackage';
    $param1 = 'withID';
    $method = sprintf('findResource(%s:)', $param1);
    $title = $class.'.'.$method;
    $methodSyntax1 = sprintf('%s.%s -> TypedLanguageResource?', $class, $method);
    head(['title' => $title]);
?>

<h1>.findResource(withID:)</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?= $title ?></strong></code> method allows direct lookup of a resource's metadata.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?= $methodSyntax1 ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
  <dt><code><?= $param1 ?>: TypedLanguageResource.FullID</code></dt>
  <dd>The unique identifier for the desired keyboard or lexical model and target language.</dd>
</dl>

<h3 id="Value" name="Value">Value</h3>
<p>
An <code>InstallableKeyboard</code> (for a <code>KeyboardKeymanPackage</code>) or  
<code>InstallableLexicalModel</code> (for a <code>LexicalModelKeymanPackage</code>).
<br/><br/>
May be <code>nil</code> if no resource matching the specified ID is found within the package.
</p>

<h2 id="History" name="History">History</h2>
Added in Keyman Engine for iPhone and iPad 14.0.

<h2 id="See_also" name="See_also">See also</h2>

<dl>
    <dt><code><a href="installables.php">installables: [[ TypedLanguageResource ]]</a></code></dt>
    <dd>Returns a list of all resources & language pairings supported by this package.</dd>
    <dt><code><a href="installables_forLanguage.php">installables(forLanguage: String): [ TypedLanguageResource ]</a></code></dt>
    <dd>Provides the same functionality as the field above, but filtered to a specific language code.</dd>
</dl>
