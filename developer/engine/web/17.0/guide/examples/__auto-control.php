<html>
<head>
  <?php
  require_once('includes/__kmwheader.php');
  $kmwbuild = setup_kmw();
  ?>

  <script>
    window.addEventListener('load', function () {
      keyman.init().then(function() {
        keyman.addKeyboards({
          id:'laokeys',
          name:'Lao (Phonetic)',
          languages:{
            id:'lo',
            name:'Lao'
          },
          filename:'./js/laokeys.js'
        });
      });
    });
  </script>
</head>
<body>
<form action='.' method='post'>
<p><input type='text' id='multilingual' name='multilingual' size="40" /></p>
<p><textarea cols='40' rows='5'></textarea></p>
</form>
</body>
</html>