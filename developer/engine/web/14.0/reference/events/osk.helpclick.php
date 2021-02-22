<?php
  require_once('includes/template.php');

  head([
    'title' => "osk.helpclick Event"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="event_osk.helpclick">osk.helpclick Event</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Called upon user request for the UI to present a help page.</p>

<?php
syntax(<<<END
keyman.osk.addEventListener('helpclick', function() {
  ...
});
END
);

params();
returns("boolean", "<code>true</code> if the event should continue processing, <code>false</code> if it should not. \n".
  "Your event handler should return <code>true</code> aside from exceptional circumstances.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>This event is raised whenever the user wishes to access help information.
</p>