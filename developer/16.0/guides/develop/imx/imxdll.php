<?php
  require_once('includes/template.php');

  head([
    'title' => "DLL Exports"
  ]);
?>

<h1>DLL Exports</h1>

<div class='language-c'>
<p>The DLL is called from Keyman with <code>LoadLibrary()</code>. All functions are then found with <code>GetProcAddress()</code>. You must ensure 
that the function exports do not have ordinals encoded in the names. The best way to accomplish this in C/C++ is to use a .def file.</p>

<h2>DLL group function exports</h2>

<p>The function declaration for the DLL group function is:</p>

<pre><code>BOOL WINAPI KeyEvent(HWND hwndFocus, WORD KeyStroke, WCHAR KeyChar, DWORD ShiftFlags);
</code></pre>

<p>Note that <code><var>KeyEvent()</var></code> is a placeholder for any name that you wish to use. You can have multiple exports for Keyman use in a single
DLL.</p>

<table class='display'>
  <tbody>
    <tr>
      <td><code><var>hwndFocus</var></code></td>
      <td>The currently focused window. You will probably never have a need to use this.</td>
    </tr>

    <tr>
      <td><code><var>KeyStroke</var></code></td>
      <td>The virtual key code for the current key.</td>
    </tr>

    <tr>
      <td><code><var>KeyChar</var></code></td>
      <td>The character code for the current key (based on US English layout). This will be <code>0</code> if <code><var>KeyStroke</var></code> does not generate a
      character (e.g. function keys).</td>
    </tr>

    <tr>
      <td><code><var>ShiftFlags</var></code></td>
      <td>
        <p>The shift state for the current key. The following shift states are possible:</p>

        <table class='display'>
          <tbody>
            <tr>
              <td>Flag</td>
              <td>Value</td>
              <td>Description</td>
            </tr>

            <tr>
              <td><code>LCTRLFLAG</code></td>
              <td><code>0x0001</code></td>
              <td>Left Control Flag</td>
            </tr>

            <tr>
              <td><code>RCTRLFLAG</code></td>
              <td><code>0x0002</code></td>
              <td>Right Control Flag</td>
            </tr>

            <tr>
              <td><code>LALTFLAG</code></td>
              <td><code>0x0005</code></td>
              <td>Left Alt Flag</td>
            </tr>

            <tr>
              <td><code>RALTFLAG</code></td>
              <td><code>0x0008</code></td>
              <td>Right Alt Flag</td>
            </tr>

            <tr>
              <td><code>K_SHIFTFLAG</code></td>
              <td><code>0x0010</code></td>
              <td>Shift flag</td>
            </tr>

            <tr>
              <td><code>K_CTRLFLAG</code></td>
              <td><code>0x0020</code></td>
              <td>Ctrl flag (unused here; see l/r flags)</td>
            </tr>

            <tr>
              <td><code>K_ALTFLAG</code></td>
              <td><code>0x0040</code></td>
              <td>Alt flag (unused here; see l/r flags)</td>
            </tr>

            <tr>
              <td><code>CAPITALFLAG</code></td>
              <td><code>0x0100</code></td>
              <td>Caps lock on</td>
            </tr>

            <tr>
              <td><code>NUMLOCKFLAG</code></td>
              <td><code>0x0400</code></td>
              <td>Num lock on</td>
            </tr>

            <tr>
              <td><code>SCROLLFLAG</code></td>
              <td><code>0x1000</code></td>
              <td>Scroll lock on</td>
            </tr>

            <tr>
              <td><code>ISVIRTUALKEY</code></td>
              <td><code>0x4000</code></td>
              <td>It is a Virtual Key Sequence</td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>

<h2>Optional DLL Exports</h2>

<p>Keyman recognises a number of other exports, if they are defined in the DLL. None of these are required. These functions will be
called when a keyboard that references the DLL is manipulated. They will not be called for keyboards that do not reference the DLL.</p>

<p>The following exports are available:</p>

<h3>KeymanIMInit</h3>

<pre><code>BOOL WINAPI KeymanIMInit(PSTR keyboardname);
</code></pre>

<p><code>KeymanIMInit()</code> is called once when the keyboard identified by <code><var>keyboardname</var></code> is loaded 
for a given process. It is called for each process in which the keyboard is loaded.</p>

<h3>KeymanIMDestroy</h3>

<pre><code>BOOL WINAPI KeymanIMDestroy(PSTR keyboardname);
</code></pre>

<p>This is called once when the keyboard identified by <code><var>keyboardname</var></code> is unloaded in a given process. It is 
called when the process exits normally, or when Keyman refreshes its keyboard list after keyboards are added or removed. If the 
keyboard is subsequently reloaded, <code>KeymanIMInit()</code> will be called again.</p>

<h3>KeymanIMActivate</h3>

<pre><code>BOOL WINAPI KeymanIMActivate(PSTR keyboardname);
</code></pre>

<p>This function is called whenever the user or a program activates the keyboard. It is never called before <code>KeymanIMInit()</code> (unless
<code>KeymanIMInit()</code> is not exported). This is an appropriate place to switch on permanently-visible IMC windows. <code>KeymanIMActivate()</code> can also be
called when switching processes and the target process has a related keyboard already active.</p>

<h3>KeymanIMDeactivate</h3>

<pre><code>BOOL WINAPI KeymanIMDeactivate(PSTR keyboardname);
</code></pre>

<p>This function is called when the user or a program switches off a related keyboard. It is always called before <code>KeymanIMActivate()</code> for
the next keyboard. It will also be called when the user activates another process, to give the DLL a chance to hide top-most IMC windows.</p>

<h3>KeymanIMConfigure</h3>

<pre><code>BOOL WINAPI KeymanIMConfigure(PSTR keyboardname, HWND hwndParent);
</code></pre>

<p><code>KeymanIMConfigure()</code> is called when the user clicks the Configure button in Keyman Configuration to configure the 
DLL-specific functionality for the keyboard. The appropriate behaviour is to display a dialog box, and save the settings in the registry.</p>

<p>This function is separate from all the other functions. It can be called when there are no keyboards loaded, or even if Keyman
itself is not loaded. You should not attempt to call Keyman32.dll from this function.</p>

<h2>See also</h2>

<ul>
  <li><a href="index" title="DLL Interface for Keyman - Introduction">DLL Interface for Keyman - Introduction</a></li>
  <li><a href="imxlib" title="The imlib.cpp library module">The imlib.cpp library module</a></li>
</ul>
    
</div>