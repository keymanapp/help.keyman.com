<?php
    require_once('servervars.php');
    include('../php/renderLanguageExample.php');
    include('../php/languageExamples.php'); 
    $pagetitle = "Key Renderer Test Page";
    require_once('header.php');
  
  $tt = "";    
  $t = "[Ctrl n][Shift p][!PgUp][!PgDn][!Shift][!Ctrl][!Alt][!Ins][!Del][!Bksp][!Up][!Down][!Left][!Right][!Home][!End][!Tab][!Caps][!Esc][!Enter][CSA!Tab][Shift!Enter]";

  $tt .= "<p>" . KeyRenderer::render($t) . "</p>";
  $tt .= "<div class='clr'></div>";

  $tt .= "<table><tr><th align='left' width='40%'>PHP</th><th align='left' width='40%'>Javascript</th><th align='left'>Output</th></tr>";
  
  foreach($Examples as $x)
  {
    foreach($x as $k=>$t)
    {
      if($k <> "*")
      {
        $ks = "<span class='highlightKeys'>" . KeyRenderer::renderInternal($t['keys'],true) . "</span>";
        $tt .= "<tr><td>" . $ks . "</td><td><span class='keys'>" . htmlspecialchars($t['keys']) . "</span></td><td>" . $t['out'] . "</td></tr>";
      }
    }
  }  
  $tt .= "</table>";

  echo <<<END
	
	<div id="mainContent">
		<div class="content">
			<h1 id="topHeader">Key Renderer Test Page</h1>
      <div>$tt</div>
	
    </div>				
		<div class="clr"></div>
	</div>
	<div class="clr"></div>
END;

  require_once("footer.php");


?>