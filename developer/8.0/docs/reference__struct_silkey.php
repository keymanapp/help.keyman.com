<?php
  require_once('includes/template.php');

  head([
    'title' => "Compile Targets (Keyman, KeymanWeb, and SILKey)"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Compile Targets (Keyman, KeymanWeb, and SILKey)</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference__struct_longlines.php">Prev</a> </td><th width="60%" align="center">Language Structure</th><td width="20%" align="right"> <a accesskey="n" href="reference__struct_stores.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference__struct_silkey">Compile Targets (Keyman, KeymanWeb, and SILKey)</h4></div></div></div><p>
        Keyman supports a prefix at the start of the line to identify lines that should only be compiled
        for a specific target.  If the prefix is omitted, then the line will be compiled for all targets.  The supported
        targets in version 7.1 are Keyman (Keyman Engine), KeymanWeb and SILKey (Macintosh clone of Keyman).  All other targets will
        be ignored, to permit compatibility with future targets.
  </p><table><tbody><tr><th>Line Prefix</th><th>Target</th><th>Comments</th></tr><tr>
      <td>$keyman:</td>
      <td>Keyman Engine and KeymanWeb</td>
      <td>For legacy reasons, $keyman targets both Keyman Engine and KeymanWeb.  See the $keymanonly target to include rules specific for Keyman Engine</td>
    </tr><tr>
      <td>$keymanweb:</td>
      <td>KeymanWeb</td>
      <td></td>
    </tr><tr>
      <td>$keymanonly:</td>
      <td>Keyman Engine</td>
      <td></td>
    </tr><tr>
      <td>$weaver:</td>
      <td>SILKey</td>
      <td>Lines with this prefix are ignored by the compiler and are used only by SILKey for Macintosh OS 9</td>
    </tr></tbody></table><h5><a name="id662712"></a>History</h5><p>Version 7.1.  Add support for $keymanweb and $keymanonly targets</p><p>Version 3.2.  Add support for $keyman and $weaver targets</p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference__struct_longlines.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_language_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference__struct_stores.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Long lines and continuations </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Using Stores</td></tr></table></div>
