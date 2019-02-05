<?php /*
  Name:             _struct_silkey
  Copyright:        Copyright (C) 2005 Tavultesoft Pty Ltd.
  Documentation:    
  Description:      
  Create Date:      18 Mar 2008

  Modified Date:    18 Mar 2008
  Authors:          mcdurdin
  Related Files:    
  Dependencies:     

  Bugs:             
  Todo:             
  Notes:            
  History:          18 Mar 2008 - mcdurdin - Fixup $keyman
*/
 include_once( "kmdev.php" );
REFERENCE( <<<REF

SECTION:      Compatibility with SILKey for the Apple Macintosh

TEXT:         Keyman supports some special codes at the start of the line to identify Keyman-only lines and 
              ignore SILKey-only lines.  These codes are:

TUTECODE:     \$weaver:      c A SILKey-only line; Keyman will ignore 
                            c the rest of the line

              \$keyman:      c Keyman will strip out the \$keyman: text 
                            c and process the rest of the line normally

REF
); ?>
