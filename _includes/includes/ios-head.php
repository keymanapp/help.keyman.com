<?php
  session_start();
  if(!isset($css)) $css = 'index.css';
  if(!isset($title)) $title= 'Keyman | Virtual Keyboard Solutions | Type in any Language';
  require_once('servervars.php');
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
  <title><?php echo $title; ?></title>
  <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
    <!-- Meta bar for app download (mobile safari only) -->
    <!-- meta name="apple-itunes-app" content="app-id=721595078, app-argument=http://keyboard.com" / -->
  <link rel='shortcut icon' href="<?php echo cdn("img/favicon.ico"); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo cdn("css/$css"); ?>">
  <link href='http://fonts.googleapis.com/css?family=Cabin:400,400italic,500,600,700,700italic|Source+Sans+Pro:400,700,900,600,300|Noto+Serif:400' rel='stylesheet' type='text/css'>

	<script type="text/javascript">

	 // Add a script element as a child of the body
	 
	 function downloadJS(src) {
		 var element = document.createElement("script");
		 element.src = src;
		 document.body.appendChild(element);
	 }
	 
	 function downloadJSAtOnload() {
		downloadJS("<?php echo cdn("js/jquery1-10-2.js"); ?>");
		downloadJS("<?php echo cdn("js/kmlive.js"); ?>");
	 }

	 // Check for browser support of event handling capability
	 if (window.addEventListener)
	 window.addEventListener("load", downloadJSAtOnload, false);
	 else if (window.attachEvent)
	 window.attachEvent("onload", downloadJSAtOnload);
	 else window.onload = downloadJSAtOnload;

	</script>	

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-43040656-1', 'keyman.com');
      ga('send', 'pageview');
    </script>
</head>