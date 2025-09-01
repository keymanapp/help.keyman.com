<?php
  require_once('includes/template.php');

  head([
    'title' => "Reference - Branding Toolkit for Keyman Developer Professional"
  ]);
?>
<h1>Branding Reference</h1>

<dl>
  <dt><a href="activate">activate.xsl: Product Activation Dialog</a></dt>
  <dt><a href="downloadkeyboard">downloadkeyboard.xsl: Download Keyboard Dialog</a></dt>
  <dt><a href="elements">elements.xsl: Basic XSL elements</a></dt>
  <dt><a href="installkeyboard">installkeyboard.xsl: Install Keyboard Dialog</a></dt>
  <dt><a href="keyman">keyman.xsl: Keyman Desktop Configuration Window</a></dt>
  <dt><a href="keyman_footer">keyman_footer.xsl: Keyman Desktop Configuration window - Footer</a></dt>
  <dt><a href="keyman_hotkeys">keyman_hotkeys.xsl: Keyman Desktop Configuration window - Hotkeys tab</a></dt>
  <dt><a href="keyman_keyboardlist">keyman_keyboardlist.xsl: Keyman Desktop Configuration window - Keyboards tab</a></dt>
  <dt><a href="keyman_menu">keyman_menu.xsl: Keyman Desktop Configuration window - Menu</a></dt>
  <dt><a href="keyman_options">keyman_options.xsl: Keyman Desktop Configuration window - Options tab</a></dt>
  <dt><a href="keyman_support">keyman_support.xsl: Keyman Desktop Configuration window - Support tab</a></dt>
  <dt><a href="manualactivate">manualactivate.xsl: Manual Activation dialog</a></dt>
  <dt><a href="onlineupdate">onlineupdate.xsl: Online Update dialog</a></dt>
  <dt><a href="proxyconfiguration">proxyconfiguration.xsl: Proxy Configuration dialog</a></dt>
  <dt><a href="splash">splash.xsl: Splash dialog</a></dt>
  <dt><a href="welcome">welcome.xsl: Welcome dialog</a></dt>
</dl>

<aside>
  <h3 class="title">Note</h3>

  <p>You must purchase a licence for the Branding Pack before you can use the Branding Editor or the Distribution Editor in Keyman
  Developer.</p>
</aside>

<p>This reference section details the customisable screens, actions and parameters for each dialog. Some generic parameters and
targets are available for every screen.</p>

<h2><a name="id536204" id="id536204"></a>XML Parameters</h2>

<p>XML Parameters are passed in as part of the XML to the XSLT. The parameters are generally easy to use, for example, in the Keyboard
Install dialog (installkeyboard.xsl), you can retrieve the descriptive name of the keyboard to be installed with the following
code:</p>

<pre class='language-markup'><code>&lt;xsl:value-of select="/Keyman/KeymanKeyboardFile/keyboardname" />
</code></pre>

<p>The following parameters are passed into every dialog and window:</p>

<pre class='language-markup'><code>&lt;templatepath>(path to templates, for img src and includes)&lt;/templatepath>
&lt;scripttemplatepath>(path to templates for embedding in script)&lt;/scripttemplatepath>
&lt;defaultlocalepath>(path to default locale file)&lt;/defaultlocalepath>
&lt;localepath>(path to currently selected locale file)&lt;/localepath>
</code></pre>

<h2><a name="id536235" id="id536235"></a>Targets</h2>

<p>Keyman Desktop Configuration is controlled by linking to specially formed URLs, for example:</p>

<pre class='language-markup'><code>&lt;a href='keyman:link?url=http://www.tavultesoft.com'>Open the Tavultesoft website&lt;/a>
</code></pre>

<p>This example will open the Tavultesoft website in the user's default browser. Note that if just the http://www.tavultesoft.com
URL had been passed, the website would have been opened within Keyman Desktop Configuration, which is probably not the desired
behaviour!</p>

<table class="display">
  <tr>
    <th>Target</th>
    <th>Parameters</th>
    <th>Description</th>
  </tr>

  <tr>
    <td><code>keyman:link</code></td>
    <td><code>url</code>: url of website to open</td>
    <td>Opens website <code>url</code> in user's default web browser. This should be used whenever linking to a website, instead of directly
    referencing the site, or using <code>target='_blank'</code> as both of these would open within the Keyman Desktop Configuration
    context.</td>
  </tr>
</table>
