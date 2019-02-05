<?php include( "kmhelp.php" );
  include_once( "version.out" );

  function dispatcher2( $func, $args ) {
    global $rtftext;

    switch( $func ) {
      case "DESCRIPTION": $rtftext .= DESCRIPTION( $args ); break;
      case "CODE": $rtftext .= CODE( $args ); break;
      case "CODELINE": $rtftext .= CODELINE( $args ); break;
      case "EXAMPLE": $rtftext .= EXAMPLE( $args ); break;
      case "HISTORY": $rtftext .= HISTORY( $args ); break;
      case "TUTECODE": $rtftext .= TUTECODE( $args ); break;
    }
  }

  function CODE( $code ) {
    global $nl;

    $s = HEADING("Description" );

    $code = HTML2RTF( htmlentities( $code ) );

    $code = preg_replace( "/%([^%]+)%/", "\\i $1\\i0 ", $code );

    $code = str_replace( "[", "\\b [\\b0 ", $code );
    $code = str_replace( "]", "\\b ]\\b0 ", $code );
    $code = str_replace( "|", "\\b |\\b0 ", $code );

    $code = str_replace( "\r\n", "\\line ", $code );

    $s .= "\\pard\\s0" . RTF( "ParaStyle0" ) . "\\f1\\fs19 " . $code . "\\par ";

    return $s;
  }

  function CODELINE( $code ) {
    global $nl;

    $code = HTML2RTF( htmlentities( $code ) );

    $code = preg_replace( "/%([^%]+)%/", "\\i $1\\i0 ", $code );

    $code = str_replace( "[", "\\b [\\b0 ", $code );
    $code = str_replace( "]", "\\b ]\\b0 ", $code );
    $code = str_replace( "|", "\\b |\\b0 ", $code );

    $code = str_replace( "\r\n", "\\line ", $code );

    $s = "\\pard\\s0" . RTF( "ParaStyle0" ) . "\\f1\\fs19 " . $code . "\\par ";

    return $s;
  }

  function EXAMPLE( $args ) {
    global $nl;

    $args = HTML2RTF( htmlentities( $args ) );

    $s = HEADING("Examples");
  
    $s .= "\\pard\\s0" . RTF( "ParaStyle0" ) . "\\f1\\fs19 " . $args . "\\par ";

    return $s;
  }

  function DESCRIPTION( $text ) {
    global $nl;

    $s = HEADING("Description");
  
    $s .= TEXT( $text );

    return $s;
  }

  function HISTORY( $text ) {
    global $nl;

    $s = HEADING("History");
  
    $s .= TEXT( $text );

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
      "ENDPAGE" . $nl;
    
    FORMAT( $s2 );
  }

  function TUTECODE( $args ) {
    global $nl;

    $args = htmlentities( $args );

    $args = HTML2RTF( $args );

    $args = str_replace( "\r\n\r\n", "\\line\\line ", $args );
    $args = str_replace( "\r\n", "\\line ", $args );

    $s = "\\pard\\s0" . RTF( "ParaStyle0" ) . "\\f1\\fs19 ";

    $s .= $args . "\\par ";

    return $s;
  }

?>