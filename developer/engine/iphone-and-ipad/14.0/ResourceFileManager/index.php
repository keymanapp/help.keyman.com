<?php
    require_once('includes/template.php');
    $class = 'ResourceFileManager';
    $method = 'methodName'; // stub
    $methodSyntax = sprintf('%s.shared.%s()', $class, $method);
    head([
        'title' => $class
    ]);

    // See https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array for sample
?>

<h1>ResourceFileManager class</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <strong><?= $class ?></strong> class manages and installs keyboards and lexical models</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?php echo $methodSyntax ?></code></pre>

<h2 id="Description" name="Description">Description</h2>
<p>The ResourceFileManager is the core class which provides most of the methods needed to install 
and manage any keyboard and lexical model resources you wish to use with Keyman Engine.</p>
<p>
With the move to use of package files in 14.0, which contain metadata about your keyboards and lexical models,
far less resource metadata needs to be specified within your app in comparison to earlier
versions of the engine.</p>

<!-- Fill in examples of how to use, etc. -->

<h2 id="Methods" name="Methods">Methods</h2>

<dl>
    <dt><code><a href='install.php'>install(resourceWithID: LanguageResourceFullID, from: KeymanPackage)</a></code></dt>
    <dd>Installs specified resources from opened package files for use within the KeymanEngine.</dd>
    <dt><code><a href='prepareKMPInstall.php'>prepareKMPInstall(from: URL)</a></code></dt>
    <dd>Given a local filesystem URL for a KMP package, this function imports, opens, and parses the file for use within KeymanEngine</dd>
</dl>
