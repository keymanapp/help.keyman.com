<?php
  require_once('includes/template.php');

  head([
    'title' => "DLL Exports"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">DLL Exports</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="index_guide_imx.php">Prev</a> </td><th width="60%" align="center">IMX Developers Guide</th><td width="20%" align="right"> <a accesskey="n" href="guide_imx.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="guide_imx_imxdll">DLL Exports</h3></div></div></div><p>
    The DLL is called from Keyman with LoadLibrary.  All functions are then
    found with GetProcAddress.  You must ensure that the function exports do not
    have ordinals encoded in the names.  The best way to accomplish this in C/C++
    is to use a .def file.
  </p><h4><a name="id644065"></a>DLL group function exports</h4><p>
    The function declaration for the DLL group function is:
  </p><p>
    </p><pre class="programlisting">
BOOL WINAPI KeyEvent(HWND hwndFocus, WORD KeyStroke, WCHAR KeyChar, DWORD ShiftFlags);
    </pre><p>
  </p><p>
    Note that KeyEvent is a placeholder for any name that you wish to use.  You can
    have multiple exports for Keyman use in a single DLL.
  </p><div class="informaltable"><table border="0"><colgroup><col><col></colgroup><tbody><tr><td>hwndFocus</td><td>
          The currently focused window.  You will probably never have a need to use this.
        </td></tr><tr><td>KeyStroke</td><td>
          The virtual key code for the current key.
        </td></tr><tr><td>KeyChar</td><td>
          The character code for the current key (based on US English layout).  This
          will be 0 if KeyStroke does not generate a character (e.g. function keys).
        </td></tr><tr><td>ShiftFlags</td><td>
          <p>
          The shift state for the current key.  The following shift states are possible:
          </p><div class="informaltable"><table border="0"><colgroup><col><col><col></colgroup><tbody><tr><td>Flag</td><td>Value</td><td>Description</td></tr><tr><td>LCTRLFLAG</td><td>x0001</td><td>Left Control Flag</td></tr><tr><td>RCTRLFLAG</td><td>0x0002</td><td>Right Control Flag</td></tr><tr><td>LALTFLAG</td><td>0x0005</td><td>Left Alt Flag</td></tr><tr><td>RALTFLAG</td><td>0x0008</td><td>Right Alt Flag</td></tr><tr><td>K_SHIFTFLAG</td><td>0x0010</td><td>Shift flag</td></tr><tr><td>K_CTRLFLAG</td><td>0x0020</td><td>Ctrl flag (unused here; see l/r flags)</td></tr><tr><td>K_ALTFLAG</td><td>x0040</td><td>Alt flag (unused here; see l/r flags)</td></tr><tr><td>CAPITALFLAG</td><td>x0100</td><td>Caps lock on</td></tr><tr><td>NUMLOCKFLAG</td><td>x0400</td><td>Num lock on</td></tr><tr><td>SCROLLFLAG</td><td>x1000</td><td>Scroll lock on</td></tr><tr><td>ISVIRTUALKEY</td><td>x4000</td><td>It is a Virtual Key Sequence</td></tr></tbody></table></div><p>
          </p>
        </td></tr></tbody></table></div><h4><a name="id644343"></a>Optional DLL Exports</h4><p>
        Keyman recognises a number of other exports, if they are defined in the
        DLL.  None of these are required.  These functions will be called when a
        keyboard that references the DLL is manipulated.  They will not be called
        for keyboards that do not reference the DLL.
      </p><p>
        The following exports are available:
      </p><h4><a name="id644354"></a>KeymanIMInit</h4><p>
    </p><pre class="programlisting">
BOOL WINAPI KeymanIMInit(PSTR keyboardname);
      </pre><p>
  </p><p>
        KeymanIMInit is called once when the keyboard identified by keyboardname is
        loaded for a given process.  It is called for each process in which the
        keyboard is loaded.
      </p><h4><a name="id644368"></a>KeymanIMDestroy</h4><p>
    </p><pre class="programlisting">
BOOL WINAPI KeymanIMDestroy(PSTR keyboardname);
      </pre><p>
  </p><p>
        This is called once when the keyboard identified by keyboardname is unloaded
        in a given process.  It is called when the process exits normally, or when
        Keyman refreshes its keyboard list after keyboards are added or removed.  If
        the keyboard is subsequently reloaded, KeymanIMInit will be called again.
      </p><h4><a name="id644383"></a>KeymanIMActivate</h4><p>
    </p><pre class="programlisting">
BOOL WINAPI KeymanIMActivate(PSTR keyboardname);
      </pre><p>
  </p><p>
        This function is called whenever the user or a program activates the keyboard.
        It is never called before KeymanIMInit (unless KeymanIMInit is not exported).
        This is an appropriate place to switch on permanently-visible IMC windows.
        KeymanIMActivate can also be called when switching processes and the target
        process has a related keyboard already active.
      </p><h4><a name="id644398"></a>KeymanIMDeactivate</h4><p>
    </p><pre class="programlisting">
BOOL WINAPI KeymanIMDeactivate(PSTR keyboardname);
      </pre><p>
  </p><p>
        This function is called when the user or a program switches off a related keyboard.
        It is always called before KeymanIMActivate for the next keyboard.  It will also be
        called when the user activates another process, to give the DLL a chance to hide
        top-most IMC windows.
      </p><h4><a name="id644414"></a>KeymanIMConfigure</h4><p>
    </p><pre class="programlisting">
BOOL WINAPI KeymanIMConfigure(PSTR keyboardname, HWND hwndParent);
      </pre><p>
  </p><p>
        KeymanIMConfigure is called when the user clicks the Configure button in KMShell to
        configure the DLL-specific functionality for the keyboard.  The appropriate behaviour
        is to display a dialog box, and save the settings in the registry.
      </p><p>
        This function is separate from all the other functions.  It can be called when there are
        no keyboards loaded, or even if Keyman itself is not loaded.  You should not attempt to
        call Keyman32.dll from this function.
      </p><h4><a name="id644432"></a>Related Topics</h4><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="guide_imx.php" title="DLL Interface for Keyman - Introduction">DLL Interface for Keyman - Introduction</a></p></li><li><p><a class="xref" href="guide_imx_imxlib.php" title="The imlib.cpp library module">The imlib.cpp library module</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="index_guide_imx.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="index_guide_imx.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="guide_imx.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IMX Developers Guide </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> DLL Interface for Keyman - Introduction</td></tr></table></div>
