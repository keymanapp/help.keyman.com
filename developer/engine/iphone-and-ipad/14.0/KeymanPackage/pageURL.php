<?php
    require_once('includes/template.php');
    $class = 'KeymanPackage';
    $param1 = 'for';
    $method = sprintf('pageURL(%s: KeymanPackagePage)', $param1);
    $title = $class.'.'.$method;
    $methodSyntax1 = sprintf('%s.%s -> URL?', $class, $method);
    head(['title' => $title]);
?>

<h1>.pageURL(for:)</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong><?= $title ?></strong></code> method provides links to web pages contained within a package.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code><?= $methodSyntax1 ?></code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
  <dt><code><?= $param1 ?>: KeymanPackagePage</code></dt>
  <dd>An enum representing the type of page to retrieve.
    <br/><br/>
    Supported pages:  <code>.readme</code>, <code>.welcome</code>, <code>.custom(bundledPath: String)</code>, the latter
    of which may target arbitrary locations within the package.
    <br/><br/>
    May return <code>nil</code> if the corresponding file does not exist.
  </dd>
</dl>

<h3 id="Value" name="Value">Value</h3>
<p>
A <code>URL</code> that may be used to display the page within a <code>WKWebView</code> or similar module.
</p>

<h2 id="History" name="History">History</h2>
Added in Keyman Engine for iPhone and iPad 14.0.

<h2 id="See_also" name="See_also">See also</h2>

<dl>
    <dt><code><a href="../PackageWebViewController">PackageWebViewController</a></code></dt>
    <dd>Used to display web pages contained within a package.</dd>
</dl>
