<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: attachDOMEvent"
  ]);

  require_once("includes/__docheader.php");
?>

<h1 class="title" id="attachDOMEvent">attachDOMEvent</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Attach user-defined event handler for any DOM event for an element.</p>

<?php
syntax("$kmw.util.attachDOMEvent(Pelem, eventName, handler, useCapture);");
params("Pelem", "Element", "Element to which the event is being attached.",
  "eventName", "string", "The name of the event, without an 'on' prefix.",
  "handler", "function(Object)", "The event handler being attached.",
  "useCapture", "optional boolean", "Set this to <code>true</code> if the event should be captured in the bubbling phase; otherwise, ".
    "use <code>false</code> or leave this parameter empty.");
returns();
?>

<h2 id="Description" name="Description">Description</h2>

<p>The event name should be specified without the 'on' prefix.
      The fourth argument, useCapture, is optional and will default to false.
</p>
<p>
  The method exists for legacy reasons that arise when dealing with old versions of IE, simplifying event-handling code.
</p>
<p>See also:  <a href="detachDOMEvent"><code><?="$kmw.util.detachDOMEvent"?></code></a></p>