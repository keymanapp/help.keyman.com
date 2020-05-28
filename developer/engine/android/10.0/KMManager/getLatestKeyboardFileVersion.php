<?php
    require_once('includes/template.php');
    $class = 'KMManager';
    $method = 'getLatestKeyboardFileVersion';
    $param1 = 'context';
    $param2 = 'packageID';
    $param3 = 'keyboardID';
    $methodSyntax = sprintf('<var>%s</var>.%s(<var>Context %s</var>, <var>String %s</var>, <var>String %s</var>)',
      $class, $method, $param1, $param2, $param3);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>KMManager.getLatestKeyboardFileVersion()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?php echo $method.'()' ?></strong></code> method returns the specified keyboard's latest file version number.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><?php echo $methodSyntax ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code><?php echo $param1 ?></code></dt>
 <dd>The context.</dd>
 <dt><code><?php echo $param2 ?></code></dt>
 <dd>ID of the package.</dd>
 <dt><code><?php echo $param3 ?></code></dt>
 <dd>ID of the keyboard.</dd>
</dl>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns the specified keyboard's latest file version number as <code>String</code> if the keyboard exists, <code>null</code> otherwise.</p>

<h2 id="Description" name="Description">Description</h2>
<p>Use this method to get the latest file version number of the specified keyboard if it exists in the
  <code>assets/cloud/</code> or <code>assets/packages/</code> folder.</p>

<p>If packageID is <code>cloud</code>, this method determines the latest file version by the filename.</p>

<p>If packageID is something else, the metadata file assets/packageID/kmp.json is parsed to determine the keyboard version.</p>
<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrate the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-javascript line-numbers"><code>    String latestVersion = getLatestKeyboardFileVersion(this, "cloud", "tamil99m");
    if (latestVersion != null) {
        // If we assume that there are 2 tamil99m keyboard files in assets/cloud/ folder
        // with filenames; tamil99m-1.0.js and tamil99m-1.1.js
        // then latestVersion = "1.1"
    }
    else {
        // This keyboard does not exist in assets/cloud/ folder!
    }
</code></pre>
