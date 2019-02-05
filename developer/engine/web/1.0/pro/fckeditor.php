<?php
  $pagetitle = 'FCKeditor Notes';
  require_once('kmwdevheader.php');
?>

<p>NOTE: If you are using FCKeditor, the following code is required to initialise FCKeditor:</p>

<pre>
function ReattachKeymanWeb(editorInstance)
{
  KeymanWeb.AttachToControl(editorInstance.EditorWindow.frameElement);
}

function FCKeditor_OnComplete(editorInstance)
{
  editorInstance.Events.AttachEvent( 'OnFocus', ReattachKeymanWeb );
  KeymanWeb.AttachToControl(editorInstance.EditorWindow.frameElement);
}
</pre>

<?php require_once('kmwdevfooter.php'); ?>