<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanObject::SerializeXML"
  ]);
?>

<h1><a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
      "IKeymanObject Interface">IKeymanObject</a>::SerializeXML</h1>

    <p>Returns the collection items as XML. The actual XML returned will depend on the type of those items. The XML string that is returned
    does not contain a prolog or DTD, making it easy to concatenate to other XML strings; the format is UTF-16. If ksfExportImages is
    specified in Flags, then any images related to the XML (for instance, keyboard icons) will be exported to the folder specified in
    ImagePath, and the names of all the files exported will be added to the array referenced by References. It is the responsibility of the
    caller to delete all the files in the References array after finishing using them.</p>

    <h6><a name="id568131" id="id568131"></a>Declaration</h6>
    <pre class="programlisting">
Sub SerializeXML(XML As String, Flags As tagKeymanSerializeFlags, ImagePath As String, References)
</pre>

    <h6><a name="id568129" id="id568129"></a>Parameters</h6>

    <table id="id568120">
      <tr>
        <th>No</th>

        <th>Name</th>

        <th>Type</th>

        <th>Description</th>
      </tr>

      <tr>
        <td>1</td>

        <td>XML</td>

        <td>String</td>

        <td>the XML snippet returned</td>
      </tr>

      <tr>
        <td>2</td>

        <td>Flags</td>

        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/enumerations/tagKeymanSerializeFlags" title=
          "tagKeymanSerializeFlags Enumeration">tagKeymanSerializeFlags</a>
        </td>

        <td>Can be 0 or ksfExportImages</td>
      </tr>

      <tr>
        <td>3</td>

        <td>ImagePath</td>

        <td>String</td>

        <td>Path to export image files to. If ksfExportImages is not specified, then ImagePath is ignored</td>
      </tr>

      <tr>
        <td>4</td>

        <td>References</td>

        <td>Variant</td>

        <td>Returns an array of image filenames, relative to ImagePage. If ksfExportImages is not specified, then References is
        ignored</td>
      </tr>
    </table>

    <h6><a name="id568170" id="id568170"></a>Example Code</h6>
    <pre class="programlisting">
</pre>
