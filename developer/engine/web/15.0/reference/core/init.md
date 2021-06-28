---
title: init function
---

## Summary

Initializes KeymanWeb and configures KeymanWeb Options.

Note that this is an asynchronous operation.

## Syntax

```js
keyman.init(initOptions);
```

### Parameters

`initOptions`

: Type: `Object`.

  See the Description section below for the necessary object specification.

### Return Value

`Promise`: A [JavaScript Promise](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Promise)
fulfilled upon full initialization.

## <a name="init_options">Initialization Options</a>

The `initOptions` object may contain the following members:

`ui`

: `string|object` <span class="optional">optional</span>

  The user interface to be used on desktop devices. Default value: `'float'`.
  Please see below for the specification of this parameter if using an object
  value.

`root`

: `string` <span class="optional">optional</span>

  The folder KeymanWeb should consider root. Default value: `undefined`, which
  sets `root` to the base folder where keymanweb.js is located.

`resources`

: `string` <span class="optional">optional</span>

  The image folder URL for UI resources. Default value: `[root]/resources`.

`keyboards`

: `string` <span class="optional">optional</span>

  The folder containing local keyboard resources if utilized. Default value:
  `[root]/keyboards`.

`fonts`

: `string` <span class="optional">optional</span>

  Folder containing any embedded fonts required for keyboards or the OSK.
  Default value: `[root]`.

`attachType`

: `string` <span class="optional">optional</span>

  Must be `undefined`, `'auto'`, or `'manual'`. Specifies the default behavior
  for attaching KeymanWeb to any input elements on the webpage.

  * If `undefined`, KeymanWeb will default to 'manual' for mobile devices and
    'auto' for other devices.
  * If `'auto'`, KeymanWeb will automatically attach to every non-disabled
    control, even those added after page initialization.
  * If `'manual'`, KeymanWeb must be instructed to attached manually to each
    control it should handle input for.

`spacebarText`

: `com.keyman.SpacebarText` <span class="optional">optional</span>

  If present, must be one of the following four constants:
  * `KEYBOARD /*'keyboard'*/` - show the keyboard name in the spacebar
  * `LANGUAGE /*'language'*/` - show the language name in the spacebar
  * `LANGUAGE_KEYBOARD /*'languageKeyboard'*/` - show both language and
    keyboard name in the spacebar, separated by hyphen
  * `BLANK /*'blank'*/` - keep the spacebar blank

  Note that this may be overridden on a per-keyboard basis with the registration
  property `displayName`.

---

If setting `initOptions.ui` with an object value, it should be specified as
follows:

`name`

: `string`
: The name of the ui to utilize for non-mobile devices.


`right`

: `boolean` <span class="optional">optional</span>
: A Float-UI-only option. Sets right-alignment of the UI. Defaults to false.

