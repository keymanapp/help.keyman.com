<?php
  require_once('includes/template.php');

  head([
    'title' => "kmw.keyboardchange Event"
  ]);

  require_once("includes/__docheader.php");
?>

<h1 class="title" id="event_kmw.keyboardchange">kmw.keyboardchange Event</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Called when keyboard input language changed.</p>

<?php
syntax(<<<END
$kmw.addEventListener('keyboardchange', function(keyboardProperties) {
  ...
});
END
);

params("keyboardProperties", "object", "An object with the following properties:  <ul><li><code>internalName</code> - the keyboard's name</li>"
  . "<li><code>languageCode</code> - its three letter ISO 639-3 language code.</li></ul>");

returns("boolean", "<code>true</code> if the event should continue processing, <code>false</code> if it should not. \n".
  "Your event handler should return <code>true</code> aside from exceptional circumstances.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>This event is utilized by the various non-mobile UI elements included with KeymanWeb.
</p>
