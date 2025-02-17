<?php
  global $pagestyle;
  require_once('servervars.php');
  require_once('page-version.php');

  require_once __DIR__ . '/../autoload.php';
  use Keyman\Site\Common\KeymanHosts;

  // Variables used to manage and trigger debugging tests.
  // Simply defining the variable below is enough to trigger debug mode.
  // Advice:  copy a locally-compiled /web/build/publish/debug folder as
  // /cdn/dev/local-web, then uncomment the following line.
  // $kmw_dev_path = cdn("local-web/keymanweb.js");

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
    require_once('renderLanguageExample.php');
    $kb_doc = true;
  }else{
    $kb_doc = false;
  }
?>
<!DOCTYPE html>
<?php
  if(empty($language)) {
    echo "<html>\n";
  } else {
    echo "<html lang='" . $language . "'>\n";
  }
?>
<head>
  <meta charset="utf-8">
  <?php
    if(KeymanHosts::Instance()->Tier() == KeymanHosts::TIER_STAGING) {
      echo '    <meta name="robots" content="none">';
    }
  ?>
  <title><?php echo htmlentities($title); ?></title>
  <?php
/* Our local CDN version is identical to this file:
  <script
    src="https://browser.sentry-cdn.com/5.28.0/bundle.min.js"
    integrity="sha384-1HcgUzJmxPL9dRnZD2wMIj5+xsJfHS+WR+pT2yJNEldbOr9ESTzgHMQOcsb2yyDl"
    crossorigin="anonymous"
  ></script>*/
  ?>
  <script src="<?= cdn('js/sentry.bundle.5.28.0.min.js'); ?>"></script>
  <script>
    Sentry.init({
      dsn: "https://fcc8fe39792f49f3a94ea831cad5c9d6@o1005580.ingest.sentry.io/5983515",
      environment: location.host.match(/\.local$/) ? 'development' : location.host.match(/(^|\.)keyman-staging\.com$/) ? 'staging' : 'production',
    });
  </script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel='shortcut icon' href="<?php echo $favicon; ?>">
  <?php if(!empty($canonicalLink)) echo "  <link rel=\"canonical\" href=\"$canonicalLink\">\n"; ?>
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
    $kmw_version_number = '13.0.108';
    if(KeymanHosts::Instance()->Tier() != KeymanHosts::TIER_TEST) {
      // For performance reasons, we don't check KeymanWeb version on Test Tier
      $kmw_version = @file_get_contents(KeymanHosts::Instance()->SERVER_api_keyman_com . '/version/web/stable');
      if($kmw_version !== FALSE) {
        $kmw_version = @json_decode($kmw_version);
        if($kmw_version !== NULL) $kmw_version_number = $kmw_version->version;
      }
    }
    if(!isset($kmw_dev_path)) {
  ?>
      <script src='<?=KeymanHosts::Instance()->s_keyman_com?>/kmw/engine/<?=$kmw_version_number?>/keymanweb.js'></script>
  <?php
    } else {
  ?>
      <script src='<?=$kmw_dev_path?>'></script>
  <?php
    }
  ?>
    <script>
      keyman.init({keyboards:'<?=KeymanHosts::Instance()->s_keyman_com?>/keyboard/'});
    </script>
  <?php
    }
    if(isset($pagestyle)) echo "<style>$pagestyle</style>";
  ?>
</head>
