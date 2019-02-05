<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanLanguage Interface"
  ]);
?>

<h1>IKeymanLanguage Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanLanguage/Description">IKeymanLanguage::Description</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanLanguage/HKL">IKeymanLanguage::HKL</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanLanguage/IsIME">IKeymanLanguage::IsIME</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanLanguage/IsKeymanLayout">IKeymanLanguage::IsKeymanLayout</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanLanguage/KeymanKeyboard">IKeymanLanguage::KeymanKeyboard</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanLanguage/LayoutName">IKeymanLanguage::LayoutName</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanLanguage/LocaleName">IKeymanLanguage::LocaleName</a></span></dt>
      </dl>
    </div>

    <p>interface IKeymanLanguage : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
    "IKeymanObject Interface">IKeymanObject</a> : IDispatch</p>

    <p>Returns a description of an installed language and its Keyman keyboard association</p>

    <h5><a name="id571842" id="id571842"></a>Interface Properties</h5>

    <table id="id571824">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanLanguage/Description" title="IKeymanLanguage::Description">Description</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Description As String</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanLanguage/HKL" title="IKeymanLanguage::HKL">HKL</a>
        </td>

        <td>Property Get</td>

        <td>Property Get HKL As Long</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanLanguage/IsIME" title="IKeymanLanguage::IsIME">IsIME</a>
        </td>

        <td>Property Get</td>

        <td>Property Get IsIME As Boolean</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanLanguage/IsKeymanLayout" title=
          "IKeymanLanguage::IsKeymanLayout">IsKeymanLayout</a>
        </td>

        <td>Property Get</td>

        <td>Property Get IsKeymanLayout As Boolean</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanLanguage/KeymanKeyboard" title=
          "IKeymanLanguage::KeymanKeyboard">KeymanKeyboard</a>
        </td>

        <td>Property Get/Let</td>

        <td>Property Get/Let KeymanKeyboard As IKeymanKeyboard</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanLanguage/LayoutName" title="IKeymanLanguage::LayoutName">LayoutName</a>
        </td>

        <td>Property Get</td>

        <td>Property Get LayoutName As String</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanLanguage/LocaleName" title="IKeymanLanguage::LocaleName">LocaleName</a>
        </td>

        <td>Property Get</td>

        <td>Property Get LocaleName As String</td>
      </tr>
    </table>
