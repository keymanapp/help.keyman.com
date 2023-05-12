<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>KeymanWeb - A First Example</title>

  <?php
  require_once('includes/__kmwheader.php');
  require_once('includes/__docheader.php');
  $kmwbuild = get_kmwbuild();
  $cdn_path = get_kmw_path($kmwbuild);
  setup_kmw();
  ?>
  <script src='<?=$cdn_path?>/kmwuitoggle.js'></script>
  <script>
    (function() {
      keyman.init({attachType:'auto'}).then(function() {
        keyman.addKeyboards('@en'); // Loads default English keyboard from Keyman Cloud (CDN)
        keyman.addKeyboards('@th'); // Loads default Thai keyboard from Keyman Cloud (CDN)
      });
    })(keyman);
  </script>
</head>
<body>
<p>Click me and type: <input placeholder="Hello World"/></p>
</body>
</html>