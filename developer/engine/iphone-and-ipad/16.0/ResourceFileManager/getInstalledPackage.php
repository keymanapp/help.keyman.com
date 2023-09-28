<?php
    require_once('includes/template.php');
    $class = 'ResourceFileManager';
    $genericParam = 'Resource';
    $method = sprintf('getInstalledPackage&lt;%s: LanguageResource&gt;', $genericParam);
    $param1 = 'for';
    $title = $class.'.shared.'.$method.'() -> ';
    $methodSyntax1 = sprintf('%s.shared.%s(%s: %s)', $class, $method, $param1, $genericParam);
    head(['title' => $title]);
?>

<h1>.getInstalledPackage(for:)</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?= $method.'()' ?></strong></code> method is used to install resources from opened package files.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?= $methodSyntax1 ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
  <dt><code><?= $param1 ?></code></dt>
  <dd>Either a <a href="../LanguageResource"><code>InstalledKeyboard</code></a>
  or a <a href="../LanguageResource"><code>InstalledLexicalModel</code></a>
  that has been previously installed.</dd>
</dl>

<h3 id="Returns" name="Returns">Returns</h3>
<p>The package, as currently installed.  May return <code>nil</code> if the specified resource is not
currently installed.</p>

<h2 id="History" name="History">History</h2>
Added in Keyman Engine for iPhone and iPad 14.0.

<h2 id="See_also" name="See_also">See also</h2>

<dl>
  <dt><a href="installedPackages"><code>installedPackages: [KeymanPackage]</code></a></dt>
  <dd>Returns an array of all currently-installed packages.</dd>
</dl>
