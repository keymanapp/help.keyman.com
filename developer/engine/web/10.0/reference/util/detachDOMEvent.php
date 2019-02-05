<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: detachDOMEvent"
  ]);

  require_once("includes/__docheader.php");
?>

<h1 class="title" id="detachDOMEvent">detachDOMEvent</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Detach DOM event handler from element to prevent memory leaks.</p>

<?php
syntax("keyman.util.detachDOMEvent();");
params("Pelem", "Element", "Element from which the event is being detached.",
  "eventName", "string", "The name of the event, without an 'on' prefix.",
  "handler", "function(Object)", "The event handler being detached.",
  "useCapture", "optional boolean", "Set this to <code>true</code> if the event was being captured in the bubbling phase; otherwise, ".
  "use <code>false</code> or leave this parameter empty.");
returns();
?>

<h2 id="Description" name="Description">Description</h2>

<p>The fourth argument, useCapture, is optional and will default to false.
</p>

<p>See also:  <a href="attachDOMEvent"><code>keyman.util.attachDOMEvent</code></a></p>