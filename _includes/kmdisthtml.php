<?php

  function dispatcher( $func, $args ) {
    switch( $func ) {
      case "PAGE": echo PAGE( $args ); break;
      case "ENDPAGE": echo ENDPAGE( $args ); break;
      case "TITLE": echo TITLE( $args ); break;
      case "BODY": echo BODY( $args ); break;
      case "ENDBODY": echo ENDBODY( $args ); break;
      case "SECTION": echo SECTION( $args ); break;
      case "ENDSECTION": echo ENDSECTION( $args ); break;
      case "HEADING": echo HEADING( $args ); break;
      case "TEXT": echo TEXT( $args ); break;
      case "FOOTER": echo FOOTER( $args ); break;
      case "BULLETLIST": echo BULLETLIST( $args ); break;
      case "LINKSLIST": echo LINKSLIST( $args ); break;
      case "PAGENAV": echo PAGENAV( $args ); break;
      case "RELATED": echo RELATED( $args ); break;
      case "HTML": echo HTML( $args ); break;
      case "ICONTABLE": echo ICONTABLE( $args ); break;
      case "DESCLINKSTABLE": echo DESCLINKSTABLE( $args ); break;
      case "IMAGE": echo IMAGE( $args ); break;
      case "HTABLE": echo HTABLE( $args ); break;
      case "VTABLE": echo VTABLE( $args ); break;
      case "TABLE": echo TABLE( $args ); break;
      case "HOWTO": echo HOWTO( $args ); break;

      case "FEATURELIST": echo FEATURELIST( $args ); break;
      case "FEATURE": echo FEATURE( $args ); break;
      case "ENDFEATURELIST": echo ENDFEATURELIST( $args ); break;

      default: dispatcher2( $func, $args );
    }
  }

  function dispatcher2( $func, $args ) {
    switch( $func ) {
      case "WEBSITEPAGE": echo WEBSITEPAGE( $args ); break;
    }
  }

  $nl = "\r\n";

  function FORMAT( $s )
  {
    global $nl;
    $s = str_replace( "\r\n", "\n", $s );

    $strings = explode( "\n", $s );
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
          dispatcher( $func, $args );

          $func = "";
          $args = "";
        }

        /* We're starting a new section here! */
        if(!preg_match( "/^([^:\s]+)(([:\s]\s+)|([:\s]?[\s]*$))/", $s, $matches )) {
          error_log("preg_match failed in FORMAT for ".$_SERVER['PHP_SELF']."\nStack:\n" . print_r(debug_backtrace(0, 10), true));
          return;
        }
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

    /*$s = "<html>" . $nl .
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

    return $s;*/
  }

  function WEBSITEPAGE( $title ) {
    global $nl;

    $s = "<html>" . $nl .
         "<head>" . $nl .
         "  <title>" . $title . "</title>" . $nl .
         "  <link rel=\"stylesheet\" media=\"screen\" href=\"../inc/Kmhelp.css\" type=\"text/css\">" . $nl .
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

  /************************************************************************************************************************/

  function HOWTO( $text )
  {
    global $nl;
    global $howtocount;

    $s = "";

    $sarr = explode( $nl, $text );

    $s = $s . "<p class=\"HowtoTitle\">How to: <a href=\"javascript: togglehowto('divhowto" . $howtocount . "')\">" . $sarr[0] . "</a></p>" . $nl;
    $s = $s . "<div class=\"hiddenobj\" id=\"divhowto" . $howtocount . "\"><ol>";
    for($i = 1; $i < count($sarr); $i++)
    {
      $s = $s . "<li>" . html_to_php($sarr[$i]) . "</li>" . $nl;
    }
    $s = $s . "</ol><p class=\"HowtoLastItem\"></p></div>" . $nl;

    $howtocount++;

    return $s;
  }

/************************************************************************************************************************/

  function ENDPAGE() {
    global $nl;

    $s = "</body>" . $nl .
         "</html>" . $nl;

    return $s;
  }

/************************************************************************************************************************/

  function TITLE( $title ) {
    global $nl;
    return "<p class=\"PageTitle\">" . $nl .
           "  <img align=\"left\" src=\"../img/kmtitlelogo.gif\" width=33 height=33 hspace=7 alt='(image: Keyman icon)'>" . $nl .
           $title . $nl .
           "</p>" . $nl;
  }

/************************************************************************************************************************/

  function FOOTER() {
    global $nl, $COPYRIGHT, $KEYMANVERSION;     #, $DOCVERSION;
    global $argv;

    /*# Instead of make time, we display last modified time for this topic.
    //$DOCVERSION = date( "D j M Y" , filemtime( $argv[0] ) );

    $s = "<table class=\"footer\"><tr>" . $nl .
         " <td class=\"Copyright\">" . $nl .
         "  " . $COPYRIGHT . $nl .
         " </td>" . $nl .
         " <td class=\"Version\">" . $nl .
         "   Keyman 6.2" . $nl .
         " </td>" . $nl .
         "</tr></table>" . $nl;

    return $s;*/
  }

/************************************************************************************************************************/

  function TEXT( $text ) {
    global $nl;

    /* Replace blank lines in text with HTML newlines */
    $text = str_replace( "\r\n\r\n", "\r\n</p><p>\r\n", $text );
    $text = str_replace( ".html", ".php", $text);

    $s = "<p>" . $nl . $text . $nl . "</p>" . $nl;

    return $s;
  }

/************************************************************************************************************************/

  function BODY() {
    global $nl;

    $s = "<div class=\"Body\">" . $nl;

    return $s;
  }

/************************************************************************************************************************/

  function ENDBODY() {
    global $nl;

    $s = "</div></br>" . $nl;

    return $s;
  }

/************************************************************************************************************************/

  function SECTION( $title ) {
    global $nl;

    $s = "<p class=\"SectionTitle\">" . $title . "</p>" . $nl;
    $s .= "<div class=\"Section\">" . $nl;

    return $s;
  }

/************************************************************************************************************************/

  function ENDSECTION() {
    global $nl;

    $s = "</div>" . $nl;

    return $s;
  }

/************************************************************************************************************************/

  function BULLETLIST( $items ) {
    global $nl;

    $s = "<ul>" . $nl;

    $items = str_replace( ".html", ".php", $items);

    $itemarr = explode( $nl, $items );

    foreach( $itemarr as $item )
	$s .= "  <li>" . $item . "</li>" . $nl;

    $s .= "</ul>" . $nl;

    return $s;
  }

/************************************************************************************************************************/

  function LINKSLIST( $items ) {
    global $nl;

    $s = "<ul>" . $nl;

    $s .= convertlinks( $items, "  <li>", "</li>" ) . $nl;

    $s .= "</ul>" . $nl;

    return $s;
  }

/************************************************************************************************************************/

  function PAGENAV( $args ) {
    global $nl;

    if(preg_match_all( '/"([^"]{4,})"/', $args, $linkarr ))
    {
      //echo "<pre>"; print_r($linkarr); echo "</pre>";
      while(sizeof($linkarr[1]) < 4) array_push($linkarr[1], "");
      list( $left, $lurl, $right, $rurl ) = $linkarr[1];

      $s = "<table class=\"PageNav\"><tr>" . $nl .
           "<td class=\"Prev\">" . $nl;

      if( $left == "" )
        $s .= "&nbsp;" . $nl;
      else {
        $s .= "<a href=\"" . html_to_php($lurl) . "\">" . $nl;
        $s .= "<img src=\"../img/uparrow.gif\" alt=\"Up\" width=8 height=8 border=0>" . $nl;
        $s .= $left . $nl;
        $s .= "</a>" . $nl;
      }

      $s .= "</td>" . $nl .
            "<td class=\"Next\">" . $nl;


      if( $right == "" )
        $s .= "&nbsp;" . $nl;
      else {
        $s .= "<a href=\"" . html_to_php($rurl) . "\">" . $nl;
        $s .= $right . $nl;
        $s .= "<img src=\"../img/rightarrow.gif\" alt=\"Next\" width=8 height=8 border=0>" . $nl;
        $s .= "</a>" . $nl;
      }

      $s .= "</td>" . $nl .
            "</tr></table>" . $nl;
    }
    else $s = '';
    return $s;
  }

/************************************************************************************************************************/

  function HEADING( $heading ) {
    global $nl;

    $s = "<p class=\"Heading\">" . $heading . "</p>" . $nl;

    return $s;
  }

/************************************************************************************************************************/

  function html_to_php($htmllink)
  {
    return str_ireplace('.html', '.php', $htmllink);
  }

  /*
  ** Takes input in the form of consecutive strings, separated with whitespace, commas, or
  ** semicolons (or a mixture of all of the above), and delimited with double quotes, and
  ** converts it into a series of links, delimited with $sep1 (before) and $sep2 (after).
  */
  function convertlinks( $text, $sep1, $sep2 ) {
    global $nl;

    preg_match_all( '/"([^"]*)"/', $text, $linkarr );

    $s = "";

    for( $i = 0; $i < count( $linkarr[1] ); $i += 2 ) {
      $s .= $sep1 . "<a href=\"" . html_to_php($linkarr[1][$i+1]) . "\">" . $linkarr[1][$i] . "</a>" . $sep2 . $nl;
    }

    return $s;
  }

/************************************************************************************************************************/

  function RELATED( $text ) {
    global $nl;

    /* Replace blank lines in text with HTML newlines */
    $text = str_replace( "\r\n\r\n", "\r\n</p><p>\r\n", $text );

    $s = HEADING("Related Topics");

    $s .= "<p>" . $nl . convertlinks( $text, "", "<br>" ) . $nl . "</p>" . $nl;

    return $s;
  }

/************************************************************************************************************************/

  function HTML( $text ) {
    global $nl;

    $s = $text . $nl;

    return $s;
  }

/************************************************************************************************************************/

  function ICONTABLE( $text ) {
    global $nl;

    /* find count of columns */
    $text = str_replace( "\r\n", "\n", $text );
    $strings = explode( "\n", $text );
    preg_match_all( '/"([^"]*)"/', $strings[0], $cellarr );

    $cols = count( $cellarr[0] );

    /* get cells' contents */
    preg_match_all( '/"([^"]*)"/', $text, $cellarr );

    /* try '/"(([^"]*(\\")?)*)"/' to match with \" embedded */

    /* output the table */

    $s = "<table border=0 cellpadding=0 cellspacing=0 align=\"center\" class=\"IconList\">" . $nl;

    for( $i=1; $i < (count( $cellarr[0] ) / $cols); $i++ ) {
      $s .= " <tr>" . $nl;
      for( $j=0; $j < $cols; $j++ ) {
        $s .= "  <td class=\"Center\">" . $cellarr[1][ ($i * $cols) + $j ] . "</td>" . $nl;
      }
      $s .= " </tr>" . $nl;
    }

    $s .= "</table>";

    return $s;

  }

/************************************************************************************************************************/

  function MakeTable( $cols, $colwidths, $cellarr, $frowa, $frowb, $fcola, $fcolb ) {

    // output the table

    # Start table
    $s = "<table border=0 cellpadding=2 cellspacing=0 align=\"center\">";

    $rows = floor(count( $cellarr ) / $cols);

    # Rows
    for( $r=0; $r < $rows; $r++ ) {

      # Row start
      $s .= "<tr>";

      # Cells
      for( $c=0; $c < $cols; $c++ ) {
        $s .= "<td valign=\"top\"";
        if( $colwidths[$c] != "" )
            $s .= " width=" . $colwidths[$c];
        $s .= ">";

        if( $r == 0 )
          $s .= $frowa;
        if( $c == 0 )
          $s .= $fcola;

        $s .= $cellarr[ ($r * $cols) + $c ];

        if( $c == 0 )
          $s .= $fcolb;
        if( $r == 0 )
          $s .= $frowb;

        $s .= "</td>";
      }

      # End row
      $s .= "</tr>";
    }

    # End table
    $s .= "</table>";

    return $s;
  }

/************************************************************************************************************************/

  function ParseTable( $text, $frowa, $frowb, $fcola, $fcolb ) {

# 8710 total!

    // find count of columns
    $text = str_replace( "\r\n", "\n", $text );
    $strings = explode( "\n", $text );
    preg_match_all( '/"([^"]*)"/', $strings[0], $cellarr );

    $cols = count( $cellarr[0] );

    //get col widths
    for( $c = 0; $c < $cols; $c++ )
      $colwidths[$c] = $cellarr[0][$c];

    //get cells' contents
    preg_match_all( '/"([^"]*)"/', $text, $cellarr );

    //remove the col width cells
    for( $c = 0; $c < $cols; $c++ )
      array_shift( $cellarr[1] );

    $s = MakeTable( $cols, $colwidths, $cellarr[1], $frowa, $frowb, $fcola, $fcolb );

    return $s;
  }

/************************************************************************************************************************/

  function TABLE( $text ) {
    return ParseTable( $text, "", "", "", "" );
  }

/************************************************************************************************************************/

  function HTABLE( $text ) {
    return ParseTable( $text, "", "", "<b>", "</b>" );
  }

/************************************************************************************************************************/

  function VTABLE( $text ) {
    return ParseTable( $text, "<b>", "</b>", "", "" );
  }

/************************************************************************************************************************/

  /* Table with links in left-hand column, and description in right-hand column */
  /* Expects three columns of input: link text, link url, and desc text. May barf on other input. */
  function DESCLINKSTABLE( $text ) {
    global $nl;

    /* get cells' contents */
    preg_match_all( '/"([^"]*)"/', $text, $cellarr );

    /* try '/"(([^"]*(\\")?)*)"/' to match with \" embedded */

    /* output the table */

    $s = "<p><table border=0 cellspacing=0 class=\"DescLinksList\">" . $nl;

    /* Go through the rows */
    for( $i=1; $i < (count( $cellarr[0] ) / 3); $i++ ) {
      $s .= " <tr>" . $nl;

      $s .= "  <td>";
      $s .= "   <a href=\"" . html_to_php($cellarr[1][ ($i * 3) + 1 ]) . "\">" . $cellarr[1][ ($i * 3) ] . "</a>" . $nl;
      $s .= "  </td>" . $nl . "  <td>";
      $s .= "   " . $cellarr[1][ ($i * 3) + 2 ] . $nl;
      $s .= "  </td>";

      $s .= " </tr>" . $nl;
    }

    $s .= "</table></p>";

    return $s;

  }

/************************************************************************************************************************/

  function IMAGE( $text ) {
    global $nl;

    preg_match_all( '/"([^"]*)"/', $text, $paramarr );

    $t = explode("/", $paramarr[1][1]);
    if(!strstr($t[count($t)-1], ".")) $t = ".gif"; else $t = "";

    $s =  "<p class=\"Image\">" . $nl;
    $s .= "<img src=\"" . $paramarr[1][1]  . $t . "\" alt=\"(image: " . $paramarr[1][0] . ")\"><br>" . $nl;
    $s .= $paramarr[1][0] . $nl;
    $s .= "</p>";

    return $s;
  }

/************************************************************************************************************************/

function FEATURELIST($cols)
{
    global $featurecount, $featurecolcount, $nl;


    $colarray = explode(",", $cols);

    $featurecount = 0;
    $featurecolcount = count($colarray);

    $s = "<table cellspacing=0 cellpadding=0 class='fl'>" . $nl;
    $s .= '<tr><th class="fl">&nbsp;</th>';

    for($i = 0; $i < $featurecolcount; $i++)
      $s .= '<th class="flcol">' . $colarray[$i] . '</th>';

    $s .= '</tr>';

    return $s;
}

function FEATURE($args) {
    global $nl, $featurecount, $featurecolcount;

    if($featurecount % 2 == 0) $cls = "even"; else $cls = "odd";
    $featurecount++;

    $id = uniqid("div");

    $argarray = explode( $nl, $args );
    $ftext = $argarray[0];
    for($i = 1; $i <= $featurecolcount; $i++)
    {
      $s = $argarray[$i];
      if(strstr($s, "Y")) $fcol[$i-1] = "<img src='../img/fullcircle.gif'>";
      else if(strstr($s, "T")) $fcol[$i-1] = "<img src='../img/tick.gif'>";
      else if($s[0] == ':') $fcol[$i-1] = substr($s, 1);
      else $fcol[$i-1] = "&nbsp;";
    }

    $desc = "";
    for($i = $featurecolcount+1; $i < count($argarray); $i++) $desc = $desc . $argarray[$i] . " ";

    $s = '<tr><td class="fl '.$cls.'"><li><a style="text-decoration: none"; href="javascript: togglehowto(' . "'" . $id . "'" . ')">' .
#         '<img id="' . $id . "img" . '" src="/images/expand.gif" border=0 align="middle"> ' .
         $ftext . '</a>';


    for($i = 0; $i < count($fcol); $i++)
       $s .= '<td class="flcol '.$cls.'">' . $fcol[$i] . '</td>';

    $s .= '</tr>';

    $s .= '<tr><td class="flhidden" style="width: '. (500+count($fcol)*75) . '" colspan="' . (count($fcol) + 1) . '"><div id="' . $id . '" class="hiddenobj">' .
         $desc . '</div></td></tr>';

    return $s;
}


function ENDFEATURELIST() {
    return "</table>";
}

?>
