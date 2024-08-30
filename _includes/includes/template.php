<?php
  require_once __DIR__ . '/../../vendor/autoload.php';
  require_once __DIR__ . '/../../_common/KeymanSentry.php';

  const SENTRY_DSN = 'https://fcc8fe39792f49f3a94ea831cad5c9d6@o1005580.ingest.sentry.io/5983515';
  \Keyman\Site\Common\KeymanSentry::init(SENTRY_DSN);

  require_once('includes/servervars.php');
  require_once('index-content.php');
  require_once('page-version.php');


  function template_finish($foot, $embed_template) {
    //ob_end_flush();

    if($foot == true){
      foot([
        'display' => true,
        'embed_template' => $embed_template
      ]);
    }
  }

  function head($args=[]){
    // Args are title='My Page Title', css='page.css' showMenu=true/false;

    $user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
    // Get device
    if (strstr($user_agent,'Windows')) {
        $device = 'Windows';
    }elseif(strstr($user_agent,'iPhone')){
        $device = 'iPhone';
    }elseif(strstr($user_agent,'iPad')){
        $device = 'iPad';
    }elseif(strstr($user_agent,'Android')){
        $device = 'Android';
    }elseif(strstr($user_agent,'Mac')){
        $device = 'Mac';
    }else{
        $device = 'Unknown';
    }

    if(isset($args['redirect'])){
      require_once('includes/util.php');
      util_loadpage($args['redirect'], true);
      return;
    }

    if(isset($args['title'])){
        $title = $args['title'];
    }else{
        $title = 'Keyman Help | Type to the world in your language';
    }
    if(isset($args['css'])){
      $css = array();
      foreach($args['css'] as $cssFile){
        $file = cdn("css/$cssFile");
        $css[] = $file;
      }
    }else{
        $css = array(cdn('css/template.css'), cdn('css/prism.css'));
    }
    if(isset($args['js'])){
      $js = array();
      foreach($args['js'] as $jsFile){
        $file = cdn("js/$jsFile");
        $js[] = $file;
      }
    }else{
        $js = array(cdn('js/kmlive.js'));
    }

    $embeddable = isset($args['embedded']);
    $embed_template = $embeddable ? $args['embedded'] : false;
    $menu = isset($args['showMenu']) ? $args['showMenu'] : !$embed_template;

    $favicon = cdn("img/favicon.ico");
    require_once('head.php');

    if ($menu == true) {
      require_once('phone-menu.php');
      require_once('top-menu.php');
    } else {
      require_once('no-menu.php');
    }

    $toc = isset($args['toc']) ? $args['toc'] : !$embed_template;
    $index = isset($args['index']) ? $args['index'] : !$embed_template;
    $foot = isset($args['foot']) ? $args['foot'] : true;
    $crumbs = isset($args['crumbs']) ? $args['crumbs'] : !$embed_template;
    $shutdown = 'template_finish';
    register_shutdown_function($shutdown,$foot,$embed_template);

    // Here, we use the original argument.
    // - if(!isset):  the page doesn't differentiate content, so don't add tags
    // - if(isset): the page does differentiate, so read the value and set tags
    begin_main($toc, $index, $crumbs, $embeddable, $embed_template);
  }

  function write_breadcrumbs(){
    $request_uri = explode("?",$_SERVER["REQUEST_URI"]);
    $crumbs = explode("/",$request_uri[0]);
    $crumbcount = count($crumbs);
    $crumbtrail = '';
    for($i=1; $i<$crumbcount; $i++){
      $crumb = ucfirst(str_replace(array(".php","_","-"),array(""," "," "),$crumbs[$i]) . ' ');

      $urlCount = $crumbcount - $i -1;
      $url = '';
      for($c=1;$c<=$urlCount;$c++){
        $url = '../'.$url;
        if($c == 0){
          $url = '';
        }if($c == 1){
          $url = '../'.$crumbs[$i].'/';
        }
      }
      if($i == $crumbcount - 2) {
        $crumb2 = ucfirst(str_replace(array(".php","_","-"),array(""," "," "),$crumbs[$i+1]) . ' ');
        if($crumb2 == ' ') {
          $crumb1 = $crumb;
          $crumbtrail = $crumbtrail.' > '.$crumb1;
          break;
        }
      }
      if($i < $crumbcount - 1) {
        $crumb1 = '<a href="'.$url.'">'.$crumb.'</a>';
        $crumbtrail = $crumbtrail.' > '.$crumb1;
      } else if($crumb != ' ') {
        $crumbtrail = $crumbtrail.' > '.$crumb;
      }
    }
    echo '<div id="breadcrumbTrail"><a href="/">help.keyman.com</a>' . $crumbtrail . '</div>';
  }

  // This function uses globals defined in the embed/ folder include files, applying
  // classes useful for content filtering between online and in-app help with embed.css.
  function build_page_class($embeddable, $do_embed) {
    // From session-formfactor.php.
    global $formFactorClass;

    // Is set by includes within the embed/ folder.
    $pageClassComponents = array();
    if($embeddable) {
      array_push($pageClassComponents, $do_embed ? "embed-on" : "embed-off");
    }

    if(isset($formFactorClass)) {
      array_push($pageClassComponents, $formFactorClass);
    }

    $finalClass = '';

    if(count($pageClassComponents) > 0) {
      $finalClass = implode(" ", $pageClassComponents);
    }

    return $finalClass;
  }

  function begin_main($toc, $index, $crumbs, $embeddable, $do_embed){
    global $index_content;
    global $formFactor;

    if($index) {
      build_index_content();
    } else {
      $index_content = '';
    }
    if(empty($index_content)) {
      $index_content = '';
      $index_content_class = '';
    } else {
      $index_content_class = ' show-index';
    }

    if($crumbs) {
      write_breadcrumbs();
      PageVersion::WriteSelector();
    }

    if($toc) { $tocClass = ''; } else { $tocClass = ' no-toc'; }
    if(!$index) { $tocClass .= ' no-index'; }
    if(isset($formFactor)) {
      if($formFactor == 'detect') {
        ?>
        <script type="text/javascript">
          // Will be used in kmlive.js.
          window['km_detectFormFactor'] = true;
        </script>
        <?php
      }
    }

    $outerClass = build_page_class($embeddable, $do_embed);
    if(!empty($outerClass)) {
      $outerClass = " class='$outerClass'";
    }

    $html = <<<END
<div class="main$tocClass">
  <div id="section2"$outerClass>
    <div class="column-left$index_content_class">
      <div id="index">
        <h3>Index</h3>
        <div id="index-content">$index_content</div>
      </div>
    </div>
END;

    if($toc) {
      $html .= <<<END
    <div class="column-right">
      <div id="toc">
        <h3>On this page</h3>
        <div id="toc-content"></div>
      </div>
    </div>
END;
    }

    $html .= <<<END

    <div class="wrapper">
      <article>
END;
    echo $html;
  }

  function foot($args=[]){
    // Args are display=true/false;

    if(isset($args['display'])){
      $display = $args['display'];
    }else{
      $display = true;
    }

    $embed_template = isset($args['embed_template']) ? $args['embed_template'] : false;

    if($display == true){
      if($embed_template) {
        require_once('embed_footer.php');
      } else {
        require_once('footer.php');
      }
    }else{
      require_once('no-footer.php');
    }
  }
?>