<?php
require_once('includes/template.php');

head([
    'title' => "Context"
]);
?>
<h1 class="title">Context</h1>

<p>
  The context is the text prior to the insertion point (caret, cursor). The
  context is constructed by the Platform layer, typically by interrogating the
  Client Application.  The context will be updated by the engine for keystroke
  events.  If the Platform layer code caches the context, the context should be
  reset when a context state change is detected. Context state changes can occur
  when the user uses the mouse to move the insertion point, uses cursor keys,
  switches applications or input fields, or presses hotkeys such as Ctrl+N to
  start a new document. The full set of context state change triggers is up to
  the Platform layer.
</p>
<p>
  Context can also contain positional Markers (also known as 'deadkeys' in kmn
  keyboards), which are transitory state flags that are erased whenever a
  context state change is detected. Markers are always controlled by the Engine.
</p>
<p>
  Contexts are always owned by their state.  They may be set to a list of
  context_items or interrogated for their current list of context items.
</p>


<article id="km_kbp_context_type">
  <h1>km_kbp_context_type</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item.type</code></a>
      values which identify which data value (if any) the context item carries.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">enum km_kbp_context_type {
  KM_KBP_CT_END,
  KM_KBP_CT_CHAR,
  KM_KBP_CT_MARKER
};</code></pre>
  </section>
  <section class="values">
    <h2>Values</h2>
    <dl>
      <dt id="KM_KBP_CT_END"><code class="token constant">KM_KBP_CT_END</code></dt>
      <dd>
        A <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a>
        of this type marks the end of an array of context items.
      </dd>

      <dt id="KM_KBP_CT_CHAR"><code class="token constant">KM_KBP_CT_CHAR</code></dt>
      <dd>
        The context item contains a Unicode Scalar Value which must be accessed
        through the
        <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item.character</code></a>
        union member.
      </dd>

      <dt id="KM_KBP_CT_MARKER"><code class="token constant">KM_KBP_CT_MARKER</code></dt>
      <dd>
        The context item contains a positional marker which must be accessed
        through the <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item.marker</code></a>
        union member.
      </dd>
    </dl>
  </section>
</article>


<article id="km_kbp_context_item">
  <h1>km_kbp_context_item</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      A tagged union representing an element of context which can be either a
      Unicode character or a positional marker.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">typedef struct {
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
      <dd>
        Identifies the union member to access. A value of enum
        <a href="#km_kbp_context_type"><code class="token symbol">km_kbp_context_type</code></a>
        values.
      </dd>

      <dt id="_reserved"><code class="token symbol">_reserved</code></dt>
      <dd>
        Space reserved for alignment purposes and possible future use.
      </dd>

      <dt id="character"><code class="token symbol">character</code></dt>
      <dd>
        A Unicode Scalar Value.
      </dd>

      <dt id="marker"><code class="token symbol">marker</code></dt>
      <dd>
        A marker value, only meaningful to an engine.
      </dd>
    </dl>
  </section>
</article>

<article id="KM_KBP_CONTEXT_ITEM_END">
  <h1>KM_KBP_CONTEXT_ITEM_END</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      Convenience macro to declare a terminating entry in a
      <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a>
      item array.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
    <pre><code class="language-c">#define KM_KBP_CONTEXT_ITEM_END {KM_KBP_CT_END, {0,}, {0,}}</code></pre>
  </section>
</article>


<article id="km_kbp_context_items_from_utf16">
  <h1>km_kbp_context_items_from_utf16</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      Convert a UTF16 encoded Unicode string into an array of
      <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a>
      structures. Allocates memory as needed.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">km_kbp_status
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
      <dd>
        A pointer to the result variable:
        A pointer to the start of the
        <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a>
        array containing the representation of the input string.  Terminated
        with a type of
        <a href="#KM_KBP_CT_END"><code class="token constant">KM_KBP_CT_END</code></a>.
        Must be disposed of with <a href="#km_kbp_context_items_dispose"><code class="token function">km_kbp_context_items_dispose()</code></a>
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

      <dt id="KM_KBP_STATUS_NO_MEM"><code class="token constant">KM_KBP_STATUS_NO_MEM</code></dt>
      <dd>
        In the event not enough memory can be allocated for the output buffer.
      </dd>

      <dt id="KM_KBP_STATUS_INVALID_UTF"><code class="token constant">KM_KBP_STATUS_INVALID_UTF</code></dt>
      <dd>
        In the event the UTF16 string cannot be decoded because it contains
        unpaired surrogate codeunits.
      </dd>
    </dl>
  </section>
</article>


<article id="km_kbp_context_items_from_utf8">
  <h1>km_kbp_context_items_from_utf8</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      Convert an UTF8 encoded Unicode string into an array of
      <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a>
      structures. Allocates memory as needed.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">km_kbp_status
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
      <dd>
        A pointer to the result variable:
        A pointer to the  start of the
        <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a>
        array containing the representation of the input string. Terminated
        with a type of
        <a href="#KM_KBP_CT_END"><code class="token constant">KM_KBP_CT_END</code></a>.
      </dd>
    </dl>
  </section>
  <section class="returns">
    <h2>Returns</h2>
    <dl>
      <dt id="KM_KBP_STATUS_INVALID_ARGUMENT"><code class="token constant">KM_KBP_STATUS_INVALID_ARGUMENT</code></dt>
      <dd>If non-optional parameters are null.</dd>

      <dt id="KM_KBP_STATUS_NO_MEM"><code class="token constant">KM_KBP_STATUS_NO_MEM</code></dt>
      <dd>In the event it cannot allocate enough memory for the output buffer.</dd>

      <dt id="KM_KBP_STATUS_INVALID_UTF"><code class="token constant">KM_KBP_STATUS_INVALID_UTF</code></dt>
      <dd>In the event the UTF8 string cannot be decoded.</dd>
    </dl>
  </section>
</article>


<article id="km_kbp_context_items_to_utf16">
  <h1>km_kbp_context_items_to_utf16</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      Convert a context item array into a UTF-16 encoded string placing it into
      the supplied buffer of specified size, and return the number codepoints
      actually used in the conversion. If null is passed as the buffer the
      number codeunits required is returned. This will strip markers from the
      context during the conversion.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">km_kbp_status
km_kbp_context_items_to_utf16(km_kbp_context_item const *item,
                              km_kbp_cp *buf,
                              size_t *buf_size);
</code></pre>
  </section>
  <section class="parameters">
    <h2>Parameters</h2>
    <dl>
      <dt id="context_items"><code class="token symbol">context_items</code></dt>
      <dd>
        A pointer to the start of an array
        <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a>.
        Must be terminated with a type of
        <a href="#KM_KBP_CT_END"><code class="token constant">KM_KBP_CT_END</code></a>.
      </dd>

      <dt id="buf"><code class="token symbol">buf</code></dt>
      <dd>
        A pointer to the buffer to place the UTF-16 string into. May be be null
        to request size calculation.
      </dd>

      <dt id="buf_size"><code class="token symbol">buf_size</code></dt>
      <dd>
        A pointer to the result variable:
        A pointer the size of the supplied buffer in codeunits or filled with
        the size required if
        <a href="#buf"><code class="token symbol">buf</code></a> is null.
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

      <dt id="KM_KBP_STATUS_INSUFFICENT_BUFFER"><code class="token constant">KM_KBP_STATUS_INSUFFICENT_BUFFER</code></dt>
      <dd>
        If the buffer is not large enough
        <a href="#buf_size"><code class="token symbol">buf_size</code></a> will
        contain the space required. The contents of the buffer are undefined.
      </dd>
    </dl>
  </section>
</article>


<article id="km_kbp_context_items_to_utf8">
  <h1>km_kbp_context_items_to_utf8</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      Convert a context item array into a UTF-8 encoded string placing it into
      the supplied buffer of specified size, and return the number codepoints
      actually used in the conversion. If null is passed as the buffer the
      number codeunits required is returned. This will strip markers from the
      context during the conversion.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">km_kbp_status
km_kbp_context_items_to_utf8(km_kbp_context_item const *item,
                              char *buf,
                              size_t *buf_size);
</code></pre>
  </section>
  <section class="parameters">
    <h2>Parameters</h2>
    <dl>
      <dt id="context_items"><code class="token symbol">context_items</code></dt>
      <dd>
        A pointer to the start of an array
        <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a>.
        Must be terminated with a type of
        <a href="#KM_KBP_CT_END"><code class="token constant">KM_KBP_CT_END</code></a>.
      </dd>

      <dt id="buf"><code class="token symbol">buf</code></dt>
      <dd>
        A pointer to the buffer to place the UTF-8 string into. May be be null
        to request size calculation.
      </dd>

      <dt id="buf_size"><code class="token symbol">buf_size</code></dt>
      <dd>
        A pointer to the result variable:
        A pointer the size of the supplied buffer in codeunits or filled with the
        size required if <a href="#buf"><code class="token symbol">buf</code></a>
        is null.
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

      <dt id="KM_KBP_STATUS_INSUFFICENT_BUFFER"><code class="token constant">KM_KBP_STATUS_INSUFFICENT_BUFFER</code></dt>
      <dd>
        If the buffer is not large enough
        <a href="#buf_size"><code class="token symbol">buf_size</code></a> will
        contain the space required. The contents of the buffer are undefined.
      </dd>
    </dl>
  </section>
</article>


<article id="km_kbp_context_items_dispose">
  <h1>km_kbp_context_items_dispose</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      Free the allocated memory belonging to a
      <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a>
      array previously returned by
      <a href="#km_kbp_context_items_from_utf16"><code class="token function">km_kbp_context_items_from_utf16()</code></a>
      or
      <a href="#km_kbp_context_get"><code class="token function">km_kbp_context_get()</code></a>.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">void
km_kbp_context_items_dispose(km_kbp_context_item *context_items);
</code></pre>
  </section>
  <section class="parameters">
    <h2>Parameters</h2>
    <dl>
      <dt id="context_items"><code class="token symbol">context_items</code></dt>
      <dd>
        A pointer to the start of the
        <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a>
        array to be disposed of.
      </dd>
    </dl>
  </section>
</article>


<article id="km_kbp_context_set">
  <h1>km_kbp_context_set</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      Replace the contents of the current context with a new sequence of
      <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a>
      entries.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">km_kbp_status
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
      <dd>
        A pointer to the start of the
        <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a>
        array containing the new context. It must be terminated with an item of
        type
        <a href="#KM_KBP_CT_END"><code class="token constant">KM_KBP_CT_END</code></a>.
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

      <dt id="KM_KBP_STATUS_NO_MEM"><code class="token constant">KM_KBP_STATUS_NO_MEM</code></dt>
      <dd>
        In the event not enough memory can be allocated to grow the context
        buffer internally.
      </dd>
    </dl>
  </section>
</article>


<article id="km_kbp_context_get">
  <h1>km_kbp_context_get</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      Copies all items in the context into a new array and returns the new
      array.  This must be disposed of by caller using
      <a href="#km_kbp_context_item"><code class="token function">km_kbp_context_items_dispose()</code></a>.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">km_kbp_status
km_kbp_context_get(km_kbp_context const *context_items,
                   km_kbp_context_item **out);
</code></pre>
  </section>
  <section class="parameters">
    <h2>Parameters</h2>
    <dl>
      <dt id="context_items"><code class="token symbol">context_items</code></dt>
      <dd>
        A pointer to the start of an array
        <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a>.
      </dd>

      <dt id="out"><code class="token symbol">out</code></dt>
      <dd>
        A pointer to the result variable:
        A pointer to the start of the
        <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a>
        array containing a copy of the context. Terminated with a type of
        <a href="#KM_KBP_CT_END"><code class="token constant">KM_KBP_CT_END</code></a>.
        Must be disposed of with
        <a href="#km_kbp_context_item"><code class="token function">km_kbp_context_items_dispose()</code></a>.
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

      <dt id="KM_KBP_STATUS_NO_MEM"><code class="token constant">KM_KBP_STATUS_NO_MEM</code></dt>
      <dd>
        In the event not enough memory can be allocated for the output buffer.
      </dd>
    </dl>
  </section>
</article>


<article id="km_kbp_context_clear">
  <h1>km_kbp_context_clear</h1>
    <section class="description">
    <h2>Description</h2>
    <p>
      Removes all context_items from the internal array. If
      <code class="token symbol">context</code> is null, has no effect.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">void
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
</article>


<article id="km_kbp_context_length">
  <h1>km_kbp_context_length</h1>
  <section class="description">
    <h2>Description</h2>
    <p>Return the number of items in the context.</p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">size_t
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
    <p>
      The number of items in the context, and will return 0 if passed a null
      <a href="#context"><code class="token symbol">context</code></a> pointer.
    </p>
  </section>
</article>


<article id="km_kbp_context_append">
  <h1>km_kbp_context_append</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      Add more items to the end (insertion point) of the context. If these
      exceed the maximum context length the same number of items will be
      dropped from the beginning of the context.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">km_kbp_status
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
      <dd>
        A pointer to the start of the
        <a href="#KM_KBP_CT_END"><code class="token constant">KM_KBP_CT_END</code></a>
        terminated array of
        <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a>
        to append.
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

      <dt id="KM_KBP_STATUS_NO_MEM"><code class="token constant">KM_KBP_STATUS_NO_MEM</code></dt>
      <dd>
        In the event not enough memory can be allocated to grow the context
        buffer internally.
      </dd>
    </dl>
  </section>
</article>

<article id="km_kbp_context_shrink">
  <h1>km_kbp_context_shrink</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      Remove a specified number of items from the end of the context,
      optionally add up to the same number of the supplied items to the front
      of the context.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">km_kbp_status
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
      <dd>
        Pointer to the start of the
        <a href="#KM_KBP_CT_END"><code class="token constant">KM_KBP_CT_END</code></a>
        terminated array of
        <a href="#km_kbp_context_item"><code class="token symbol">km_kbp_context_item</code></a>
        to add to the front. Up to
        <a href="#num"><code class="token symbol">num</code></a> items will be
        prepended.  This may be null if not required.
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

      <dt id="KM_KBP_STATUS_NO_MEM"><code class="token constant">KM_KBP_STATUS_NO_MEM</code></dt>
      <dd>
        In the event it cannot allocate enough memory to grow the context
        internally.
      </dd>
    </dl>
  </section>
</article>
