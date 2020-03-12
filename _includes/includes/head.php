<?php
  global $pagestyle;
  if(!isset($_SESSION)) session_start();
  require_once('servervars.php');
  require_once('page-version.php');

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
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel='shortcut icon' href="<?php echo $favicon; ?>">
  <?php PageVersion::WriteHead(); ?>
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
  <?php if(isset($IncludeKeymanWeb) && $IncludeKeymanWeb == true){
    $kmw_version_number = '10.0.103';
    $kmw_version = @file_get_contents('https://api.keyman.com/version/web/stable');
    if($kmw_version !== FALSE) {
      $kmw_version = @json_decode($kmw_version);
      if($kmw_version !== NULL) $kmw_version_number = $kmw_version->version;
    }
  ?>
    <script src='https://s.keyman.com/kmw/engine/<?=$kmw_version_number?>/keymanweb.js'></script>
    <script>
      keyman.init({keyboards:'https://s.keyman.com/keyboard/'});
    </script>
  <?php
    }
    require_once('includes/analytics.php');
    if(isset($pagestyle)) echo "<style>$pagestyle</style>";
  ?>
</head>
