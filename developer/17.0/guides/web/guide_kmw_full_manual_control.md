---
title: Full Manual Control Example
---

<div markdown="1" style="float:right">
|             |    Full Manual Control Example        |                 |
|:------------|:-------------------------------------:|----------------:|
| [Prev](./guide_kmw_manual_control.php) | KeymanWeb Guide | [Next](./guide_kmw_control_by_control) |
---
</div>

### Full Manual Control Example

In this example, the web page designer has opted for their own user
interface instead of the KeymanWeb interface. The keyboards in the
selector are populated from the KeymanWeb list of keyboards.

A working example can be seen online at
[www.keymanweb.com](http://www.keymanweb.com/dev/full_manual_control)

![](/cdn/dev/img/developer/90/kmw_full_manual_control.png)

#### Code Walkthrough

Include the following script in the HEAD of your page:

```programlisting
var KWControl = null;

  /* SetupDocument: Called when the page finishes loading */
  function SetupDocument()
  {
    /* Make sure that Keyman is initialized (we can't guarantee initialization order) */
    KeymanWeb.Init();
    /* Change the UI control mode of KeymanWeb to manual (default automatic) */
    KeymanWeb.SetMode('manual');
    KWControl = document.getElementById('KWControl');
    /* Retrieve the list of keyboards available from KeymanWeb and populate the selector using the DOM */
    var kbds = KeymanWeb.GetKeyboards();
    for(var kbd in kbds)
    {
      var opt = document.createElement('OPTION');
      opt.value = kbds[kbd].InternalName;
      opt.innerHTML = kbds[kbd].Name;
      KWControl.appendChild(opt);
    }
    /* Focus onto the multilingual field in the form */
    document.f.multilingual.focus();
  }

  /* KWControlChange: Called when user selects an item in the KWControl SELECT */
  function KWControlChange()
  {
    /* Select the keyboard in KeymanWeb */
    KeymanWeb.SetActiveKeyboard(KWControl.value);
    /* Focus onto the multilingual field in the form */
    document.f.multilingual.focus();
  }

  /* KWHelpClick: Called when user clicks the help icon */
  function KWHelpClick()
  {
    /* Toggle display of help below the KWControl SELECT */
    if(KeymanWeb.IsHelpVisible()) KeymanWeb.HideHelp();
    else KeymanWeb.ShowHelp(KeymanWeb.GetAbsoluteX(KWControl), KeymanWeb.GetAbsoluteY(KWControl) + KWControl.offsetHeight + 2);
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

  <!-- When the page has finished loading, populate the keyboard selector, see above -->
  <body onload="SetupDocument()">
```

And finally, include the keyboard SELECT and the clickable help img:

``` programlisting
<!-- Display the KWControl selector with different keyboards listed -->
  <para>Keyboard: <select id='KWControl' onchange='KWControlChange()'><option value=''>English</option></select>
  <img src='form_help.jpg' style='vertical-align: bottom' onclick='KWHelpClick()' /></para>
```

|           |          |          |
|:----------|:--------:|---------:|
| [Prev](./guide_kmw_manual_control) | [Up](./index_guide_kmw) | [Next](./guide_kmw_control_by_control) |
| Automatic Control (pre-loaded) Example | [Home](../index) | Full Manual Control Example |