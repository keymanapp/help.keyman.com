<?php
require_once('includes/template.php');
require_once('includes/__docheader.php');

$baselanguage = "language-javascript";

head([
    'title' => "Package Metadata files"
]);
?>

<h1>Keyboard Package Metadata files</h1>

<dl>
  <dt>Used by:</dt>
  <dd><span class="application">Keyman Desktop</span> and Keyman Engine products.</dd>

  <dt>Description:</dt>
  <dd>The files <code language="filename">kmp.inf</code> and <code language="filename">kmp.json</code> are metadata
  for a Keyman package file.</dd>

  <dt>Details:</dt>
  <dd>When Keyman Developer compiles a Keyman package source file (<a href="KPS">.KPS</a>),
    it creates and automatically adds <code language="filename">kmp.inf</code> and
    <code language="filename">kmp.json</code> into the Keyman Package file (<a href="KMP">.KMP</a>).</dd>
  <dd>Keyman mobile products use <code class="filename">kmp.json</code> to install the touch keyboards (.JS) in the package.</dd>
  <dd>Keyman Desktop 10.0 also uses <code class="filename">kmp.json</code> to install the keyboards
    (<a href="kmx">.KMX</a>) in the package.</dd>
  <dd>Older versions of Keyman use <code class="filename">kmp.inf</code>, a parallel format of the package metadata.</dd>

  <dt>Distributed with keyboard:</dt>
  <dd>A Keyman Package file includes these metadata files.</dd>

  <h2>KMP.JSON</h2>

  <h3 name="obj-package">The package object</h3>

  <p>The kmp.json file is a base object described as</p>
    <?php
    obj_spec(false,
        "system", "required Object", "<a href='#obj-system'><code>System</code></a> object.",
        "options", "required Object", "An <a href='#obj-options'><code>Options</code></a> object.",
        "startMenu", "required Object", "<a href='#obj-startMenu'><code>Start Menu</code></a> object.",
        "info", "required Object", "<a href='#obj-info'><code>Info</code></a> object.",
        "files", "required Object", "Array of objects, each containing a name and description of each file in in the package",
        "keyboards", "required Object", "Array of <a href='#obj-keyboard'><code>Keyboard</code></a> objects."
    );
    ?>

  <h3><a id="obj-system">The System object</a></h3>

  <p>The <code>System</code> object is used by Keyman Desktop to install keyboards</p>
    <?php
    obj_spec(false,
      "keymanDeveloperVersion", "required string", "The version of Keyman Developer used to create the package file. If undefined, use <code>'0.0.0.0'</code>",
      "fileVersion,", "required string", ""
    );

    ?>

  <h3><a id="obj-options">The Options object</a></h3>

  <p>The <code>Options</code> object is used by Keyman Desktop to install keyboards</p>
    <?php

    obj_spec(false,
        "readmeFile", "required string", "The file for the keyboard package documentation",
        "graphicFile", "required string", "The image associated with the keyboard package."
    );

    ?>

  <h3><a id="obj-startMenu">The Start Menu object</a></h3>

  <p>The <code>StartMenu</code> object is used by Keyman Desktop to install windows</code></p>
    <?php

    obj_spec(false,
        "folder", "required string", "The folder that Keyman Desktop will create",
        "items", "required Array", "An array of <a href='#obj-item'>Item</a> objects"
    );

    ?>

  <h3><a id="obj-item">The Item Object</a></h3>

  <p>The <code>Item</code> object</p>
    <?php

    obj_spec(false,
        "name", "required string", "The item name",
        "filename", "required string", "The filename of the item",
        "location", "required string", "The location for Keyman Desktop to place the item"
    );

    ?>

  <h3><a id="obj-info">The Info object</a></h3>

  <p>The <code>Info</code> object describes the Keyman package</p>
    <?php

    obj_spec(false,
        "name", "required string", "The Keyman package name",
        "version", "required string", "The version number of the package in dotted number format. Defaults to <code>'1.0'</code> if missing",
        "copyright", "optional string", "Copyright information",
        "author", "optional string", "The Keyman package author and email address",
        "website", "optional string", "Description and URL for additional Keyboard package documentation"
    );

    ?>

  <h3><a id="obj-keyboard">The Keyboard object</a></h3>

  <p>The <code>Keyboard</code> object describes an individual keyboard in the Keyman package</p>
    <?php

    obj_spec(false,
        "name", "required string", "Name of keyboard",
        "id", "required string", "ID of the keyboard, always matches the filename of the keyboard",
        "rtl", "optional boolean", "<code>true</code> if the keyboard targets a right-to-left script. <code>false</code> if absent.",
        "version", "required string", "version number of the keyboard in dotted number format. Defaults to <code>'1.0'</code> if missing",
        "languages", "required Array", "An array of <a href='#obj-language'><code>Language</code></a> objects linked to the keyboard.",
        "displayFont", "optional string", "The filename of the font for input fields (and OSK, if <code>oskFont</code>".
        " is not present).",
        "oskFont", "optional string", "The filename of the font for the OSK"
    );

    ?>

  <h3><a id="obj-language">The Language object</a></h3>

  <p>The <code>Language</code> object describes the language that can be typed with the keyboard </p>
    <?php

    obj_spec(false,
        "name", "required string", "The name of the language",
        "id", "required string", "BCP 47 language code"
    );

    ?>
</dl>

