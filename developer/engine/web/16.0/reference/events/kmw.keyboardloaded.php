<?php
  require_once('includes/template.php');

  head([
    'title' => "kmw.keyboardloaded Event"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="event_kmw.keyboardloaded">kmw.keyboardloaded Event</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Called when keyboard code loaded.</p>

<?php
syntax(<<<END
keyman.addEventListener('keyboardloaded', function(keyboardProperties) {
  ...
});
END
);

params("keyboardProperties", "object", "An object with the following property:  <ul><li><code>keyboardName</code> - the keyboard's name.</li></ul>");

returns("boolean", "<code>true</code> if the event should continue processing, <code>false</code> if it should not. \n".
  "Your event handler should return <code>true</code> aside from exceptional circumstances.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>This event is only raised once a keyboard has been fully loaded and processed, ready for active use.
</p>