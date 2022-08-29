<?php
  require_once('includes/template.php');

  head([
    'title' => "Debug Window"
  ]);
?>

<h1>Debug Window</h1>

<p class='context-main-image'><img src="<?= cdn('img/developer/90/ui/frmKeymanWizard_Debug_State.png') ?>" alt="Debug window - Debug State" /></p>

<p>The debug window is shown at the bottom of an keyboard editor when debugging the keyboard. There are several user interface areas: The debugger
input window, the debugger status window, a debugger toolbar (usually docked under the menu), and the status bar will show the current debugger status.</p>

<h2>Debugger input window</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/90/ui/frmDebug.png') ?>" alt="Debug window - Debug State" /></p>

<p>The debugger input window is used for typing input to test the keyboard. In the top half of this window, input you type while testing your keyboard
will be displayed, exactly the same as in use, with one exception: deadkeys will be shown visually with an <img alt='OBJ' class='inline' src="<?= cdn('img/developer/90/ui/obj.gif') ?>"> symbol.</p>

<p>The lower half of the window shows a grid of the characters to the virtual left of the insertion point, or the selected characters if you make a selection.
Deadkeys will be identified in the grid. The grid will show characters in right-to-left scripts in backing store order, from left to right. If there are more
characters in your text than can fit on the screen, then only those that fit will be shown in the grid.</p>

<h2>Debug controls</h2>

<p>The debug menu and debug toolbar control the debugger.</p>

<p class='context-main-image'><img src="<?= cdn('img/developer/90/ui/Debug_Toolbar.png') ?>" alt="Debug toolbar" /></p>

<p class='context-main-image'><img src="<?= cdn('img/developer/90/ui/Debug_Menu.png') ?>" alt="Debug menu" /></p>

<dl>
  <dt>Set/Clear breakpoint</dt>
  <dd>A breakpoint can be put on a line of code to ask Keyman Developer to stop and show what is happening in the keyboard layout when that line is reached.
  Typically, you would put a breakpoint on a particular rule, so you could debug an unexpected behaviour on that rule.</dd>
  
  <dt>Start Debugging</dt>
  <dd>Starts the debugger</dd>
  
  <dt>Stop Debugger</dt>
  <dd>Stops the current debug session</dd>
  
  <dt>Single Step Mode</dt>
  <dd>When this option is active, you will step through every group and rule that your keyboard applies when a keystroke is pressed. The Step Forward and Run
  controls are only relevant in Single Step Mode.</dd>
  
  <dt>Step Forward</dt>
  <dd>Move to the next step in your keyboard code.</dd>
  
  <dt>Run</dt>
  <dd>Stop processing the current keystroke event in single step mode (unless a breakpoint is hit). The next keystroke event will drop into single step mode again.</dd>
  
  <dt>Pause</dt>
  <dd>Use the Pause button or press Shift+Esc to pause the debugger. When the debugger is paused, it will not accept any input, and
  ordinary shortcut keys (Shift+F5, Alt+Tab, etc.) will function as usual. Press Pause again to resume debugging.</dd>

  <dt>System keyboard</dt>
  <dd>The system keyboard layout currently being used. You can test your keyboard with a different underlying layout by
  selecting <span class="guimenuitem">Select System Keyboard</span> from the <span class="guimenu">Debug</span> menu.</dd>
</dl>

<h2><a name="id559582" id="id559582"></a>Debug State box</h2>

<p>The debug state box shows the internal state of the keyboard interpreter.</p>

<h3>State</h3>

<p class='context-main-image'><img src="<?= cdn('img/developer/90/ui/frmKeymanWizard_Debug_State.png') ?>" alt="Debug window - Debug State" /></p>

<p>This window shows the current keystroke state, and the sequence of keystrokes that were typed to arrive at this state. Clearing the text in the
debug window will also clear the keystroke log; as will pressing the Restart button.</p>

<p>The Restart button is disabled while stepping through an event.</p>

<h3><a name="id559580" id="id559580"></a>Elements</h3>

<p class='context-main-image'><img src="<?= cdn('img/developer/90/ui/frmKeymanWizard_Debug_Elements.png') ?>" alt="Debug window - Debug Elements" /></p>

<p>This shows the elements that make up rule currently being processed: the context, the key, and also what the output will be. If the
rule uses stores, the contents of the store will be shown in the right-hand column, with the matched letter in red.</p>

<h3><a name="id559630" id="id559630"></a>Call Stack</h3>

<p class='context-main-image'><img src="<?= cdn('img/developer/90/ui/frmKeymanWizard_Debug_CallStack.png') ?>" alt="Debug window - Debug Call stack" /></p>

<p>Here all the lines that have been processed to this point are shown in a list. You can double-click on any entry in the list to
display the line in the keyboard source.</p>

<h3><a name="id559622" id="id559622"></a>Deadkeys</h3>

<p class='context-main-image'><img src="<?= cdn('img/developer/90/ui/frmKeymanWizard_Debug_DeadKeys.png') ?>" alt="Debug window - Debug Deadkeys" /></p>

<p>This lists all the deadkeys that are currently in the context. You can select one from the list to see it highlighted in the debug
input box. This information can also be seen in the character grid in the lower half of the debugger input window.</p>

<h3><a name="id559640" id="id559640"></a>Regression Testing</h3>

<p class='context-main-image'><img src="<?= cdn('img/developer/90/ui/frmKeymanWizard_Debug_RegressionTest.png') ?>" alt="Debug window - Debug Regression Test" /></p>

<p>The idea in regression testing is to record a sequence of keystrokes and the output the keyboard produced, in order to test for the
same behaviour when you make changes to the keyboard.</p>

<p>Use Start Log/Stop Log to record the input and output. You can then use Run Test to run the test again, or go the Options menu to
clear the log, or save or load a test, or use the batch mode to run several tests in a row.</p>

<p>If the output produced while running a test is different to that stored when recording it, Keyman will halt the test on the line
where the failure occurred, and activate Single Step mode.</p>

<h3><a name="id559616" id="id559616"></a>Status bar</h3>

<p>The input status is shown in the second pane of the status bar. It can show one of the following messages:</p>

<dl>
  <dt>Ready for input</dt>
  <dd>The debugger is waiting for more input</dd>

  <dt>Focused for input</dt>
  <dd>The debugger is waiting for more input, and the Debug Input window is active</dd>

  <dt>Paused</dt>
  <dd>The debugger is paused</dd>

  <dt>Receiving events</dt>
  <dd>The debugger is processing input</dd>

  <dt>Debugging</dt>
  <dd>The debugger is active during Single Step mode or after a breakpoint</dd>
</dl>

<h2>Test mode</h2>

<p>Enter test mode by clicking the <span class='guilabel'>Test Mode</span> button on the debugger toolbar.</p>

<p>The test mode lets you test your keyboard without the debugger being active. This lets you test functionality that is not available
within the debugger - primarily <a href="../guides/develop/imx/">IMX code</a>.</p>

<p>Once in test mode, no debugger controls are available.</p>

<p>You can see the character codes for the current or selected characters in the status bar, which can be useful when debugging your
keyboard.</p>
