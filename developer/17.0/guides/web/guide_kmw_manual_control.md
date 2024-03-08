---
title: Manual Control Example
---

<div markdown="1" style="float: right">

|       | Manual Control Example    |        |
|:------|:-------------------------:|-------:|
| [Prev](./guide_kmw_automatic_control_loaded) | KeymanWeb Guide | [Next](./guide_kmw_full_manual_control) |

</div>

### Manual Control Example

In this example, the web page designer specifies the location and
activation of the user interface for the KeymanWeb. They have also
specified that the LaoKeys keyboard should be activated by default. This
example continues to use the KeymanWeb default interface.

A working example can be seen online at
[www.keymanweb.com](http://www.keymanweb.com/dev/manual_control)

![](/cdn/dev/img/developer/90/kmw_manual_control.png)

#### Code Walkthrough

Include the following script in the HEAD of your page:

``` programlisting
/* SetupDocument: Called when the page finishes loading */
function SetupDocument()
{
  /* Make sure that Keyman is initialized (we can't guarantee initialization order) */
  KeymanWeb.Init();

  KWControl = document.getElementById('KWControl');
  /* Change the UI control mode of KeymanWeb to manual (default automatic) */
  KeymanWeb.SetMode('manual');
  /* Select the LaoKeys keyboard */
  KeymanWeb.SetActiveKeyboard('Keyboard_laokeys');
}

/* KWControlClick: Called when user clicks on the KWControl IMG */
function KWControlClick()
{
  /* Toggle display of the default KeymanWeb interface to the right of the KWControl IMG */
  var KWControl = document.getElementById('KWControl');
  if(KeymanWeb.IsInterfaceVisible()) KeymanWeb.HideInterface();
  else KeymanWeb.ShowInterface(
        KeymanWeb.GetAbsoluteX(KWControl) + KWControl.offsetWidth - 1,
        KeymanWeb.GetAbsoluteY(KWControl));
     /*
       Note the use of KeymanWeb.GetAbsoluteX and GetAbsoluteY - helper
       functions for getting browser-independent X and Y offsetLeft and offsetTop
     */
}
```

Also include the following HTML code:

``` programlisting
<head>
  <!-- Load the KeymanWeb engine -->
  <script type="text/javascript">KeymanWeb_Key='your_key_here';</script>
  <script src="keymanweb.js" type="text/javascript"></script>
  <!-- Load the LaoKeys keyboard stub -->
  <script src="laokeys_load.js" type="text/javascript"></script>
</head>

<!-- When the page has finished loading, activate the LaoKeys keyboard, see above -->
<body onload="SetupDocument()">
```

And finally, include the control img for KeymanWeb:

``` programlisting
<!-- Display the KeymanWeb icon for the user to click on -->
<img style="border: solid 1px black; padding: 2px 2px 3px 2px" src='kmicon.png' alt='KeymanWeb' onclick='KWControlClick()' id='KWControl' />
```

|           |          |          |
|:----------|:--------:|---------:|
| [Prev](./guide_kmw_automatic_control_loaded) | [Up](./index_guide_kmw) | [Next](./guide_kmw_full_manual_control) |
| Automatic Control (pre-loaded) Example | [Home](../index) | Full Manual Control Example |