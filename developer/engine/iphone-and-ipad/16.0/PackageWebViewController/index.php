<?php
    require_once('includes/template.php');
    $class = 'PackageWebViewController';
    $method = 'methodName'; // stub
    $methodSyntax = sprintf('%s.%s()', $class, $method);
    head([
        'title' => $class
    ]);

    // See https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array for sample
?>

<h1>PackageWebViewController class</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <strong><?= $class ?></strong> class is used to display web pages contained within packages,
ejecting any links outside the package into an external browser.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-swift"><code>class PackageWebViewController: UIViewController</code></pre>

<h2 id="Description" name="Description">Description</h2>
<p>The PackageWebViewController class is used to display .html contents bundled within packages.
Links that lead outside the package are supported, but will be opened externally.</p>

<p>At this time, we directly support opening two types of common pages: <code>.readme</code> and
<code>.welcome</code>.  We also provide <code>.custom(bundledPath: String)</code> to allow use of
any custom pages you may wish to embed within your packages for use within your app.</p>

<!-- Fill in examples of how to use, etc. -->

<h2 id="Constructor" name="Constructor">Constructor</h2>

<dl>
    <dt><code>public init?(for package: <a href="../KeymanPackage">KeymanPackage</a>,
    page: <a href="../KeymanPackage/pageURL">KeymanPackagePage</a></code></dt>
    <dd>Retrieves the corresponding page from the package and prepares a view to display it.</dd>
</dl>

<h2 id="History" name="History">History</h2>
Added in Keyman Engine for iPhone and iPad 14.0.

<h2 id="See_also" name="See_also">See Also</h2>
<dl>
    <dt><code><a href="../KeymanPackage/pageURL">KeymanPackage.pageURL</a></code></dt>
    <dd>Retrieves a <code>URL</code> for a .html page contained within a package.</dd>
</dl>