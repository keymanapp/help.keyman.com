<?php include( "kmhelp.php" );
  include_once( "version.out" );


/* look for "NOT YET UPDATED FOR USE WITH FORMAT()" for bits todo */

  function dispatcher2( $func, $args ) {
    switch( $func ) {
      case "WEBSITEPAGE": echo WEBSITEPAGE( $args ); break;
      case "DESCRIPTION": echo DESCRIPTION( $args ); break;
      case "CODE": echo CODE( $args ); break;
      case "CODELINE": echo CODELINE( $args ); break;
      case "EXAMPLE": echo EXAMPLE( $args ); break;
      case "HISTORY": echo HISTORY( $args ); break;
      case "TUTECODE": echo TUTECODE( $args ); break;
      case "TUTENAV": echo TUTENAV( $args ); break;
    }
  }
  
  function FORMAT( $s )
  {
    global $nl;
    
    $s = str_replace( "\r\n", "\n", $s );

    $strings = explode( "\n", $s );
    print_r($strings);
    return;
    $func = "";
    $args = "";
    $indent = 0;
    foreach( $strings as $s ) 
    {
      $ws = strspn( $s, " " );
      
      if( ($ws == 0) && ($s != "") )
      {
        if( $func != "" )
        {
          /* Call the function with its arguments */
          $args = rtrim( $args );          
          dispatcher2( $func, $args );
          
          $func = "";
          $args = "";
        }
        
        /* We're starting a new section here! */
        preg_match( "/^([^:\s]+)(([:\s]\s+)|([:\s]?[\s]*$))/", $s, $matches );
        $func = $matches[1];
        
        $len = strlen( $func ) + 1;
        $indent = strspn( substr( $s, $len ), " " ) + $len;
        $args = substr( $s, $indent ) . $nl;
      } 
      else if( $s == "" )
      {
        $args .= $nl;
      } 
      else 
      {
        $args .= substr( $s, $indent ) . $nl;
      }
    }

    if( $func != "" ) 
    {
      /* Call the function with its arguments */
      $args = rtrim( $args );          
      dispatcher2( $func, $args );
         
      $func = "";
      $args = "";
    }
  }

  function PAGE( $title ) {
    global $nl;

    $s = "<html>" . $nl .
         "<head>" . $nl .
         "  <title>" . $title . "</title>" . $nl .
         "  <link rel=\"stylesheet\" media=\"screen\" href=\"../inc/kmhelp.css\" type=\"text/css\">" . $nl .
         "  <link rel=\"stylesheet\" media=\"print\" href=\"../inc/kmhelpprint.css\" type=\"text/css\">" . $nl .
         "  <link rel=\"stylesheet\" media=\"screen\" href=\"../inc/kmdev.css\" type=\"text/css\">" . $nl .
         "  <link rel=\"stylesheet\" media=\"print\" href=\"../inc/kmdevprint.css\" type=\"text/css\">" . $nl .
         "  <script><!--" . $nl .
         "    function sethidden() {" . $nl .
         "      for( i=0; i<document.all.length; i++ )" . $nl .
         "      {" . $nl .
         "        if( document.all(i).className == \"hiddenobj\" )" . $nl .
         "          document.all(i).style.display = \"none\";" . $nl .
         "      }" . $nl .
         "    }" . $nl .
         "    " . $nl .
         "    function togglehowto(id)" . $nl .
         "    {" . $nl .
         "    if( document.all[id].style.display == \"none\" )" . $nl .
         "    {" . $nl .
         "      sethidden();" . $nl .
         "      document.all[id].style.display = \"\";" . $nl .
         "    }" . $nl .
         "    else" . $nl .
         "    {" . $nl .
         "    document.all[id].style.display = \"none\";" . $nl .
         "    }" . $nl .
//       "    return false;" . $nl .
         "    }" . $nl .
         "  //--></script>" . $nl .
         
         "</head>" . $nl .
         "<body onload=\"sethidden()\">" . $nl .
         $nl;

    return $s;
  }

  function CODE( $code ) {
    global $nl;

    $s = HEADING("Description" );

    $code = htmlentities( $code );

    $code = preg_replace( "/%([^%]+)%/", "<span class=\"Ident\">$1</span>", $code );

    $code = str_replace( "[", "<span class=\"CodeChar\">[</span>", $code );
    $code = str_replace( "]", "<span class=\"CodeChar\">]</span>", $code );
    $code = str_replace( "|", "<span class=\"CodeChar\">|</span>", $code );

    $code = str_replace( "\r\n", "<br>\r\n", $code );

    $s .= "<p class=\"Code\">" . $code . "</p>" . $nl;

    return $s;
  }

  function CODELINE( $code ) {
    global $nl;

    $code = htmlentities( $code );

    $code = preg_replace( "/%([^%]+)%/", "<span class=\"Ident\">$1</span>", $code );

    $code = str_replace( "[", "<span class=\"CodeChar\">[</span>", $code );
    $code = str_replace( "]", "<span class=\"CodeChar\">]</span>", $code );
    $code = str_replace( "|", "<span class=\"CodeChar\">|</span>", $code );

    $code = str_replace( "\r\n", "<br>\r\n", $code );

    $s = "<p class=\"Code\">" . $code . "</p>" . $nl;

    return $s;
  }

  function EXAMPLE( $args ) {
    global $nl;

    $args = htmlentities( $args );

    $s = HEADING("Examples");
  
    $s .= "<pre class=\"Example\">" . $nl;
    $s .= $args . $nl;
    $s .= "</pre>" . $nl;

    return $s;
  }

  function DESCRIPTION( $text ) {
    global $nl;

    /* Replace blank lines in text with HTML newlines */
    $text = str_replace( "\r\n\r\n", "\r\n</p><p>\r\n", $text );

    $s = HEADING("Description");
  
    $s .= "<p>" . $nl . $text . $nl . "</p>" . $nl;

    return $s;
  }

  function HISTORY( $text ) {
    global $nl;

    /* Replace blank lines in text with HTML newlines */
    $text = str_replace( "\r\n\r\n", "\r\n</p><p>\r\n", $text );

    $s = HEADING("History");
  
    $s .= "<p>" . $nl . $text . $nl . "</p>" . $nl;

    return $s;
  }

  function REFERENCE( $s1 ) {
    global $nl;
    
    preg_match( "/SECTION.\s+([^\n]+)\n/", $s1, $matches );
    $title = $matches[1];
    
    $s2 = 
      "PAGE:         " . $title . $nl .
      "BODY" . $nl .
      $s1 . $nl .
      "ENDSECTION" . $nl .
      "ENDBODY" . $nl .
      "FOOTER" . $nl .
      "ENDPAGE " . $nl . "ENDFORMAT" . $nl;
    
    FORMAT( $s2 );
  }

  function WEBSITEPAGE( $title ) {
    global $nl;

    $s = "<html>" . $nl .
         "<head>" . $nl .
         "  <title>" . $title . "</title>" . $nl .
         "  <link rel=\"stylesheet\" media=\"screen\" href=\"../inc/kmhelp.css\" type=\"text/css\">" . $nl .
         "  <link rel=\"stylesheet\" media=\"print\" href=\"../inc/kmhelpprint.css\" type=\"text/css\">" . $nl .
         "  <link rel=\"stylesheet\" media=\"screen\" href=\"../inc/kmdev.css\" type=\"text/css\">" . $nl .
         "  <link rel=\"stylesheet\" media=\"print\" href=\"../inc/kmdevprint.css\" type=\"text/css\">" . $nl .
         "  <script language=\"Javascript\">" . $nl .
         "  <!--" . $nl .
         "    window.open(\"http://www.tavultesoft.com/keymandev/\");" . $nl .
         "  -->" . $nl .
         "  </script>" . $nl .
         "</head>" . $nl .
         "<body>" . $nl .
         $nl;

    return $s;
  }

  function TUTECODE( $args ) {
    global $nl;

    $args = htmlentities( $args );

    $s = "<pre class=\"TuteCode\">" . $nl;
    $s .= $args . $nl;
    $s .= "</pre>" . $nl;

    return $s;
  }

  function TUTENAV( $args ) {
    global $nl;

    preg_match_all( '/"([^"]*)"/', $args, $linkarr );

    list( $left, $lurl, $right, $rurl ) = $linkarr[1];
  
    $s = "<table class=\"PageNav\"><tr>" . $nl .
         "<td class=\"Prev\">" . $nl;

    if( $left == "" )
      $s .= "&nbsp;" . $nl;
    else {
      $s .= "<a href=\"" . $lurl . "\">" . $nl;
      $s .= "<img src=\"../img/leftarrow.gif\" alt=\"Up\" width=8 height=8 border=0>" . $nl;
      $s .= $left . $nl;
      $s .= "</a>" . $nl;
    }

    $s .= "</td>" . $nl .
          "<td class=\"Next\">" . $nl;


    if( $right == "" )
      $s .= "&nbsp;" . $nl;
    else {
      $s .= "<a href=\"" . $rurl . "\">" . $nl;
      $s .= $right . $nl;
      $s .= "<img src=\"../img/rightarrow.gif\" alt=\"Next\" width=8 height=8 border=0>" . $nl;
      $s .= "</a>" . $nl;
    }

    $s .= "</td>" . $nl .
          "</tr></table>" . $nl;

    return $s;
  }

?>