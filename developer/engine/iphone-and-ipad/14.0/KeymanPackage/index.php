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

<h2 id="Methods" name="Methods">Methods</h2>

<dl>
    <dt><code><a href='installableResourceSets.php'>installableResourceSets: [[AnyLanguageResource]] </a></code></dt>
    <dd>Returns a list of all resources & language pairings supported by this package.</dd>
</dl>

<h2 id="See_also" name="See_also">See Also</h2>
<dl>
    <dt><code><a href='TypedKeymanPackage.php'>KeyboardKeymanPackage</a></code></dt>
    <dd>Represents packages containing keyboards.</dd>
    <dt><code><a href='TypedKeymanPackage.php'>LexicalModelKeymanPackage</a></code></dt>
    <dd>Represents packages containing lexical models.</dd>
</dl>