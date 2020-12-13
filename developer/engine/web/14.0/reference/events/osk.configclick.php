<?php
  require_once('includes/template.php');

  head([
    'title' => "osk.configclick Event"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="event_osk.configclick">osk.configclick Event</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Called upon user request for the UI to present KeymanWeb configuration options.</p>

<?php
syntax(<<<END
keyman.osk.addEventListener('configclick', function() {
  ...
});
END
);

params();
returns("boolean", "<code>true</code> if the event should continue processing, <code>false</code> if it should not. \n".
  "Your event handler should return <code>true</code> aside from exceptional circumstances.");

?>

<h2 id="Description" name="Description">Description</h2>

<p>This event is raised when the user wishes to access configuration options.
</p>