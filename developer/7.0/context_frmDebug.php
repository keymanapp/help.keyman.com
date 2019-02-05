<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Debug Window</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="context_frmKeymanWizard.php">Prev</a> </td><th width="60%" align="center">Chapter 5. Context Help</th><td width="20%" align="right"> <a accesskey="n" href="context_frmDebugStatus.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="context_frmDebug"></a>Debug Window</h2></div></div></div><p>
    The debug window is shown at the bottom of an keyboard editor when debugging the keyboard. It is made up
    of three parts: The Debug Input box, the Debug State box, and the command and status bar above them.
  </p><h3><a name="id762751"></a>Debug Input box</h3><p>
    The debug input box is used for typing input to test the keyboard. It will display the output exactly
    as it will appear in use, except for deadkeys, which are shown visually here with a
    <span class="inlinemediaobject"><img src="imgages/obj.gif"></span>
    symbol.
  </p><h3><a name="id764070"></a>Test Mode</h3><p>
    The test mode lets you test your keyboard without the debugger being active.  This lets you test
    functionality that is not available within the debugger - primarily <a class="link" href="guide_imx.php" title="DLL Interface for Keyman - Introduction">IMX</a>
    code.
  </p><p>
    Once the test window is open, you can switch the keyboard between ANSI and Unicode mode with the
    radio buttons in the test toolbar.  You can also switch on debugging mode (which is probably too
    verbose at present for general use) and switch the keyboard on and off with the <span class="guilabel">Keyboard Active</span>
    checkbox.
  </p><p>
    You can see the character codes for the current or selected characters in the status bar, which can be
    useful when debugging your keyboard.
  </p><h3><a name="id762631"></a>Debug State box</h3><p>
      The debug state box shows the internal state of the keyboard interpreter.
  </p><h3><a name="id763536"></a>Elements</h3><p>
      This shows the elements that make up rule currently being processed: the context, the key, and also what the
      output will be. If the rule uses stores, the contents of the store will be shown in the right-hand column,
      with the matched letter in red.
  </p><h3><a name="id763741"></a>Call Stack</h3><p>
      Here all the lines that have been processed to this point are shown in a list. You can double-click on any
      entry in the list to display the line in the keyboard source.
  </p><h3><a name="id763255"></a>Deadkeys</h3><p>
      This lists all the deadkeys that are currently in the context. You can select one from the list to see it
      highlighted in the debug input box.
  </p><h3><a name="id764090"></a>Regression Testing</h3><p>
      The idea in regression testing is to record a sequence of keystrokes and the output the keyboard produced,
      in order to test for the same behaviour on different systems.
  </p><p>
      Use Start Log/Stop Log to record the input and output. You can then use Run Test to run the test again, or
      go the Options menu to clear the log, or save or load a test, or use the batch mode to run several tests
      in a row.
  </p><p>
      If the output produced while running a test is different to that stored when recording it, Keyman will halt
      the test on the line where the failure occurred, and activate Single Step mode.
  </p><h3><a name="id764116"></a>Command and status bar</h3><p>
      The command and status bar controls the debugger and shows information relevant to it. The Single Step button
      enables single step mode; when it is on, Keyman will process the keyboard file one line at a time, waiting for
      you to click Step to go to the next step or Run to finish processing the current keystroke immediately. While
      in single step mode, the current keystroke will be shown in the right-hand side of the bar.
    </p><p>
      Use the Pause button or press Shift+Esc to pause the debugger. When the debugger is paused, it will not accept
      any input, and ordinary shortcut keys (Shift+F5, Alt+Tab, etc.) will function as usual. Press Pause again to
      resume debugging.
    </p><p>
      The input status is shown beside the Pause button. It can show one of the following messages:
      </p><div class="informaltable"><table border="0"><colgroup><col><col></colgroup><thead><tr><th>Message</th><th>Meaning</th></tr></thead><tbody><tr><td>Ready for input</td><td>The debugger is waiting for more input</td></tr><tr><td>Focused for input</td><td>The debugger is waiting for more input, and the Debug Input window is active</td></tr><tr><td>Paused</td><td>The debugger is paused</td></tr><tr><td>Receiving events</td><td>The debugger is processing input</td></tr><tr><td>Debugging</td><td>The debugger is active during Single Step mode or after a breakpoint</td></tr></tbody></table></div><p>
        The system keyboard layout currently being used is shown next. You can test your keyboard with a different
        underlying layout by selecting <span class="guimenuitem">Select System Keyboard</span> from the <span class="guimenu">Debug</span> menu.
    </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="context_frmKeymanWizard.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="context.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="context_frmDebugStatus.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Keyboard Wizard </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Debugger Status</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
