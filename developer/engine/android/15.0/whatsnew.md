---
title: What's New
---

## Keyman Engine for Android Breaking Changes: ##

* Default short press globe key action changed from `GLOBE_KEY_ACTION_SHOW_MENU` to behave as follows:

| KeyboardType         | # Keyman Keyboards Installed | Globe Key Action Type                                |
|----------------------|:----------------------------:|------------------------------------------------------|
| KEYBOARD_TYPE_INAPP  | 1                            | GLOBE_KEY_ACTION_SHOW_MENU                           |
| KEYBOARD_TYPE_SYSTEM | 1                            | GLOBE_KEY_ACTION_ADVANCE_TO_PREVIOUS_SYSTEM_KEYBOARD |
| KEYBOARD_TYPE_INAPP  | 2+                           | GLOBE_KEY_ACTION_SWITCH_TO_NEXT_KEYBOARD             |
| KEYBOARD_TYPE_SYSTEM | 2+                           | GLOBE_KEY_ACTION_SWITCH_TO_NEXT_KEYBOARD             |
* Add default long press globe key action `GLOBE_KEY_ACTION_SHOW_MENU`
* Removed the following AndroidManifest.xml permissions
    * INTERNET
    * ACCESS_NETWORK_STATE
    * READ_EXTERNAL_STORAGE

  If your application needs INTERNET access, you'll need to add this line to AndroidManifest.xml
```xml
  <uses-permission android:name="android.permission.INTERNET" tools:node="replace" />
```

## See Also
* [Keyman Engine for Android Documentation](index)