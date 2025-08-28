---
title: Planning your Keyboard
---

Whether you are building an entirely novel keyboard from zero, or implementing one that already exists in another environment, planning is important.
Make sure you have all of the important information at hand so that you can begin on this journey.

## Questions

To aid you in the planning, here are a series of questions that can be asked:

### Identity

- What are the languages that are served by this keyboard?
- What script or scripts will be involved in these languages?
- Which language, if any, can be considered the primary language?
- What is the name of the keyboard?

### Form and Function

- Will this be a hardware-only or touch-only keyboard?
(It is recommended to work on the hardware format first, as a
hardware keyboard can be used in touch but not vice versa.)
- What is the base physical type for hardware, such as US or ISO?
- Does the keyboard follow an existing organization of keys, such as QWERTY, AZERTY, QWERTZ etc?
- Which width(s) will you start with for the touch layout?
- What gestures will you make use of, such as long press, flicks, and multitap?

### Repertoire

- What are the "characters" that will be covered by this keyboard for this language? This may go beyond the usual Unicode definition of characters, on to characters as the users will perceive them. For example, your language might use `ch` as a single letter.
- Which characters are the most important to access? That is, those that would be right on the keyboard or on a shift layer, versus others that might be reached via a gesture or multiple key combination.

Next, let's take a look at an [overview](./overview) of the LDML format.
