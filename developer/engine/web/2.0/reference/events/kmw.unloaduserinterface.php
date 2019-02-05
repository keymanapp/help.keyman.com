<?php
  require_once('includes/template.php');

  head([
    'title' => "kmw.unloaduserinterface Event"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="event_kmw.unloaduserinterface">kmw.unloaduserinterface Event</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Called when allow ui clean-up.</p>

<?php
syntax(<<<END
$kmw.addEventListener('unloaduserinterface', function() {
  ...
});
END
);

params();
returns("boolean", "<code>true</code> if the event should continue processing, <code>false</code> if it should not. \n".
  "Your event handler should return <code>true</code> aside from exceptional circumstances.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>Called when the ui is to be unloaded, allowing cleanup of resources if necessary.
</p>