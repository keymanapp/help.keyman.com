<?php
    require_once('includes/template.php');
    $class = 'KeymanPackage';
    $method = 'methodName'; // stub
    $methodSyntax = sprintf('%s.%s()', $class, $method);
    head([
        'title' => $class
    ]);

    // See https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array for sample
?>

<h1>KeymanPackage class</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <strong><?= $class ?></strong> class and its subclasses represent Keyman package files and their contents.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?php echo $methodSyntax ?></code></pre>

<h2 id="Description" name="Description">Description</h2>
<p>The KeymanPackage is the base class used to represent various types of Keyman packages within
the Keyman Engine and their contents.  As an abstract class, it serves as a "type erasure"
for its subclasses <code>KeyboardKeymanPackage</code> and <code>LexicalModelKeymanPackage</code>,
both of which offer richer typing for certain fields and methods.</p>

<!-- Fill in examples of how to use, etc. -->

<h2 id="Fields" name="fields">Fields</h2>

<dl>
    <dt><code>key: <a href='key.php'>KeymanPackage.Key</a></code></dt>
    <dd>Returns a unique identifier for the package, usable in package-search operations.</dd>
    <dt><code>languages: [Language]</code></dt>
    <dd>An array of languages supported by the keyboards or lexical models contained by the package.
    <br/><br/>
    The most relevant fields for <code>Language</code> type are the <code>name: String</code> and <code>id: String</code>
    fields.  (The other fields are mostly 'legacy'.)</dd>
    <dt><code>name: String</code></dt>
    <dd>The user-friendly name of the package.</dd>
    <dt><code>resourceType: LanguageResourceType</code></dt>
    <dd>An enum representing the type of LanguageResource contained within the package.
    <br/><br/>
    May be either <code>.keyboard</code> (for a <code>KeyboardKeymanPackage</code>) or
    <code>.lexicalModel</code> (for a <code>LexicalModelKeymanPackage</code>).</dd>
    <dt><code>sourceFolder: URL</code></dt>
    <dd>The base folder for the package's extracted contents.
    <br/><br/>
    Note:  for packages opened with <code><a href="../ResourceFileManager/prepareKMPInstall">
    ResourceFileManager.shared.prepareKMPInstall</a></code>, this may be a temporary location!
    <br/><br/>
    Stability is not guaranteed if you write to any contents of the folder or its subfolders,
    but read operations are permitted.</dd>
    <dt><code>version: Version</code></dt>
    <dd>The package's version.</dd>
</dl>

<h2 id="Methods" name="Methods">Methods</h2>

<dl>
    <dt><code><a href='installableResourceSets.php'>installableResourceSets -> [[AnyLanguageResource]] </a></code></dt>
    <dd>Returns a list of all resources & language pairings supported by this package.</dd>
    <dt><code><a href='installableResources.php'>installableResources(forLanguage: String) -> [AnyLanguageResource] </a></code></dt>
    <dd>A language-filtered version of the method above.</dd>
    <dt><code><a href='pageURL.php'>pageURL(for: KeymanPackagePage) -> URL?</a></code></dt>
    <dd>Provides a link to known .html files contained by the package.
    <br/><br/>
    Supported pages:  <code>.readme</code>, <code>.welcome</code>, <code>.custom(bundledPath: String)</code>, the latter
    of which may target arbitrary locations within the package.</dd>
</dl>

<h2 id="History" name="History">History</h2>
Added in Keyman Engine for iPhone and iPad 14.0.

<h2 id="See_also" name="See_also">See Also</h2>
<dl>
    <dt><code><a href="../PackageWebViewController">PackageWebViewController</a></code></dt>
    <dd>Used to display web pages contained within a package.</dd>
    <dt><code><a href='../TypedKeymanPackage'>KeyboardKeymanPackage</a></code></dt>
    <dd>Represents packages containing keyboards.</dd>
    <dt><code><a href='../TypedKeymanPackage'>LexicalModelKeymanPackage</a></code></dt>
    <dd>Represents packages containing lexical models.</dd>
</dl>