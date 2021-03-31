<?php
    require_once('includes/template.php');
    $class = 'LanguageResource';
    $method = 'fieldName'; // stub
    $methodSyntax = sprintf('%s.%s', $class, $method);
    head([
        'title' => $class
    ]);

    // See https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array for sample
?>

<h1>LanguageResource protocol</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <strong><?= $class ?></strong> protocol and the types that implement it 
(<code>InstallableKeyboard</code> and <code>InstallableLexicalModel</code>) represent
keyboards and lexical models installed within the KeymanEngine.</p>

<p>Generally speaking, this is a lower-level type than <a href='LanguageResourceFullID.php'>
<code>LanguageResourceFullID</code></a>, requiring extra metadata only discovered during installation
from a resource's package and only used internally within the KeymanEngine.</p> 

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?php echo $methodSyntax ?></code></pre>

<h2 id="Description" name="Description">Description</h2>
<p>The <code>LanguageResource</code> protocol is the base type used to represent specific types of
installed resources within the KeymanEngine, paired with their target languages.  Both 
<code>InstallableKeyboard</code> and <code>InstallableLexicalModel</code> implement this protocol, 
allowing methods to be written that can handle either resource type.  Also note the existence 
of <code>AnyLanguageResource</code>, which serves a "type erasure" role for classes implementing 
this protocol.</p>

<p>Important note:  multiple copies of <code>LanguageResource</code> for the same underlying 
resource will exist if that resource has been installed for use with multiple languages.  One instance
will exist per target language that was selected for installation.</p>

<h2 id="Associated_types" name="Associated_types">Associated Types</h2>
<dl>
    <dt><code>FullID: <a href='LanguageResourceFullID.php'>LanguageResourceFullID</a></code></dt>
    <dd>The type used to uniquely identify the resource, comprised of the resource's ID, type, 
    and paired language code.  Frequently used within the engine as a unique identifier for the resource in searches and comparisons.
    </dd>
    <dt><code>Package: <a href="../KeymanPackage">KeymanPackage</a></code></dt>
    <dd>The derived type of KeymanPackage supporting this type of resource.
    <br/><br/>
    For example, <code>InstallableKeyboard.Package == KeyboardKeymanPackage</code>.</dd>
</dl>

<!-- Fill in examples of how to use, etc. -->

<h2 id="Fields" name="Fields">Fields</h2>

<dl>
    <dt><code>id: String</code></dt>
    <dd>The resource's internal name.  This must be unique among all resources of the same type and
    follows standard unique ID constraints:  a-z, A-Z, 0-9, and underscores only.</dd>
    <dt><code>name: String</code></dt>
    <dd>The resource's external name, as displayed to users.</dd>
    <dt><code>languageID: String</code></dt>
    <dd>One language paired with this resource during installation.</dd>
    <dt><code>packageID: String?</code></dt>
    <dd>The ID of the resource's source package.  Is 'optional' for legacy reasons.</dd>
    <dt><code>packageKey: KeymanPackage.Key</code></dt>
    <dd>The unique identifier for the resource's source package.</dd>
    <dt><code>version: String</code></dt>
    <dd>The resource's installed version.</dd>
    <dt><code>sourceFilename: String</code></dt>
    <dd>The filename of the package component used internally within the KeymanEngine to load the resource.</dd>
    <dt><code>fullID: <a href='LanguageResourceFullID.php'>AnyLanguageResourceFullID</a></code></dt>
    <dd>A unique identifier used in language resource searches and comparisons.</dd>
</dl>

<h2 id="See_also" name="See_also">See Also</h2>
<dl>
    <dt><code><a href='../KeymanPackage'>KeymanPackage</a></code></dt>
    <dd>Represents packages containing language resources.</dd>
    <dt><code><a href='LanguageResourceFullID.php'>LanguageResourceFullID</a></code></dt>
    <dd>Unique identifiers used in language resource searches and comparisons.</dd>
</dl>