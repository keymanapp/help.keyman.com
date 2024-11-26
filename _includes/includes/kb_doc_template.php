<?php
  require_once('includes/servervars.php');
  require_once('includes/renderLanguageExample.php');
  use Keyman\Site\Common\KeymanHosts;

  function template_finish($foot) {
    //ob_end_flush();

    if($foot == true){
      foot();
    }
  }

  function head($args=[]){
    // Args are title='My Page Title', css='page.css' showMenu=true/false;
    global $kbdname, $kbdid;
    global $canonicalLink;

    // Get device
    if (strstr($_SERVER['HTTP_USER_AGENT'],'Windows')) {
        $device = 'Windows';
    }elseif(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone')){
        $device = 'iPhone';
    }elseif(strstr($_SERVER['HTTP_USER_AGENT'],'iPad')){
        $device = 'iPad';
    }elseif(strstr($_SERVER['HTTP_USER_AGENT'],'Android')){
        $device = 'Android';
    }else{
        $device = 'Unknown';
    }

    //echo $args['includeKMW'];
    if(isset($args['includeKMW']) && $args['includeKMW'] != ''){
      $IncludeKeymanWeb = $args['includeKMW'];
    }else{
      $IncludeKeymanWeb = 1;
    }

    if(isset($args['title'])){
      $title = $args['title'];
    }else{
      $title = 'Keyman | Type to the world in your language';
    }
    if(!empty($args['language'])){
      $language = $args['language'];
    }
    if(isset($args['css'])){
      $css = array();
      foreach($args['css'] as $cssFile){
        $file = cdn("css/$cssFile");
        $css[] = $file;
      }
    }else{
      $css = array(cdn('css/template.css'));
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
    if(isset($args['showMenu'])){
      $menu = $args['showMenu'];
    }else{
      $menu = true;
    }
    $favicon = cdn("img/favicon.ico");
    $url = $_SERVER['PHP_SELF'];
    $url = explode('/', parse_url($url, PHP_URL_PATH));

    $kbdname ='';
    $kbdid = '';

    if(sizeof($url) > 1 && $url[1] == 'keyboard') {
      $url = end($url);

      if(preg_match('/([a-z0-9_]+)/', $url, $sub))
      {
        $kbdname = 'Keyboard_' . $sub[0];
        $kbdid = $sub[0];
      }
    }

    if(isset($args['canonicalLink'])) {
      $canonicalLink = $args['canonicalLink'];
    }

    require_once('head.php');
    if($menu == true) {
        require_once ('phone-menu.php');
        require_once('top-menu.php');
    } else {
        require_once ('no-menu.php');
    }

    $foot = isset($args['foot']) ? $args['foot'] : true;
    $shutdown = 'template_finish';
    register_shutdown_function($shutdown,$foot);

    begin_main($args['pagename']);
  }

  function write_breadcrumbs(){
    $crumbs = explode("/",$_SERVER["REQUEST_URI"]);
    $crumbcount = count($crumbs);
    for($i=0;$i<$crumbcount;$i++){
      $crumb = ucfirst(str_replace(array(".php","_","-"),array(""," "," "),$crumbs[$i]) . ' ');
      if($i == 0){
        $crumbtrail = '<div id="breadcrumbTrail"><a href="/">help.keyman.com</a>';
      }elseif($i < $crumbcount){
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
        $crumb1 = '<a href="'.$url.'">'.$crumb.'</a>';
        if($i == $crumbcount -1){
          if($crumb == ' '){
            $crumb = 'Home';
          }
          if(strpos($crumb,'? ga=') !== false){
            $crumb = 'Home';
          }
          $crumb1 = $crumb.'</div>';
        }
        $crumbtrail = $crumbtrail.' > '.$crumb1;
      }
    }
    echo $crumbtrail;
  }

  function write_version_history($pagename){
    global $kbdname;

    //
    if(empty($kbdname)) return '';

    $path = '../';
    $results = scandir($path);
    if(!is_array($results)){
      return '';
    }
    rsort($results);

    if(empty($pagename)) $pagename = '';

    $string = '<h2>All Documentation Versions</h2><ul id="version-hist">';
    $i = 0;
    foreach ($results as $result){
      if($result === '.' || $result === '..'){
        $i++;
        continue;
      }
      if(is_dir($path.'/'.$result)){
        $string.= '<li><a href="../'.$result.'">'.$pagename.' '.$result.'</a></li>';
      }
      $i++;
    }
    $string.= '</ul>';
    return $string;
  }

  /* 
    This functions works to show the keyboard download link
    on the keyboard help documentation of help.keyman.com
  */
  function build_download_keyboard_link_html() {
    global $kbdid; // from head() function
    
    if(empty($kbdid)) return '';
    
    $string = '<h2>Download this keyboard</h2><ul id="download-keyboard">';
            
    $string.= "<li><a href='".KeymanHosts::Instance()->keyman_com."/keyboards/$kbdid'>Download $kbdid keyboard</a></li>";
            
    $string.= '</ul>';
    
    return $string;
  }

  function begin_main($pagename){
    global $version_history, $download_link_html;
    write_breadcrumbs();
    $version_history = write_version_history($pagename);
    $download_link_html = build_download_keyboard_link_html();

    $html = <<<END
      <div class="main">
        <div id="section2">
          <div class="column-right">
            <div id="toc">
              <h3>On this page  </h3>
              <div id="toc-content"></div>
            </div>
          </div>
          <div class="wrapper">
            <article>
      END;
    if(!empty($pagename)){
      $html.='<h1 class="red underline">'.$pagename.'</h1>';
    }

    echo $html;
  }

  function foot($args=[]){
    // Args are display=true/false;

    global $version_history, $download_link_html;

    if(isset($args['display'])){
      $display = $args['display'];
    }else{
      $display = true;
    }
    if($display == true){
      if(!empty($version_history))
        echo $version_history;
      if(!empty($download_link_html))
        echo $download_link_html;
      require_once('footer.php');
    }else{
      require_once('no-footer.php');
    }
  }

  function renderLanguageExamples($kbdname = '')
  {
    global $languageExamplesRendered, $kbdname;
    $url = $_SERVER['PHP_SELF'];
    $url = explode('/', parse_url($url, PHP_URL_PATH));
    $url = end($url);
    if(preg_match('/([a-z0-9_]+)/', $url, $sub))
    {
      $kbdname = 'Keyboard_' . $sub[0];
    }
      else
    {
      $kbdname = '';
    }
    if(!isset($languageExamplesRendered) && !empty($kbdname))
    {
      $languageExamplesRendered = true;

      $s = renderLanguageExample($kbdname, '', '', false);
      if(!empty($s)) echo "<div id='keymanExample'>$s</div>";
    }
  }
?>

