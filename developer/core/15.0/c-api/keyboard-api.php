<?php
require_once('includes/template.php');

head([
    'title' => "keyboards"
]);
?>

<h1 class="title">Keyboards</h1>
<p>
  A keyboard is a set of rules and transforms in a Processor specific format
  for transforming key events into action items. The keyboard is parsed and
  loaded by the processor and made available in an immutable fashion for use
  with any number of state objects.
</p>


<article id="km_kbp_keyboard_attrs">
  <h1>km_kbp_keyboard_attrs</h1>
  <section class="description">
    <h2>Description</h2>
    <p>A static structure describing the basic keyboard attributes.</p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">
typedef struct {
  km_kbp_cp const * version_string;
  km_kbp_cp const * id;
  km_kbp_path_name  folder_path;
  km_kbp_option_item const * default_options;
} km_kbp_keyboard_attrs;
</code></pre>
  </section>
  <section class="members">
    <h2>Members</h2>
    <dl>
      <dt id="version_string"><code class="token symbol">version_string</code></dt>
      <dd>Processor specific version string.</dd>

      <dt id="id"><code class="token symbol">id</code></dt>
      <dd>Keyman keyboard ID string.</dd>

      <dt id="folder_path"><code class="token symbol">folder_path</code></dt>
      <dd>
        Path to the unpacked folder containing the keyboard and associated
        resources.
      </dd>

      <dt id="default_options"><code class="token symbol">default_options</code></dt>
      <dd>
        Pointer to an array of
        <a href="#km_kbp_option_item"><code class="token symbol">km_kbp_option_item</code></a>,
        terminated with
        <a href="#KM_KBP_OPTIONS_END"><code class="token constant">KM_KBP_OPTIONS_END</code></a>.
      </dd>
    </dl>
  </section>
</article>

<article id="km_kbp_keyboard_key">
  <h1>km_kbp_keyboard_key</h1>
  <section class="description">
    <h2>Description</h2>
    <p>A structure pairing a virtual key and modifier</p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">
typedef struct {
  km_kbp_virtual_key key;
  uint32_t modifier_flag;
} km_kbp_keyboard_key;
</code></pre>
  </section>
  <section class="members">
    <h2>Members</h2>
    <dl>
      <dt id="key"><code class="token symbol">key</code></dt>
      <dd> a virtual key code </dd>

      <dt id="modifier_flag"><code class="token symbol">modifier_flag</code></dt>
      <dd>The modifier flag </dd>

    </dl>
  </section>
</article>

<article id="km_kbp_keyboard_imx">
  <h1>km_kbp_keyboard_imx</h1>
  <section class="description">
    <h2>Description</h2>
    <p>A structure of IMX library and function name associated with an unique id</p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">
typedef struct {
  km_kbp_cp const * library_name;
  km_kbp_cp const * function_name;
  uint32_t imx_id;
} km_kbp_keyboard_imx;

</code></pre>
  </section>
  <section class="members">
    <h2>Members</h2>
    <dl>
      <dt id="library_name"><code class="token symbol">library_name</code></dt>
      <dd> IMX library name </dd>

      <dt id="function_name"><code class="token symbol">function_name</code></dt>
      <dd> IMX function name  </dd>

      <dt id="imx_id"><code class="token symbol">imx_id</code></dt>
      <dd> unique identifier used to call this function </dd>

    </dl>
  </section>
</article>

<article id="km_kbp_keyboard_load">
  <h1>km_kbp_keyboard_load</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      Parse and load keyboard from the supplied path and a pointer to the
      loaded keyboard into the out paramter.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">km_kbp_status
km_kbp_keyboard_load(km_kbp_path_name kb_path,
                     km_kbp_keyboard **keyboard);
</code></pre>
  </section>
  <section class="parameters">
    <h2>Parameters</h2>
    <dl>
      <dt id="kb_path"><code class="token symbol">kb_path</code></dt>
      <dd>
        On Windows, a UTF-16 string; on other platforms, a C string:
        contains a valid path to the keyboard file.
      </dd>

      <dt id="keyboard"><code class="token symbol">keyboard</code></dt>
      <dd>
        A pointer to result variable:
        A pointer to the opaque keyboard object returned by the Processor. This
        memory must be freed with a call to <a href="#km_kbp_keyboard_dispose"><code class="token function">km_kbp_keyboard_dispose()</code></a>
      </dd>
    </dl>
  </section>
  <section class="returns">
    <h2>Returns</h2>
    <dl>
      <dt id="KM_KBP_STATUS_OK"><code class="token constant">KM_KBP_STATUS_OK</code></dt>
      <dd>On success.</dd>

      <dt id="KM_KBP_STATUS_NO_MEM"><code class="token constant">KM_KBP_STATUS_NO_MEM</code></dt>
      <dd>In the event an internal memory allocation fails.</dd>

      <dt id="KM_KBP_STATUS_IO_ERROR"><code class="token constant">KM_KBP_STATUS_IO_ERROR</code></dt>
      <dd>In the event the keyboard file is unparseable for any reason.</dd>

      <dt id="KM_KBP_STATUS_INVALID_ARGUMENT"><code class="token constant">KM_KBP_STATUS_INVALID_ARGUMENT</code></dt>
      <dd>
        In the event the file doesn't exist or is inaccesible or
        <a href="#keyboard"><code class="token symbol">keyboard</code></a> is
        null.
      </dd>

      <dt id="KM_KBP_STATUS_OS_ERROR"><code class="token constant">KM_KBP_STATUS_OS_ERROR</code></dt>
      <dd>Bit 31 (high bit) set, bits 0-30 are an OS-specific error code.</dd>
    </dl>
  </section>
</article>


<article id="km_kbp_keyboard_dispose">
  <h1>km_kbp_keyboard_dispose</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      Free the allocated memory belonging to an opaque keyboard object
      previously returned by
      <a href="#km_kbp_keyboard_load"><code class="token function">km_kbp_keyboard_load()</code></a>.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">void
km_kbp_keyboard_dispose(km_kbp_keyboard *keyboard);
</code></pre>
  </section>
  <section class="parameters">
    <h2>Parameters</h2>
    <dl>
      <dt id="keyboard"><code class="token symbol">keyboard</code></dt>
      <dd>A pointer to the opaque keyboard object to be disposed of.</dd>
    </dl>
  </section>
</article>


<article id="km_kbp_keyboard_get_attrs">
  <h1>km_kbp_keyboard_get_attrs</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      Returns the const internal attributes of the keyboard. This structure is
      valid for the lifetime of the opaque keyboard object. Do not modify the
      returned data.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">km_kbp_status
km_kbp_keyboard_get_attrs(km_kbp_keyboard const *keyboard,
                          km_kbp_keyboard_attrs const **out);

</code></pre>
  </section>
  <section class="parameters">
    <h2>Parameters</h2>
    <dl>
      <dt id="keyboard"><code class="token symbol">keyboard</code></dt>
      <dd>A pointer to the opaque keyboard object to be queried.</dd>

      <dt id="out"><code class="token symbol">out</code></dt>
      <dd>
        A pointer to the result:
        A pointer to a
        <a href="#km_kbp_keyboard_attrs"><code class="token symbol">km_kbp_keyboard_attrs</code></a>
        structure.
      </dd>
    </dl>
  </section>
  <section class="returns">
    <h2>Returns</h2>
    <dl>
      <dt id="KM_KBP_STATUS_OK"><code class="token constant">KM_KBP_STATUS_OK</code></dt>
      <dd>On success.</dd>

      <dt id="KM_KBP_STATUS_INVALID_ARGUMENT"><code class="token constant">KM_KBP_STATUS_INVALID_ARGUMENT</code></dt>
      <dd>If non-optional parameters are null.</dd>
    </dl>
  </section>
</article>

<article id="km_kbp_keyboard_get_key_list">
  <h1>km_kbp_keyboard_get_key_list</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
    Returns the unordered full set of modifier + virtual keys that are handled by the
keyboard. The matching dispose call needs to be called to free the memory.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">km_kbp_status
km_kbp_keyboard_get_key_list(km_kbp_keyboard const *keyboard,
                            km_kbp_keyboard_key const **out);

</code></pre>
  </section>
  <section class="parameters">
    <h2>Parameters</h2>
    <dl>
      <dt id="keyboard"><code class="token symbol">keyboard</code></dt>
      <dd>A pointer to the opaque keyboard object to be queried.</dd>

      <dt id="out"><code class="token symbol">out</code></dt>
      <dd>
        A pointer to the result, an array of
        <a href="#km_kbp_keyboard_key"><code class="token symbol">km_kbp_keyboard_keys</code></a>
      </dd>
    </dl>
  </section>
  <section class="returns">
    <h2>Returns</h2>
    <dl>
      <dt id="KM_KBP_STATUS_OK"><code class="token constant">KM_KBP_STATUS_OK</code></dt>
      <dd>On success.</dd>

      <dt id="KM_KBP_STATUS_INVALID_ARGUMENT"><code class="token constant">KM_KBP_STATUS_INVALID_ARGUMENT</code></dt>
      <dd>If non-optional parameters are null.</dd>
    </dl>
  </section>
</article>

<article id="km_kbp_keyboard_key_list_dispose">
  <h1>km_kbp_keyboard_key_list_dispose</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
    Free the allocated memory belonging to a keyboard key list previously
    returned by <a href="#km_kbp_keyboard_get_key_list"><code class="token symbol">km_kbp_keyboard_get_key_list</code></a>
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">void km_kbp_keyboard_key_list_dispose(km_kbp_keyboard_key *key_list);

</code></pre>
  </section>
  <section class="parameters">
    <h2>Parameters</h2>
    <dl>
      <dt id="keyboard"><code class="token symbol">keyboard</code></dt>
      <dd>A pointer to the keyboard key list to be
    disposed of.</dd>
    </dl>
  </section>
</article>

<article id="km_kbp_keyboard_get_imx_list">
  <h1>km_kbp_keyboard_get_imx_list</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
    Returns the list of IMX libraries and function names that are referenced by
    the keyboard. The matching dispose call <a href="#km_kbp_keyboard_imx_list_dispose"><code class="token symbol">km_kbp_keyboard_imx_list_dispose</code></a>
    needs to be called to free the memory.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">km_kbp_status km_kbp_keyboard_get_imx_list(
                              km_kbp_keyboard const *keyboard,
                              km_kbp_keyboard_imx** imx_list);

</code></pre>
  </section>
  <section class="parameters">
    <h2>Parameters</h2>
    <dl>
      <dt id="keyboard"><code class="token symbol">keyboard</code></dt>
      <dd>A pointer to the opaque keyboard object to be queried.</dd>

      <dt id="imx_list"><code class="token symbol">imx_list</code></dt>
      <dd>
        A pointer to the result, an array of
        <a href="#km_kbp_keyboard_imx"><code class="token symbol">km_kbp_keyboard_imx</code></a>
        structure.
      </dd>
    </dl>
  </section>
  <section class="returns">
    <h2>Returns</h2>
    <dl>
      <dt id="KM_KBP_STATUS_OK"><code class="token constant">KM_KBP_STATUS_OK</code></dt>
      <dd>On success.</dd>

      <dt id="KM_KBP_STATUS_INVALID_ARGUMENT"><code class="token constant">KM_KBP_STATUS_INVALID_ARGUMENT</code></dt>
      <dd>If non-optional parameters are null.</dd>
    </dl>
  </section>
</article>

<article id="km_kbp_keyboard_imx_list_dispose">
  <h1>km_kbp_keyboard_imx_list_dispose</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
    Free the allocated memory belonging to a IMX list previously
returned by <a href="#km_kbp_keyboard_get_imx_list"><code class="token symbol">km_kbp_keyboard_get_imx_list</code></a>.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">void km_kbp_keyboard_key_list_dispose(km_kbp_keyboard_key *key_list);

</code></pre>
  </section>
  <section class="parameters">
    <h2>Parameters</h2>
    <dl>
      <dt id="keyboard"><code class="token symbol">keyboard</code></dt>
      <dd>A pointer to the IMX list to be
    disposed of.</dd>
    </dl>
  </section>
</article>