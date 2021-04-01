<?php
    require_once('includes/template.php');
    $class = 'TypedKeymanPackage';
    $field = 'installables';
    $title = $class.'.'.$field;
    $fieldSyntax1 = sprintf('%s.%s: [[ TypedLanguageResource ]]', $class, $field);
    head(['title' => $title]);
?>

<h1>.installables()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?= $title ?></strong></code> field enumerates all resources and language pairings
supported by the current package.  This is equivalent to <a href="installableResourceSets"><code>
KeymanPackage.installableResourceSets</code></a>, but with more precise typing.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?= $fieldSyntax1 ?></code></pre>

<h3 id="Value" name="Value">Value</h3>
<p>The two dimensional array may be interpreted as follows:</p>
<pre class="language-swift"><code>package.installables[resourceIndex][languageIndex]
</code></pre>

<dl>
  <dt><code>resourceIndex</code></dt>
  <dd>Some legacy keyboard packages may support multiple keyboards.  
      This index enumerates the unique keyboards (or lexical models) contained within the package.</dd>
  <dt><code>languageIndex</code></dt>
  <dd>Some resources support multiple languages.  For example, Keyman's default keyboard - <code>sil_euro_latin</code>
      There will be one entry for each language supported by the resource.</dd>
  <dt>The indexed value</dt>
  <dd>An <code>InstallableKeyboard</code> (for a <code>KeyboardKeymanPackage</code>) or an 
  <code>InstallableLexicalModel</code> (for a <code>LexicalModelKeymanPackage</code>).
  <br/><br/>
  These objects include data about the resource's fonts, targeted language code, and resource identifiers.</dd>
</dl>

<h2 id="See_also" name="See_also">See also</h2>

<dl>
    <dt><code><a href='findResource.php'>findResource(withID:) -> TypedLanguageResource? </a></code></dt>
    <dd>Returns the resource matching the specified ID, if contained within the package.</dd>
    <dt><code><a href="installables_forLanguage.php">installables(forLanguage: String): [ TypedLanguageResource ]</a></code></dt>
    <dd>Provides the same functionality as this field, but filtered to a specific language code.</dd>
</dl>
