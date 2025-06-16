---
title: Gesture Hints and Tips - Keyman for Android
---

## Using Gestures on the Keyboard Keys
There are now several gestures available to interact with some keys on the keyboard. Keys which have gestures available will normally show them as a hint in the top right of the key:

![](../android_images/touch-hold-ap.png)

* **Long press**: Press and hold a key, and after a moment a submenu will appear. Slide the finger to the submenu to select a key. Release the finger, and the highlighted key from the submenu will be output.

* **Flick**: Press and hold a key, and then slide the finger in various directions on a key to reach alternate outputs. The key will animate to show the expected output when the finger gets released. A common flick is to slide down to reach numerals on the top row of the keyboard.

  An up-flick on keys that support longpresses but do not have a defined up-flick will skip the wait and immediately display their longpress submenu.

* **Multitap**: Some keys can be pressed repeatedly and rapidly to reach alternate outputs. Tapping rapidly twice on <kbd>Shift</kbd> will activate <kbd>Caps Lock</kbd> on many keyboards.

## Tips

* We can use both **flicks** and **long presses** in a single keyboard. Generally, we recommend only having flicks in one direction--south (down), and long presses work well with this pattern. See, for example, [sil_euro_latin](../../../../keyboard/sil_euro_latin/3.0.3/sil_euro_latin#toc-mobile-keyboard-layout). 
    * You’ll also notice on sil_euro_latin that the south-flicks on the base (and shift) layers correspond to the numeric/symbol layer, which is also helpful for remembering and discovering.
* **Flicks** in multiple directions are possible, but currently Keyman does not support hints for multiple directions, so they are not very discoverable.
* **Long presses** are more discoverable, but **flicks** are faster. We suggest using south flicks along with long presses, and including the flick output in the long press for maximum discoverability and optimum ergonomics.

## Caution

* **Flicks** near screen edges tend to be problematic--once you drag off the screen, then Keyman can no longer tell that you are flicking (or you may end up activating system controls on the bottom edge):
  * On the bottom row, south flicks are not recommended.
  * On the top row, we have the banner space reserved in order to be able to support flicks and long presses up into that region of the screen--not an ideal solution, but it works.
  * Left/right screen edges, horizontal flicks are not the best practice.

## See also

* The [Winchus keyboard](../../../../keyboard/winchus/1.4/winchus#guia-rapida-celular)
* The [GFF Amharic keyboard](../../../../keyboard/gff_amharic/3.2.1/gff_amharic#toc-using-this-keyboard)