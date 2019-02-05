<?php
  require_once('includes/template.php');

  head([
    'title' => "osk.hide Event"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="event_osk.hide">osk.hide Event</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Called when the OSK is hidden.</p>

<?php
syntax(<<<END
$kmw.osk.addEventListener('hide', function(param) {
  ...
});
END
);

params("param", "Object", "An object with field HiddenByUser, a <code>boolean</code> which indicates if the OSK was ".
    "hidden directly by the user's actions.");
returns("boolean", "<code>true</code> if the event should continue processing, <code>false</code> if it should not. \n".
  "Your event handler should return <code>true</code> aside from exceptional circumstances.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>...
</p>