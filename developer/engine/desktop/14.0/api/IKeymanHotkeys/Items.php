<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanHotkeys::Items[Index] Property"
  ]);
?>

<h1>IKeymanHotkeys::Items[Index] Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanHotkeys::Items[Index]</code> property returns an <a href='../IKeymanHotkey'><code>IKeymanHotkey</code></a> reference to the hotkey by <code>Index</code>. If the
hotkey is not found, exception <a href='../IKeymanError/ErrorCode'><code>KMN_E_Collection_InvalidIndex</code></a> is raised.
The <code>Index</code> is the enumerated type <code>KeymanHotkeyTarget</code>.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanHotkey* Items[KeymanHotkeyTarget Index]</code></pre>

<h2>Parameters</h2>

<dl>
  <dt>Index</dt>
  <dd>The <a href='../IKeymanHotkey/Target'>target</a> of the hotkey.</dd>
</dl>
