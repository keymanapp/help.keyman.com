<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT
PAGE:           DLL Interface for Keyman

TITLE:          DLL Interface for Keyman

BODY

SECTION:        The imlib.cpp library module

TEXT:           imlib.cpp, included in the development kit, contains a set of useful functions
                for interfacing to Keyman.

HEADING:        PrepIM

CODELINE:       BOOL PrepIM(void);

TEXT:           PrepIM initialises the Keyman32 imports.  You should not call any of the Keyman
                imports without calling PrepIM first.  If PrepIM fails, you should exit without
                doing any processing.

HEADING:        IMDefWindowProc

CODELINE:       BOOL IMDefWindowProc(HWND hwnd, UINT msg, WPARAM wParam, LPARAM lParam, LRESULT *lResult);

TEXT:           IMDefWindowProc should be called from an IMC window procedure (see section titled Input
                Method Composition windows).  If it returns TRUE you should return the value stored in
                lResult without any further processing.  IMDefWindowProc mostly manages window activation
                and movement.

ENDSECTION

SECTION:        Keyman Imports

TEXT:           The DLL can call Keyman functions to interact with Keyman and the target application.  It
                should not attempt to directly control the application as Keyman will be doing this.  You
                should never call any of the functions here from the KeymanIMConfigure callback.

TEXT:           You can use PrepIM(), declared in imlib.cpp to get access to the the Keyman functions.
                When using imlib.cpp, the functions are declared as pointers, so you need to dereference
                them to call them in C (e.g. for KMGetContext, call (*KMGetcontext)(buf,len);

HEADING:        KMGetContext

CODELINE:       BOOL WINAPI KMGetContext(PWSTR buf, DWORD len);

TEXT:           KMGetContext returns the last len-1 characters of the context stack.  If there are not enough
                characters in the context stack, it will return as many as it can.  On success, the buf
                variable will be null terminated.

TEXT:           The context stack can contain a special code for deadkeys.  See KMQueueAction for a way to output
                a deadkey.  The code sequence for a deadkey is (3 words):
 
CODELINE:       UC_SENTINEL, CODE_DEADKEY, deadkeyID

TEXT:           UC_SENTINEL is 0xFFFF; CODE_DEADKEY is 0x0008; deadkeyID can be any value from 0x0001 to 0xFFFE.

HEADING:        KMSetOutput

CODELINE:       BOOL WINAPI KMSetOutput(PWSTR buf, DWORD backlen); 

TEXT:           KMSetOutput is a wrapper for KMQueueAction.  It simplifies the process of deleting contextual
                characters and outputting a new string.  The results will not be output to the screen until the
                current function returns.  If called within the context of an IMC window, the results will not be
                output to the screen until the window posts the wm_keymanim_close message.

TEXT:           buf is a pointer to a null-terminated string of characters to output.
                backlen is the number of characters to backspace from the current context before displaying buf.

TEXT:           This function modifies the context returned from KMGetContext, even if the output is not yet on the screen.

TEXT:           Internally, this function does the following code:

CODELINE:       while(backlen-- > 0) KMQueueAction(QIT_BACK, 0);
                while(*buf) KMQueueAction(QIT_CHAR, *buf++);

HEADING:        KMQueueAction

CODELINE:       BOOL WINAPI KMQueueAction(int itemType, DWORD dwData);

TEXT:           KMQueueAction lets you send any Keyman action to a target application.  This can be virtual keys,
                characters, shift keys up and down, deadkeys, beeps, or backspaces (a special case of virtual keys).

VTABLE:         "20%", "80%"
                "itemType code",    "Description"
                "QIT_VKEYDOWN",     "Simulate any key press on the keyboard; dwData is the virtual key code"
                "QIT_VKEYUP",       "Simulate any key release on the keyboard; dwData is the virtual key code"
                "QIT_VSHIFTDOWN",   "Simulate pressing a set of shift keys.  dwData can be a combination of the following flags: LCTRLFLAG, RCTRLFLAG, LALTFLAG, RALTFLAG, K_SHIFTFLAG, K_CTRLFLAG, K_ALTFLAG"
                "QIT_VSHIFTUP",     "Release the shift state, dwData is the same as the previous flags."
                "QIT_CHAR",         "dwdata is any WCHAR.  For an ANSI window, zero-pad an 8-bit character."
                "QIT_DEADKEY",      "dwData is any value from 0x0001 to 0xFFFE.  This can be matched in the context with KMGetContext."
                "QIT_BELL",         "dwData should be zero (0)."
                "QIT_BACK",         "dwData should be zero (0)."

HEADING:        KMHideIM

CODELINE:       BOOL WINAPI KMHideIM(HWND hwndIM);

TEXT:           KMHideIM hides the IMC window referred to by hwndIM and ensures that Keyman processes input from the
                keyboard through the correct method.  You should call this rather than hiding the window manually
                with ShowWindow(hwnd, SW_HIDE); or post the message wm_keymanim_close to hide the window.

HEADING:        KMDisplayIM

CODELINE:       BOOL WINAPI KMDisplayIM(HWND hwndIM, BOOL FCaptureAll);

TEXT:           KMDisplayIM displays the IMC window referred to by hwndIM.  It does not do any movement of the window.
                If the FCaptureAll flag is set, all keyboard input (character-generating keys only) will be redirected
                to the IMC window until the message wm_keymanim_close is posted, KMHideIM is called, or KMDisplayIM
                with FCaptureAll is set to false.

HEADING:        KMGetKeyboardPath

CODELINE:       BOOL WINAPI KMGetKeyboardPath(PSTR keyboardname, PWSTR dir, DWORD length);

TEXT:           This function returns the full path to the keyboard referred to by keyboardname.  The buffer dir should
                be 260 characters long.

HEADING:        KMGetActiveKeyboard

CODELINE:       BOOL WINAPI KMGetActiveKeyboard(PSTR keyboardname, DWORD length);

TEXT:           This function can be called while processing to determine which is the active keyboard.  Alternatively,
                use the callbacks KeymanIMActivate and KeymanIMDeactivate.

HEADING:        KMSendDebugString

CODELINE:       BOOL WINAPI KMSendDebugString(PSTR str);

TEXT:           This function outputs the string str to the Keyman debug window or debug log file (usually c:\keyman.log).

ENDSECTION

SECTION:        The Input Method Composition window

TEXT:           The IMC window can be shown or hidden at any time that the associated keyboard is active.  This means
                that you can have an IMC window permanently open or open at appropriate times.

TEXT:           The keyboard IMSample included with Keyman is a good example of manipulating the IMC display.

TEXT:           The window should be created invisible, most probaly as a popup window.  The window can use KMGetContext,
                KMSetOutput at any time, but output will not be put to the screen until it has posted (not sent)
                 wm_keymanim_close to itself.

CODELINE:       PostMessage(hwnd, wm_keymanim_close, (WPARAM) FSuccess, (LPARAM) FActuallyClose);

TEXT:           Keyman will manage the window display, focus, and message loop.  The window procedure should set the
                position and size appropriately.

TEXT:           Keyman will recognise this window and any child windows to be part of the IM and will not attempt to
                process any input that goes through the window.

TEXT:           The IMC window must not take focus at any time.

HEADING:        Limitations

BULLETLIST:     Clicks outside the window will cancel the IM and lose context.
                Switching applications will cancel the IM and lose context.

ENDSECTION

ENDBODY

PAGENAV:        "Introduction", "imxintro.html", "", ""

FOOTER

ENDPAGE
ENDFORMAT
);
?>
