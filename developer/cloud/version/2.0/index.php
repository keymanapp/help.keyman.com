<?php
  $baselanguage = 'language-markup';
  require_once('includes/template.php');

  $pagestyle = '.var { font-weight: bold; font-style: italic; }';
  // Required
  head([
    'title' =>'Keyman Version API 2.0 Specification',
    'css' => ['template.css','prism.css'],
    'showMenu' => true
  ]);
?>
<h1>Keyman Version API 2.0 Specification</h1>

<p>The <a href="https://api.keyman.com/version">api.keyman.com/version</a> endpoint allows you to query the latest
  version of the downloads available for each Keyman product on
  <code>https://downloads.keyman.com</code>.</p>
<p>This API was previously named <code>get-version</code> from the deprecated endpoint
  <code>https://r.keymanweb.com/code/get-version</code></p>

<h2>API version 2.0</h2>

<p><code>version</code> is backwardly compatible with version 1.0. A plain call will return an integer
return value, which is the latest stable build for KeymanWeb 2.0. See version 1.0 for further details.</p>

<p>Version 2.0 adds the ability to query for a given platform and stability level.</p>

<h3>Syntax</h3>

<pre><code class='language-markup'>https://api.keyman.com/version/</code><code class='var'>platform</code><code>[/</code><code class='var'>level</code><code>]</code></pre>

<h3>Parameters</h3>

<dl>
  <dt><code>platform</code></dt>
  <dd>The platform to query against. Possible values are:
    <code>android</code>, <code>ios</code>, <code>linux</code>, </code><code>mac</code>, <code>web</code> or <code>windows</code>.</dd>

  <dt><code>level</code> <span class='optional'>(optional)</span></dt>
  <dd>The stability level to query, default <code>stable</code>. Possible values are: <code>stable</code>, <code>beta</code> or <code>alpha</code>.</dd>
</dl>

<p>If <code>platform</code> is not passed, then the API falls back to version 1.0</p>

<h3>Return value</h3>

<p>A JSON object.</p>

<pre class='language-clike'><code>
{
  "platform": </code><code class='var'>platform</code><code>,
  "level": </code><code class='var'>level</code><code>,
  "version": </code><code class='var'>version-string</code><code> | "error": </code><code class='var'>error-message</code><code>
  
}</code></pre>

<p>The <code>version-string</code> will be a dotted version that corresponds to the versioning scheme of the product. Note that version 2.0 of this API returns the whole 
version string for KeymanWeb, as opposed to version 1.0 of the API which returned only the last portion (build number).</p>

<p>If a version is not available for a given platform and stability level, then the <code>error-message</code> is returned instead of the <code>version-string</code>.</p>

<p>If invalid parameters are passed in, a <code>400</code> HTTP error is returned.</p>

<p>This build version can be embedded in the reference to the KeymanWeb code, e.g., for PHP:</p>

<pre><code class='language-clike'>
$json = @file_get_contents('https://api.keyman.com/version/web/alpha');
if($json) {
  $json = json_decode($json);
}
if($json && property_exists($json, 'version')) {
  $kmwbuild = $json->version;
} else {
  // If the get-version API fails, we'll use the latest known version
  $kmwbuild = "2.0.469";
}
echo "&lt;script src='https://s.keyman.com/kmw/engine/$kmwbuild/keymanweb.js'&gt;&lt;/script&gt;";
</code></pre>

<h2>API version 1.0</h2>

<p><code>version</code> should be called via HTTP GET to retrieve the latest build number.  It will return
an integer build number. In case of error, you should choose a known build number to reference (e.g. 377).</p>

<pre><code class='language-markup'>https://api.keyman.com/version</code></pre>

<p>This build number can be embedded in the reference to the KeymanWeb code, e.g., for PHP:</p>

<pre><code class='language-clike'>
$kmwbuild = @file_get_contents('https://api.keyman.com/version');

if($kmwbuild === FALSE || !is_numeric($kmwbuild)) {
  // If the get-version API fails, we'll use the latest known version
  $kmwbuild = 408;
}
echo "&lt;script src='https://s.keyman.com/kmw/engine/$kmwbuild/keymanweb.js'&gt;&lt;/script&gt;";
</code></pre>

<h2>Version Information and History</h2>

<p>1.0 - Released 19 January 2015</p>
<p>1.0 - Documentation updated 19 February 2017 to change secure site references to https://s.keyman.com/</p>
<p>2.0 - Released 23 June 2017</p>
<p>2.0 - Documentation updated 7 March 2018 to document API change from <code>get-version</code> to <code>version</code>
    and change secure site references to https://api.keyman.com</p>
<p>2.0 - Documentation updated 23 October 2019 to add linux platform</p>

<h2>See Also</h2>

<p><a href='https://keyman.com/developer/keymanweb/'>KeymanWeb Developer Home</a></p>
