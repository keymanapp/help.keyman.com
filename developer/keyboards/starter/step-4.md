---
title: Step 4: Principles for Contributing Keyboards (deprecated)
---

**Note:** This guide is deprecated. Consider using the [GitHub Keyboard
Submission Guide](../github) instead.

## Contributing keyboards

We do have a baseline for accepting contributed keyboards. While we can
work with you on getting your keyboards ready, you can ease the process
dramatically by following the guidelines we’ve already written.

These design patterns and requirements assume some knowledge of Keyman
Developer and Keyman keyboard development. Keyman Developer is
downloadable from
[https://keyman.com/developer](https://keyman.com/developer),
and the documentation is online at
[https://help.keyman.com/developer](https://help.keyman.com/developer).

## Designing your keyboard layout

Use the documentation links above to learn how to create keyboard
layouts; [read the
tutorials](https://help.keyman.com/developer/current-version/guides/),
[our blog](https://blog.keyman.com/category/developing-keyboards/); the
[Keyboard Quality
Whitepaper](/developer/whitepaper1.1.pdf) (desktop
focused keyboards) will be helpful for learning how to develop your
keyboards and documentation to a high standard.

You can create a single keyboard layout that targets both desktop/laptop
computers and phone/tablet touch devices. We encourage you to develop
new keyboard layouts that target all devices.

## Set keyboard project output path

The Keyman keyboards repository is organized so that each keyboard
builds into its own **build\\** folder. With your keyboard project open
in Keyman Developer, set the project output path through the menu:

Project --&gt; Project Settings...

![](/cdn/dev/img/developer/keyboards/project-settings.png)

## Assigning an open source license

When you share your keyboard with the world, you will need to assign a
specific [open source
license](https://opensource.org/licenses). There are
hundreds of prewritten licenses, but for keyboards to be included in
this repository, you must use the MIT license:

MIT license
:   A permissive license that is short and to the point. It lets people
    do anything with your code with proper attribution and without
    warranty.

The MIT license is explored in detail at
[choosealicense.com](https://choosealicense.com/licenses/),
from which the description above was taken.

[Step 5: Submitting a GitHub Pull Request](step-5)
