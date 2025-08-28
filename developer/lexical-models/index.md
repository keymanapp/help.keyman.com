---
title: Working with the Keyman Cloud Lexical Models Repository
---
  
## Introduction

The Keyman Cloud repository is the master source for all lexical models
distributed within the Keyman mobile apps. The use of these dictionaries
started with Keyman 12.

## The Keyman Lexical Models Repository

Keyman can automatically download lexical models that are shared through
our open source lexical model repository on github.com:

[**https://github.com/keymanapp/lexical-models**](https://github.com/keymanapp/lexical-models)

From these source files, we build the lexical models that can be
downloaded from the Keyman mobile apps.

These lexical models are open source. This means that you can download
the dictionaries yourself and improve them, and we hope you will
contribute your own lexical models to this repository for all to use.

### Why You Should Contribute

-   Accessibility:
-   Version Control:
-   Automatic Lexical Model Updates

## How the Repository is Organized

The "release" section of the repository (contained in the "release"
folder) contains lexical models that have complete source files and
documentation. These are made available to the Keyman mobile apps.

The "example" section of the repository (in the "sample" folder)
contains shorter lexical models (sub 1000 entries) that are intended for
demonstration purposes. They may be bundled with KMSample apps as a
guide on adding and associating a lexical model with a keyboard.

Within each section of the folders, models are further grouped by the
template *author* / *author.bcp47.uniq*. For example, the folder
structure may be:  
**release/nrc/nrc.en.mtnt/**  
  
The components must be lower case and are:

-   **author**: a shortened string/abbreviation of the author or group,
    such as *nrc* or *sil*
-   **bcp47**: the canonical BCP 47 language tag for the model. For
    example *str* for SENĆOŦEN
-   **uniq**: an optional unique identifier that can be provided when a
    language has multiple models from a single author. For example,
    *example.en.custom* vs *example.en.wordlist*. We do recommend always
    using a unique string even if there are no current plans to produce
    more than one for a language.

## Get Involved

-   [Lexical Model Submission Guide](submission)
