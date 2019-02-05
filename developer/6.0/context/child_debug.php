<?php include_once( "kmdev.php" );
FORMAT( <<<ENDFORMAT
PAGE:           Debug Window

BODY

SECTION:        Debug Window

TEXT:           The debug window is shown at the bottom of an editor window when debugging the keyboard. It is made up
                of three parts: The Debug Input box, the Debug State box, and the command and status bar above them.
                
HEADING:        Debug Input box

TEXT:           The debug input box is used for typing input to test the keyboard. It will display the output exactly
                as it will appear in use, except for deadkeys, which are shown visually here with a <img src="../img/obj.gif">
                symbol.
                
HEADING:        Debug State box

TEXT:           The debug state box shows the internal state of the keyboard interpreter.

TEXT:           <i>Elements</i>

                This shows the elements that make up rule currently being processed: the context, the key, and also what the
                output will be. If the rule uses stores, the contents of the store will be shown in the right-hand column,
                with the matched letter in red.
                
TEXT:           <i>Call Stack</i>

                Here all the lines that have been processed to this point are shown in a list. You can double-click on any
                entry in the list to display the line in the keyboard source.
                
TEXT:           <i>Deadkeys</i>

                This lists all the deadkeys that are currently in the context. You can select one from the list to see it
                highlighted in the debug input box.
                
TEXT:           <i>Regression Testing</i>

                The idea in regression testing is to record a sequence of keystrokes and the output the keyboard produced,
                in order to test for the same behaviour on different systems.
                
                Use Start Log/Stop Log to record the input and output. You can then use Run Test to run the test again, or
                go the Options menu to clear the log, or save or load a test, or use the batch mode to run several tests
                in a row.
                
                If the output produced while running a test is different to that stored when recording it, Keyman will halt
                the test on the line where the failure occurred, and activate Single Step mode.
                
HEADING:        Command and status bar

TEXT:           The command and status bar controls the debugger and shows information relevant to it. The Single Step button
                enables single step mode; when it is on, Keyman will process the keyboard file one line at a time, waiting for
                you to click Step to go to the next step or Run to finish processing the current keystroke immediately. While
                in single step mode, the current keystroke will be shown in the right-hand side of the bar.
                
                Use the Pause button or press Shift+Esc to pause the debugger. When the debugger is paused, it will not accept
                any input, and ordinary shortcut keys (Shift+F5, Alt+Tab, etc.) will function as usual. Press Pause again to
                resume debugging.
                
                The input status is shown beside the Pause button. It can show one of the following messages:
                
VTABLE:         "30%",                  "70%"
                "Message",              "Meaning"
                "Ready for input",      "The debugger is waiting for more input"
                "Focused for input",    "The debugger is waiting for more input, and the Debug Input window is active"
                "Paused",               "The debugger is paused"
                "Receiving events",     "The debugger is processing input"
                "Debugging",            "The debugger is active during Single Step mode or after a breakpoint"
                
TEXT:           The system keyboard layout currently being used is shown next. You can test your keyboard with a different
                underlying layout by selecting <b>Select System Keyboard</b> from the <b>Debug</b> menu.

UNRELATED:        "Using the debugger",   "../guide/debugger.html"               

ENDSECTION

ENDBODY

FOOTER

ENDPAGE
ENDFORMAT
);
?>
