TEXT:         <a href="#1">FAQ001: What happened to Start test (F9) in TIKE 6.2? (demo and pro editions only)</a><br>

HEADING:      <a name="1">FAQ001: What happened to Start test (F9) in TIKE 6.2? (demo and pro editions only)</a>

TEXT:         In the demo and professional versions, the "Start test" option is disabled by default.
              You can turn it on in the Tools/Options dialog box, under the Debug tab ('Enable Test Window').

              The reason this has been disabled is to encourage you to use the new debugger.  Press F5 to start the
              debugger, or select Debug menu/Start Debug.  This allows you to type in a 
              box at the bottom of the current edit window, and step through the input process in your 
              keyboard.  You can also view the status of active stores, current deadkeys, and the call 
              stack.  Finally, integrated into this is a regression test tool -- if you make a change to 
              your keyboard, you can check to make sure you haven't broken any of your other rules.

              The Standard edition of Keyman Developer does not include the debugger, so the "Start test" option 
              is always available.
