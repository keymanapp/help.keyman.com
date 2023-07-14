We recommend using Keyman Developer to build lexical models because the
IDE has many features that will make lexical model development a lot
easier.

Keyman Developer has a project wizard that makes it easier to manage the
lexical model projects. Each lexical model in the repository will have
an associated **Keyman Project .kpj file** that can be built from the
Keyman Developer IDE. This project file is the starting point for any
work you do on a lexical model.

Make sure you have Keyman Developer 12.0 or later. You can download
Keyman Developer from
[https://keyman.com/developer](https://keyman.com/developer).
With Keyman Developer, you will have these two ways of building lexical
models.

## Building lexical models in the IDE

Double-click a **`.kpj`** file in Explorer to open the project in the
Keyman Developer Integrated Development Environment (IDE). You can also
open a project from the Project menu within the IDE. The project is
automatically updated when you make changes, and changes specific to
your computer are saved in a **`.kpj.user`** file along with the
**`.kpj`** file. This **`.kpj.user`** file can be deleted at any time,
and should not be saved to the git repository.

In the Project screen, in either the Models or the Packages tab, you can
click Build all to build all the models
and package files listed in the project. Keyman Developer does not
resolve project dependencies at this time (see the command line details
below for an automatic way to resolve this).
