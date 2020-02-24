<?php
  require_once('includes/template.php');

  head([
    'title' => "platform()"
  ]);
?>

<h1 class="title" id="reference_version">platform()</h1>

<h2 id="Summary">Summary</h2>

<p>The <code><strong>platform()</strong></code> statement tests the device on which the Keyman keyboard is running</p>

<h2 id="Syntax">Syntax</h2>

<pre><code>platform("<var>platformConstraint</var>") ... > ...
if(&amp;platform = "<var>platformConstraint</var>") ... > ...
</code></pre>

<h3 id="Parameters">Parameters</h3>

<dl>
  <dt><code>platformConstraint</code></dt>
  <dd>The platform constraint to test.</dd>
</dl>

<h2 id="Description">Description</h2>

<p>The <code>&amp;platform</code> variable system store checks the current platform a keyboard is running on. This test is
slightly different to all other <a href='if.php'><code>if()</code></a> tests, because it is not performing an exact string
match but rather matching each token against a set of valid tokens. To help clarify this in code, use the <code>platform()</code> 
syntax rather than the <code>if(&amp;platform ...)</code> syntax.</p>

<p>Keyman keyboards can be targeted to run on a number of different platforms, and have slightly different
behaviour on each of those platforms.  The definition of a platform is somewhat rubbery, consisting of items
such as operating system, application, browser, form factor and input type.  Accordingly, the platform constraints are 
correspondingly loose.</p>

<p>A platform constraint is list of one or more platform identifiers separated by spaces.  There is no order
defined for the list. The identifiers are case-insensitive.</p>

<p>The key requirement for testing a given platform constraint is that all factors must be met for the constraint
to pass. If an unknown constraint is included, then the test fails (note: new behaviour for Keyman 10).</p>

<p>For example, <code>touch android tablet native</code> would match Keyman for Android on an Android 
tablet; <code>android tablet</code> would match Keyman for Android on an Android tablet or KeymanWeb in a browser 
on an Android tablet. <code>blackberry</code> would not match on any platform (as Blackberry is not a supported
platform as of Keyman 10).</p>

<h2>Platform constraint definition</h2>

<p>The platform constraints are broken down into several components.  Each component is optional.  Typically, 
each component should be used at most once in a platform definition.  Each component will currently be
alphanumeric only; future versions may allow for version testing.</p>

<p>The components are: <strong>User Interface</strong>, <strong>Operating System</strong>, <strong>Form Factor</strong>, 
<strong>Application</strong>, and <strong>Browser</strong>.</p>

<h3>User Interface</h3>

<dl>
  <dt><code>touch</code></dt>
  <dd>A touch-screen keyboard, such as an iPhone, iPad, Android phone or tablet or Windows phone.</dd>

  <dt><code>hardware</code></dt>
  <dd>Using a physical keyboard, e.g. Keyman Desktop, or a touch device but with an external keyboard attached (supported on Android)</dd>
</dl>

<h3>Operating System</h3>

<dl>
  <dt><code>windows</code></dt>
  <dd>Microsoft Windows, desktop, server and mobile versions</dd>
  
  <dt><code>android</code></dt>
  <dd>Any device running the Android operating system</dd>
  
  <dt><code>ios</code></dt>
  <dd>Any iPhone, iPad, iPod or other device running the iOS operating system</dd>
  
  <dt><code>macosx</code>, <code>mac</code> or <code>macos</code></dt>
  <dd>macOS</dd>
  
  <dt><code>linux</code></dt>
  <dd>Linux or other UNIX-style operating systems.</dd>
</dl>

<h3>Form Factor</h3>

<dl>
  <dt><code>desktop</code></dt>
  <dd>Desktop, laptop and server class devices</dd>

  <dt><code>tablet</code></dt>
  <dd>Touch-based tablet sized devices.</dd>

  <dt><code>phone</code></dt>
  <dd>Mobile phones and similar small devices. This may include very small tablets, where the engine determines that a 
  phone sized keyboard is more appropriate than a tablet sized keyboard.</dd>
</dl>

<h3>Application</h3>

<dl>
  <dt><code>native</code></dt>
  <dd>Keyman Desktop, Keyman for iPhone and iPad, Keyman for Android, Keyman for macOS, etc.</dd>

  <dt><code>web</code></dt>
  <dd>Keyman Engine for Web on any platform and any browser</dd>
</dl>

<h3>Browser</h3>

<p>Browser tests apply only to KeymanWeb. Be careful when targeting specific 
browsers, as language support in browsers tends to change rapidly. (Note:
even though Keyman for Android and Keyman for iPhone and iPad use KeymanWeb
internally, browser tests will not match in those apps.</p>
  
<dl>
  <dt><code>ie</code></dt>
  <dd>Keyman Engine for Web in Internet Explorer</dd>

  <dt><code>chrome</code></dt>
  <dd>Keyman Engine for Web in Chrome</dd>

  <dt><code>firefox</code></dt>
  <dd>Keyman Engine for Web in Firefox</dd>

  <dt><code>safari</code></dt>
  <dd>Keyman Engine for Web in Safari</dd>

  <dt><code>opera</code></dt>
  <dd>Keyman Engine for Web in Opera</dd>

  <dt><code>edge</code></dt>
  <dd>Keyman Engine for Web in Edge</dd>
</dl>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_platform">Example: Using <code>platform()</code></h3>

<pre><code>platform('ios native') + 'a' > 'α'
platform('android native') + 'a' > 'ά'
</code></pre>

<p>With these two rules, pressing the key "a" in Keyman for Android would result in "ά", whereas 
pressing the key "a" in Keyman for iPhone and iPad would result in "α". In KeymanWeb on those
platforms, or on any other platform, the "a" key would just result in the default behaviour of "a",
because neither rule would match.</p>

<h2>Platforms</h2>

<p>The <code>platform()</code> statement can be used in keyboards on all platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<dl>
  <dt>Keyman 10.0</dt>
  <dd>
   Behaviour for unrecognised tokens was changed to treat unrecognised tokens as a failure to match 
   instead of succeeding as in earlier versions; this gives better backward and forward compatibility;
   noted that tokens are case-insensitive; noted that browser tests only apply in KeymanWeb; browser
   'edge' was split out from 'ie'; an undocumented feature allowing targeting specific versions 
   of Windows was removed; added synonyms for 'macosx'.
  </dd>

  <dt>Keyman 9.0</dt>
  <dd>The <code>platform()</code> statement was introduced in Keyman 9.0.</dd>
</dl>
