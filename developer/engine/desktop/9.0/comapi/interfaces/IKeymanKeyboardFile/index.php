<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardFile Interface"
  ]);
?>

<h1>IKeymanKeyboardFile Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardFile/Install">IKeymanKeyboardFile::Install</a></span></dt>
      </dl>
    </div>

    <p>interface IKeymanKeyboardFile : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboard" title=
    "IKeymanKeyboard Interface">IKeymanKeyboard</a> : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
    "IKeymanObject Interface">IKeymanObject</a> : IDispatch</p>

    <p>Information about a keyboard that is not installed.</p>

    <h5><a name="id569650" id="id569650"></a>Interface Methods</h5>

    <table id="id569652">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardFile/Install" title="IKeymanKeyboardFile::Install">Install</a>
        </td>

        <td>Method</td>

        <td>Sub Install(AllUsers As Boolean, Force As Boolean)</td>
      </tr>
    </table>
