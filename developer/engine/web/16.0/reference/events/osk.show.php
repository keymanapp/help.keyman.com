<?php
  require_once('includes/template.php');

  head([
    'title' => "osk.show Event"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="event_osk.show">osk.show Event</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Called when the OSK is displayed.</p>

<?php

syntax(<<<END
keyman.osk.addEventListener('show', function(obj) {
  ...
});
END
);

params("obj", "object", "An object specifying the osk's display state information.");

echo "<p>Available display state information:</p>";

obj_spec(false, "obj.x", "Number", "The x-coordinate of the left side of the OSK.",
    "obj.y", "Number", "The y-coordinate of the top of the OSK.",
    "obj.userLocated", "boolean", "<code>true</code> if the OSK has been directly placed by the user.");

returns("boolean", "<code>true</code> if the event should continue processing, <code>false</code> if it should not. \n".
  "Your event handler should return <code>true</code> aside from exceptional circumstances.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>...</p>