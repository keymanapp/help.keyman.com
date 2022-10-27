<?php
  include_once("version.out");

  include( "kmhelp.php" );

  function dispatcher2( $func, $args ) {
    switch( $func ) {
      case "WEBSITEPAGE": echo WEBSITEPAGE( $args ); break;
    }
  }

  function PAGE( $title ) {
    global $nl;

    $s = "<html>" . $nl .
         "<head>" . $nl .
         "  <title>" . $title . "</title>" . $nl .
         "  <link rel=\"stylesheet\" media=\"screen\" href=\"../inc/Kmhelp.css\" type=\"text/css\">" . $nl .
         "  <link rel=\"stylesheet\" media=\"print\" href=\"../inc/kmhelpprint.css\" type=\"text/css\">" . $nl .
         "  <link rel=\"stylesheet\" media=\"screen\" href=\"../inc/kmdist.css\" type=\"text/css\">" . $nl .
         "  <link rel=\"stylesheet\" media=\"print\" href=\"../inc/kmdistprint.css\" type=\"text/css\">" . $nl .
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
         "    }" . $nl .
         "  //--></script>" . $nl .
         
         "</head>" . $nl .
         "<body onload=\"sethidden()\">" . $nl .
         $nl;

    return $s;
  }

  function WEBSITEPAGE( $title ) {
    global $nl;

    $s = "<html>" . $nl .
         "<head>" . $nl .
         "  <title>" . $title . "</title>" . $nl .
         "  <link rel=\"stylesheet\" media=\"screen\" href=\"../inc/kmhelp.css\" type=\"text/css\">" . $nl .
         "  <link rel=\"stylesheet\" media=\"print\" href=\"../inc/kmhelpprint.css\" type=\"text/css\">" . $nl .
         "  <link rel=\"stylesheet\" media=\"screen\" href=\"../inc/kmdist.css\" type=\"text/css\">" . $nl .
         "  <link rel=\"stylesheet\" media=\"print\" href=\"../inc/kmdistprint.css\" type=\"text/css\">" . $nl .
         "  <script language=\"Javascript\">" . $nl .
         "  <!--" . $nl .
         "    window.open(\"http://www.tavultesoft.com/keyman/\");" . $nl .
         "  -->" . $nl .
         "  </script>" . $nl .
         "</head>" . $nl .
         "<body>" . $nl .
         $nl;

    return $s;
  }

?>
