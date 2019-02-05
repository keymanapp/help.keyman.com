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

SECTION:        DLL exports

TEXT:           The DLL is called from Keyman with LoadLibrary.  All functions are then
                found with GetProcAddress.  You must ensure that the function exports do not
                have ordinals encoded in the names.  The best way to accomplish this in C/C++
                is to use a .def file.

HEADING:        DLL group function exports

TEXT:           The function declaration for the DLL group function is:

CODELINE:       BOOL WINAPI KeyEvent(HWND hwndFocus, WORD KeyStroke, WCHAR KeyChar, DWORD ShiftFlags);

TEXT:           Note that KeyEvent is a placeholder for any name that you wish to use.  You can
                have multiple exports for Keyman use in a single DLL.

HEADING:        Parameters

VTABLE:         "20%",          "80%"
                "Parameter",    "Description"
                "hwndFocus",    "The currently focused window.  You will probably never have a need to use this."
                "KeyStroke",    "The virtual key code for the current key."
                "KeyChar",      "The character code for the current key (based on US English layout).  This will be 0 if KeyStroke does not generate a character (e.g. function keys)."
                "ShiftFlags",   "The shift state for the current key.  See the table in the Notes section for possible shift states."

HEADING:        Notes

TEXT:           The following shift states are possible:

VTABLE:         "20%",          "20%",      "60%"
                "Flag",         "Value",    "Description"
                "LCTRLFLAG",    "0x0001",   "Left Control flag"
                "RCTRLFLAG",    "0x0002",   "Right Control flag"
                "LALTFLAG",     "0x0004",   "Left Alt flag"
                "RALTFLAG",     "0x0008",   "Right Alt flag"
                "K_SHIFTFLAG",  "0x0010",   "Shift flag"
                "K_CTRLFLAG",   "0x0020",   "Ctrl flag (unused here; see l/r flags)"
                "K_ALTFLAG",    "0x0040",   "Alt flag (unused here; see l/r flags)"
                "CAPITALFLAG",  "0x0100",   "Caps lock on"
                "NUMLOCKFLAG",  "0x0400",   "Num lock on"
                "SCROLLFLAG",   "0x1000",   "Scroll lock on"
                "ISVIRTUALKEY", "0x4000",   "It is a Virtual Key Sequence"
                
ENDSECTION

SECTIONL        Optional DLL exports

TEXT:           Keyman recognises a number of other exports, if they are defined in the
                DLL.  None of these are required.  These functions will be called when a
                keyboard that references the DLL is manipulated.  They will not be called
                for keyboards that do not reference the DLL.

TEXT:           The following exports are available:

HEADING:        KeymanIMInit

CODELINE:       BOOL WINAPI KeymanIMInit(PSTR keyboardname);

TEXT:           KeymanIMInit is called once when the keyboard identified by keyboardname is
                loaded for a given process.  It is called for each process in which the
                keyboard is loaded.
                
HEADING:        KeymanIMDestroy

CODELINE:       BOOL WINAPI KeymanIMDestroy(PSTR keyboardname);

TEXT:           This is called once when the keyboard identified by keyboardname is unloaded
                in a given process.  It is called when the process exits normally, or when
                Keyman refreshes its keyboard list after keyboards are added or removed.  If
                the keyboard is subsequently reloaded, KeymanIMInit will be called again.

HEADING:        KeymanIMActivate

CODELINE:       BOOL WINAPI KeymanIMActivate(PSTR keyboardname);

TEXT:           This function is called whenever the user or a program activates the keyboard.
                It is never called before KeymanIMInit (unless KeymanIMInit is not exported).
                This is an appropriate place to switch on permanently-visible IMC windows.
                KeymanIMActivate can also be called when switching processes and the target
                process has a related keyboard already active.

HEADING:        KeymanIMDeactivate

CODELINE:       BOOL WINAPI KeymanIMDeactivate(PSTR keyboardname);

TEXT:           This function is called when the user or a program switches off a related keyboard.
                It is always called before KeymanIMActivate for the next keyboard.  It will also be
                called when the user activates another process, to give the DLL a chance to hide
                top-most IMC windows.

HEADING:        KeymanIMConfigure

CODELINE:       BOOL WINAPI KeymanIMConfigure(PSTR keyboardname, HWND hwndParent);

TEXT:           KeymanIMConfigure is called when the user clicks the Configure button in KMShell to
                configure the DLL-specific functionality for the keyboard.  The appropriate behaviour
                is to display a dialog box, and save the settings in the registry.

TEXT:           This function is separate from all the other functions.  It can be called when there are
                no keyboards loaded, or even if Keyman itself is not loaded.  You should not attempt to
                call Keyman32.dll from this function.

ENDSECTION

ENDBODY

PAGENAV:        "The DLL file", "imxdll.html", "Helper functions", "imxlib.html"

FOOTER

ENDPAGE
ENDFORMAT
);
?>
