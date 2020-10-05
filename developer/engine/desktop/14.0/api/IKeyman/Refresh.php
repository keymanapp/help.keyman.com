<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeyman::Refresh Method"
  ]);
?>

<h1>IKeyman::Refresh Method</h1>

<h2>Introduction</h2>

<p>When the <code>CoKeyman</code> object is instantiated, the Keyman API takes a snapshot of the installed keyboards and various settings in Keyman
Engine. The <code>IKeyman::Refresh</code> method refreshes this snapshot with the current Keyman and system configuration. After <code>Refresh</code> 
is called, any references to interfaces held by the API consumer must be discarded, as the API implementation releases them and 
creates new instances, even if the object in question has had no changes.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>void Refresh(void)</code></pre>
