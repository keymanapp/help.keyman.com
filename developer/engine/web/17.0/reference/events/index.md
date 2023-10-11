---
title: Events
---
  
A number of KeymanWeb events are exposed to allow the designer of a user
interface to control the appearance and behavior of user interface
elements. Standard event-processing requires all arguments to be passed
as an array (object) with named member variables.

[`kmw.controlfocused`](kmw.controlfocused)
:   Called when input element receives focus.

<!-- -->

[`kmw.controlblurred`](kmw.controlblurred)
:   Called when input element loses focus.

<!-- -->

[`kmw.keyboardregistered`](kmw.keyboardregistered)
:   Called when keyboard 'stub' processed (for listing as available
    keyboard).

<!-- -->

[`kmw.keyboardloaded`](kmw.keyboardloaded)
:   Called when keyboard code loaded.

<!-- -->

[`kmw.beforekeyboardchange`](kmw.beforekeyboardchange)
:   Called when keyboard input language about to change.

<!-- -->

[`kmw.keyboardchange`](kmw.keyboardchange)
:   Called when keyboard input language changed.

<!-- -->

[`kmw.loaduserinterface`](kmw.loaduserinterface)
:   Called when allow ui initialization.

<!-- -->

[`kmw.unloaduserinterface`](kmw.unloaduserinterface)
:   Called when allow ui clean-up.

<!-- -->

[`osk.show`](osk.show)
:   Called when OSK displayed.

<!-- -->

[`osk.hide`](osk.hide)
:   Called when OSK hidden.

<!-- -->

[`osk.resizemove`](osk.resizemove)
:   Called when OSK resized or moved on desktop.

<!-- -->

[`osk.helpclick`](osk.helpclick)
:   Called when allows the UI to present a help page.

<!-- -->

[`osk.configclick`](osk.configclick)
:   Called when allows the UI to present KeymanWeb configuration
    options.

Object events are handled in user code by passing the handler entry to
the object, using *addEventListener()*.

So to define a user function to handle the KeymanWeb core
kmw.keyboardchange event, include:

``` typescript
keymanweb.addEventListener('keyboardchange',
  function(p)
  {
    ui.updateMenu(p['internalName'],p['languageCode']);
  });
  
```

or a user function to modify the user interface when the on-screen
keyboard is displayed:

``` typescript
osk.addEventListener('show',
  function(p)
  {
    ui.updateUI(p['x'],p['y'],p['userLocated']);
  });
  
```
