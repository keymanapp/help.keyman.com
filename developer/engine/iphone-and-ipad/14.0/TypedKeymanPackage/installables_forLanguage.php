<?php
    require_once('includes/template.php');
    $class = 'TypedKeymanPackage';
    $param1 = 'forLanguage';
    $method = sprintf('installables(%s:)', $param1);
    $title = $class.'.'.$method;
    $methodSyntax1 = sprintf('%s.%s -> [ TypedLanguageResource ]', $class, $method);
    head(['title' => $title]);
?>

<h1>.installables(forLanguage:)</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?= $title ?></strong></code> method enumerates all resources and language pairings
supported by the current package for the specified language code.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?= $methodSyntax1 ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
  <dt><code><?= $param1 ?>: String</code></dt>
  <dd>A BCP-47 language code.</dd>
</dl>

<h3 id="Value" name="Value">Value</h3>
<p>
An array of <code>InstallableKeyboard</code> (for a <code>KeyboardKeymanPackage</code>) or  
<code>InstallableLexicalModel</code> (for a <code>LexicalModelKeymanPackage</code>) instances.
<br/><br/>
For most packages, there will only be a single entry in this array.  However, note that multi-keyboard 
packages may support multiple keyboards for the same target language.
</p>

<h2 id="History" name="History">History</h2>
Added in Keyman Engine for iPhone and iPad 14.0.

<h2 id="See_also" name="See_also">See also</h2>

<dl>
    <dt><code><a href='findResource.php'>findResource(withID:) -> TypedLanguageResource? </a></code></dt>
    <dd>Returns the resource matching the specified ID, if contained within the package.</dd>
    <dt><code><a href="installables.php">installables: [[ TypedLanguageResource ]]</a></code></dt>
    <dd>Returns a list of all resources & language pairings supported by this package.</dd>
</dl>
