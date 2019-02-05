<?php
  $pagetitle = 'Automatic Control (pre-loaded) Example';
  $pagename = $pagetitle;
  $IncludeKeymanWeb = false;
  $ondocumentload = 'KeymanWeb.Init(); KeymanWeb.DisableControl(document.getElementById("code1"));';
  require_once('header.php');
  require_once('./devheader.php');
  
  echo <<<END
<script type='text/javascript' src='js/laokeys.js'></script>

<p>This page shows the simplest method of utilising KeymanWeb.  Only one tag per keyboard, plus the reference
to KeymanWeb itself, is required.</p>

<p>In this example, we use only the LaoKey keyboard, and we load it at the time that the page loads.</p>

<form action='.' method='post'>

<p><input type='text' id='multilingual' name='multilingual' size="40" /></p>
<p><textarea cols='40' rows='5'></textarea></p>

</form>

<h2>Code Walkthrough</h2>

END;
  echo codebox(<<<END
<head>
  <!-- Start of Code -->
  <script type="text/javascript">KeymanWeb_Key='your_key_here';</script>
  <script src="keymanweb.js" type="text/javascript"></script>
  <script src="laokeys.js" type="text/javascript"></script>
  <!-- End of Code -->
</head>
END
  );
  
  echo "<p><a href='automatic_control.php'>Return to Automatic Control example</a></p>";

  require_once('footer.php');
?>