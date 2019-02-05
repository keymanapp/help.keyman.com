<?php
/**
 * Created by PhpStorm.
 * User: joshua
 * Date: 6/12/2017
 * Time: 8:46 AM
 */

require_once('includes/template.php');
require_once('includes/__iframeheader.php');

head([
    'title' => "Getting Started With KeymanWeb"
]);

require_once('includes/__docheader.php');
require_once('includes/__kmwheader.php');
$kmwbuild = get_kmwbuild();
$cdn_path = get_cdn_path($kmwbuild);
?>

<h1 class="title" id="">Getting Started With KeymanWeb</h1>

<p style='margin-top: 16px'></p>

<div class='body_text'>
<h2>Prerequisite</h2>
<ul>
  <li>First, if you have not yet obtained a copy of KeymanWeb, please visit <a href="https://keyman.com/developer/keymanweb/">the KeymanWeb Developer Home</a>.  A link to the "https minified" version of the code will be used here.</li>
</ul>

<h2>Demo</h2>
<p>To setup a basic first page with KeymanWeb, only two lines of code are necessary, but a few more lines will be shown here.  Toward that end, <a href="examples/__first-example.php">an example page</a>:</p>

<?php embed_with_iframe("examples/__first-example.php", 250); ?>

<p style='margin-top: 16px'></p>
<p>The source code for the page may be seen below.</p>
<?php
echo codebox(<<<END
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>KeymanWeb 11.0 - A First Example</title>

  <script src='$cdn_path/keymanweb.js'></script>
  <script src='$cdn_path/kmwuitoggle.js'></script>
  <script>
      (function(kmw) {
          kmw.init({attachType:'auto'});
          kmw.addKeyboards('@eng'); // Loads default English keyboard from Keyman Cloud (CDN)
          kmw.addKeyboards('@tha'); // Loads default Thai keyboard from Keyman Cloud (CDN)
      })(keyman);
  </script>
</head>
<body>
  <p>Click me and type: <input placeholder="Hello World"/></p>
</body>
</html>
END
);
?>

</div>

<h2>The Breakdown</h2>

<ul>
<li><p>The <code>&lt;script&gt;</code> inclusion <code>&lt;script src='<?=$cdn_path?>/keymanweb.js'&gt;&lt;/script&gt;</code>
    loads the Keyman Engine for Web 11.0 script for the page.</p></li>

<li><p><code>(function(kmw) { kmw.init(); });</code> serves to initialize the web engine with default settings.
  By adding the object <code>{attachType:'auto'}</code> as a parameter to our <code>kmw.init()</code> call, the
    KeymanWeb engine will then link into any detected input elements automatically, regardless of browser or device, as part
    of its initialization.</p></li>

<li><p>The other <code>&lt;script&gt;</code> inclusion, <code>&lt;script src='<?=$cdn_path?>/kmwuitoggle.js'&gt;&lt;/script&gt;</code>,
      creates the language menu seen on non-mobile devices and the on-screen keyboard toggle button.
      For other options, see our <a href='user-interface-design.php'>User Interface Design</a> page.</p></li>

  <li><p>The calls to <code>kmw.addKeyboards()</code> in the source above link in the two example Keyman keyboards used
      in this demo from our CDN server.  For more info on how to include keyboards in your KeymanWeb installation, check
      the <a href='adding-keyboards.php'>Adding Keyboards</a> page.</p></li>

</ul>

<h2>API References</h2>

<p>On initialization:  <a href="../reference/core/init"><code><?="keyman.init()"?></code></a>.</p>
<p>On including keyboards:  <a href="../reference/core/addKeyboards"><code><?="keyman.addKeyboards()"?></code></a>.</p>