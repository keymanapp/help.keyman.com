<?php
  // DEPRECATED: This is used only by Keyman Desktop 6.0 documentation
  if( getenv( "KMDOCS_RTF" ) !== false ){
    include( "kmdistrtf.php" );
  }
  else
  {
    include( "kmdisthtml.php" );
  }
?>
