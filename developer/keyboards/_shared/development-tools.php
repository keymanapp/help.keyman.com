<p>
    While Keyman Developer is not required to submit or build keyboard layouts, the IDE has many features that will
    make keyboard development a lot easier.
</p>

<p>
    Keyman Developer has a powerful project feature that makes it easier to manage the keyboard projects.
    Each keyboard in the repository will have an associated <strong>Keyman Project .kpj file</strong> that can be
    built from the command line or from within the Keyman Developer IDE. This project file is the starting point for
    any work you do on a keyboard.
</p>

<p>
    Make sure you have Keyman Developer 11.0 or later. You can download Keyman Developer from
    <a href="https://keyman.com/developer" target="_blank">https://keyman.com/developer</a>.
    With Keyman Developer, you will have these two ways of building keyboards.
</p>

<h2>Building keyboards in the IDE</h2>

<p>
    Double-click a <code><strong>.kpj</strong></code> file in Explorer to open the project in the
    Keyman Developer Integrated Development Environment (IDE). You can also open a project from the Project menu within
    the IDE. The project is automatically updated when you make changes, and changes specific to your computer are
    saved in a <code><strong>.kpj.user</strong></code> file along with the <code><strong>.kpj</strong></code> file.
    This <code><strong>.kpj.user</strong></code> file can be deleted at any time, and should not be saved to the
    git repository.
</p>

<p>
    In the Project screen, in either the Keyboards or the Packages tab, you can click
    <span class="guibutton">Build all</span> to build all the keyboard and package files listed in the project.
    If the project has dependencies on other projects, you will need to build them first:
    Keyman Developer does not resolve project dependencies at this time (see the command line details
    below for an automatic way to resolve this).
</p>
