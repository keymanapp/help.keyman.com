<?php
  require_once('includes/template.php');

  head([
    'title' => "User Interface Modes"
  ]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">User Interface Modes</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_kmw__css.php">Prev</a> </td><th width="60%" align="center">KeymanWeb 1.0</th><td width="20%" align="right"> <a accesskey="n" href="reference_kmw__variables.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="reference_kmw__uimodes">User Interface Modes</h3></div></div></div><p>
    KeymanWeb operates in two distinct user interface modes, "automatic" and "manual".
  </p><p>
    The default mode, "automatic", lets KeymanWeb control when and where its user interface will be displayed.  In
    this mode, KeymanWeb will display its UI underneath the active input control.
  </p><p>
    When in "manual" mode, KeymanWeb will never hide or display its UI.  You can control the display of the UI with
    the <a class="link" href="reference_kmw_ShowInterface.php" title="Function: ShowInterface">KeymanWeb.ShowInterface</a> and 
      <a class="link" href="reference_kmw_HideInterface.php" title="Function: HideInterface">KeymanWeb.HideInterface</a> functions, and control the display of the visual keyboard
    and help information with <a class="link" href="reference_kmw_ShowHelp.php" title="Function: ShowHelp">KeymanWeb.ShowHelp</a> and 
      <a class="link" href="reference_kmw_HideHelp.php" title="Function: HideHelp">KeymanWeb.HideHelp</a>.
  </p><p>
    The user interface mode is controlled with <a class="link" href="reference_kmw_SetMode.php" title="Function: SetMode">KeymanWeb.SetMode</a>.
  </p><p>
    There is no requirement to ever show the KeymanWeb UI.  If you wish, you can control the KeymanWeb interface entirely
    yourself, as shown in the <a class="link" href="api/examples/full_manual_control.php" title="Full Manual Control Example">Full Manual Control example</a>.
  </p>
  </p><h4><a name="id492923"></a>Related Topics</h4><div class="itemizedlist"><ul type="disc"><li><a class="xref" href="reference_kmw_SetMode.php" title="Function: SetMode">Function: SetMode</a></li><li><a class="xref" href="reference_kmw_GetMode.php" title="Function: GetMode">Function: GetMode</a></li><li><a class="xref" href="reference_kmw_ShowInterface.php" title="Function: ShowInterface">Function: ShowInterface</a></li><li><a class="xref" href="reference_kmw_HideInterface.php" title="Function: HideInterface">Function: HideInterface</a></li><li><a class="xref" href="reference_kmw_ShowHelp.php" title="Function: ShowHelp">Function: ShowHelp</a></li><li><a class="xref" href="reference_kmw_HideHelp.php" title="Function: HideHelp">Function: HideHelp</a></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_kmw__css.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_kmw_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_kmw__variables.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">CSS classes for Visual Keyboard </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Global Variables</td></tr></table></div>
