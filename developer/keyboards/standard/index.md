---
title: Keyboard Design Principles
---

## Introduction

Making the first keyboard can be overwhelming at first. We

hope this guide will improve your process for keyboard design; from

planning a layout to launching a quality keyboard for your community.

## The DISCUS Principles

The DISCUS Principles aren't just a concept; by using them, you will see
how easy it is to produce excellent keyboards:

* [D: Discoverability](#toc-d-discoverability)
* [I: Intuition](#toc-i-intuition)
* [S: Simplicity](#toc-s-simplicity)
* [C: Consistency](#toc-c-consistency)
* [U: Usability](#toc-u-usability)
* [S: Standards](#toc-s-standards)

### D: Discoverability

We can't fit every character on one keyboard, despite having
gestures like long-press, flicks, and multi-taps. It may cause frustration
and confusion for new users, but being too upfront won't produce
something unique; in fact, it could look bland. Here are two methods of
Discoverability:

-   **Make it easy to find every letters (even rare ones)**

    Use as many keys as possible to showcase the most-used characters, and then you have the option of associating the remaining characters with those character keys by using the gesture method or Keyman language rules.

-   **Reduce experimentation**

    Keyboards for languages with more characters than keys are rarely obvious to first-time users. It's not wrong that users have to adjust to a new keyboard, but make sure that the rules, key sequences, and rotas (rotation keys) are easily recognized.

### I: Intuition

We must not forget to associate the product with feelings. It is important to think of the user experience when developing a keyboard, as it can play a huge role in how much users engage with the product. For examples:

-   Double-space to insert a space

    It might look fancy and unique, but if the language uses space frequently, then this design may be annoying to the users.

-   Double-space signifies end of sentence and inserts a fullstop automatically

    This is a known feature of most built-in keyboards, and it sounds good enough for practical use.

-   Type
    <kbd>e</kbd>+<kbd>e</kbd>+<kbd>;</kbd>
    to get <kbd>ëë</kbd> instead of typing
    <kbd>e</kbd>+<kbd>;</kbd>+<kbd>e</kbd>+<kbd>;</kbd>

    Both techniques are correct, and it is up to you to decide which one is more suited for the language.

### S: Simplicity

It is already overwhelming enough to get started with a new keyboard, so we should look for a way to encourage users to keep using it by making it simple and solve issues. You should raise some questions as such:

-   **Should some characters be omitted?**  


    Be mindful of every character you add to your keyboard. The temptation to include lots of extra characters does sound beneficial, but it might not help as much. Overall, don't overload keys with too many variants.

-   **Who are your target users?**  


    Does one keyboard need two languages?

    Is the keyboard mainly used for mathematics and physics?

    Will it be a specialized keyboard for specialized users?

    How exactly do the Modifier keys work on the keyboard?

-   **Which technical details can you hide from Users?**  

    Have you considered implementing one output for different ways of typing? For example:

    1.  <kbd>a</kbd>+<kbd>\`</kbd>=<kbd>à</kbd>
    2.  <kbd>\`</kbd>+<kbd>a</kbd>=<kbd>à</kbd>

    Whether these patterns arise from user preference or from occasional accidentally-reordered keystrokes, supporting both can simplify the typing experience for users.

-   **If a typing mistake happens, is there a automatic way to correct it?**  

    Similarly, some languages support different inputs for one word.  It's possible to add rules to automate correcting these patterns to result in a single, correctly-encoded form of the word regardless of the way it is typed. For example:

    1.  <kbd>ប</kbd>+<kbd>
        េ</kbd>+<kbd>ី</kbd>
    2.  <kbd>ប</kbd>+<kbd>
        ី</kbd>+<kbd> េ</kbd>
    3.  <kbd>ប</kbd>+<kbd> េី</kbd>

    Can you guess how many sequences are wrong? Instead of having users manually re-type the whole thing, we can implement changes where we see these behaviors.

### C: Consistency

Fluency in the language for the keyboard can provide many insights for designing a quality keyboard. You should consider the rules for writing the language and the structure of the script. If cohesion is what you seek, then be sure to use the questions below:


-   Is alphabetic order sensible? How about grouping by sound?
-   Which letters are rare?
-   How do I associate rare letters on the keyboard?
-   What are the common sequences and pairs?

### U: Usability

Now, great design should be applauded, but how can you tell the functionality of the design without testing it? Find out which alternative helps improve users' daily usage. Keep in mind:

-   Who are your target users?
-   How would experienced or novice users feel about this?
-   How would native or non-native speakers feel about this?

### S: Standard

You have to consider these factors if you want to follow our standard when developing keyboards:

-   Font

    We only accept Unicode-based keyboards.

-   Layout

    Plan ahead: which devices does the keyboard support?

-   Legislated and Societal requirements
    1.  Accessibility laws

    2.  Mandated characters or symbols:

        e.g. currency symbols...

    3.  License terms

        To distribute to our keyboard's repository, we suggest using an open license.

    4.  Consistency with majority languages or layouts

-   Folder Structure

    It is ideal to start with a new folder. If you are looking to publish the keyboard, then we suggest using the folder structure provided [here](https://help.keyman.com/developer/keyboards/advanced/).
