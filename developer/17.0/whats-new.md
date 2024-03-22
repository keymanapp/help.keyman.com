---
title: What's new in Keyman Developer 17.0
---

Keyman Developer 17 has a number of significant changes:

* `kmcomp` has been removed and replaced with `kmc`. Learn more in our [kmcomp migration guide](reference/kmc/cli/kmcomp-migration).

* `.keyboard_info` files are now generated entirely from the package and
  keyboard files. Extra fields are available in packages for license file,
  welcome file, typing examples, related packages (including deprecated
  packages), and additional font files. Keyboards in the Keyman Cloud
  keyboard repository have already been updated; if you are an author of
  one of these keyboards, you should pull the changes from the repository
  before submitting future updates.

* The Keyman Keyboard and Lexical Model Cloud repositories have new build
  scripts which run `kmc`. These run much, much faster than previously!

* The [`&displayMap`](/developer/language/reference/displaymap) store allows
  keyboard developers to specify a font mapping to PUA for the On Screen
  Keyboard and Touch Layout to resolve diacritic rendering issues.

* Keyman Developer has been updated to support Unicode 15.1.

* Additional non-printing characters have been added to the Touch Layout Editor.

* Virtual keys in output of rules have never worked properly or been officially
  supported; Keyman Developer will now warn if you attempt to use this pattern.
