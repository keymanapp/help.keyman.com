<?php
  if( getenv( "KMDOCS_RTF" ) !== false )
    include( "kmdevrtf.php" );
  else
    include( "kmdevhtml.php" );
?>
