<?php
require_once('includes/template.php');

head([
    'title' => "C API Reference"
]);
?>
<h1 class="title">C API Reference</h1>
<h2>Namespace</h2>
<p>
  All calls, types and enums are prefixed with the namespace prefix
  <code class="token symbol">km_kbp_</code>
</p>


<h2>Idioms</h2>

<section id="error-handling">
  <h3>Error handling</h3>
  <p>
    Follows a COM HRESULT style model where functions that can fail will always
    return a status value and all other results are returned via outparams
    passed to the function. Only attribute accessor functions which cannot
    fail, may return their results via return results.
  </p>
</section>

<section id="variable-length-data-out">
  <h3>Passing variable length data out</h3>
  <p>
    Almost all calls marshalling variable length aggregate data in or out of an
    API object take the form:
  </p>
  <pre><code class="language-c">km_kbp_status fn_name(object_ref, buffer_ptr, size_ptr)</code></pre>
  <p>
    where the <code class="token symbol">buffer_ptr</code> is nullable and all
    other arguments are required (will result in an
    <a href="#KM_KBP_STATUS_INVALID_ARGUMENT"><code class="token constant">KM_KBP_STATUS_INVALID_ARGUMENT</code></a>
    status being returned if nulled). When
    <code class="token symbol">buffer_ptr</code> is
    <code class="token keyword">nullptr</code> or
    <code class="token number">0</code> the function will place the size of the
    required buffer in the variable pointed to by
    <code class="token symbol">size_ptr</code>.
  </p>
</section>

<section id="resource-management">
  <h3>Resource management</h3>
  <p>
    Calls which result in the allocation of resources, regardless of resulting
    ownership, are of the form:
  </p>
  <pre><code class="language-c">km_kbp_status fn_name(object_ref, handle_out_ptr)</code></pre>
  <p>
    where <code class="token symbol">handle_out_ptr</code> is a valid pointer
    to a caller allocated variable to hold the resulting resource handle. This
    is often a reference to a created object. Unless stated all arguments are
    required (will result in an
    <a href="#KM_KBP_STATUS_INVALID_ARGUMENT"><code class="token constant">KM_KBP_STATUS_INVALID_ARGUMENT</code></a>
    status being returned if nulled).
  </p>
  <p>All dispose calls are designed to
    accept <code class="token keyword">nullptr</code> or
    <code class="token number">0</code> as a valid value and will do nothing in
    that event.
  </p>
</section>

<section id="attribute-access">
  <h3>Fixed size attribute access</h3>
  <p>
    For accessors to fixed size attributes of an object these will take the
    form:
  </p>
  <pre><code class="language-c">attr_value fn_name(object_ref)</code></pre>
  <p>
    <code class="token symbol">object_ref</code> is required to be valid and
    will result in a nonsense value being returned if
    <code class="token keyword">nullptr</code> or
    <code class="token number">0</code>.
  </p>
</section>

<section id="versioning-scheme">
  <h3>Versioning scheme</h3>
  <p>
    This follows the libtool interface versioning scheme of
    <code>current.age.revision</code>:
  </p>
  <dl>
    <dt><code>current</code></dt>
    <dd>
      The most recent interface number that the engine implements.
    </dd>

    <dt><code>age</code></dt>
    <dd>
      How many interface numbers back from current the library implements.
      E.g. 5.2.0 would mean the library provides interface versions 3-5 and
      5.0.0 would mean just interface version 5 and nothing older.
    </dd>

    <dt><code>revision</code></dt>
    <dd>
      The implementation version of the current interface. This represents
      improvements to the code that don't change the intended behaviour of the
      interface such as bug fixes and optimisations.
    </dd>
  </dl>
  <p>
    For Linux and other OS which support this scheme the dynamic linker will
    automatically choose the most updated version if more than one
    implementation is available. For Windows or dynamic loaded shared objects on
    Linux you can use the
    <a href="#km_kbp_get_engine_attrs"><code class="token function">km_kbp_get_engine_attrs</code></a>
    call and <a href="#lib-version-macros">Library version macros</a> to check
    the loaded DLL supplies the correct interface.
  </p>
</section>



<h1>Common functions, types, and macros</h1>
<h2>Basic types</h2>
<p>
  Fundamental types for representing data passed across the API.
</p>
<table class='display'>
  <thead>
    <tr><th>Type</th>    <th>C/C++ type</th>     <th>Purpose</th></tr>
  </thead>
  <tbody>
    <tr>
      <td><code class="token symbol">km_kbp_cp</code></td>
      <td><code class="token symbol">uint16_t/char16_t</code></td>
      <td>Represents a UTF16 codepoint, most strings are passed as UTF16.</td>
    </tr>
    <tr>
      <td><code class="token symbol">km_kbp_usv</code></td>
      <td><code class="token symbol">uint32_t/char32_t</code></td>
      <td>
        An integral type capable of holding a single Unicode Scalar Value, a decoded
        UTF codepoint.
      </td>
    </tr>
    <tr>
      <td><code class="token symbol">km_kbp_virtual_key</code></td>
      <td><code class="token symbol">uint16_t</code></td>
      <td>
        An integral type capable of holding a platform specific virtual key
        code.
      </td>
    </tr>
    <tr>
      <td><code class="token symbol">km_kbp_status</code></td>
      <td><code class="token symbol">uint32_t</code></td>
      <td>
        An integral 32 bit wide type capable of holding any valid status code
        as defined by the <code class="token keyword">enum</code>
        <a href="#km_kbp_status_codes">km_kbp_status_codes</a>.
      </td>
    </tr>
  </tbody>
</table>

<h2>Resource types</h2>
<p>
  Opaque types for representing resources provided or created by the keyboard
  processor implementation.
</p>
<table class='display'>
  <thead>
    <tr><th>Type</th>    <th>Purpose</th></tr>
  </thead>
  <tbody>
    <tr>
      <td><code class="token symbol">km_kbp_keyboard</code></td>
      <td>
        Represents a keyboard loaded from disk, that can be executed by the
        keyboard processor to consume events, update state associated with an
        insertion point and produce action items. A keyboard object may be
        referenced by any number of state objects but must be disposed of after
        all state objects referencing it have first been disposed of.
      </td>
    </tr>
    <tr>
      <td><code class="token symbol">km_kbp_state</code></td>
      <td>
        Represents all state associated with an insertion point using a
        keyboard.  This tracks context, and current action items resulting
        from a processed keyboard event. There can be many state objects using
        the same keyboard.  A state object may not live longer than the
        keyboard it manages state for.
      </td>
    </tr>
    <tr>
      <td><code class="token symbol">km_kbp_context</code></td>
      <td>
        Represents the pre-context of an insertion point and may be set,
        queried, append or shrunk by one or more context items. A context
        object is a sub-part of the state object, and a context handle may not
        be used after its state object has been disposed of.
      </td>
    </tr>
  </tbody>
</table>

<article id="lib-version-macros">
  <h1>Library version macros</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      These macros evaluate to the version of the library your binary was
      compiled against, which may not be the same as the version returned by
      <a href="#km_kbp_get_engine_attrs"><code class="token function">km_kbp_get_engine_attrs</code></a>.
      See <a href="#versioning-scheme">Versioning scheme</a>.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">#define KM_KBP_LIB_CURRENT  @lib_curr@
#define KM_KBP_LIB_AGE      @lib_age@
#define KM_KBP_LIB_REVISION @lib_rev@
</code></pre>
  </section>
</article>

<article id="km_kbp_status_codes">
  <h1>km_kbp_status_codes</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      An error code mechanism similar to COM’s
      <code class="token symbol">HRESULT</code> scheme (unlike COM, any
      non-zero value is an error).
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">enum km_kbp_status_codes {
  KM_KBP_STATUS_OK = 0,
  KM_KBP_STATUS_NO_MEM = 1,
  KM_KBP_STATUS_IO_ERROR = 2,
  KM_KBP_STATUS_INVALID_ARGUMENT = 3,
  KM_KBP_STATUS_KEY_ERROR = 4,
  KM_KBP_STATUS_INSUFFICENT_BUFFER = 5,
  KM_KBP_STATUS_INVALID_UTF = 6,
  KM_KBP_STATUS_INVALID_KEYBOARD = 7,
  KM_KBP_STATUS_OS_ERROR = 0x80000000
};
</code></pre>
  </section>
  <section class="values">
    <h2>Values</h2>
    <dl>
      <dt id="KM_KBP_STATUS_OK"><code class="token constant">KM_KBP_STATUS_OK</code></dt>
      <dd>Success code. Call completed as documented.</dd>

      <dt id="KM_KBP_STATUS_NO_MEM"><code class="token constant">KM_KBP_STATUS_NO_MEM</code></dt>
      <dd>
        The call failed to allocate memory during its execution, causing it to
        fail.
      </dd>

      <dt id="KM_KBP_STATUS_IO_ERROR"><code class="token constant">KM_KBP_STATUS_IO_ERROR</code></dt>
      <dd>
        The call performed an I/O operation which failed, causing it to fail.
      </dd>

      <dt id="KM_KBP_STATUS_INVALID_ARGUMENT"><code class="token constant">KM_KBP_STATUS_INVALID_ARGUMENT</code></dt>
      <dd>The call detected one of its parameters was invalid or unsafe.</dd>

      <dt id="KM_KBP_STATUS_KEY_ERROR"><code class="token constant">KM_KBP_STATUS_KEY_ERROR</code></dt>
      <dd>The provided key or index into a collection object was not present.</dd>

      <dt id="KM_KBP_STATUS_INSUFFICENT_BUFFER"><code class="token constant">KM_KBP_STATUS_INSUFFICENT_BUFFER</code></dt>
      <dd>
        The provided buffer did not contain enough space to fully encode or
        copy the result of this call.
      </dd>

      <dt id="KM_KBP_STATUS_INVALID_UTF"><code class="token constant">KM_KBP_STATUS_INVALID_UTF</code></dt>
      <dd>
        A malformed or partial UTF sequence prevented complete decoding of a
        unicode string.
      </dd>

      <dt id="KM_KBP_STATUS_INVALID_KEYBOARD"><code class="token constant">KM_KBP_STATUS_INVALID_KEYBOARD</code></dt>
      <dd>An attempt to decode a keyboard file failed.</dd>

      <dt id="KM_KBP_STATUS_OS_ERROR"><code class="token constant">KM_KBP_STATUS_OS_ERROR</code></dt>
      <dd>
        This allows encapsulating a platform error code: the remaining 31 low
        bits are the error code returned by the OS for cases where the failure
        mode is platform specific. For HRESULT codes this only permits failure
        codes to be passed and not success codes.
      </dd>
    </dl>
  </section>
</article>


<article id="km_kbp_attr">
  <h1>km_kbp_attr</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      A structure describing information about the keyboard processor,
      implementing this API.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">typedef struct {
  size_t      max_context;
  uint16_t    current;
  uint16_t    revision;
  uint16_t    age;
  uint16_t    technology;
  char const *vendor;
} km_kbp_attr;
</code></pre>
  </section>
  <section class="members">
    <h2>Members</h2>
    <dl>
      <dt id="max_context"><code class="token symbol">max_context</code></dt>
      <dd>Maximum context size supported by processor.</dd>

      <dt id="current"><code class="token symbol">current</code></dt>
      <dd>Current API number supported.</dd>

      <dt id="revision"><code class="token symbol">revision</code></dt>
      <dd>Implementation number of current API.</dd>

      <dt id="age"><code class="token symbol">age</code></dt>
      <dd>current - age == Oldest API number supported.</dd>

      <dt id="technology"><code class="token symbol">technology</code></dt>
      <dd>
        A bit field of
        <a href="#km_kbp_tech_value"><code class="token symbol">km_kbp_tech_value</code></a>
        values, specifiying which Keyboard technologies the engine supports.
      </dd>

      <dt id="vendor"><code class="token symbol">vendor</code></dt>
      <dd>A UTF-8 encoded string identifying the implementer of the processor.</dd>
    </dl>
  </section>
</article>


<article id="km_kbp_tech_value">
  <h1>km_kbp_tech_value</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      Values for a bit field indicating which keyboarding technologies a
      keyboard processor supports.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">enum km_kbp_tech_value {
  KM_KBP_TECH_UNSPECIFIED = 0,
  KM_KBP_TECH_MOCK        = 1 << 0,
  KM_KBP_TECH_KMX         = 1 << 1,
  KM_KBP_TECH_LDML        = 1 << 2
};
</code></pre>
  </section>
  <section class="values">
    <h2>Values</h2>
    <dl>
      <dt id="KM_KBP_TECH_UNSPECIFIED"><code class="token constant">KM_KBP_TECH_UNSPECIFIED</code></dt>
      <dd>
        The keyboard processor implementation does not disclose which
        technologies it implements.
      </dd>

      <dt id="KM_KBP_TECH_MOCK"><code class="token constant">KM_KBP_TECH_MOCK</code></dt>
      <dd>
        The keyboard processor implements a simple en-US keyboard for the
        purposes of testing the API.
      </dd>

      <dt id="KM_KBP_TECH_KMX"><code class="token constant">KM_KBP_TECH_UNSPECIFIED</code></dt>
      <dd>The keyboard processor implements a Keyman KMX compatible engine.</dd>

      <dt id="KM_KBP_TECH_LDML"><code class="token constant">KM_KBP_TECH_LDML</code></dt>
      <dd>The keyboard processor implements an <a href="https://www.unicode.org/reports/tr35/tr35-keyboards.html">LDML capable</a> processing engine.</dd>
    </dl>
  </section>
</article>


<article id="km_kbp_get_engine_attrs">
  <h1>km_kbp_get_engine_attrs</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      Get access processors attributes describing version and technology
      implemented.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">
KMN_API
km_kbp_attr const *
km_kbp_get_engine_attrs(km_kbp_state const *state);
</code></pre>
  </section>
  <section class="parameters">
    <h2>Parameters</h2>
    <dl>
      <dt id="state"><code class="token symbol">state</code></dt>
      <dd>
        An opaque pointer to an
        <a href="state-api#state"><code class="token symbol">km_kbp_state</code></a>.
      </dd>
    </dl>
  </section>
  <section class="returns">
    <h2>Returns</h2>
    <p>
      A pointer to a
      <a href="#km_kbp_attr"><code class="token symbol">km_kbp_attr</code></a>
      structure. Do not modify the contents of this structure.
    </p>
  </section>
</article>
