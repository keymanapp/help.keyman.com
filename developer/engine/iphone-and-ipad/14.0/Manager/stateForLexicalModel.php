<?php
    require_once('includes/template.php');
    $class = 'Manager';
    $method = 'stateForLexicalModel';
    $param1 = 'withID';
    $methodSyntax1 = sprintf('%s.%s(%s: String)', $class, $method, $param1);
    head(['title' => $class.'.'.$method.'()']);
?>

<h1>Manager.stateForLexicalModel()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?= $method.'()' ?></strong></code> method returns the current state
  of availability for a dictionary.</p>
<p><strong>Deprecated</strong>, as keyboards and lexical models are no longer directly downloaded in favor
of packages.  Refer to <code><a href="../ResourceFileManager/installState.php">
ResourceFileManager.shared.installState()</a></code></p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?= $methodSyntax1 ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
    <dt><code><?= $param1 ?></code></dt>
    <dd>ID of the dictionary.</dd>
</dl>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns the dictionary state: <code>downloading</code>, <code>needsDownload</code>, <code>needsUpdate</code>,
    or <code>upToDate</code>.</p>

<h2 id="Description" name="Description">Description</h2>
<p>This syntax can be used for getting the state of a dictionary.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_method" name="Example:_Using_method">Example: Using <code><?php echo $method.'()' ?></code></h3>
<p>The following script illustrates the use of <code><?php echo $method.'()' ?></code>:</p>
<pre class="language-swift"><code>let dictState = Manager.shared.stateForLexicalModel(withID: dict.id)
if dictState == .needsUpdate {
  if !dictIDs.contains(dict.id) {
    dictIDs.insert(dict.id)
    updateQueue!.append(dict)
  }
}
</code></pre>

