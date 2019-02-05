<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">DLL Interface for Keyman - Introduction</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="guide_imx_imxdll.php">Prev</a> </td><th width="60%" align="center">IMX Developers Guide</th><td width="20%" align="right"> <a accesskey="n" href="guide_imx_imxlib.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title"><a name="guide_imx"></a>DLL Interface for Keyman - Introduction</h3></div></div></div><p>
        Keyman's multiple group processing is powerful, but sometimes you need to be
        able to do something a bit more complex, such as a dictionary lookup.  Keyman's
        DLL interface let you do this.  You can call a function in a DLL in the same
        way as you call another group.  The function can read the context, deadkeys and
        the current keystroke, and output characters, deadkeys, virtual keys, beeps and
        other items.
      </p><p>
        The DLL interface also allows you to create a popup Input Method Composition (IMC)
        window.  This window allows the user to select visually the characters they are
        wishing to input.  The window can be set to be visible when the keyboard is active,
        or after an appropriate key sequence.  When the window is visible, it can be set to
        capture all keyboard input, or be passive.
      </p><h4><a name="id708330"></a>File locations</h4><p>
        The DLL should be placed in any of the following locations:
        </p><div class="itemizedlist"><ul type="disc"><li><p>
          The same directory as the .kmx file (e.g. use a package to install it)
          </p></li><li><p>
          The Keyman program directory (same place as keyman32.dll)
          </p></li><li><p>
          Anywhere on the path (such as the Windows directory)
          </p></li></ul></div><p>
        The best option is the first, as you can then include the DLL in a Keyman package for easy installation and uninstallation.
      </p><h4><a name="id708270"></a>General usage information</h4><p>
        DLL functions used in place of groups are called DLL group functions.
      </p><p>
        All strings, apart from keyboard names, are passed as WCHAR, regardless of whether
        the active window is a Unicode window or not.  ANSI characters are represented as
        16-bit WCHAR, with high bits zeroed out.
      </p><p>
        The DLL will be loaded for each process in which the keyboard is activated. 
        Remember that the DLL will not share memory between these processes by default, so if
        you have large memory requirements, you should use memory mapped files or possibly
        SHARDATA segments to minimize the memory consumption.
      </p><p>
        DLL group functions are called in a fairly time-critical environment.  It is important
        that you minimise the processing time in these functions.  It is essential that you
        avoid any window focus or activation -- message boxes are definitely out of the question.
        For debugging purposes, there is a Keyman32.dll function exported for writing to the
        logfile (see the section titled Keyman32 imports).
      </p><p>
        DLLs can handle multiple keyboards at once.  The keyboards are identified by a name which
        is the filename of the keyboard, minus path and extension.  For example, given
        c:\keyman\imsample\imsample.kmx, the keyboard name is imsample.  These are the same names
        that Keyman uses internally, for example in the registry and directory names.
      </p><h4><a name="id708541"></a>Registry settings</h4><p>
        Parameters for the DLL can be stored in two locations in the registry.  They should always
        be stored under HKEY_CURRENT_USER, as the user may not have permission to change machine-wide
        settings, and the settings should not affect other users.  The following locations are recommended:
      </p><p>
        HKEY_CURRENT_USER\Software\Tavultesoft\Keyman\6.0\IMX\[DLLName]
      </p><p>
        HKEY_CURRENT_USER\Software\Tavultesoft\Keyman\6.0\Installed Keyboards\[kbdname]
      </p><p>
        The first key should be used for settings that pertain to any keyboard associated with the DLL.
        The second key should be used for any keyboard-specific settings.  Values stored under the second
        key should be prefixed with the name of the dll, so that they will not conflict with Keyman or
        other dll values.
      </p><h4><a name="id708861"></a>The .kmn interface</h4><p>
        Inside a .kmn file, you define the DLL group function interface as follows:
      </p><p>
    </p><pre class="programlisting">
store(DLLFunction) "myfile.dll:KeyEvent"
      </pre><p>
  </p><p>
        You can use this anywhere where you would place the use statement (except in
        the begin statement), with the call statement.  For example,
      </p><p>
    </p><pre class="programlisting">
+ 'a' &gt; call(DLLFunction)
      </pre><p>
  </p><p>
        A single .kmn file can reference multiple DLL group functions, in a single or multiple DLLs.
      </p><h4><a name="id708699"></a>Related Topics</h4><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="guide_imx_imxdll.php" title="DLL Exports">DLL Exports</a></p></li><li><p><a class="xref" href="guide_imx_imxlib.php" title="The imlib.cpp library module">The imlib.cpp library module</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="guide_imx_imxdll.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="index_guide_imx.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="guide_imx_imxlib.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">DLL Exports </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> The imlib.cpp library module</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
