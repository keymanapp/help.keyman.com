---
title: Glossary for Keyboard Author 
---

## B {#b-glossary}

### BCP 47 language tag
A standardized code that is used to identify human languages on the Internet. More on [BCP 47](https://www.rfc-editor.org/info/bcp47).

There are many possible subtags, but only three types are currently used in most places in Keyman Developer:
* [language subtag](../../current-version/reference/bcp-47#toc-the-language-subtag)
* [script subtag](../../current-version/reference/bcp-47#toc-the-script-subtag)
* [region subtag](../../current-version/reference/bcp-47#toc-the-region-subtag)

More information about BCP 47 language tag and full details on [how they are used in Keyman Developer](../../current-version/reference/bcp-47).

## D {#d-glossary}

### Deadkey (Or Dead Key, shorthand: dk)
A key that does not produce text output on its own but impacts the text produced by the next keystroke. For example, if the apostrophe key is defined as a dead key, then typing the apostrophe followed by <kbd>e</kbd>, could produce the output <kbd>é</kbd>.
In Keyman keyboard language, the deadkey statement is used for deadkeys, and is Keyman's implementation for supporting deadkeys.
See [how to use `deadkey()`](../reference/deadkey)

## E {#e-glossary}

### Encoding
Encoding or Character encoding is the process of assigning numbers to graphical [characters](https://en.wikipedia.org/wiki/Character_(computing)), especially the written characters of human language, allowing them to be stored, transmitted, and transformed using computers. The numerical values that make up a character encoding are known as [code points](https://en.wikipedia.org/wiki/Code_point).

## F {#f-glossary}

### File types
Keyman has the following file types:
* [ICO](../../current-version/reference/file-types/ico): an icon which is used in the user interface to indicate that the keyboard is active.
* [KPJ](../../current-version/reference/file-types/kpj): a Keyman Developer Project file.
* [KMN](../../current-version/reference/file-types/kmn): a keyboard source file. This holds all the code used by a Keyman Desktop keyboard, in plain text.
* [KMX](../../current-version/reference/file-types/kmx): compiled in Keyman Developer from the Keyman source file (.KMN) and icon for the keyboard (.ICO/.BMP).
* [KMP](../../current-version/reference/file-types/kmp): a Keyman Package file for distributing keyboards or lexical models.
* [KPS](../../current-version/reference/file-types/kps): a Keyman package source file.
* [KVK](../../current-version/reference/file-types/kvk): a Keyman On Screen Keyboard file.
* [KVKS](../../current-version/reference/file-types/kvks): a Keyman On Screen Keyboard source file.
* [TSV](../../current-version/reference/file-types/tsv): or a tab-separated values file contains a word list. This word list is used to predict and correct words using the predictive text functionality.
* [TTF](../../current-version/reference/file-types/ttf): a TrueType font file. This file is distributed with a keyboard package to be used as a keyboard font or display font.
* [MODEL.JS](../../current-version/reference/file-types/model-js): compiled in Keyman Developer from the Keyman lexical model source (.MODEL.TS) file and (.TSV) wordlist.
* [MODEL.TS](../../current-version/reference/file-types/model-ts): a [lexical model](#toc-lexical-model) definition source file.
* [More File types](../../current-version/reference/file-types/).

### File layout
In Keyman Developer, a keyboard project follow closely to the structure of folders and files:
```plain
keyboard
│   HISTORY.md:        A place to record changes you make to the project over time.
│   LICENSE.md:        Explains the rights that you give to others.
│   README.md:         Provides an introduction to the keyboard project when others stumble across it.
│   keyboard.kpj:      The main project file, contains references to all the components: keyboards, models, and packages.
│   keyboard.kpj.user: A user preference file. You can safely delete it at any time.
│
├───build
|       keyboard.keyboard_info: A metadata file detailing the keyboard's origin, version, requirements, and capabilities.
│       keyboard.kmp:           The installable package file.
│       keyboard.kmx:           The compiled keyboard. This intermediate file should not be distributed.
│       keyboard.kvk:           The compiled on screen keyboard. This intermediate file should not be distributed.
│       keyboard.js:            The keyboard compiled to Javascript for use with KeymanWeb.
│
└───source
        keyboard.ico:                 The icon of the keyboard.
        readme.htm:                   Introductory web page for end users of your keyboard.
        welcome.htm:                  A web page which describes how to use your keyboard.
        keyboard.keyman-touch-layout: A touch layout file description.
        keyboard.kmn:                 The keyboard source file.
        keyboard.kps:                 The package source, which is used to create a compressed .kmp.
        keyboard.kvks:                The on screen keyboard template for desktop platforms.
```

For more details on [Keyman Developer structure for standard keyboard source file folders](../../current-version/reference/file-layout).

### Font
A font is a graphical representation of text that may include a different typeface, point size, weight, color, or design. If you've read or received a message via Keyman that is displayed as square boxes, the most likely cause is that your device does not support the language or script. This is how to properly [include font(s) into the keyboard package](../../keyboards/github/step-2#toc-including-fonts-in-your-keyboard-package), and [how to fix square boxes related to font](https://keyman.com/fonts/).

## G {#g-glossary}

### Gesture
A gesture is a finger motion like long press, flick, and multitap that can be used in Keyman.

## K {#k-glossary}

### Key Code (Or Virtual Key Code)
Keyman uses the same keycode across all operating system. More on [Virtual Key Code](./virtual-keys#using-virtual-keys).

### Keyboard
Keyboard may mean:
* Physical Keyboard - the hardware keyboard used for text input with a computer.
* On-screen Keyboard - or OSK, a keyboard displayed graphically which represents the layout of the keys on the physical keyboard and what characters they will produce.
* Touch Keyboard - the keyboard displayed for text input on a mobile device with a touchscreen such as a smartphone or tablet.
* [Keyman Keyboard](#toc-keyman-keyboard) - the keyboard is built using Keyman Developer and contains rules that determine what text to output for a given keystroke and context.

### Keyman Keyboard
A software component that accepts incoming keystrokes and produces text output appropriate to a certain script. A Keyman Keyboard is built using Keyman Developer and contains rules that determine what text to output for a given keystroke and context. Keyboard may also mean:
* Physical Keyboard - the hardware keyboard used for text input with a computer.
* On-screen Keyboard - or OSK, a keyboard displayed graphically which represents the layout of the keys on the physical keyboard and what characters they will produce.
* Touch Keyboard - the keyboard displayed for text input on a mobile device with a touchscreen such as a smartphone or tablet.

### Keyboard Layout
Any specific physical, visual, or functional arrangement of the keys of a computer. In general every key on a keyboard can be identified by either its position on the keyboard or the character it would print out. In Keyman:
* A key can be referenced by its position on the US English Keyboard ( K_A, K_B, etc.). In this case a [positional keyboard layout](#toc-positional-keyboard-layout) is used. 
* A key can also be referenced by its output ( “A” , “B”, etc.). In this case a [mnemonic keyboard layout](#toc-mnemonic-keyboard-layout) is used.

### Keyboard Repository
In the Keyman [keyboards repository](https://github.com/keymanapp/keyboards), keyboards are grouped into one of the three folders:
* release: keyboards with full source that pass our stringent quality checks, [Unicode](https://en.wikipedia.org/wiki/Unicode) only, generally no [PUA](https://en.wikipedia.org/wiki/Private_Use_Areas)
* legacy: binary distributions of keyboards, migrated from Tavultesoft servers, Unicode and non-Unicode
* experimental: keyboards that have not yet passed the quality check, available from the 'experimental' category in Keyman apps with Keyman 10 and later. Unicode only, but PUA is acceptable.

[Find out how to distribute your keyboard and work with Keyman Keyboard Repository](../../keyboards/).

## L {#l-glossary}

### Language Structure
The Keyman keyboard programming language is a language designed around transforming inputs to outputs, through rules rather than through static tables. Please refer to the [overview of the Keyman language](overview).

### Lexical Model
A wordlist and a set of rules of how the word is interpreted. The way your keyboard knows how to suggest predictions and corrections for your language is through its lexical model. [Visit the Lexical Model page](../../current-version/guides/lexical-models/intro/#toc-what-is-a-lexical-model-).

## M {#m-glossary}

### Mnemonic Keyboard Layout [`store(&mnemoniclayout)`](../reference/mnemoniclayout)
In a mnemonic keyboard layout, contrary to a [positional keyboard layout](#toc-positional-keyboard-layout), keys are identified by the character it prints out. For example, the key that prints out the character **'z'**:

* On a US English Keyboard, **'z'** is printed out by pressing K_Z (labeled 'Z' : the leftmost character key on the bottom row)
* On a German Keyboard, **'z'** is printed out by pressing K_Y (labeled 'Z' : a key somewhat in the middle of the first row)
* On a French Keyboard, **'z'** is printed out by pressing K_W (labeled 'Z' : the second key to the left of the first row)

If we, for example, specified a Keyboard rule in Keyman Developer for a US layout (`+ K_Z  >  'z'`) and used that mnemonic layout with a German physical keyboard, then to print out **'z'** the key K_Y (where the keycap is labeled 'Z') will have to be pressed.

This means when we specify a key in a mnemonic layout we talk about a key that produces a certain output (e.g. 'z') no matter where it is positioned at in different keyboard layouts.

### Modifier Keys
Keys on a Computer Keyboard like <kbd>Shift</kbd>, <kbd>Ctrl</kbd>, <kbd>Alt</kbd>, <kbd>AltGr</kbd>, <kbd>Option</kbd> etc. Modifier Keys may be pressed simultaneously with certain other keys to activate predefined functions. They may also be used to produce different characters. For example, on a German keyboard pressing the Q-Key produces 'q', Shift + Q-Key produces 'Q' whereas AltGr + Q-Key produces '@'. [More on Modifier Key](../../core/current-version/#toc-glossary).

## P {#p-glossary}

### Positional Keyboard Layout [`store(&mnemoniclayout)`](../reference/mnemoniclayout)
In a positional keyboard layout, contrary to a [mnemonic keyboard layout](#toc-mnemonic-keyboard-layout), keys are identified by the position on the keyboard. For example, the leftmost character key on the bottom row is always called **K_Z**:

* On a US English Keyboard, the key is called **K_Z**, the keycap is labeled 'Z' and it prints out 'z'
* On a German Keyboard, the key is called **K_Z**, the keycap is labeled 'Y' and it prints out 'y'
* On a French Keyboard the key is called **K_Z**, the keycap is labeled 'W' and it prints out 'w'

If we, for example, specified a Keyboard rule in Keyman Developer for a US layout (`+ K_Z  >  'z'`) and used that positional layout with a German physical keyboard, then to print out **'z'** the key K_Z (where the keycap is labeled 'Y') will have to be pressed.

This means when we specify a key in a positional layout we talk about a certain position (e.g. K_Z) no matter what is written on a keycap for a specific keyboard layout.

Another way of identifying positional layouts is [virtual keys](./virtual-keys#toc-virtual-key-visual-layout).

## W {#w-glossary}

### Word list
A [TSV file](#toc-file-types) or tab-separated values file to store the words in your language for the [Lexical Model](#toc-lexical-model). This is an [example of a word list](../../current-version/guides/lexical-models/tutorial/step-3#toc-example-wordlist).