<?php
  if( getenv( "KMDOCS_RTF" ) !== false ){
    include( "kmdistrtf.php" );
  }
  else
  {
    include( "kmdisthtml.php" );
  }
?>
