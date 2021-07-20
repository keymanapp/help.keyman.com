<?php
  require_once('includes/template.php');

  head([
    'title' => "The imlib.cpp library module"
  ]);
?>

<h1>The imlib.cpp library module</h1>

<div class='language-c'>

<p>imlib.cpp, included in the development kit, contains a set of useful functions for interfacing to Keyman.</p>

<h2>PrepIM</h2>

<pre><code>BOOL PrepIM(void);
</code></pre>

<p><code>PrepIM()</code> initialises the Keyman32 imports. You should not call any of the Keyman imports without calling <code>PrepIM()</code> first. 
If <code>PrepIM()</code> fails, you should exit without doing any processing.</p>

<h2>IMDefWindowProc</h2>

<pre><code>BOOL IMDefWindowProc(HWND hwnd, UINT msg, WPARAM wParam, LPARAM lParam, LRESULT *lResult);
</code></pre>

<p><code>IMDefWindowProc()</code> should be called from an IMC window procedure (see section titled Input Method Composition windows). If it 
returns <code>TRUE</code> you should return the value stored in <code><var>lResult</var></code> without any further processing. 
<code>IMDefWindowProc()</code> mostly manages window activation and movement.</p>

<h2>Keyman Imports</h2>

<p>The DLL can call Keyman functions to interact with Keyman and the target application. It should not attempt to directly control the
application as Keyman will be doing this. You should never call any of the functions here from the <code>KeymanIMConfigure()</code> callback.</p>

<p>You can use <code>PrepIM()</code>, declared in imlib.cpp to get access to the the Keyman functions. When using imlib.cpp, the functions are
declared as pointers, so you need to dereference them to call them in C (e.g. for KMGetContext, call <code>(*KMGetcontext)(buf,len);</code></p>

<h2>KMGetContext</h2>

<pre><code>BOOL WINAPI KMGetContext(PWSTR buf, DWORD len);
</code></pre>

<p><code>KMGetContext()</code> returns the last <code><var>len</var>-1</code> UTF-16 codepoints of the context stack. If there are not enough characters in the 
context stack, it will return as many as it can. On success, the <code><var>buf</var></code> variable will be null terminated.</p>

<p>The context stack can contain a special code for deadkeys. See <code>KMQueueAction()</code> for a way to output a deadkey. The code sequence for a
deadkey is (3 words):</p>

<pre><code>UC_SENTINEL, CODE_DEADKEY, deadkeyID
</code></pre>

<p><code>UC_SENTINEL</code> is <code>0xFFFF</code>; <code>CODE_DEADKEY</code> is <code>0x0008</code>; <code>deadkeyID</code> can be any value from <code>0x0001</code> to <code>0xFFFE</code>.</p>

<aside>
  <h3 class="title">Note</h3>
  
  <p>Changes in 8.0.333.0: a potential buffer overflow has been corrected. The size of the buffer pointed to by
  <code><var>buf</var></code> should be <code>WCHAR[<var>len</var>+1]</code> to allow for terminating null. Keyman now 
  counts supplementary plane characters as 2 UTF-16 codepoints rather than as a single codepoint. Keyman no longer 
  returns partial deadkey code sequences.</p>
</aside>

<h2>KMSetOutput</h2>

<pre><code>BOOL WINAPI KMSetOutput(PWSTR buf, DWORD backlen); 
</code></pre>

<p><code>KMSetOutput()</code> is a wrapper for <code>KMQueueAction()</code>. It simplifies the process of deleting 
contextual characters and outputting a new string. The results will not be output to the screen until the current 
function returns. If called within the context of an IMC window, the results will not be output to the screen until 
the window posts the <code>wm_keymanim_close</code> message.</p>

<p><code><var>buf</var></code> is a pointer to a null-terminated string of characters to output. <code><var>backlen</var></code> is the 
number of characters to backspace from the current context before displaying <code><var>buf</var></code>.</p>

<p>This function modifies the context returned from <code>KMGetContext()</code>, even if the output is not yet on the screen.</p>

<p>Internally, this function does the following:</p>
    
<pre><code>while(backlen-- > 0) KMQueueAction(QIT_BACK, 0); 
while(*buf) KMQueueAction(QIT_CHAR, *buf++); 
</code></pre>

<h2>KMQueueAction</h2>

<pre><code>BOOL WINAPI KMQueueAction(int itemType, DWORD dwData); 
</code></pre>

<p><code>KMQueueAction()</code> lets you send any Keyman action to a target application. This can be virtual keys, characters, 
shift keys up and down, deadkeys, beeps, or backspaces (a special case of virtual keys).</p>

<table class='display'>
  <tbody>
    <tr>
      <th>itemType code</th>
      <th>Description</th>
    </tr>

    <tr>
      <td><code>QIT_VKEYDOWN</code></td>
      <td>Simulate any key press on the keyboard; <code><var>dwData</var></code> is the virtual key code</td>
    </tr>

    <tr>
      <td><code>QIT_VKEYUP</code></td>
      <td>Simulate any key release on the keyboard; <code><var>dwData</var></code> is the virtual key code</td>
    </tr>

    <tr>
      <td><code>QIT_VSHIFTDOWN</code></td>
      <td>Simulate pressing a set of shift keys. <code><var>dwData</var></code> can be a combination of the following flags: <code>LCTRLFLAG, RCTRLFLAG, LALTFLAG,
      RALTFLAG, K_SHIFTFLAG, K_CTRLFLAG, K_ALTFLAG</code></td>
    </tr>

    <tr>
      <td><code>QIT_VSHIFTUP</code></td>
      <td>Release the shift state, <code><var>dwData</var></code> is the same as the previous flags.</td>
    </tr>

    <tr>
      <td><code>QIT_CHAR</code></td>
      <td><code><var>dwdata</var></code> is any <code>WCHAR</code>.</td>
    </tr>

    <tr>
      <td><code>QIT_DEADKEY</code></td>
      <td><code><var>dwData</var></code> is any value from <code>0x0001</code> to <code>0xFFFE</code>. This can be matched in the context with <code>KMGetContext()</code>.</td>
    </tr>

    <tr>
      <td><code>QIT_BELL</code></td>
      <td><code><var>dwData</var></code> should be zero (<code>0</code>).</td>
    </tr>

    <tr>
      <td><code>QIT_BACK</code></td>
      <td><code><var>dwData</var></code> should be zero (<code>0</code>).</td>
    </tr>
  </tbody>
</table>

<h2>KMHideIM</h2>

<pre><code>BOOL WINAPI KMHideIM(HWND hwndIM); 
</code></pre>

<p><code>KMHideIM()</code> hides the IMC window referred to by <code><var>hwndIM</var></code> and ensures that Keyman processes input from the keyboard through the correct
method. You should call this rather than hiding the window manually with <code>ShowWindow(hwnd, SW_HIDE);</code> or post the message
<code>wm_keymanim_close</code> to hide the window.</p>

<h2>KMDisplayIM</h2>

<pre><code>BOOL WINAPI KMDisplayIM(HWND hwndIM, BOOL FCaptureAll); 
</code></pre>

<p><code>KMDisplayIM()</code> displays the IMC window referred to by <code><var>hwndIM</var></code>. It does not do any movement of the window. If the 
<code><var>FCaptureAll</var></code> flag is set, all keyboard input (character-generating keys only) will be redirected to the IMC window until the message 
<code>wm_keymanim_close</code> is posted, <code>KMHideIM()</code> is called, or <code>KMDisplayIM()</code> with <code><var>FCaptureAll</var></code> set to <code>FALSE</code>.</p>

<h2>KMGetKeyboardPath</h2>

<pre><code>BOOL WINAPI KMGetKeyboardPath(PSTR keyboardname, PWSTR dir, DWORD length); 
</code></pre>

<p>This function returns the full path to the keyboard referred to by <code><var>keyboardname</var></code>. The buffer <code><var>dir</var></code> should be 260 characters long.</p>

<h2>KMGetActiveKeyboard</h2>

<pre><code>BOOL WINAPI KMGetActiveKeyboard(PSTR keyboardname, DWORD length);
</code></pre>

<p>This function can be called while processing to determine which is the active keyboard. Alternatively, use the callbacks
<code>KeymanIMActivate()</code> and <code>KeymanIMDeactivate()</code>.</p>

<h2>KMSendDebugString</h2>

<pre><code>BOOL WINAPI KMSendDebugString(PSTR str);
</code></pre>

<p>This function outputs the string <code><var>str</var></code> to the Keyman debug window or debug log file (usually %USERPROFILE%\Desktop\keymanlog\system*.log).</p>

<h2>The Input Method Composition window</h2>

<p>The IMC window can be shown or hidden at any time that the associated keyboard is active. This means that you can have an IMC window
permanently open or open at appropriate times.</p>

<p>The keyboard IMSample included with Keyman is a good example of manipulating the IMC display.</p>

<p>The window should be created invisible, most probaly as a popup window. The window can use <code>KMGetContext()</code>, <code>KMSetOutput()</code> at any time,
but output will not be put to the screen until it has posted (not sent) <code>wm_keymanim_close</code> to itself.</p>

<pre><code>PostMessage(hwnd, wm_keymanim_close, (WPARAM) FSuccess, (LPARAM) FActuallyClose);
</code></pre>

<p>Keyman will manage the window display, focus, and message loop. The window procedure should set the position and size
appropriately.</p>

<p>Keyman will recognise this window and any child windows to be part of the IM and will not attempt to process any input that goes
through the window.</p>

<p>The IMC window must not take focus at any time.</p>

<h2>Limitations</h2>

<ul type="disc">
  <li>Clicks outside the window will cancel the IM and lose context.</li>
  <li>Switching applications will cancel the IM and lose context.</li>
</ul>

<h2>See also</h2>

<ul type="disc">
  <li><a href="index" title="DLL Interface for Keyman - Introduction">DLL Interface for Keyman - Introduction</a></li>
  <li><a href="imxdll" title="DLL Exports">DLL Exports</a></li>
</ul>

</div>