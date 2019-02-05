<?php
  require_once('includes/template.php');

  head([
    'title' => "Keyboard File History"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Keyboard File History</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference__struct_headers.php">Prev</a> </td><th width="60%" align="center">Language Structure</th><td width="20%" align="right"> <a accesskey="n" href="reference__struct_longlines.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference__struct_history">Keyboard File History</h4></div></div></div><p>
    <span class="emphasis"><em>This document is incomplete</em></span>
  </p><p>
        The following header entries have become obsolete since Keyman 5.0:
      </p><table><tbody><tr>
      <td>bitmaps </td>
      <td>bitmap.html </td>
      <td>Obsolete (was reference to two images, for Keyman 3.2 keyboards) </td>
    </tr><tr>
      <td>language </td>
      <td>language.html </td>
      <td>Obsolete* (was the Windows system language for the keyboard) </td>
    </tr><tr>
      <td>layout </td>
      <td>layout.html </td>
      <td>Obsolete (was the Windows system layout for the keyboard) </td>
    </tr></tbody></table><p>
        *In Keyman 6.0, the LANGUAGE header has been reintroduced, but with a different meaning. See
        <a class="link" href="reference_language.php" title="LANGUAGE statement">The LANGUAGE Header</a> for more information.
      </p><p>
        In Keyman 4.0, the "+" character became required, and usage became stricter to follow the standard now: the
        plus character must separate context from keystroke in a rule.
      </p><p>
        Other keyboard file history information will be added here as it becomes available.
      </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference__struct_headers.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_language_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference__struct_longlines.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Header keywords </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Long lines and continuations</td></tr></table></div>
