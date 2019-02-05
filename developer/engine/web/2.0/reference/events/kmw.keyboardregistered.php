<?php
  require_once('includes/template.php');

  head([
    'title' => "kmw.keyboardregistered Event"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="event_kmw.keyboardregistered">kmw.keyboardregistered Event</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Called when a keyboard 'stub' is processed (for listing as available keyboard).</p>

<?php
syntax(<<<END
$kmw.addEventListener('keyboardregistered', function(keyboardProperties) {
  ...
});
END
);

params("keyboardProperties", "object", "An object with the following properties:  "
  . "<ul><li><code>internalName</code> - the keyboard's id</li>"
  . "<li><code>language</code> - its corresponding language.</li>"
  . "<li><code>keyboardName</code> - the keyboard's name</li>"
  . "<li><code>languageCode</code> - its three letter ISO 639-3 language code.</li></ul>");

returns("boolean", "<code>true</code> if the event should continue processing, <code>false</code> if it should not. \n".
  "Your event handler should return <code>true</code> aside from exceptional circumstances.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>This event is used by all the UI elements in order to update the list of available keyboards as soon as a new keyboard
  stub has been registered, before any attempt to load it has been made.
</p>