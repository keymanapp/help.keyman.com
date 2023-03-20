<?php
    require_once('includes/template.php');
    $class = 'TypedKeymanPackage';
    $genericParam = 'TypedLanguageResource';
    $method = 'methodName'; // stub
    $methodSyntax = sprintf('%s&lt;%s&gt;.%s()', $class, $genericParam, $method);
    head([
        'title' => $class
    ]);

    // See https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array for sample
?>

<h1>TypedKeymanPackage class</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <strong><?= $class ?></strong> class and its subclasses provide precise
typing for the contents of a <a href="."><code>KeymanPackage</code></a>.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Generic Parameters</h3>
<dl>
  <dt><code><?= $genericParam ?>: <a href="../LanguageResource">LanguageResource</a></code></dt>
  <dd>The type of resource contained within the package.  Should be either
  <code>InstallableKeyboard</code> or <code>InstallableLexicalModel</code></dd>
</dl>

<h2 id="Description" name="Description">Description</h2>
<p>TypedKeymanPackage is the base class of <code>KeyboardKeymanPackage</code> and <code>
LexicalModelKeymanPackage</code>, both of which represent richly-typed parses of their corresponding
package files.</p>
<p>Note that the type erasure, <code><a href="../KeymanPackage">KeymanPackage</a></code>, will often be easier 
to work with in methods looking to handle both types of packages due to Swift's typing constraints.</p>

<!-- Fill in examples of how to use, etc. -->

<h2 id="Methods" name="Methods">Methods and Fields</h2>

<dl>
    <dt><code><a href='findResource.php'>findResource(withID:) -> TypedLanguageResource? </a></code></dt>
    <dd>Returns the resource matching the specified ID, if contained within the package.</dd>
    <dt><code><a href='installables.php'>installables: [[TypedLanguageResource]] </a></code></dt>
    <dd>Returns a list of all resources & language pairings supported by this package.
    <br/><br/>
    For <code>KeyboardKeymanPackage</code>, this resolves to <code>[[InstallableKeyboard]]</code>,
    while for <code>LexicalModelKeymanPackage</code>, this resolves to
    <code>[[InstallableLexicalModel]]</code>.</dd>
    <dt><code><a href='installables_forLanguage.php'>installables(forLanguage: String) -> [TypedLanguageResource] </a></code></dt>
    <dd>A language-filtered version of the field above, with the 'language index' dimension dropped.<br/><br/></dd>
</dl>

<h2 id="History" name="History">History</h2>
Added in Keyman Engine for iPhone and iPad 14.0.

<h2 id="See_also" name="See_also">See Also</h2>
<dl>
    <dt><code><a href='../KeymanPackage'>KeymanPackage</a></code></dt>
    <dd>The base class (and type erasure) for packages.</dd>
</dl>