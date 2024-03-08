---
title: Control by Control Example
---
<div markdown="1" style="float:right;">

|          |        Control by Control Example       |      |
|:---------|:---------------------------------------:|-----:|
| [Prev](./guide_kmw_full_manual_control) | KeymanWeb Guide | [Next](./guide_kmw_defaults) |

</div>

### Control by Control Example

In this example, a simulated webmail form, the default and permissible
keyboard for each control is managed by the web page. We use the
automatic mode for simplicity of demonstration.

A working example can be seen online at
[www.keymanweb.com](http://www.keymanweb.com/dev/control_by_control)

![](/cdn/dev/img/developer/90/kmw_control_by_control_1.png)

![](/cdn/dev/img/developer/90/kmw_control_by_control_2.png)

![](/cdn/dev/img/developer/90/kmw_control_by_control_3.png)

#### Code Walkthrough

Include the following script in the HEAD of your page:

``` programlisting
/* SetupDocument: Called when the page finishes loading */
  function SetupDocument()
  {
    /* Make sure that Keyman is initialized (we can't guarantee initialization order) */
    KeymanWeb.Init();
    /* Disable KeymanWeb interaction on the 'Email to' TEXT control */
    KeymanWeb.DisableControl(document.f.address);
    /* Set the default keyboard for the 'Subject' TEXT control to 'off' (i.e. default browser keyboard) */
    KeymanWeb.SetDefaultKeyboardForControl(document.f.subject, '');
    /* Set the default keyboard for the 'Message body' TEXTAREA to the LaoKeys keyboard */
    KeymanWeb.SetDefaultKeyboardForControl(document.f.text, 'Keyboard_laokeys');
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

<!-- When the page has finished loading, advise KeymanWeb of control settings, see above -->
<body onload="SetupDocument()">
```

| |                  |                |
|:----------------------|:-----------------:|-----------------:|
| [Prev](./guide_kmw_full_manual_control)| [Up](./index_guide_kmw) | [Next](./guide_kmw_defaults) |
| Full Manual Control Example        |        [Home](../index)       |        Changing KeymanWeb's Defaults |