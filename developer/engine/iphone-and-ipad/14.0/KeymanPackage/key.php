<?php
    require_once('includes/template.php');
    $class = 'KeymanPackage.Key';
    $method = 'field'; // stub
    $methodSyntax = sprintf('%s.%s', $class, $method);
    head([
        'title' => $class
    ]);

    // See https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array for sample
?>

<h1>KeymanPackage.Key class</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <strong><?= $class ?></strong> class serves as a unique identifier for packages.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?php echo $methodSyntax ?></code></pre>

<h2 id="Description" name="Description">Description</h2>
<p>The KeymanPackage.Key class is used within the KeymanEngine by installed resources when there is
a need to find and/or use their source packages.  Such operations only succeed with installed packages.</p>

<!-- Fill in examples of how to use, etc. -->

<h2 id="Fields" name="Fields">Fields</h2>

<h2 id="History" name="History">History</h2>
Added in Keyman Engine for iPhone and iPad 14.0.

<dl>
    <dt><code>id: String</code></dt>
    <dd>The package's id string.
    <br/><br/>
    Generally speaking, this is the filename for the package file
    once the file extension (<code>.kmp</code> for keyboard packages, <code>.model.kmp</code> for
    lexical model packages) has been removed.</dd>
    <dt><code>type: LanguageResourceType</code></dt>
    <dd>An enum representing resource types supported by the KeymanEngine.  May be either <code>.keyboard</code>
    (for a <code>KeyboardKeymanPackage</code>) or <code>.lexicalModel</code> (for a 
    <code>LexicalModelKeymanPackage</code>).
    </dd>
</dl>