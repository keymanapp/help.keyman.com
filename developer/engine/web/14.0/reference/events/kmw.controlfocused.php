<?php
  require_once('includes/template.php');

  head([
    'title' => "kmw.controlfocused Event"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="event_kmw.controlfocused">kmw.controlfocused Event</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Called when an input element receives focus.</p>

<?php
syntax(<<<END
keyman.addEventListener('controlfocused', function(eventProperties) {
  ...
});
END
);

params("eventProperties", "object", "An object with the following properties:  "
  . "<ul><li><code>target</code> - the element gaining focus</li>"
  . "<li><code>event</code> - the currently active control.</li>");

returns("boolean", "<code>true</code> if the event should continue processing, <code>false</code> if it should not. \n".
  "Your event handler should return <code>true</code> aside from exceptional circumstances.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>This event is used by various KeymanWeb UI elements.
</p>