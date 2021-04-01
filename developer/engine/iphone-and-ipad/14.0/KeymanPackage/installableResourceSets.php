<?php
    require_once('includes/template.php');
    $class = 'KeymanPackage';
    $field = 'installableResourceSets';
    $title = $class.'.'.$field;
    $fieldSyntax1 = sprintf('%s.%s: [[ AnyLanguageResource ]]', $class, $field);
    head(['title' => $title]);
?>

<h1>.installableResourceSets()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?= $title ?></strong></code> field enumerates all resources and language pairings
supported by the current package.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?= $fieldSyntax1 ?></code></pre>

<h3 id="Value" name="Value">Value</h3>
<p>The two dimensional array may be interpreted as follows:</p>
<pre class="language-swift"><code>package.installableResourceSets[resourceIndex][languageIndex]
</code></pre>

<dl>
  <dt><code>resourceIndex</code></dt>
  <dd>Some legacy keyboard packages may support multiple keyboards.  
      This index enumerates the unique keyboards (or lexical models) contained within the package.</dd>
  <dt><code>languageIndex</code></dt>
  <dd>Some resources support multiple languages.  For example, Keyman's default keyboard - <code>sil_euro_latin</code>
      There will be one entry for each language supported by the resource.</dd>
  <dt>The indexed value</dt>
  <dd><code>AnyLanguageResource</code> is a Swift "type erasure" that may represent either an
  <code>InstallableKeyboard</code> or an <code>InstallableLexicalModel</code>, each of which enumerates
  the metadata needed for the Keyman engine to properly load and use the resource.
  <br/><br/>
  These objects typically include data about the needed fonts, underlying language codes, and resource identifiers.</dd>
</dl>

<h2 id="See_also" name="See_also">See also</h2>

<dl>
    <dt><code><a href="../TypedKeymanPackage/installables.php">
    KeyboardKeymanPackage.installables: [[ InstallableKeyboard ]]</a></code></dt>
    <dd>The equivalent field for keyboard packages.</dd>
    <dt><code><a href="../TypedKeymanPackage/installables.php">LexicalModelKeymanPackage.installables: [[ InstallableLexicalModel ]]
    </a></code></dt>
    <dd>The equivalent field for lexical model packages.</dd>
    <dt><code><a href="installableResources.php">installableResources(forLanguage: String): [ AnyLanguageResource ]</a></code></dt>
    <dd>Provides the same functionality as this field, but filtered to a specific language code.</dd>
</dl>

