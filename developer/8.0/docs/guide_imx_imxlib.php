<?php
  require_once('includes/template.php');

  head([
    'title' => "The imlib.cpp library module"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">The imlib.cpp library module</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="guide_imx.php">Prev</a> </td><th width="60%" align="center">IMX Developers Guide</th><td width="20%" align="right"> <a accesskey="n" href="tutorials.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="guide_imx_imxlib">The imlib.cpp library module</h3></div></div></div><p>
        imlib.cpp, included in the development kit, contains a set of useful functions
        for interfacing to Keyman.
      </p><h4><a name="id644592"></a>PrepIM</h4><p>
    </p><pre class="programlisting">
BOOL PrepIM(void);
      </pre><p>
  </p><p>
        PrepIM initialises the Keyman32 imports.  You should not call any of the Keyman
        imports without calling PrepIM first.  If PrepIM fails, you should exit without
        doing any processing.
      </p><h4><a name="id644606"></a>IMDefWindowProc</h4><p>
    </p><pre class="programlisting">
BOOL IMDefWindowProc(HWND hwnd, UINT msg, WPARAM wParam, LPARAM lParam, LRESULT *lResult);
      </pre><p>
  </p><p>
        IMDefWindowProc should be called from an IMC window procedure (see section titled Input
        Method Composition windows).  If it returns TRUE you should return the value stored in
        lResult without any further processing.  IMDefWindowProc mostly manages window activation
        and movement.
      </p><h4><a name="id644620"></a>Keyman Imports</h4><p>
        The DLL can call Keyman functions to interact with Keyman and the target application.  It
        should not attempt to directly control the application as Keyman will be doing this.  You
        should never call any of the functions here from the KeymanIMConfigure callback.
      </p><p>
        You can use PrepIM(), declared in imlib.cpp to get access to the the Keyman functions.
        When using imlib.cpp, the functions are declared as pointers, so you need to dereference
        them to call them in C (e.g. for KMGetContext, call (*KMGetcontext)(buf,len);
      </p><h4><a name="id644631"></a>KMGetContext</h4><p>
    </p><pre class="programlisting">
BOOL WINAPI KMGetContext(PWSTR buf, DWORD len);
      </pre><p>
  </p><p>
        KMGetContext returns the last len-1 UTF-16 codepoints of the context stack.  If there are not enough
        characters in the context stack, it will return as many as it can.  On success, the buf
        variable will be null terminated.
      </p><p>
        The context stack can contain a special code for deadkeys.  See KMQueueAction for a way to output
        a deadkey.  The code sequence for a deadkey is (3 words):
      </p><p>
    </p><pre class="programlisting">
UC_SENTINEL, CODE_DEADKEY, deadkeyID
      </pre><p>
  </p><p>
        UC_SENTINEL is 0xFFFF; CODE_DEADKEY is 0x0008; deadkeyID can be any value from 0x0001 to 0xFFFE.
      </p><p>
    </p><div class="note" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Note</h3>Changes in 8.0.333.0: a potential buffer overflow has been corrected.  The size of the buffer pointed to by buf should be len+1 WCHARs to allow for terminating null.
    Keyman now counts supplementary plane characters as 2 UTF-16 codepoints rather than as a single codepoint.  Keyman no longer returns partial deadkey code sequences.</div><p>
  </p><h4><a name="id644667"></a>KMSetOutput</h4><p>
    </p><pre class="programlisting">
BOOL WINAPI KMSetOutput(PWSTR buf, DWORD backlen); 
      </pre><p>
  </p><p>
        KMSetOutput is a wrapper for KMQueueAction.  It simplifies the process of deleting contextual
        characters and outputting a new string.  The results will not be output to the screen until the
        current function returns.  If called within the context of an IMC window, the results will not be
        output to the screen until the window posts the wm_keymanim_close message.
      </p><p>
        buf is a pointer to a null-terminated string of characters to output.
        backlen is the number of characters to backspace from the current context before displaying buf.
      </p><p>
        This function modifies the context returned from KMGetContext, even if the output is not yet on the screen.
      </p><p>
        Internally, this function does the following code:
      </p><p>
    </p><pre class="programlisting">
while(backlen-- &gt; 0) KMQueueAction(QIT_BACK, 0); 
      </pre><p>
  </p><p>
    </p><pre class="programlisting">
while(*buf) KMQueueAction(QIT_CHAR, *buf++); 
      </pre><p>
  </p><h4><a name="id644709"></a>KMQueueAction</h4><p>
    </p><pre class="programlisting">
BOOL WINAPI KMQueueAction(int itemType, DWORD dwData); 
      </pre><p>
  </p><p>
        KMQueueAction lets you send any Keyman action to a target application.  This can be virtual keys,
        characters, shift keys up and down, deadkeys, beeps, or backspaces (a special case of virtual keys).
      </p><table><tbody><tr>
      <th>itemType code</th>
      <th>Description</th>
    </tr><tr>
      <td>QIT_VKEYDOWN</td>
      <td>Simulate any key press on the keyboard; dwData is the virtual key code</td>
    </tr><tr>
      <td>QIT_VKEYUP</td>
      <td>Simulate any key release on the keyboard; dwData is the virtual key code</td>
    </tr><tr>
      <td>QIT_VSHIFTDOWN</td>
      <td>Simulate pressing a set of shift keys.  dwData can be a combination of the following flags: LCTRLFLAG, RCTRLFLAG, LALTFLAG, RALTFLAG, K_SHIFTFLAG, K_CTRLFLAG, K_ALTFLAG</td>
    </tr><tr>
      <td>QIT_VSHIFTUP</td>
      <td>Release the shift state, dwData is the same as the previous flags.</td>
    </tr><tr>
      <td>QIT_CHAR</td>
      <td>dwdata is any WCHAR.  For an ANSI window, zero-pad an 8-bit character.</td>
    </tr><tr>
      <td>QIT_DEADKEY</td>
      <td>dwData is any value from 0x0001 to 0xFFFE.  This can be matched in the context with KMGetContext.</td>
    </tr><tr>
      <td>QIT_BELL</td>
      <td>dwData should be zero (0).</td>
    </tr><tr>
      <td>QIT_BACK</td>
      <td>dwData should be zero (0).</td>
    </tr></tbody></table><h4><a name="id644829"></a>KMHideIM</h4><p>
    </p><pre class="programlisting">
BOOL WINAPI KMHideIM(HWND hwndIM); 
      </pre><p>
  </p><p>
        KMHideIM hides the IMC window referred to by hwndIM and ensures that Keyman processes input from the
        keyboard through the correct method.  You should call this rather than hiding the window manually
        with ShowWindow(hwnd, SW_HIDE); or post the message wm_keymanim_close to hide the window.
      </p><h4><a name="id644844"></a>KMDisplayIM</h4><p>
    </p><pre class="programlisting">
BOOL WINAPI KMDisplayIM(HWND hwndIM, BOOL FCaptureAll); 
      </pre><p>
  </p><p>
        KMDisplayIM displays the IMC window referred to by hwndIM.  It does not do any movement of the window.
        If the FCaptureAll flag is set, all keyboard input (character-generating keys only) will be redirected
        to the IMC window until the message wm_keymanim_close is posted, KMHideIM is called, or KMDisplayIM
        with FCaptureAll is set to false.
      </p><h4><a name="id644858"></a>KMGetKeyboardPath</h4><p>
    </p><pre class="programlisting">
BOOL WINAPI KMGetKeyboardPath(PSTR keyboardname, PWSTR dir, DWORD length); 
      </pre><p>
  </p><p>
        This function returns the full path to the keyboard referred to by keyboardname.  The buffer dir should
        be 260 characters long.
      </p><h4><a name="id644872"></a>KMGetActiveKeyboard</h4><p>
    </p><pre class="programlisting">
BOOL WINAPI KMGetActiveKeyboard(PSTR keyboardname, DWORD length);
      </pre><p>
  </p><p>
        This function can be called while processing to determine which is the active keyboard.  Alternatively,
        use the callbacks KeymanIMActivate and KeymanIMDeactivate.
      </p><h4><a name="id644887"></a>KMSendDebugString</h4><p>
    </p><pre class="programlisting">
BOOL WINAPI KMSendDebugString(PSTR str);
      </pre><p>
  </p><p>
        This function outputs the string str to the Keyman debug window or debug log file (usually c:\keyman.log).
      </p><h4><a name="id644901"></a>The Input Method Composition window</h4><p>
        The IMC window can be shown or hidden at any time that the associated keyboard is active.  This means
        that you can have an IMC window permanently open or open at appropriate times.
      </p><p>
        The keyboard IMSample included with Keyman is a good example of manipulating the IMC display.
      </p><p>
        The window should be created invisible, most probaly as a popup window.  The window can use KMGetContext,
        KMSetOutput at any time, but output will not be put to the screen until it has posted (not sent) wm_keymanim_close to itself.
      </p><p>
    </p><pre class="programlisting">
PostMessage(hwnd, wm_keymanim_close, (WPARAM) FSuccess, (LPARAM) FActuallyClose);
      </pre><p>
  </p><p>
        Keyman will manage the window display, focus, and message loop.  The window procedure should set the
        position and size appropriately.
      </p><p>
        Keyman will recognise this window and any child windows to be part of the IM and will not attempt to
        process any input that goes through the window.
      </p><p>
        The IMC window must not take focus at any time.
      </p><h4><a name="id644935"></a>Limitations</h4><p>
    </p><div class="itemizedlist"><ul type="disc"><li><p>
        Clicks outside the window will cancel the IM and lose context.
      </p></li><li><p>
        Switching applications will cancel the IM and lose context.
      </p></li></ul></div><p>
  </p><h4><a name="id644955"></a>Related Topics</h4><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="guide_imx.php" title="DLL Interface for Keyman - Introduction">DLL Interface for Keyman - Introduction</a></p></li><li><p><a class="xref" href="guide_imx_imxdll.php" title="DLL Exports">DLL Exports</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="guide_imx.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="index_guide_imx.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="tutorials.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">DLL Interface for Keyman - Introduction </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Chapter 3. Tutorials</td></tr></table></div>
