<?php
require_once('includes/template.php');

head([
    'title' => "ICO files"
]);
?>

<h1>ICO files</h1>

<dl>
    <dt>Used by:</dt>
    <dd><span class="application">Keyman Desktop</span>, <span class="application">Keyman Developer</span>.</dd>

    <dt>Description:</dt>
    <dd>An .ICO file is a standard Windows <a href="https://en.wikipedia.org/wiki/ICO_(file_format)">icon</a> file.</dd>

    <dt>Details:</dt>
    <dd>An .ICO file is an icon which is used in the user interface to indicate that the keyboard is active.
        See the <a href="../../../language/reference/bitmap">bitmap store</a></dd>

    <dt>Distributed with keyboard:</dt>
    <dd>An .ICO file is associated with a specific keyboard. A generic keyboard icon will be displayed if no icon is specified.</dd>
</dl>
