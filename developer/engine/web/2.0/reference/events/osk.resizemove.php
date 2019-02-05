<?php
  require_once('includes/template.php');

  head([
    'title' => "osk.resizemove Event"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="event_osk.resizemove">osk.resizemove Event</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Called when OSK resized or moved on desktop.</p>

<?php
syntax(<<<END
$kmw.osk.addEventListener('resizemove', function() {
  ...
});
END
);

params();
returns("boolean", "<code>true</code> if the event should continue processing, <code>false</code> if it should not. \n".
  "Your event handler should return <code>true</code> aside from exceptional circumstances.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>This event is raised whenever the OSK is moved.
</p>