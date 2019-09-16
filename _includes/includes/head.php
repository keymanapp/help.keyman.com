<?php
  global $pagestyle;
  if(!isset($_SESSION)) session_start();
  require_once('servervars.php');
  
  if(!isset($title)){
    $title = 'Keyman | Type to the world in your language';
  }
  if(!isset($favicon)){
    $favicon = cdn("img/favicon.ico");
  }
  if(!isset($css)){
    $css = array(cdn("css/template.css"));
  }
  if(!empty($kbdname))
  {
    require_once('renderlanguageExample.php');
    $kb_doc = true;
  }else{
    $kb_doc = false;
  }
?>
<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <title><?php echo $title; ?></title>
  <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
  <link rel='shortcut icon' href="<?php echo $favicon; ?>">
  <?php foreach($css as $cssFile){ ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $cssFile; ?>">
  <?php } ?>
  <link href='https://fonts.googleapis.com/css?family=Cabin:400,400italic,500,600,700,700italic|Source+Sans+Pro:400,700,900,600,300|Noto+Serif:400' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
  <script type='text/javascript' src='<?php echo cdn('js/keyrenderer.js'); ?>'></script>
  <script type="text/javascript">
   // Add a script element as a child of the body
   
    function downloadJS(src) {
      var element = document.createElement("script");
      element.src = src;
      document.body.appendChild(element);
    }
   
    function downloadJSAtOnload() {
      downloadJS("<?php echo cdn("js/jquery1-11-1.min.js"); ?>");
      <?php foreach($js as $jsFile){ ?>
        downloadJS("<?php echo $jsFile; ?>");
      <?php } ?>
      //downloadJS("<?php echo cdn("js/keyrenderer.js"); ?>");
    }
    
   // Check for browser support of event handling capability
   if (window.addEventListener)
   window.addEventListener("load", downloadJSAtOnload, false);
   else if (window.attachEvent)
   window.attachEvent("onload", downloadJSAtOnload);
   else window.onload = downloadJSAtOnload;
  </script>
  <?php if(isset($IncludeKeymanWeb) && $IncludeKeymanWeb == true){ ?>
    <script src='https://s.keyman.com/kmw/engine/10.0.103/keymanweb.js'></script>
    
<!--
<script src="http://s.keyman.com/kmw/engine/377/src/kmwstring.js" type="application/javascript"></script>
<script src="http://s.keyman.com/kmw/engine/377/src/kmwbase.js" type="application/javascript"></script>
<script src="http://s.keyman.com/kmw/engine/377/src/keymanweb.js" type="application/javascript"></script>
<script src="http://s.keyman.com/kmw/engine/377/src/kmwosk.js" type="application/javascript"></script>
<script src="http://s.keyman.com/kmw/engine/377/src/kmwnative.js" type="application/javascript"></script>
<script src="http://s.keyman.com/kmw/engine/377/src/kmwcallback.js" type="application/javascript"></script>
<script src="http://s.keyman.com/kmw/engine/377/src/kmwkeymaps.js" type="application/javascript"></script>
<script src="http://s.keyman.com/kmw/engine/377/src/kmwlayout.js" type="application/javascript"></script>
<script src="http://s.keyman.com/kmw/engine/377/src/kmwinit.js" type="application/javascript"></script>             
-->    
    <script>
      keyman.init({keyboards:'https://s.keyman.com/keyboard/'});
    </script>
  <?php } ?>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-249828-1',  'auto', {'allowLinker': true});
    ga('require', 'linker');
    ga('linker:autoLink', 
      ['keyman.com', 'www.keyman.com', 
       'keymanweb.com', 'www.keymanweb.com', 
       'help.keyman.com',
       'blog.keyman.com',
       'www.tavultesoft.com', 'tavultesoft.com', 'secure.tavultesoft.com'] );
    ga('send', 'pageview');
  </script>
  <?php 
    if(isset($pagestyle)) echo "<style>$pagestyle</style>";
  ?>
</head>