<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboard Interface"
  ]);
?>

<h1>IKeymanKeyboard Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboard/Bitmap">IKeymanKeyboard::Bitmap</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboard/Copyright">IKeymanKeyboard::Copyright</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboard/Encodings">IKeymanKeyboard::Encodings</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboard/Filename">IKeymanKeyboard::Filename</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboard/Hotkey">IKeymanKeyboard::Hotkey</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboard/KeyboardName">IKeymanKeyboard::KeyboardName</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboard/LayoutType">IKeymanKeyboard::LayoutType</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboard/Message">IKeymanKeyboard::Message</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboard/Name">IKeymanKeyboard::Name</a></span></dt>
      </dl>
    </div>

    <p>interface IKeymanKeyboard : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
    "IKeymanObject Interface">IKeymanObject</a> : IDispatch</p>

    <p>Base interface for Keyman Keyboard interfaces</p>

    <h5><a name="id571396" id="id571396"></a>Interface Properties</h5>

    <table id="id571384">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboard/Bitmap" title="IKeymanKeyboard::Bitmap">Bitmap</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Bitmap As stdole.IPicture</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboard/Copyright" title="IKeymanKeyboard::Copyright">Copyright</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Copyright As String</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboard/Encodings" title="IKeymanKeyboard::Encodings">Encodings</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Encodings As tagKeymanKeyboardEncodings</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboard/Filename" title="IKeymanKeyboard::Filename">Filename</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Filename As String</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboard/Hotkey" title="IKeymanKeyboard::Hotkey">Hotkey</a>
        </td>

        <td>Property Get/Let</td>

        <td>Property Get/Let Hotkey As Long</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboard/KeyboardName" title="IKeymanKeyboard::KeyboardName">KeyboardName</a>
        </td>

        <td>Property Get</td>

        <td>Property Get KeyboardName As String</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboard/LayoutType" title="IKeymanKeyboard::LayoutType">LayoutType</a>
        </td>

        <td>Property Get</td>

        <td>Property Get LayoutType As tagKeymanKeyboardLayoutType</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboard/Message" title="IKeymanKeyboard::Message">Message</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Message As String</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboard/Name" title="IKeymanKeyboard::Name">Name</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Name As String</td>
      </tr>
    </table>
