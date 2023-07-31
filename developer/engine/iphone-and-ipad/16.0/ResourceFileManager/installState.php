<?php
    require_once('includes/template.php');
    $class = 'ResourceFileManager';
    $method = 'installState';
    $param1 = 'forPackage';
    $title = $class.'.shared.'.$method.'()';
    $methodSyntax1 = sprintf('%s.shared.%s(%s: KeymanPackage.Key) -&gt; KeymanPackage.InstallationState', $class, $method, $param1);
    head(['title' => $title]);
?>

<h1>.installState(forPackage:)</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?= $method.'()' ?></strong></code> method is used to determine whether or not a package has been installed.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?= $methodSyntax1 ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
  <dt><code><?= $param1 ?></code></dt>
  <dd>A <code><a href="../KeymanPackage/key">KeymanPackage.Key</a></code> that uniquely identifies the package.</dd>
</dl>

<h3 id="Returns" name="Returns">Returns</h3>
<p>Returns one of the following:</p>

<dl>
  <dt><code>.none</code></dt>
  <dd>The package has not been installed.</dd>
  <dt><code>.downloading</code></dt>
  <dd>KeymanEngine has been told to download the package, and the download is still pending.</dd>
  <dt><code>.pending</code></dt>
  <dd>The package has been downloaded and temporarily opened, but installation is still pending.</dd>
  <dt><code>.installed</code></dt>
  <dd>The package has been installed.</dd>
</dl>

<h2 id="History" name="History">History</h2>
Added in Keyman Engine for iPhone and iPad 14.0.