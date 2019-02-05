<?php
  //global $IncludeKeymanWeb;
  $pagetitle = 'Automatic Mode Example';
  $pagename = 'Automatic Mode Example';
  $IncludeKeymanWeb = 0;
  $ondocumentload = 'KeymanWeb.Init(); KeymanWeb.DisableControl(document.getElementById("code1"));';
  require_once('header.php');
  require_once('./devheader.php');
?>

<p>This page shows the simplest method of utilising KeymanWeb.  Only one tag per keyboard, plus the reference
to KeymanWeb itself, is required.</p>

<p>In this example, we use only the LaoKey keyboard.</p>

<form action='.' method='post'>

<p><input type='text' id='multilingual' name='multilingual' size="40" /></p>
<p><textarea cols='40' rows='5'></textarea></p>

</form>

<h2>Code Walkthrough</h2>

<?php
echo codebox(<<<END
<head>
  <!-- Start of Code -->
  <script type="text/javascript"><!--
    var KeymanWeb_Key='your_key_here';
  //--></script>
  <script src="keymanweb.js" type="text/javascript"></script>
  <script src="laokeys_load.js" type="text/javascript"></script>
  <!-- End of Code -->
</head>
END
);
?>

<p>As you can see above, the second line in the code snippet above references the LaoKey keyboard loader JavaScript file.  
This is a small stub file, typically less than 200 bytes, that defines the name and actual location of the real keyboard
file (in this case, <b>laokeys.js</b>).  When a page may reference many keyboards, this saves downloading potentially
hundreds of kilobytes of unused Javascript keyboards - the keyboard is downloaded when it is first selected by the user.</p>

<p>If you know that a keyboard will be required for a page, you can skip the loader and load the keyboard directly instead, 
shown as a <a href='automatic_control_loaded.php'>separate example</a>.</p>

<h2>The KeymanWeb_Key</h2>

<p>KeymanWeb_Key is a code that is generated for your domain when you purchase a licence for KeymanWeb.  This key is
required in order for KeymanWeb to operate.  You will receive the key in an email when you provide a list of domains
to Tavultesoft.</p>

<p><a href='manual_control.php'>On to Manual Control Example</a></p>

<?php require_once('footer.php'); ?>