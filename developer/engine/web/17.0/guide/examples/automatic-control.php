<?php

  require_once('includes/template.php');
  require_once('includes/__iframeheader.php');

  head([
    'title' => "Automatic Mode Example"
  ]);

  require_once('includes/__docheader.php');
?>

<h1>Automatic Linking</h1>

<p>This page shows how to include a local keyboard from an arbitrary location in your website's file structure.</p>

<p>In this example, we use only the LaoKey keyboard.</p>
<?php embed_with_iframe("./__auto-control.php", 350); ?>
<h2>Code Walkthrough</h2>


<?php
echo codebox(<<<END
<head>
  <!-- Start of Code -->
  <script src="js/keymanweb.js" type="text/javascript"></script>
  <script>
    window.addEventListener('load', function () {
      kmw.init().then(function() {
        kmw.addKeyboards({
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
  <!-- End of Code -->
</head>
END
);
?>

<p>As you can see above, the second line in the code snippet above references the LaoKey keyboard loader JavaScript file.
This is a small stub file, typically less than 200 bytes, that defines the name and actual location of the real keyboard
file (in this case, <b>laokeys.js</b>).  When a page may reference many keyboards, this saves downloading potentially
hundreds of kilobytes of unused Javascript keyboards - the keyboard is downloaded when it is first selected by the user.</p>

<h2>API References</h2>

<p>On initialization:  <a href="../../reference/core/init"><code><?="keyman.init()"?></code></a>.</p>
<p>On including keyboards:  <a href="../../reference/core/addKeyboards"><code><?="keyman.addKeyboards()"?></code></a>.</p>

<hr>

<p><a href='manual-control.php'>On to Manual Control Example</a></p>
