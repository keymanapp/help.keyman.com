<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: GetLastActiveElement"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Function: GetLastActiveElement</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_kmw_ShowInterfaceRight.php">Prev</a> </td><th width="60%" align="center">Class: KeymanWeb</th><td width="20%" align="right"> <a accesskey="n" href="reference_kmw_KeyboardInfo.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_kmw_GetLastActiveElement">Function: GetLastActiveElement</h4></div></div></div><p>
			Returns the last active element.  Do not use this to focus, instead call FocusLastActiveElement.
		</p><p>
			Parameters:
			<code class="code">
				none
			</code>
		</p><p>
			Returns:
			<code class="code">
				last focused element, or null
			</code>
		</p><p>
			Version Introduced:
			<code class="code">
				1.0 build 107
			</code>
		</p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_kmw_ShowInterfaceRight.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_kmw.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_kmw_KeyboardInfo.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Property: ShowInterfaceRight </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Class: KeyboardInfo</td></tr></table></div>
