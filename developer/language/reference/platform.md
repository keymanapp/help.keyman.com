---
title: platform() statement
---

## Summary

The `platform()` statement allows rules to match based on the device on which the Keyman keyboard is running.

## Syntax

```keyman
platform("platformConstraint") ... > ...
if(&platform = "platformConstraint") ... > ...
```

### Parameters

`platformConstraint`
: The platform constraint to test.

## Description

The `&platform` variable system store checks the current platform a keyboard is
running on. This test is slightly different to all other [`if()`](if) tests,
because it is not performing an exact string match but rather matching each
token against a set of valid tokens. To help clarify this in code, use the
`platform()` syntax rather than the `if(&platform ...)` syntax.

Keyman keyboards can be targeted to run on a number of different platforms, and
have slightly different behaviour on each of those platforms. The definition of
a platform is somewhat rubbery, consisting of items such as operating system,
application, browser, form factor and input type. Accordingly, the platform
constraints are correspondingly loose.

A platform constraint is a list of one or more platform identifiers separated by
spaces. There is no order defined for the list. The identifiers are
case-insensitive.

The key requirement for testing a given platform constraint is that all factors
must be met for the constraint to pass. If an unknown constraint is included,
then the test fails (note: new behaviour since Keyman 10).

For example, `touch android tablet native` would match Keyman for Android on an
Android tablet; `android tablet` would match Keyman for Android on an Android
tablet or KeymanWeb in a browser on an Android tablet. `blackberry` would not
match on any platform (as Blackberry is not a supported platform for Keyman).

## Platform constraint definition

The platform constraints are broken down into several components. Each component
is optional. Typically, each component should be used at most once in a platform
definition. Each component will currently be alphanumeric only; future versions
may allow for version testing.

The components are: **User Interface**, **Operating System**, **Form Factor**,
**Application**, and **Browser**.

### User Interface

The user interface value depends on the entry point. For a `begin Unicode` entry
point, the user interface value will be as follows:

`touch`
: A touch-screen keyboard, such as an iPhone, iPad, Android phone or tablet.

`hardware`
: Using a physical keyboard, e.g. Keyman for Windows, or a touch device but with
  an external keyboard attached (supported on Android), or clicking on the
  desktop-style On Screen Keyboard.

For the `begin newcontext` and `begin postkeystroke` entry points, the user
interface value reflects the style of the on screen keyboard, whether or not it
is visible:

`touch`
: A touch-screen keyboard, such as an iPhone, iPad, Android phone or tablet.

`hardware`
: A desktop-style on screen keyboard.

#### Discussion

The choice between touch and hardware user interface is sometimes ambiguous. For
example, when running rules from a [`newcontext` or `postkeystroke`
event](begin) on an Android device, the user interface will always be given as
`touch`, even if the user is typing on a hardware keyboard (where the keystroke
processing rules called from `begin Unicode` would have been given a `hardware`
user interface platform value). This reflects the fact that the On Screen
Keyboard (even if it is not visible) will be a touch-style keyboard, and allows
the rules to [set the appropriate touch layout layer](../guide/casing-support)
based on the context.

### Operating System

`windows`
: Microsoft Windows, desktop or server editions

`android`
: Any device running the Android operating system

`ios`
: Any iPhone, iPad, iPod or other device running the iOS operating system

`macosx`, `mac` or `macos`
: macOS (`macos` is the recommended term)

`linux`
: Linux or other UNIX-style operating systems.

### Form Factor

`desktop`
: Desktop, laptop and server class devices

`tablet`
: Touch-based tablet sized devices

`phone`
: Mobile phones and similar small devices. This may include very small tablets,
  where the engine determines that a phone sized keyboard is more appropriate
  than a tablet sized keyboard.

### Application

`native`
: Keyman Desktop, Keyman for iPhone and iPad, Keyman for Android, Keyman for
  macOS, etc.

`web`
: Keyman Engine for Web on any platform and any browser

### Browser

Browser tests apply only to KeymanWeb. Be careful when targeting specific
browsers, as language support in browsers tends to change rapidly. (Note: even
though Keyman for Android and Keyman for iPhone and iPad use KeymanWeb
internally, browser tests will not match in those apps.

`ie`
: Keyman Engine for Web in Internet Explorer (deprecated)

`chrome`
: Keyman Engine for Web in Chrome

`firefox`
: Keyman Engine for Web in Firefox

`safari`
: Keyman Engine for Web in Safari

`opera`
: Keyman Engine for Web in Opera

`edge`
: Keyman Engine for Web in Edge

## Examples

### Example: Using `platform()`

```keyman
platform('ios native') + 'a' > 'α'
platform('android native') + 'a' > 'ά'
```

With these two rules, pressing the key "a" in Keyman for Android would result in
"ά", whereas pressing the key "a" in Keyman for iPhone and iPad would result in
"α". In KeymanWeb on those platforms, or on any other platform, the "a" key
would just result in the default behaviour of "a", because neither rule would
match.

## Platforms

The `platform()` statement can be used in keyboards on all platforms.

| Windows | macOS | Linux | Desktop web | Mobile web | iOS | Android |
|:-------:|:-----:|:-----:|:-----------:|:----------:|:---:|:-------:|
| ✔       | ✔     | ✔     | ✔           | ✔          | ✔   | ✔       |

## Version history

* Version 15.0.267: Clarifications on behaviour for `platform()` statement with
  `begin newcontext` and `begin postkeystroke`.

* Version 10.0: Behaviour for unrecognised tokens was changed to treat
  unrecognised tokens as a failure to match instead of succeeding as in earlier
  versions; this gives better backward and forward compatibility; noted that
  tokens are case-insensitive; noted that browser tests only apply in KeymanWeb;
  browser 'edge' was split out from 'ie'; an undocumented feature allowing
  targeting specific versions of Windows was removed; added synonyms for
  'macosx'.

* Version 9.0: The `platform()` statement was introduced in Keyman 9.0.
