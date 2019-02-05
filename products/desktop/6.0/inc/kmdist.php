<?php
  if( getenv( "KMDOCS_RTF" ) !== false ){
    
    include( "kmdistrtf.php" );
  }
  else
  {
    echo 'c';
    include( "kmdisthtml.php" );
  }
?>
