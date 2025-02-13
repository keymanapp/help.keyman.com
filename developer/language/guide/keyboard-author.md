---
title: Glossary for Keyboard Author 
---

## D {#d-glossary}

### Deadkey (Or Dead Key, shorthand dk)
A key that does not produce text output on its own but impacts the text produced by the next keystroke. For example, if the apostrophe key is defined as a dead key, then typing the apostrophe followed by <kbd>e</kbd>, could produce the output <kbd>é</kbd>.
In Keyman keyboard language, the deadkey statement represents a marker, and is Keyman's implementation for supporting deadkeys.
See [how to use `deadkey()`](../reference/deadkey)

## E {#e-glossary}

### Encoding
A technique for detecting keystrokes and identify which key has been pressed through translating keystrokes from physical keyboards into digital signals for further processing.

## F {#f-glossary}

### File types
Keyman Developer uses the [Keyman file types](../../current-version/reference/file-types/) to compile and build a keyboard.

### Font
A font is a graphical representation of text that may include a different typeface, point size, weight, color, or design. If you've read or received a message via Keyman that is displayed as square boxes, the most likely cause is that your device does not support the language or script. [More about font](https://keyman.com/fonts/).

## G {#g-glossary}

### Gesture
A gesture is a finger motion like long press, flick, and multitap that can be used in Keyman.

## K {#k-glossary}

### Key Code (Or Virtual Key Code)
The value used by the operating system to identify the physical key that was pressed. For example, Microsoft Windows identifies the S key with key code 0x53 and macOS identifies the S key with key code 0x01.

### Keyman Keyboard
A software component that accepts incoming keystrokes and produces text output appropriate to a certain script. A Keyman Keyboard is built using Keyman Developer and contains rules that determine what text to output for a given keystroke and context. Keyboard may also mean:
* Physical Keyboard - the hardware keyboard used for text input with a computer.
* On-screen Keyboard - or OSK, a keyboard displayed graphically which represents the layout of the keys on the physical keyboard and what characters they will produce.
* Touch Keyboard - the keyboard displayed for text input on a mobile device with a touchscreen such as a smartphone or tablet.

### Keyboard Layout
A keyboard layout is any specific physical, visual, or functional arrangement of the keys of a computer. In general every key on a keyboard can be identified by either its position on the keyboard or the character it would print out. In Keyman a key can be referenced by its position on the US English Keyboard ( K_A, K_B, etc.). In this case a [positional keyboard layout](#toc-positional-keyboard-layout) is used. A key can also be referenced by its output ( “A” , “B”, etc.). In this case a [mnemonic keyboard layout](#toc-mnemonic-keyboard-layout) is used.

## L {#l-glossary}

### Language Structure
The Keyman keyboard programming language is a language designed around transforming inputs to outputs, through rules rather than through static tables. Please refer to the [overview of the Keyman language](overview).

### Lexical Model
The way your keyboard knows how to suggest predictions and corrections for your language is through its lexical model. [What is a lexical model?](../../current-version/guides/lexical-models/intro/#toc-what-is-a-lexical-model-)

## M {#m-glossary}

### Mnemonic Keyboard Layout
In a mnemonic keyboard layout keys are identified by the character it prints out. For example the key that prints out the character 'z':

on a US engl. Keyboard 'z' is printed out by pressing K_Z (labeled 'Z' : the leftmost character key on the bottom row)
on a German Keyboard 'z' is printed out by pressing K_Y (labeled 'Z' : a key somewhat in the middle of the first row)
on a French Keyboard 'z' is printed out by pressing K_W (labeled 'Z' : the second key to the left of the first row)
If we, for example specified a Keyboard rule in Keyman Developer for a US layout (+ K_Z  >  'z') and used that mnemonic layout with a German physical keyboard for key K_Y (where the keycap is labeled 'Z'), still a 'z' will be printed out.

This means when we specify a key in a mnemonic layout we talk about a key that produces a certain output (e.g. 'z') no matter where it is positioned at in different keyboard layouts

### Modifier Keys
Keys on a Computer Keyboard like Shift, Ctrl, Alt, AltGr, Option etc. Modifier Keys may be pressed simultaneously with certain other keys to activate predefined functions. They may also be used to produce different characters. For example on a German keyboard pressing the Q-Key produces 'q', Shift + Q-Key produces 'Q' whereas AltGr + Q-Key produces '@'. [More on Modifier Key](../../core/current-version/#toc-glossary).

## P {#p-glossary}

### Positional Keyboard Layout
In a positional keyboard layout keys of a keyboard are identified by the position on the keyboard. For example the leftmost character key on the bottom row is always called K_Z:

on a US engl. Keyboard the key is called K_Z, the keycap is labeled 'Z' and it prints out 'z'
on a German Keyboard the key is called K_Z, the keycap is labeled 'Y' and it prints out 'y'
on a French Keyboard the key is called K_Z, the keycap is labeled 'W' and it prints out 'w'
If we, for example specified a Keyboard rule in Keyman Developer for a US layout (+ K_Z  >  'z') and used that positional layout with a German physical keyboard for key K_Z (where the keycap is labeled 'Y') will print out 'z'.

This means when we specify a key in a positional layout we talk about a certain position (e.g. K_Z) no matter may be written on a keycap for a specific keyboard layout

## W {#w-glossary}

### Word list
A TSV file to store the words in your language for the [Lexical Model](#l-glossary). This is an [example of a word list](../../current-version/guides/lexical-models/tutorial/step-3#toc-example-wordlist).