<html>
<head>
  <?php
  require_once('includes/__kmwheader.php');
  $kmwbuild = setup_kmw();
  ?>

  <script type='text/javascript' src='js/laokeys_load.js'></script>

  <script type="text/javascript">

      var KWControl = null;

      function SetupDocument()
      {
          kmw.init();
          KWControl = document.getElementById('KWControl');
          kmw.setActiveKeyboard('laokeys');
          kmw.osk.hide();
      }

      function KWControlClick()
      {
          var KWControl = document.getElementById('KWControl');

          if(kmw.osk.isEnabled()) {
              kmw.osk.hide();
          } else {
              kmw.osk.show(true); // Specifies that the OSK should display whenever a valid control has focus, re-enabling the default behavior.
          }
      }

      window.addEventListener('load', SetupDocument);
  </script>
</head>
<body>

<form action='.' method='post'>

<p><img style="border: solid 1px black; padding: 2px 2px 3px 2px" src='js/kmicon.png' alt='KeymanWeb' onclick='KWControlClick()' id='KWControl' /></p>

<p><input type='text' id='multilingual' name='multilingual' size="40" /></p>
<p><textarea cols='40' rows='5'></textarea></p>

</form>
</body>
</html>