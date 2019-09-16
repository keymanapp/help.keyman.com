<?php
  require_once('includes/servervars.php');
  
  function template_finish($foot) {
    //ob_end_flush();
    
    if($foot == true){
      foot();
    }
  }

  function head($args=[]){
    // Args are title='My Page Title', css='page.css' showMenu=true/false;
    
    // Get device
    if (strstr($_SERVER['HTTP_USER_AGENT'],'Windows')) {
        $device = 'Windows';
    }elseif(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone')){
        $device = 'iPhone';
    }elseif(strstr($_SERVER['HTTP_USER_AGENT'],'iPad')){
        $device = 'iPad';
    }elseif(strstr($_SERVER['HTTP_USER_AGENT'],'Android')){
        $device = 'Android';
    }elseif(strstr($_SERVER['HTTP_USER_AGENT'],'Mac')){
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
        $css = array(cdn('css/template.css'), cdn('css/prism.css'), cdn('css/prism-keyman.css'));
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

    $embed = isset($args['embedded']) ? $args['embedded'] : false;
    $menu = isset($args['showMenu']) ? $args['showMenu'] : !$embed;

    $favicon = cdn("img/favicon.ico");
    require_once('head.php');

    if ($menu == true) {
      require_once('phone-menu.php');
      require_once('top-menu.php');
    } else {
      require_once('no-menu.php');
    }
    
    $toc = isset($args['toc']) ? $args['toc'] : !$embed;
    $index = isset($args['index']) ? $args['index'] : !$embed;
    $foot = isset($args['foot']) ? $args['foot'] : !$embed;
    $crumbs = isset($args['crumbs']) ? $args['crumbs'] : !$embed;
    $shutdown = 'template_finish';
    register_shutdown_function($shutdown,$foot);
    
    begin_main($toc, $index, $crumbs);
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
  
  require_once('index-content.php');
  
  function begin_main($toc, $index, $crumbs){
    global $index_content;
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
    }
    
    if($toc) { $tocClass = ''; } else { $tocClass = ' no-toc'; }
    if(!$index) { $tocClass .= ' no-index'; }
    $html = <<<END
<div class="main$tocClass">
  <div id="section2">
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
    if($display == true){
      require_once('footer.php');
    }else{
      require_once('no-footer.php');
    }
  }
?>