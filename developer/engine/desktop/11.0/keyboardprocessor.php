<?php
require_once('includes/template.php');

head([
    'title' => "Keyman Keyboard Processor API"
]);
?>
<h1 class="title">Keyman Keyboard Processor API</h1>

<h2>Requirements</h2>
<ol>
  <li id="req1">Cross platform.</li>
  <li id="req2">Cross language.</li>
  <li id="req3">Facilitate stateless operation of the Engine.</li>
  <li id="req4">Keyboard format agnostic -- support both KMN and future LDML based keyboards.</li>
  <li id="req5">Support querying Engine attributes.</li>
  <li id="req6">Support querying Keyboard attributes.</li>
  <li id="req7">Idempotent.</li>
</ol>

<h2>Design decisions in support of requirements:</h2>
<ul>
  <li>Use C or C99 types and calling convention for the interface, it has the
      broadest language FFI support.
      [<a href="#req1">1</a>,<a href="#req2">2</a>]</li>
  <li>Have client (Platform layer) code load keyboards, manage & pass state.
      [<a href="#req3">3</a>,<a href="#req4">4</a>,<a href="#req7">7</a>]</li>
  <li>Provide query calls to return static attributes data for keyboards and
      engine.
      [<a href="#req5">5</a>,<a href="#req6">6</a>]</li>
  <li>Provide get/set calls for client accessible keyboard state information.
      [<a href="#req4">3</a>,<a href="#req4">4</a>]</li>
</ul>

<h2>Glossary</h2>
<dl>
  <dt>Platform layer</dt>
  <dd>The code that consumes the Keyman Keyboard Processor API, and provides the
  operating system-specific handling of keystroke events and integration with
  applications.</dd>

  <dt>Client Application</dt>
  <dd>The application that has the focus and receives text events from the
  Platform layer.</dd>

  <dt>Context</dt>
  <dd>Text preceding the insertion point.</dd>

  <dt>Marker</dt>
  <dd>Positional state that can be placed in the Context.</dd>

  <dt>Keyboard</dt>
  <dd>A set of rules for execution my an Engine.</dd>

  <dt>Option</dt>
  <dd>A variable in a dynamic or static key value store.</dd>

  <dt>Processor</dt>
  <dd>The component that implements this API and can parse and execute a
  particular keyboard.</dd>

  <dt>State</dt>
  <dd>An object that hold internal state of the Processor for a given
  insertion point.</dd>

  <dt>Action</dt>
  <dd>A directive output by the processor detailing how the Platform layer
  should transform the Client Application's text buffer. There may be several
  items produced by a single keyboard event.</dd>

  <dt>Keyboard Event</dt>
  <dd>A virtual key event and modifier map received from the platform to be
  processed with the state object for this Client application.</dd>

  <dt>Virtual Key</dt>
  <dd>A code based on the US English layout, with values matching the Windows
  virtual key codes. See keyboardprocessor_vkeys.h for definitions.</dd>
  <dt>Modifier Key</dt>
  <dd>The set of Control, Shift, Alt, Caps Lock keys. On some platforms these
  may have other names (e.g. Alt is called Option on macOS); other
  platform-specific modifiers such as Windows key are excluded from this set.
  Some modifiers are transient, such as Control, and others have long-lasting
  state, such as Caps Lock.</dd>
</dl>

<h1>API</h1>
<h2>Namespace</h2>
<p>All calls, types and enums are prefixed with the namespace prefix
<code>km_kbp_</code></p>

<h2>Idioms</h2>

<h3>Error handling</h3>
<p>Follows a COM HRESULT style model where functions that can fail will always
return a status value and all other results are returned via outparams passed
to the function. Only attribute accessor functions which cannot fail, may
return their results via return results.</p>

<h3>Passing variable length data out</h3>
<p>Almost all calls marshalling variable length aggregate data in or out of an API
object take the form:</p>
<pre>
<code class="language-c">km_kbp_status fn_name(object_ref, buffer_ptr, size_ptr)</code>
</pre>
<p>where the <code>buffer_ptr</code> is nullable and all other arguments are
required (will result in an <a href="#KM_KBP_STATUS_INVALID_ARGUMENT"><code class="token symbol">KM_KBP_STATUS_INVALID_ARGUMENT</code></a> status being
returned if nulled). When <code>buffer</code> is <code>nullptr</code> or
<code>0</code> the function will place the size of the required buffer in the
variable pointed to by <code>size_ptr</code>.</p>

<h3>Resource management</h3>
<p>Calls which result in the allocation of resources, regardless of resulting
ownership, are of the form:</p>
<pre>
<code class="language-c">km_kbp_status fn_name(object_ref, handle_out_ptr)</code>
</pre>
<p>where <code>handle_out_ptr</code> is a valid pointer to a caller allocated
variable to hold the resulting resource handle. This is often a reference to a
created object. Unless stated all arguments are required (will result in an
<a href="#KM_KBP_STATUS_INVALID_ARGUMENT"><code class="token symbol">KM_KBP_STATUS_INVALID_ARGUMENT</code></a> status being returned if nulled). <br/>All
dispose calls are designed to accept <code>nullptr</code> or <code>0</code> as a
valid value and will do nothing in that event.</p>

<h3>Fixed size attribute access</h3>
<p>For accessors to fixed size attributes of an object these will take the
form:</p>
<pre>
<code class="language-c">attr_value fn_name(object_ref)</code>
</pre>
<p><code>object_ref</code> is required to be valid and will result in a nonsense
value being returned if <code>nullptr</code> or <code>0</code>.</p>

<h3 id="versioning-scheme">Versioning scheme</h3>
<p>This follows the libtool interface versioning scheme of
<code>current.age.revision</code>:</p>
<dl>
    <dt><code>current</code></dt>
    <dd>The most recent interface number that the engine implements.</dd>
    <dt><code>age</code></dt>
    <dd>How many interface numbers back from current the library implements.
      E.g.5.2.0 would mean the library provides interface versions 3-5 and
      5.0.0 would mean just interface version 5 and nothing older.</dd>
    <dt><code>revision</code></dt>
    <dd>The implementation version of the current interface. This represents
      improvements to the code that don't chhange the intended behaviour of the
      interface such as bug fixes and optimisations.</dd>
</dl>
<p>For Linux and other OS which support this scheme the dynamic linker will
  automatically choose the most updated version if more than one implmentation
  is available. For Windows or dynamic loaded shared objects on Linux you can
  use the <a href="#km_kbp_get_engine_attrs"><code class="token function">km_kbp_get_engine_attrs</code></a> call and
  <a href="#lib-version-macros">Library version macros</a> to check the loaded
  DLL supplies the correct interface.</p>


<h1>Common functions, types, and macros</h1>
<h2>Basic types</h2>
<p>Fundamental types for representing data passed across the API.</p>
<table>
  <thead>
    <tr><th>Type</th><th>C/C++ type</th><th>Purpose</th></tr>
  </thead>
  <tbody>
    <tr>
      <td><code>km_kbp_cp</code></td>
      <td><code>uint16_t/char16_t</code></td>
      <td>Represents a UTF16 codepoint, most strings are passed as UTF16.</td>
    </tr>
    <tr>
      <td><code>km_kbp_usv</code></td>
      <td><code>uint32_t/char32_t</code></td>
      <td>An integral type capable of holding a single Unicode Scalar Value, a decoded
        UTF codepoint.</td>
    </tr>
    <tr>
      <td><code>km_kbp_virtual_key</code></td>
      <td><code>uint16_t</code></td>
      <td>An integral type capable of holding a platform specific veritual key
        code</td>
    </tr>
    <tr>
      <td><code>km_kbp_status</code></td>
      <td><code>uint32_t</code></td>
      <td>An integral 32 bit wide type capable of holding any valid status code
        as defined by the <code>enum<code>
        <a href="#km_kbp_status_codes">km_kbp_status_codes</a>.</td>
    </tr>
  </tbody>
</table>

<article id="lib-version-macros">
<h1>Library version macros</h1>
<section class="description">
<h2>Description</h2>
<p>These macros evaluate to the version of the library your binary was compiled
against, which may not be the same as the version returned by
<a href="#km_kbp_get_engine_attrs"><code class="token function">km_kbp_get_engine_attrs</code></a>.
See <a href="#versioning-scheme">Versioning scheme</a>.</p>
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
<p>An error code mechanism similar to COM’s <code>HRESULT</code> scheme (unlike COM, any
non-zero value is an error).</p>
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
<dt id="KM_KBP_STATUS_OK"><code class="token symbol">KM_KBP_STATUS_OK</code></dt>
<dd>Success code. Call completed as documented.</dd>
<dt id="KM_KBP_STATUS_NO_MEM"><code class="token symbol">KM_KBP_STATUS_NO_MEM</code></dt>
<dd>
The call failed to allocate memory during it's
execution, causing it to fail.
</dd>
<dt id="KM_KBP_STATUS_IO_ERROR"><code class="token symbol">KM_KBP_STATUS_IO_ERROR</code></dt>
<dd>
The call performed an I/O operatoin which failed, causing the it to fail.
</dd>
<dt id="KM_KBP_STATUS_INVALID_ARGUMENT"><code class="token symbol">KM_KBP_STATUS_INVALID_ARGUMENT</code></dt>
<dd>The call detected one of it's parameters was invalid or unsafe.</dd>
<dt id="KM_KBP_STATUS_KEY_ERROR"><code class="token symbol">KM_KBP_STATUS_KEY_ERROR</code></dt>
<dd>The provided key or index into a collection object was not present.</dd>
<dt id="KM_KBP_STATUS_INSUFFICENT_BUFFER"><code class="token symbol">KM_KBP_STATUS_INSUFFICENT_BUFFER</code></dt>
<dd>
The provided buffer did not contain enough space to fully encode or copy the
result of this call.
</dd>
<dt id="KM_KBP_STATUS_INVALID_UTF"><code class="token symbol">KM_KBP_STATUS_INVALID_UTF</code></dt>
<dd>
A malformed or partial UTF sequence prevented complete decoding of a unicode
string.
</dd>
<dt id="KM_KBP_STATUS_INVALID_KEYBOARD"><code class="token symbol">KM_KBP_STATUS_INVALID_KEYBOARD</code></dt>
<dd>An attempt to decode a keyboard file failed.</dd>
<dt id="KM_KBP_STATUS_OS_ERROR"><code class="token symbol">KM_KBP_STATUS_OS_ERROR</code></dt>
<dd>This allows encapsulating a platform error code: the remaining 31 low bits
are the error code returned by the OS for cases where the failure mode is
platform specific. For HRESULT codes this only permits failure codes to be
passed and not success codes.</dd>
</dl>
</section>
</article>

<article id="km_kbp_context_type">
<h1>km_kbp_context_type</h1>
<section class="description">
<h2>Description</h2>
<p><a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item.type</code></a> values which identify which data value (if any) the
context item carries.</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">enum km_kbp_context_type {
  KM_KBP_CT_END,
  KM_KBP_CT_CHAR,
  KM_KBP_CT_MARKER
};
</code></pre>
</section>
<section class="values">
<h2>Values</h2>
<dl>
<dt id="KM_KBP_CT_END"><code class="token symbol">KM_KBP_CT_END</code></dt>
<dd>
A <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a> of this type marks the end of an array of context items.</dd>
<dt id="KM_KBP_CT_CHAR"><code class="token symbol">KM_KBP_CT_CHAR</code></dt>
<dd>
The context item contains a Unicode Scalar Value which must be accessed through
the  <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a>.character member.</dd>
<dt id="KM_KBP_CT_MARKER"><code class="token symbol">KM_KBP_CT_MARKER</code></dt>
<dd>
The context item contains a positional marker which must be accessed through the
<a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a>.marker member.</dd>
</dl>
</section>
</article>

<article id="km_kbp_context_item">
<h1>km_kbp_context_item</h1>
<section class="description">
<h2>Description</h2>
<p>A tagged union representing an element of context which can be either a Unicode
character or a positional marker.</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">
typedef struct {
  uint8_t   type;
  uint8_t   _reserved[3];
  union {
    km_kbp_usv  character;
    uint32_t    marker;
  };
} km_kbp_context_item;
</code></pre>
</section>
<section class="members">
<h2>Members</h2>
<dl>
<dt id="type"><code class="token symbol">type</code></dt>
<dd>Identifies the union member to access. A value of enum <a href="#km_kbp_context_type"><code class="token symbol">km_kbp_context_type</code></a> values.</dd>
<dt id="_reserved"><code class="token symbol">_reserved</code></dt>
<dd>Space reserved for alignment purposes and possible future use.</dd>
<dt id="character"><code class="token symbol">character</code></dt>
<dd>A Unicode Scalar Value.</dd>
<dt id="marker"><code class="token symbol">marker</code></dt>
<dd>A marker value, only meaningful to an engine.</dd>
</dl>
</section>
</article>

<article id="KM_KBP_CONTEXT_ITEM_END">
<h1>KM_KBP_CONTEXT_ITEM_END</h1>
<section class="description">
<h2>Description</h2>
<p>Convenience macro to declare a terminating entry in a <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a> item
array.</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">
#define KM_KBP_CONTEXT_ITEM_END {KM_KBP_CT_END, {0,}, {0,}}
</code></pre>
</section>
</article>

<article id="km_kbp_context_items_from_utf16">
<h1>km_kbp_context_items_from_utf16</h1>
<section class="description">
<h2>Description</h2>
<p>Convert a UTF16 encoded Unicode string into an array of <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a>
structures. Allocates memory as needed.</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">
KMN_API
km_kbp_status
km_kbp_context_items_from_utf16(km_kbp_cp const *text,
                                km_kbp_context_item **out_ptr);
</code></pre>
</section>
<section class="parameters">
<h2>Parameters</h2>
<dl>
<dt id="text"><code class="token symbol">text</code></dt>
<dd>a pointer to a null terminated array of utf16 encoded data.</dd>
<dt id="out_ptr"><code class="token symbol">out_ptr</code></dt>
<dd>a pointer to the result variable:
    A pointer to the start of the <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a> array containing the
    representation of the input string.
    Terminated with a type of <a href="#KM_KBP_CT_END"><code class="token symbol">KM_KBP_CT_END</code></a>. Must be disposed of with
    km_kbp_context_items_dispose().</dd>
</dl>
</section>
<section class="returns">
<h2>Returns</h2>
<dl>
<dt id="KM_KBP_STATUS_OK"><code class="token constant">KM_KBP_STATUS_OK</code></dt>
<dd>On success.</dd>
<dt id="KM_KBP_STATUS_INVALID_ARGUMENT"><code class="token constant">KM_KBP_STATUS_INVALID_ARGUMENT</code></dt>
<dd>If non-optional parameters are null.</dd>
<dt id="KM_KBP_STATUS_NO_MEM"><code class="token constant">KM_KBP_STATUS_NO_MEM</code></dt>
<dd>In the event not enough memory can be allocated for the
  output buffer.</dd>
<dt id="KM_KBP_STATUS_INVALID_UTF"><code class="token constant">KM_KBP_STATUS_INVALID_UTF</code></dt>
<dd>In the event the UTF16 string cannot be decoded
  because it contains unpaired surrogate codeunits.</dd>
</dl>
</section>
</article>

<article id="km_kbp_context_items_from_utf8">
<h1>km_kbp_context_items_from_utf8</h1>
<section class="description">
<h2>Description</h2>
<p>Convert an UTF8 encoded Unicode string into an array of <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a>
structures. Allocates memory as needed.</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">
KMN_API
km_kbp_status
km_kbp_context_items_from_utf8(char const *text,
                                km_kbp_context_item **out_ptr);
</code></pre>
</section>
<section class="parameters">
<h2>Parameters</h2>
<dl>
<dt id="text"><code class="token symbol">text</code></dt>
<dd>a pointer to a null terminated array of utf8 encoded data.</dd>
<dt id="out_ptr"><code class="token symbol">out_ptr</code></dt>
<dd>a pointer to the result variable:
    A pointer to the  start of the <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a> array containing the
    representation of the input string.
    Terminated with a type of <a href="#KM_KBP_CT_END"><code class="token symbol">KM_KBP_CT_END</code></a>.</dd>
</dl>
</section>
<section class="returns">
<h2>Returns</h2>
<dl>
<dt id="KM_KBP_STATUS_INVALID_ARGUMENT"><code class="token constant">KM_KBP_STATUS_INVALID_ARGUMENT</code></dt>
<dd>If non-optional parameters are null.</dd>
<dt id="KM_KBP_STATUS_NO_MEM"><code class="token constant">KM_KBP_STATUS_NO_MEM</code></dt>
<dd>In the event it cannot allocate enough memory for the
  output buffer.</dd>
<dt id="KM_KBP_STATUS_INVALID_UTF"><code class="token constant">KM_KBP_STATUS_INVALID_UTF</code></dt>
<dd>In the event the UTF8 string cannot be
decoded.</dd>
</dl>
</section>
</article>

<article id="km_kbp_context_items_to_utf16">
<h1>km_kbp_context_items_to_utf16</h1>
<section class="description">
<h2>Description</h2>
<p>Convert a context item array into a UTF-16 encoded string placing it into
the supplied buffer of specified size, and return the number codepoints
actually used in the conversion. If null is passed as the buffer the
number codeunits required is returned. This will strip markers from the
context during the conversion.</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">
KMN_API
km_kbp_status
km_kbp_context_items_to_utf16(km_kbp_context_item const *item,
                              km_kbp_cp *buf,
                              size_t *buf_size);
</code></pre>
</section>
<section class="parameters">
<h2>Parameters</h2>
<dl>
<dt id="context_items"><code class="token symbol">context_items</code></dt>
<dd>A pointer to the start of an array <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a>.
    Must be terminated with a type of <a href="#KM_KBP_CT_END"><code class="token symbol">KM_KBP_CT_END</code></a>.</dd>
<dt id="buf"><code class="token symbol">buf</code></dt>
<dd>A pointer to the buffer to place the UTF-16 string into. May be be
    null to request size calculation.</dd>
<dt id="buf_size"><code class="token symbol">buf_size</code></dt>
<dd>a pointer to the result variable:
    A pointer the size of the supplied buffer in codeunits or filled with the
    size required if @buf is null.</dd>
</dl>
</section>
<section class="returns">
<h2>Returns</h2>
<dl>
<dt id="KM_KBP_STATUS_OK"><code class="token constant">KM_KBP_STATUS_OK</code></dt>
<dd>On success.</dd>
<dt id="KM_KBP_STATUS_INVALID_ARGUMENT"><code class="token constant">KM_KBP_STATUS_INVALID_ARGUMENT</code></dt>
<dd>If non-optional parameters are null.</dd>
<dt id="KM_KBP_STATUS_INSUFFICENT_BUFFER"><code class="token constant">KM_KBP_STATUS_INSUFFICENT_BUFFER</code></dt>
<dd>If the buffer is not large enough.
  @buf_size will contain the space required. The contents of the buffer are
  undefined.</dd>
</dl>
</section>
</article>

<article id="km_kbp_context_items_to_utf8">
<h1>km_kbp_context_items_to_utf8</h1>
<section class="description">
<h2>Description</h2>
<p>Convert a context item array into a UTF-8 encoded string placing it into
the supplied buffer of specified size, and return the number codepoints
actually used in the conversion. If null is passed as the buffer the
number codeunits required is returned. This will strip markers from the
context during the conversion.</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">
KMN_API
km_kbp_status
km_kbp_context_items_to_utf8(km_kbp_context_item const *item,
                              char *buf,
                              size_t *buf_size);
</code></pre>
</section>
<section class="parameters">
<h2>Parameters</h2>
<dl>
<dt id="context_items"><code class="token symbol">context_items</code></dt>
<dd>A pointer to the start of an array <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a>.
    Must be terminated with a type of <a href="#KM_KBP_CT_END"><code class="token symbol">KM_KBP_CT_END</code></a>.</dd>
<dt id="buf"><code class="token symbol">buf</code></dt>
<dd>A pointer to the buffer to place the UTF-8 string into. May be be
    null to request size calculation.</dd>
<dt id="buf_size"><code class="token symbol">buf_size</code></dt>
<dd>a pointer to the result variable:
    A pointer the size of the supplied buffer in codeunits or filled with the
    size required if @buf is null.</dd>
</dl>
</section>
<section class="returns">
<h2>Returns</h2>
<dl>
<dt id="KM_KBP_STATUS_OK"><code class="token constant">KM_KBP_STATUS_OK</code></dt>
<dd>On success.</dd>
<dt id="KM_KBP_STATUS_INVALID_ARGUMENT"><code class="token constant">KM_KBP_STATUS_INVALID_ARGUMENT</code></dt>
<dd>If non-optional parameters are null.</dd>
<dt id="KM_KBP_STATUS_INSUFFICENT_BUFFER"><code class="token constant">KM_KBP_STATUS_INSUFFICENT_BUFFER</code></dt>
<dd>If the buffer is not large enough.
  @buf_size will contain the space required. The contents of the buffer are
  undefined.</dd>
</dl>
</section>
</article>

<article id="km_kbp_context_items_dispose">
<h1>km_kbp_context_items_dispose</h1>
<section class="description">
<h2>Description</h2>
<p>Free the allocated memory belonging to a <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a> array previously
returned by km_kbp_context_items_from_utf16() or km_kbp_context_get().</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">
KMN_API
void
km_kbp_context_items_dispose(km_kbp_context_item *context_items);
</code></pre>
</section>
<section class="parameters">
<h2>Parameters</h2>
<dl>
<dt id="context_items"><code class="token symbol">context_items</code></dt>
<dd>A pointer to the start of the <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a> array
    to be disposed of.</dd>
</dl>
</section>
<section class="returns">
<h2>Returns</h2>
<dl>
</dl>
</section>
</article>

<article id="km_kbp_context_set">
<h1>km_kbp_context_set</h1>
<section class="description">
<h2>Description</h2>
<p>Replace the contents of the current context with a new sequence of
<a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a> entries.</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">
KMN_API
km_kbp_status
km_kbp_context_set(km_kbp_context *context,
                   km_kbp_context_item const *context_items);
</code></pre>
</section>
<section class="parameters">
<h2>Parameters</h2>
<dl>
<dt id="context"><code class="token symbol">context</code></dt>
<dd>A pointer to an opaque context object.</dd>
<dt id="context_items"><code class="token symbol">context_items</code></dt>
<dd>A pointer to the start of the <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a>
    array containing the new context. It must be terminated with an item
    of type <a href="#KM_KBP_CT_END"><code class="token symbol">KM_KBP_CT_END</code></a>.</dd>
</dl>
</section>
<section class="returns">
<h2>Returns</h2>
<dl>
<dt id="KM_KBP_STATUS_OK"><code class="token constant">KM_KBP_STATUS_OK</code></dt>
<dd>On success.</dd>
<dt id="KM_KBP_STATUS_INVALID_ARGUMENT"><code class="token constant">KM_KBP_STATUS_INVALID_ARGUMENT</code></dt>
<dd>If non-optional parameters are null.</dd>
<dt id="KM_KBP_STATUS_NO_MEM"><code class="token constant">KM_KBP_STATUS_NO_MEM</code></dt>
<dd>In the event not enough memory can be allocated to
  grow the context buffer internally.</dd>
</dl>
</section>
</article>

<article id="km_kbp_context_get">
<h1>km_kbp_context_get</h1>
<section class="description">
<h2>Description</h2>
<p>Copies all items in the context into a new array and returns the new array.
This must be disposed of by caller using km_kbp_context_items_dispose().</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">
KMN_API
km_kbp_status
km_kbp_context_get(km_kbp_context const *context_items,
                   km_kbp_context_item **out);
</code></pre>
</section>
<section class="parameters">
<h2>Parameters</h2>
<dl>
<dt id="context_items"><code class="token symbol">context_items</code></dt>
<dd>A pointer to the start of an array <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a>.</dd>
<dt id="out"><code class="token symbol">out</code></dt>
<dd>a pointer to the result variable:
    A pointer to the start of the <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a> array containing a
    copy of the context. Terminated with a type of <a href="#KM_KBP_CT_END"><code class="token symbol">KM_KBP_CT_END</code></a>. Must be
    disposed of with km_kbp_context_items_dispose().</dd>
</dl>
</section>
<section class="returns">
<h2>Returns</h2>
<dl>
<dt id="KM_KBP_STATUS_OK"><code class="token constant">KM_KBP_STATUS_OK</code></dt>
<dd>On success.</dd>
<dt id="KM_KBP_STATUS_INVALID_ARGUMENT"><code class="token constant">KM_KBP_STATUS_INVALID_ARGUMENT</code></dt>
<dd>If non-optional parameters are null.</dd>
<dt id="KM_KBP_STATUS_NO_MEM"><code class="token constant">KM_KBP_STATUS_NO_MEM</code></dt>
<dd>In the event not enough memory can be allocated for the
  output buffer.</dd>
</dl>
</section>
</article>

<article id="km_kbp_context_clear">
<h1>km_kbp_context_clear</h1>
<section class="description">
<h2>Description</h2>
<p>Removes all context_items from the internal array. If <code>context</code> is
null, has no effect.</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">
KMN_API
void
km_kbp_context_clear(km_kbp_context *context);
</code></pre>
</section>
<section class="parameters">
<h2>Parameters</h2>
<dl>
<dt id="context"><code class="token symbol">context</code></dt>
<dd>A pointer to an opaque context object.</dd>
</dl>
</section>
<section class="returns">
<h2>Returns</h2>
<dl>
</dl>
</section>
</article>

<article id="km_kbp_context_length">
<h1>km_kbp_context_length</h1>
<section class="description">
<h2>Description</h2>
<p>Return the number of items in the context.</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">
KMN_API
size_t
km_kbp_context_length(km_kbp_context *);
</code></pre>
</section>
<section class="parameters">
<h2>Parameters</h2>
<dl>
<dt id="context"><code class="token symbol">context</code></dt>
<dd>A pointer to an opaque context object.</dd>
</dl>
</section>
<section class="returns">
<h2>Returns</h2>
<p>The number of items in the context, and will return 0 if passed a null @context
pointer.</p>
</section>
</article>

<article id="km_kbp_context_append">
<h1>km_kbp_context_append</h1>
<section class="description">
<h2>Description</h2>
<p>Add more items to the end (insertion point) of the context. If these exceed the
maximum context length the same number of items will be dropped from the
beginning of the context.</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">
KMN_API
km_kbp_status
km_kbp_context_append(km_kbp_context *context,
                      km_kbp_context_item const *context_items);
</code></pre>
</section>
<section class="parameters">
<h2>Parameters</h2>
<dl>
<dt id="context"><code class="token symbol">context</code></dt>
<dd>A pointer to an opaque context object.</dd>
<dt id="context_items"><code class="token symbol">context_items</code></dt>
<dd>A pointer to the start of the <a href="#KM_KBP_CT_END"><code class="token symbol">KM_KBP_CT_END</code></a> terminated
    array of <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a> to append.</dd>
</dl>
</section>
<section class="returns">
<h2>Returns</h2>
<dl>
<dt id="KM_KBP_STATUS_OK"><code class="token constant">KM_KBP_STATUS_OK</code></dt>
<dd>On success.</dd>
<dt id="KM_KBP_STATUS_INVALID_ARGUMENT"><code class="token constant">KM_KBP_STATUS_INVALID_ARGUMENT</code></dt>
<dd>If non-optional parameters are null.</dd>
<dt id="KM_KBP_STATUS_NO_MEM"><code class="token constant">KM_KBP_STATUS_NO_MEM</code></dt>
<dd>In the event not enough memory can be allocated to
  grow the context buffer internally.</dd>
</dl>
</section>
</article>

<article id="km_kbp_context_shrink">
<h1>km_kbp_context_shrink</h1>
<section class="description">
<h2>Description</h2>
<p>Remove a specified number of items from the end of the context, optionally
add up to the same number of the supplied items to the front of the context.</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">
KMN_API
km_kbp_status
km_kbp_context_shrink(km_kbp_context *context,
                      size_t num,
                      km_kbp_context_item const *prefix);
</code></pre>
</section>
<section class="parameters">
<h2>Parameters</h2>
<dl>
<dt id="context"><code class="token symbol">context</code></dt>
<dd>A pointer to an opaque context object.</dd>
<dt id="num"><code class="token symbol">num</code></dt>
<dd>The number of items to remove from the end of context.</dd>
<dt id="context_items"><code class="token symbol">context_items</code></dt>
<dd>Pointer to the start of the <a href="#KM_KBP_CT_END"><code class="token symbol">KM_KBP_CT_END</code></a> terminated
    array of <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a> to add to the front. Up to @num items will
    be prepended. This may be null if not required.</dd>
</dl>
</section>
<section class="returns">
<h2>Returns</h2>
<dl>
<dt id="KM_KBP_STATUS_OK"><code class="token constant">KM_KBP_STATUS_OK</code></dt>
<dd>On success.</dd>
<dt id="KM_KBP_STATUS_INVALID_ARGUMENT"><code class="token constant">KM_KBP_STATUS_INVALID_ARGUMENT</code></dt>
<dd>If non-optional parameters are null.</dd>
<dt id="KM_KBP_STATUS_NO_MEM"><code class="token constant">KM_KBP_STATUS_NO_MEM</code></dt>
<dd>in the event it cannot allocated enough memory to grow
  the context internally.</dd>
</dl>
</section>
</article>

<article id="km_kbp_option_scope">
<h1>km_kbp_option_scope</h1>
<section class="description">
<h2>Description</h2>
<p>Identifies which scope and option should be stored to. Scopes are
essentially separate key-value stores.</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">enum km_kbp_option_scope {
    KM_KBP_OPT_UNKNOWN      = 0,
    KM_KBP_OPT_KEYBOARD     = 1,
    KM_KBP_OPT_ENVIRONMENT  = 2,
    KM_KBP_OPT_MAX_SCOPES
  };
</code></pre>
</section>
<section class="values">
<h2>Values</h2>
<dl>
<dt id="KM_KBP_OPT_UNKNOWN"><code class="token symbol">KM_KBP_OPT_UNKNOWN</code></dt>
<dd>
It is unknown which store and option has come from. This should never be seen
by client code.
</dd>
<dt id="KM_KBP_OPT_KEYBOARD"><code class="token symbol">KM_KBP_OPT_KEYBOARD</code></dt>
<dd>
The option is store in the keyboard store, a per-keyboard store modifiable by
the keyboard itself.
</dd>
<dt id="KM_KBP_OPT_ENVIRONMENT"><code class="token symbol">KM_KBP_OPT_ENVIRONMENT</code></dt>
<dd>
The option is store in the globale environment store, set and managed by the
KeyMan application.
</dd>
<dt id="KM_KBP_OPT_MAX_SCOPES"><code class="token symbol">KM_KBP_OPT_MAX_SCOPES</code></dt>
<dd>
The maximum number of different scopes supported by the API.
</dd>
</dl>
</section>
</article>

<article id="km_kbp_option_item">
<h1>km_kbp_option_item</h1>
<section class="description">
<h2>Description</h2>
<p>A scoped key-value tuple.  This is used to permit mass update of a keyboard
state object with multiple options differently scoped options in a single call.
</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">struct km_kbp_option_item {
  km_kbp_cp const *   key;
  km_kbp_cp const *   value;
  uint8_t             scope;  // Scope which an option belongs to.
};
</code></pre>
</section>
<section class="members">
<h2>Members</h2>
<dl>
<dt id="key"><code class="token symbol">key</code></dt>
<dd>The name of an option. Pointer to a null-terminated UTF16 encoded string.</dd>
<dt id="value"><code class="token symbol">value</code></dt>
<dd>The value of an option. Pointer to an array of <a href="#km_kbp_cp"><code class="token symbol">km_kbp_cp</code></a> value containing
a null-terminated UTF16 encoded string.</dd>
<dt id="scope"><code class="token symbol">scope</code></dt>
<dd>The scope of the option. A <a href="#km_kbp_option_scope"><code class="token symbol">km_kbp_option_scope</code></a> value which must be less
than <a href="#KM_KBP_OPT_MAX_SCOPES"><code class="token symbol">KM_KBP_OPT_MAX_SCOPES</code></a>.</dd>
</dl>
</section>
</article>

<article id="KM_KBP_OPTIONS_END">
<h1>KM_KBP_OPTIONS_END</h1>
<section class="description">
<h2>Description</h2>
<p>Terminating entry for a c array of <a href="#km_kbp_option_item"><code class="token symbol">km_kbp_option_item</code></a> values</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">
#define KM_KBP_OPTIONS_END { 0, 0, 0 }
</code></pre>
</section>
</article>

<article id="km_kbp_options_list_size">
<h1>km_kbp_options_list_size</h1>
<section class="description">
<h2>Description</h2>
<p>Calculate the length of a terminated <a href="#km_kbp_option_item"><code class="token symbol">km_kbp_option_item</code></a> array (options
list).</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">
KMN_API
size_t
km_kbp_options_list_size(km_kbp_option_item const *opts);
</code></pre>
</section>
<section class="parameters">
<h2>Parameters</h2>
<dl>
<dt id="opts"><code class="token symbol">opts</code></dt>
<dd>A pointer to a <a href="#KM_KBP_OPTIONS_END"><code class="token function">KM_KBP_OPTIONS_END</code></a> terminated array of
    <a href="#km_kbp_option_item"><code class="token symbol">km_kbp_option_item</code></a> values.</dd>
</dl>
</section>
<section class="returns">
<h2>Returns</h2>
<p>The number of items in the list or 0 if @opts is null.</p>
</section>
</article>

<article id="km_kbp_state_option_lookup">
<h1>km_kbp_state_option_lookup</h1>
<section class="description">
<h2>Description</h2>
<p>Lookup an option based on its key and scope from a keyboard state. The scope
may never be KM_KBP_OPT_UNKNOWN.</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">
KMN_API
km_kbp_status
km_kbp_state_option_lookup(km_kbp_state const *state,
                      uint8_t scope,
                      km_kbp_cp const *key,
                      km_kbp_cp const **value);
</code></pre>
</section>
<section class="parameters">
<h2>Parameters</h2>
<dl>
<dt id="state"><code class="token symbol">state</code></dt>
<dd>An opaque pointer to a state object.</dd>
<dt id="scope"><code class="token symbol">scope</code></dt>
<dd>Which key-value store to interrogate.</dd>
<dt id="key"><code class="token symbol">key</code></dt>
<dd>A UTF-16 string that matches the key in the target <a href="#km_kbp_option_item"><code class="token symbol">km_kbp_option_item</code></a>.</dd>
<dt id="value"><code class="token symbol">value</code></dt>
<dd>A pointer to the result variable:
  A pointer to a UTF-16 string value owned by the state or keyboard object at
  the time of the call. This pointer is only valid *until* the next call to any
  function on this API and should be used immediately.</dd>
</dl>
</section>
<section class="returns">
<h2>Returns</h2>
<dl>
<dt id="KM_KBP_STATUS_OK"><code class="token constant">KM_KBP_STATUS_OK</code></dt>
<dd>On success.</dd>
<dt id="KM_KBP_STATUS_INVALID_ARGUMENT"><code class="token constant">KM_KBP_STATUS_INVALID_ARGUMENT</code></dt>
<dd>If non-optional parameters are null, or if the scope is invalid.</dd>
<dt id="KM_KBP_STATUS_KEY_ERROR"><code class="token constant">KM_KBP_STATUS_KEY_ERROR</code></dt>
<dd>The key cannot be found.</dd>
</dl>
</section>
</article>

<article id="km_kbp_state_options_update">
<h1>km_kbp_state_options_update</h1>
<section class="description">
<h2>Description</h2>
<p>Adds or updates one or more options from a list of <a href="#km_kbp_option_items"><code class="token symbol">km_kbp_option_items</code></a>.
All UTF16 strings passed int the <a href="#km_kbp_option_item"><code class="token symbol">km_kbp_option_item</code></a> are copied. The scope
of any <a href="#km_kbp_option_item"><code class="token symbol">km_kbp_option_item</code>s</a> may never be <a href="#KM_KBP_OPT_UNKNOWN"><code class="token symbol">KM_KBP_OPT_UNKNOWN</code></a>.</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">
KMN_API
km_kbp_status
km_kbp_state_options_update(km_kbp_state *state,
                      km_kbp_option_item const *new_opts);
</code></pre>
</section>
<section class="parameters">
<h2>Parameters</h2>
<dl>
<dt id="state"><code class="token symbol">state</code></dt>
<dd>An opaque pointer to a state object.</dd>
<dt id="new_opts"><code class="token symbol">new_opts</code></dt>
<dd>An array of <a href="#km_kbp_option_item"><code class="token symbol">km_kbp_option_item</code></a> objects to update or add. Must be
    terminated with <a href="#KM_KBP_OPTIONS_END"><code class="token symbol">KM_KBP_OPTIONS_END</code></a>.</dd>
</dl>
</section>
<section class="returns">
<h2>Returns</h2>
<dl>
<dt id="KM_KBP_STATUS_OK"><code class="token constant">KM_KBP_STATUS_OK</code></dt>
<dd>On success.</dd>
<dt id="KM_KBP_STATUS_INVALID_ARGUMENT"><code class="token constant">KM_KBP_STATUS_INVALID_ARGUMENT</code></dt>
<dd>If non-optional parameters are null or any option has <a href="#KM_KBP_OPT_UNKNOWN"><code class="token symbol">KM_KBP_OPT_UNKNOWN</code></a> scope.</dd>
<dt id="KM_KBP_STATUS_NO_MEM"><code class="token constant">KM_KBP_STATUS_NO_MEM</code></dt>
<dd>In the event an internal memory allocation fails.</dd>
<dt id="KM_KBP_STATUS_KEY_ERROR"><code class="token constant">KM_KBP_STATUS_KEY_ERROR</code></dt>
<dd>The key cannot be found.</dd>
</dl>
</section>
</article>

<article id="km_kbp_state_options_to_json">
<h1>km_kbp_state_options_to_json</h1>
<section class="description">
<h2>Description</h2>
<p>Export the state objects options to a JSON formatted document and
place it in the supplied buffer, reporting how much space was used. If null is
passed as the buffer the number of bytes required is returned in @space. If
there is insufficent space to hold the document the contents of the buffer is
undefined. The returned buffer uses UTF-8 encoding.</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">
KMN_API
km_kbp_status
km_kbp_state_options_to_json(km_kbp_state const *state,
                       char *buf,
                       size_t *space);
</code></pre>
</section>
<section class="parameters">
<h2>Parameters</h2>
<dl>
<dt id="opts"><code class="token symbol">opts</code></dt>
<dd>An opaque pointer to a state object.</dd>
<dt id="buf"><code class="token symbol">buf</code></dt>
<dd>A pointer to the buffer to place the C string containing the JSON
document into, can be null.</dd>
<dt id="space"><code class="token symbol">space</code></dt>
<dd>A pointer to a size_t variable. This variable must contain the
number of bytes available in the buffer pointed to by @buf, unless @buf is
null. On return it will hold how many bytes were used.</dd>
</dl>
</section>
<section class="returns">
<h2>Returns</h2>
<dl>
<dt id="KM_KBP_STATUS_OK"><code class="token constant">KM_KBP_STATUS_OK</code></dt>
<dd>On success.</dd>
<dt id="KM_KBP_STATUS_INVALID_ARGUMENT"><code class="token constant">KM_KBP_STATUS_INVALID_ARGUMENT</code></dt>
<dd>If non-optional parameters are null.</dd>
<dt id="KM_KBP_STATUS_NO_MEM"><code class="token constant">KM_KBP_STATUS_NO_MEM</code></dt>
<dd>In the event an internal memory allocation fails.</dd>
</dl>
</section>
</article>

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
<dd>Path to the unpacked folder containing the keyboard and associated resources.</dd>
<dt id="default_options"><code class="token symbol">default_options</code></dt>
<dd>Pointer to an array of <a href="#km_kbp_option_item"><code class="token symbol">km_kbp_option_item</code></a>, terminated with <a href="#KM_KBP_OPTIONS_END"><code class="token function">KM_KBP_OPTIONS_END</code></a>.</dd>
</dl>
</section>
</article>

<article id="km_kbp_keyboard_load">
<h1>km_kbp_keyboard_load</h1>
<section class="description">
<h2>Description</h2>
<p>Parse and load keyboard from the supplied path and a pointer to the loaded keyboard
into the out paramter.</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">
KMN_API
km_kbp_status
km_kbp_keyboard_load(km_kbp_path_name kb_path,
                     km_kbp_keyboard **keyboard);
</code></pre>
</section>
<section class="parameters">
<h2>Parameters</h2>
<dl>
<dt id="kb_path"><code class="token symbol">kb_path</code></dt>
<dd>On Windows, a UTF-16 string; on other platforms, a C string:
    contains a valid path to the keyboard file.</dd>
<dt id="keyboard"><code class="token symbol">keyboard</code></dt>
<dd>A pointer to result variable:
    A pointer to the opaque keyboard object returned by the Processor. This
    memory must be freed with a call to km_kbp_keyboard_dispose().</dd>
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
<dd>    In the event the keyboard file is unparseable for any reason.</dd>
<dt id="KM_KBP_STATUS_INVALID_ARGUMENT"><code class="token constant">KM_KBP_STATUS_INVALID_ARGUMENT</code></dt>
<dd>    In the event the file doesn't exist or is inaccesible or @keyboard is null.</dd>
<dt id="KM_KBP_STATUS_OS_ERROR"><code class="token constant">KM_KBP_STATUS_OS_ERROR</code></dt>
<dd>Bit 31 (high bit) set, bits 0-30 are an OS-specific
    error code.</dd>
</dl>
</section>
</article>

<article id="km_kbp_keyboard_dispose">
<h1>km_kbp_keyboard_dispose</h1>
<section class="description">
<h2>Description</h2>
<p>Free the allocated memory belonging to an opaque keyboard object previously
returned by km_kbp_keyboard_load().</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">
KMN_API
void
km_kbp_keyboard_dispose(km_kbp_keyboard *keyboard);
</code></pre>
</section>
<section class="parameters">
<h2>Parameters</h2>
<dl>
<dt id="keyboard"><code class="token symbol">keyboard</code></dt>
<dd>A pointer to the opaque keyboard object to be
    disposed of.</dd>
</dl>
</section>
<section class="returns">
<h2>Returns</h2>
<dl>
</dl>
</section>
</article>

<article id="km_kbp_keyboard_get_attrs">
<h1>km_kbp_keyboard_get_attrs</h1>
<section class="description">
<h2>Description</h2>
<p>Returns the const internal attributes of the keyboard. This structure is valid
for the lifetime of the opaque keyboard object. Do not modify the returned data.</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">
KMN_API
km_kbp_status
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
<dd>A pointer to the result:
    A pointer to a <a href="#km_kbp_keyboard_attrs"><code class="token symbol">km_kbp_keyboard_attrs</code></a> structure.</dd>
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

<article id="km_kbp_action_item">
<h1>km_kbp_action_item</h1>
<section class="description">
<h2>Description</h2>
<p>These provide the results of processing a key event to the Platform layer and
should be processed by the Platform layer to issue commands to the OS text
services framework to transform the text store in the Client Application, among
other actions.</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">typedef struct {
  uint8_t   type;
  uint8_t   _reserved[sizeof(void*)-sizeof(uint8_t)];
  union {
    uintptr_t           marker;          // MARKER type
    km_kbp_option_item const * option;   // OPT types
    km_kbp_usv          character;       // CHAR type
  };
} km_kbp_action_item;
</code></pre>
</section>
<section class="members">
<h2>Members</h2>
<dl>
<dt id="type"><code class="token symbol">type</code></dt>
<dd>Must be any value from <a href="#km_kbp_action_type"><code class="token symbol">km_kbp_action_type</code></a>, except <a href="#KM_KBP_IT_MAX_TYPE_ID"><code class="token symbol">KM_KBP_IT_MAX_TYPE_ID</code></a>.</dd>
<dt id="_reserved"><code class="token symbol">_reserved</code></dt>
<dd>Space reserved for alignment purposes and possible future use.
            Note this will be different depending on native machine register
            width.</dd>
<dt id="character"><code class="token symbol">character</code></dt>
<dd>A Unicode Scalar Value.</dd>
<dt id="marker"><code class="token symbol">marker</code></dt>
<dd>A marker value, only meaningful to an engine.</dd>
<dt id="opt"><code class="token symbol">opt</code></dt>
<dd>A pointer to <a href="#km_kbp_option_item"><code class="token symbol">km_kbp_option_item</code></a> tuple. It will be valid until the next
      call to km_kbp_process_event().</dd>
</dl>
</section>
</article>

<article id="km_kbp_action_type">
<h1>km_kbp_action_type</h1>
<section class="description">
<h2>Description</h2>
<p>Enumerate the various action types which indicate which type the value in the
<a href="#km_kbp_action_item"><code class="token symbol">km_kbp_action_item</code></a> struct is.</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">
enum km_kbp_action_type {
  KM_KBP_IT_END         = 0,
  KM_KBP_IT_CHAR        = 1,
  KM_KBP_IT_MARKER      = 2,
  KM_KBP_IT_ALERT       = 3,
  KM_KBP_IT_BACK        = 4,
  KM_KBP_IT_PERSIST_OPT = 5,
  KM_KBP_IT_EMIT_KEYSTROKE = 6,
  KM_KBP_IT_INVALIDATE_CONTEXT = 7,
  KM_KBP_IT_MAX_TYPE_ID
};
</code></pre>
</section>
<section class="values">
<h2>Values</h2>
<dl>
<dt id="KM_KBP_IT_END"><code class="token symbol">KM_KBP_IT_END</code></dt>
<dd>Marks end of action items list.</dd>
<dt id="KM_KBP_IT_CHAR"><code class="token symbol">KM_KBP_IT_CHAR</code></dt>
<dd>A Unicode character has been generated.</dd>
<dt id="KM_KBP_IT_MARKER"><code class="token symbol">KM_KBP_IT_MARKER</code></dt>
<dd>Correlates to kmn's "deadkey" markers.</dd>
<dt id="KM_KBP_IT_ALERT"><code class="token symbol">KM_KBP_IT_ALERT</code></dt>
<dd>The keyboard has triggered a alert/beep/bell.</dd>
<dt id="KM_KBP_IT_BACK"><code class="token symbol">KM_KBP_IT_BACK</code></dt>
<dd>Delete the codepoint preceding the insertion point.</dd>
<dt id="KM_KBP_IT_PERSIST_OPT"><code class="token symbol">KM_KBP_IT_PERSIST_OPT</code></dt>
<dd>The indicated option needs to be stored.</dd>
<dt id="KM_KBP_IT_EMIT_KEYSTROKE"><code class="token symbol">KM_KBP_IT_EMIT_KEYSTROKE</code></dt>
<dd>Emit the current keystroke to the application.</dd>
<dt id="KM_KBP_IT_INVALIDATE_CONTEXT"><code class="token symbol">KM_KBP_IT_INVALIDATE_CONTEXT</code></dt>
<dd>The processor requests that the context buffer be
cleared; for applications where context is cached, this clears the context; for
applications where context is read from the focused text store, the context is
just re-read and markers flushed.</dd>
</dl>
</section>
</article>

<article id="km_kbp_state_create">
<h1>km_kbp_state_create</h1>
<section class="description">
<h2>Description</h2>
<p>Create a keyboard processor state object, maintaining state for the keyboard in
the environment passed.</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">
KMN_API
km_kbp_status
km_kbp_state_create(km_kbp_keyboard *keyboard,
                    km_kbp_option_item const *env,
                    km_kbp_state **out);
</code></pre>
</section>
<section class="parameters">
<h2>Parameters</h2>
<dl>
<dt id="keyboard"><code class="token symbol">keyboard</code></dt>
<dd>A pointer to the opaque keyboard object this object will hold state for.</dd>
<dt id="env"><code class="token symbol">env</code></dt>
<dd>The array of <a href="#km_kbp_option_item"><code class="token symbol">km_kbp_option_item</code></a> key/value pairs used to initialise the
environment, terminated by <a href="#KM_KBP_OPTIONS_END"><code class="token symbol">KM_KBP_OPTIONS_END</code></a>.</dd>
<dt id="out"><code class="token symbol">out</code></dt>
<dd>A pointer to result variable: A pointer to the opaque state object
returned by the Processor, initalised to maintain state for @keyboard.<br/>
This must be disposed of by a call to km_kbp_state_dispose().</dd>
</dl>
</section>
<section class="returns">
<h2>Returns</h2>
<dl>
<dt id="KM_KBP_STATUS_OK"><code class="token constant">KM_KBP_STATUS_OK</code></dt>
<dd>On success.</dd>
<dt id="KM_KBP_STATUS_NO_MEM"><code class="token constant">KM_KBP_STATUS_NO_MEM</code></dt>
<dd>  In the event memory is unavailable to allocate a state object.</dd>
<dt id="KM_KBP_STATUS_INVALID_ARGUMENT"><code class="token constant">KM_KBP_STATUS_INVALID_ARGUMENT</code></dt>
<dd>  In the event the @keyboard or @out pointer are null.<dd>
</dl>
</section>
</article>

<article id="km_kbp_state_clone">
<h1>km_kbp_state_clone</h1>
<section class="description">
<h2>Description</h2>
<p>Clone an existing opaque state object.</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">
KMN_API
km_kbp_status
km_kbp_state_clone(km_kbp_state const *state,
                   km_kbp_state **out);
</code></pre>
</section>
<section class="parameters">
<h2>Parameters</h2>
<dl>
<dt id="state"><code class="token symbol">state</code></dt>
<dd>A pointer to the opaque statea object to be cloned.</dd>
<dt id="out"><code class="token symbol">out</code></dt>
<dd>A pointer to result variable: A pointer to the opaque state object
returned by the Processor, cloned from the existing object @state. This
must be disposed of by a call to km_kbp_state_dispose().</dd>
</dl>
</section>
<section class="returns">
<h2>Returns</h2>
<dl>
<dt id="KM_KBP_STATUS_OK"><code class="token constant">KM_KBP_STATUS_OK</code></dt>
<dd>On success.</dd>
<dt id="KM_KBP_STATUS_NO_MEM"><code class="token constant">KM_KBP_STATUS_NO_MEM</code></dt>
<dd>In the event memory is unavailable to allocate a state object.</dd>
<dt id="KM_KBP_STATUS_INVALID_ARGUMENT"><code class="token constant">KM_KBP_STATUS_INVALID_ARGUMENT</code></dt>
<dd>In the event the @state or @out pointer are null.</dd>
</dl>
</section>
</article>

<article id="km_kbp_state_dispose">
<h1>km_kbp_state_dispose</h1>
<section class="description">
<h2>Description</h2>
<p>Free the allocated resources belonging to a <a href="#km_kbp_state"><code class="token symbol">km_kbp_state</code></a> object previously
returned by km_kbp_state_create() or km_kbp_state_clone(). After this all
pointers previously returned by any km_kbp_state family of calls will become
invalid.</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">
KMN_API
void
km_kbp_state_dispose(km_kbp_state *state);
</code></pre>
</section>
<section class="parameters">
<h2>Parameters</h2>
<dl>
<dt id="state"><code class="token symbol">state</code></dt>
<dd>A pointer to the opaque state object to be disposed.</dd>
</dl>
</section>
<section class="returns">
<h2>Returns</h2>
<dl>
</dl>
</section>
</article>

<article id="km_kbp_state_context">
<h1>km_kbp_state_context</h1>
<section class="description">
<h2>Description</h2>
<p>Get access to the state object's context.</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">
KMN_API
km_kbp_context *
km_kbp_state_context(km_kbp_state *state);
</code></pre>
</section>
<section class="parameters">
<h2>Parameters</h2>
<dl>
<dt id="state"><code class="token symbol">state</code></dt>
<dd>A pointer to the opaque state object to be queried.</dd>
</dl>
</section>
<section class="returns">
<h2>Returns</h2>
<p>A pointer to an opaque context object. This pointer is valid for the lifetime
of the state object. If null is passed in, then null is returned.</p>
</section>
</article>

<article id="km_kbp_state_action_items">
<h1>km_kbp_state_action_items</h1>
<section class="description">
<h2>Description</h2>
<p>Get the list of action items generated by the last call to
km_kbp_process_event().</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">
KMN_API
km_kbp_action_item const *
km_kbp_state_action_items(km_kbp_state const *state,
                          size_t *num_items);
</code></pre>
</section>
<section class="parameters">
<h2>Parameters</h2>
<dl>
<dt id="state"><code class="token symbol">state</code></dt>
<dd>A pointer to the opaque <a href="#km_kbp_state"><code class="token symbol">km_kbp_state</code></a> object to be queried.</dd>
<dt id="num_items"><code class="token symbol">num_items</code></dt>
<dd>A pointer to a result variable: The number of items in the action item list
including the <a href="#KM_KBP_IT_END"><code class="token symbol">KM_KBP_IT_END</code></a> terminator. May be null if that
information is not required.</dd>
</dl>
</section>
<section class="returns">
<h2>Returns</h2>
<p>A pointer to a <a href="#km_kbp_action_item"><code class="token symbol">km_kbp_action_item</code></a> array, of <code>*num_items</code> in
length. This data becomes invalid when the state object is destroyed, or after
a call to km_kbp_process_event(). Do not modify the contents of this array.
The returned array is terminated with a <a href="#KM_KBP_IT_END"><code class="token symbol">KM_KBP_IT_END</code></a> entry.</p>
</section>
</article>

<article id="km_kpb_state_to_json">
<h1>km_kpb_state_to_json</h1>
<section class="description">
<h2>Description</h2>
<p>Export the internal state of a <a href="#km_kbp_state"><code class="token symbol">km_kbp_state</code></a> object to a JSON format document
and place it in the supplied buffer, reporting how much space was used. If null
is passed as the buffer the number of bytes required is returned. If there is
insufficent space to hold the document, the contents of the buffer is undefined.
The encoding of the returned data is UTF-8.

<string>WARNING</strong>: The structure and format of the JSON document while
independently versioned is not part of this API and is intended solely for use
in diagnostics or by development and debugging tools which are aware of
processor implementation details.</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">
KMN_API
km_kbp_status
km_kbp_state_to_json(km_kbp_state const *state,
                     char *buf,
                     size_t *space);

</code></pre>
</section>
<section class="parameters">
<h2>Parameters</h2>
<dl>
<dt id="state"><code class="token symbol">state</code></dt>
<dd>An pointer to an opaque state object.</dd>
<dt id="buf"><code class="token symbol">buf</code></dt>
<dd>A pointer to the buffer to place the C string containing the JSON
document into. May be null.</dd>
<dt id="space"><code class="token symbol">space</code></dt>
<dd>A pointer to a size_t variable. This variable must contain the
number of bytes available in the buffer pointed to by @buf, unless @buf is
null. On return it will hold how many bytes were used.</dd>
</dl>
</section>
<section class="returns">
<h2>Returns</h2>
<dl>
<dt id="KM_KBP_STATUS_OK"><code class="token constant">KM_KBP_STATUS_OK</code></dt>
<dd>On success.</dd>
<dt id="KM_KBP_STATUS_NO_MEM"><code class="token constant">KM_KBP_STATUS_NO_MEM</code></dt>
<dd>In the event an internal memory allocation fails.</dd>
</dl>
</section>
<article>

<article id="km_kbp_attr">
<h1>km_kbp_attr</h1>
<section class="description">
<h2>Description</h2>
<p>A structure describing information about the keyboard processor,
implementing this API.</p>
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
<dd>A bit field of <a href="#km_kbp_tech_value"><code class="token symbol">km_kbp_tech_value</code></a> values, specifiying which Keyboard technologies the engine supports.</dd>
<dt id="vendor"><code class="token symbol">vendor</code></dt>
<dd>A UTF-8 encoded string identifying the implementer of the processor.</dd>
</dl>
</section>
</article>

<article id="km_kbp_tech_value">
<h1>km_kbp_tech_value</h1>
<section class="description">
<h2>Description</h2>
<p>Values for a bit field indicating which keyboarding technologies a keyboard
processor supports.</p>
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
<dt id="KM_KBP_TECH_UNSPECIFIED"><code class="token symbol">KM_KBP_TECH_UNSPECIFIED</code></dt>
<dd>The keyboard processor implementation does not disclose which technologies
it implements.</dd>
<dt id="KM_KBP_TECH_MOCK"><code class="token symbol">KM_KBP_TECH_MOCK</code></dt>
<dd>The keyboard processor implements a simple en-US keyboard for the purposes of
testing the API.</dd>
<dt id="KM_KBP_TECH_KMX"><code class="token symbol">KM_KBP_TECH_UNSPECIFIED</code></dt>
<dd>The keyboard processor implements a Keyman KMX compatible engine.</dd>
<dt id="KM_KBP_TECH_UNSPECIFIED"><code class="token symbol">KM_KBP_TECH_UNSPECIFIED</code></dt>
<dd>The keyboard processor implements a LDML capable processing engine.</dd>
</dl>
</section>
</article>

<article id="km_kbp_get_engine_attrs">
<h1>km_kbp_get_engine_attrs</h1>
<section class="description">
<h2>Description</h2>
<p>Get access processors attributes describing version and technology
implemented.</p>
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
<dd>An opaque pointer to an <a href="#km_kbp_state"><code class="token symbol">km_kbp_state</code></a>.</dd>
</dl>
</section>
<section class="returns">
<h2>Returns</h2>
<p>A pointer to a <a href="#km_kbp_attr"><code class="token symbol">km_kbp_attr</code></a> structure. Do not modify the contents of this
structure.</p>
</section>
</article>

<article id="km_kbp_process_event">
<h1>km_kbp_process_event</h1>
<section class="description">
<h2>Description</h2>
<p>Run the keyboard on an opaque state object with the provided virtual key and modifer
key state. Updates the state object as appropriate and fills out its action list.
<br/>
The action list will be cleared at the start of this call; options and context in
the state may also be modified.</p>
</section>
<section class="specification">
<h2>Specification</h2>
<pre><code class="language-c">
KMN_API
km_kbp_status
km_kbp_process_event(km_kbp_state *state,
                     km_kbp_virtual_key vk,
                     uint16_t modifier_state);
</code></pre>
</section>
<section class="parameters">
<h2>Parameters</h2>
<dl>
<dt id="state"><code class="token symbol">state</code></dt>
<dd>A pointer to the opaque state object.</dd>
<dt id="vk"><code class="token symbol">vk</code></dt>
<dd>A virtual key to be processed.</dd>
<dt id="modifier_state"><code class="token symbol">modifier_state</code></dt>
<dd>The combinations of modifier keys set at the time key @vk was pressed, bitmask
from the <a href="#km_kbp_modifier_state"><code class="token symbol">km_kbp_modifier_state</code></a> enum.</dd>
</dl>
</section>
<section class="returns">
<h2>Returns</h2>
<dl>
<dt id="KM_KBP_STATUS_OK"><code class="token constant">KM_KBP_STATUS_OK</code></dt>
<dd>On success.</dd>
<dt id="KM_KBP_STATUS_NO_MEM"><code class="token constant">KM_KBP_STATUS_NO_MEM</code></dt>
<dd>In the event memory is unavailable to allocate internal buffers.</dd>
<dt id="KM_KBP_STATUS_INVALID_ARGUMENT"><code class="token constant">KM_KBP_STATUS_INVALID_ARGUMENT</code></dt>
<dd>In the event the @state pointer is null or an invalid virtual key or modifier
state is passed.</dd>
</dl>
</section>
</article>
