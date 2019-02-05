<?php
  require_once('includes/template.php');

  head([
    'title' => "kmw.loaduserinterface Event"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="event_kmw.loaduserinterface">kmw.loaduserinterface Event</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Called to initiate the ui initialization process.</p>

<?php
syntax(<<<END
keyman.addEventListener('loaduserinterface', function() {
  ...
});
END
);

params();

returns("boolean", "<code>true</code> if the event should continue processing, <code>false</code> if it should not. \n".
  "Your event handler should return <code>true</code> aside from exceptional circumstances.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>...
</p>