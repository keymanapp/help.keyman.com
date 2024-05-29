---
title: Keyboard Troubleshooting
---
Listed below are some difficulties occasionally experienced when using
KeymanWeb. The information on this page is continually reviewed and
updated, and other questions are addressed in the [KeymanWeb
Forums](http://tavultesoft.com/forums/).

-   [Why are boxes appearing when I type?](#boxes)
-   [Why isn't my language appearing correctly?](#one)
-   [Why can't I see the On-Screen Keyboard?](#two)
-   [Why can I only type in English?](#three)
-   [Using Non-English Hardware Keyboards](hardwarekeyboards)
-   [More Help](#morehelp)

## Boxes (Characters do not Appear)

<div markdown="1" style="float: right;">

![Boxes Image](/developer/engine/web/content/troubleshooting/images/boxes.gif)

</div>

If empty boxes, or boxes containing Unicode character codes, appear in
your text box when you type (and/or on the On-Screen Keyboard), as in
the images on the right, please check the following:
-   Confirm that your browser supports embedded fonts, as some earlier versions of browsers do not include this feature. In this case, to enable KeymanWeb to function properly, you will need to update your browser or download the specific font required for your keyboard.
-   You can find downloadable fonts in the help information for a keyboard by clicking on the "Help on this keyboard" link in the On Screen Keyboard.
-   If you are using Internet Explorer, you may find that you cannot type two languages into the one text box; that is, when you switch to another language, the existing language text turns into empty boxes. This is a limitation in Internet Explorer but only happens with a few languages.
-   If you copy and paste text that you have typed in KeymanWeb intoanother application such as Microsoft Word, you may find that it does not display. In this case, you will need to installing the Keyman Desktop package for the keyboard onto your computer. You can download the Keyman Desktop package by clicking the "Help on this keyboard" link in the On Screen Keyboard.
-   An [embedded font test page](/developer/engine/web/2.0/troubleshooting/embedded_fonts) is available for further testing of embedded font support on your computer.

## Characters are not Displayed Correctly

<div markdown="1" style="float: right;">

![Tibetan Image](/developer/engine/web/content/troubleshooting/images/incorrect-tibetan1.gif)

</div>

If you find that you can see the characters for a language on screen,
but they don't display quite right, you may be experiencing a limitation
in your operating system. An example of this is visible in the Tibetan
script on the right.

Some operating systems do not support the correct display of certain scripts. If you are using Windows, you can fix this issue by [downloading and installing Tavultesoft Keyman Desktop](http://tavultesoft/keyman/). You can read more about this problem in the [Keyman Uniscribe Manager Reference](http://tavultesoft/keyman/documentation/70/ref_uniscribe.html).

## Disappearing On-Screen Keyboard
If the [On-Screen Keyboard](/developer/engine/web/content/ui/osk) does not appear, or disappears as soon as you move it, please check the following:
-   Make sure KeymanWeb is activated by clicking in the text area.
-   Confirm that the [On-Screen Keyboard](/developer/engine/web/content/ui/osk) is turned on. In the **Button** interface, the first item in the Keyboard Menu should be ![Hide Keyboard](/developer/engine/web/content/ui/images/ui-bt-hidekb.gif), while in the other user interface designs, the On-Screen Keyboard icon ![On-Screen Keyboard](/developer/engine/web/content/ui/images/ui-tb-control6.gif) should have a box around it.
-   Scroll up and down (and across if necessary) the website to see if the On-Screen Keyboard is actually being displayed, but is in a different position.
-   For more information on using the On-Screen Keyboard, [click here](/developer/engine/web/content/ui/osk).

## English Letters
If English letters appear when you type, rather than your language, please check the following:
-   Confirm that KeymanWeb is activated for the textbox or text area you are typing into.
-   Make sure you have selected the correct keyboard for the language you wish to use. Some languages use more than one writing system, and these are often available as different keyboards.
-   For more information on the KeymanWeb user interfaces, [click here](/developer/engine/web/content/ui/).

## More Help
If you are experiencing continued difficulty in using KeymanWeb and have not been able to find a solution on this page, [click here](/contact/).