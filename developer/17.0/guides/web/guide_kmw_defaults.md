---
title: Changing KeymanWeb's Defaults
---

<div markdown="1" style="float:right">

|     |      Changing KeymanWeb's Defaults     |       |
|:----|:--------------------------------------:|------:|
| [Prev](./guide_kmw_control_by_control) | KeymanWeb Guide | [Next](./index_guide_imx) |

</div>

### Changing KeymanWeb's Defaults

In this example, the web page designer specifies some additional
defaults for KeymanWeb, such as the name of the non-KeymanWeb keyboard
in the keyboard list (usually "English"), and the colour of the keycaps
in the visual keyboard.

Note that in general the style of the visual keyboard is controlled by
CSS (see the reference documentation); however, due to bugs in Internet
Explorer's handling of CSS, the "hover" and "keydown" styles of the
visual keyboard are limited to changing the colour.

A working example can be seen online at
[www.keymanweb.com](http://www.keymanweb.com/dev/defaults)

![](/cdn/dev/img/developer/90/kmw_defaults.png)

#### Code Walkthrough

Include the following script in the HEAD of your page:

``` programlisting
/* Set defaults for keyboard names, and visual keyboard colours */
KeymanWeb_DefaultKeyboardName = "(KeymanWeb Off)";
KeymanWeb_DefaultKeyboardHelp = "<p>KeymanWeb is disabled.  To enable KeymanWeb, select a keyboard from the list above.</p>";
KeymanWeb_ControlDownColor = "#ff8080";
KeymanWeb_KeyDownColor = "#ffc0c0";
KeymanWeb_KeyHoverColor = "#ffe0e0";

/* SetupDocument: Called when the page finishes loading */
function SetupDocument()
{
  /* Make sure that Keyman is initialized (we can't guarantee initialization order) */
  KeymanWeb.Init();
}
```

Also include the following HTML code:

``` programlisting
<head>
  <!-- Load the KeymanWeb engine -->
  <script src="keymanweb.js" type="text/javascript"></script>
  <!-- Load the LaoKeys keyboard stub -->
  <script src="laokeys_load.js" type="text/javascript"></script>
</head>

<!-- When the page has finished loading, activate the LaoKeys keyboard, see above -->
<body onload="SetupDocument()">
```

---

|               |                    |                      |
|:--------------|:------------------:|---------------------:|
| [Prev](./guide_kmw_control_by_control) | [Up](./guide/index_guide_kmw) | [Next](./index_guide_imx) |
| Control by Control Example       |        [Home](../index)        |     IMX Developers Guide |