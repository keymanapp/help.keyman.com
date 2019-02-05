<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanObject::SerializeXML"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanObject::SerializeXML</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanObject.php">Prev</a> </td><th width="60%" align="center">IKeymanObject Interface</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanObject_UniqueIndex.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h5 class="title" id="comapi_interface_IKeymanObject_SerializeXML"><a class="link" href="comapi_interface_IKeymanObject.php" title="IKeymanObject Interface">IKeymanObject</a>::SerializeXML</h5></div></div></div><p>
            Returns the collection items as XML.  The actual XML returned will depend on the type 
            of those items.  The XML string that is returned does not contain a prolog or DTD, making it easy 
            to concatenate to other XML strings; the format is UTF-16.

            If ksfExportImages is specified in Flags, then any images related to the XML (for instance, 
            keyboard icons) will be exported to the folder specified in ImagePath, and the names of all 
            the files exported will be added to the array referenced by References.  It is the 
            responsibility of the caller to delete all the files in the References array after 
            finishing using them.
          </p><h6><a name="id666382"></a>Declaration</h6><pre class="programlisting">Sub SerializeXML(XML As String, Flags As tagKeymanSerializeFlags, ImagePath As String, References)</pre><h6><a name="id666388"></a>Parameters</h6><table id="id666391"><tr><th>No</th><th>Name</th><th>Type</th><th>Description</th></tr><tr><td>1</td><td>XML</td><td>String</td><td>the XML snippet returned</td></tr><tr><td>2</td><td>Flags</td><td><a class="link" href="comapi_enumeration_tagKeymanSerializeFlags.php" title="tagKeymanSerializeFlags Enumeration">tagKeymanSerializeFlags</a></td><td>Can be 0 or ksfExportImages</td></tr><tr><td>3</td><td>ImagePath</td><td>String</td><td>Path to export image files to.  If ksfExportImages is not specified, then ImagePath is ignored</td></tr><tr><td>4</td><td>References</td><td>Variant</td><td>Returns an array of image filenames, relative to ImagePage.  If ksfExportImages is not specified, then References is ignored</td></tr></table><h6><a name="id666448"></a>Example Code</h6><pre class="programlisting"></pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanObject.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interface_IKeymanObject.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanObject_UniqueIndex.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanObject Interface </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanObject::UniqueIndex</td></tr></table></div>
