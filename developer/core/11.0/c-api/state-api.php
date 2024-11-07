<?php
require_once('includes/template.php');

head([
    'title' => "State"
]);
?>

<h1 class="title">State</h1>
<p>
  A State object maintains all per keyboard related state including context and
  dynamic options ("option stores" in kmn format).
</p>


<article id="km_kbp_action_item">
  <h1>km_kbp_action_item</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      These provide the results of processing a key event to the Platform layer
      and should be processed by the Platform layer to issue commands to the OS
      text services framework to transform the text store in the Client
      Application, among other actions.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">typedef struct {
  uint8_t   type;
  uint8_t   _reserved[sizeof(void*)-sizeof(uint8_t)];
  union {
    uintptr_t           marker;
    km_kbp_option_item const * option;
    km_kbp_usv          character;
  };
} km_kbp_action_item;
</code></pre>
  </section>
    <section class="members">
    <h2>Members</h2>
    <dl>
      <dt id="type"><code class="token symbol">type</code></dt>
      <dd>
        Must be any value from
        <a href="#km_kbp_action_type"><code class="token symbol">km_kbp_action_type</code></a>,
        except
        <a href="#KM_KBP_IT_MAX_TYPE_ID"><code class="token constant">KM_KBP_IT_MAX_TYPE_ID</code></a>.
      </dd>

      <dt id="_reserved"><code class="token symbol">_reserved</code></dt>
      <dd>
        Space reserved for alignment purposes and possible future use. Note
        this will be different depending on native machine register width.
      </dd>

      <dt id="character"><code class="token symbol">character</code></dt>
      <dd>A Unicode Scalar Value.</dd>

      <dt id="marker"><code class="token symbol">marker</code></dt>
      <dd>A marker value, only meaningful to an engine.</dd>

      <dt id="opt"><code class="token symbol">opt</code></dt>
      <dd>
        A pointer to
        <a href="#km_kbp_option_item"><code class="token symbol">km_kbp_option_item</code></a>
        tuple.  It will be valid until the next call to <a href="#km_kbp_process_event"><code class="token function">km_kbp_process_event()</code></a>
      </dd>
    </dl>
  </section>
</article>


<article id="km_kbp_action_type">
  <h1>km_kbp_action_type</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      Enumerate the various action types which indicate which type the value in
      the
      <a href="#km_kbp_action_item"><code class="token symbol">km_kbp_action_item</code></a>
      struct is.
    </p>
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
      <dt id="KM_KBP_IT_END"><code class="token constant">KM_KBP_IT_END</code></dt>
      <dd>Marks end of action items list.</dd>

      <dt id="KM_KBP_IT_CHAR"><code class="token constant">KM_KBP_IT_CHAR</code></dt>
      <dd>A Unicode character has been generated.</dd>

      <dt id="KM_KBP_IT_MARKER"><code class="token constant">KM_KBP_IT_MARKER</code></dt>
      <dd>Correlates to kmn's "deadkey" markers.</dd>

      <dt id="KM_KBP_IT_ALERT"><code class="token constant">KM_KBP_IT_ALERT</code></dt>
      <dd>The keyboard has triggered a alert/beep/bell.</dd>

      <dt id="KM_KBP_IT_BACK"><code class="token constant">KM_KBP_IT_BACK</code></dt>
      <dd>Delete the codepoint preceding the insertion point.</dd>

      <dt id="KM_KBP_IT_PERSIST_OPT"><code class="token constant">KM_KBP_IT_PERSIST_OPT</code></dt>
      <dd>The indicated option needs to be stored.</dd>

      <dt id="KM_KBP_IT_EMIT_KEYSTROKE"><code class="token constant">KM_KBP_IT_EMIT_KEYSTROKE</code></dt>
      <dd>Emit the current keystroke to the application.</dd>

      <dt id="KM_KBP_IT_INVALIDATE_CONTEXT"><code class="token constant">KM_KBP_IT_INVALIDATE_CONTEXT</code></dt>
      <dd>
        The processor requests that the context buffer be cleared; for
        applications where context is cached, this clears the context; for
        applications where context is read from the focused text store, the
        context is just re-read and markers flushed.
      </dd>
    </dl>
  </section>
</article>


<article id="km_kbp_state_create">
  <h1>km_kbp_state_create</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      Create a keyboard processor state object, maintaining state for the
      keyboard in the environment passed.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">km_kbp_status
km_kbp_state_create(km_kbp_keyboard *keyboard,
                    km_kbp_option_item const *env,
                    km_kbp_state **out);
</code></pre>
  </section>
  <section class="parameters">
    <h2>Parameters</h2>
    <dl>
      <dt id="keyboard"><code class="token symbol">keyboard</code></dt>
      <dd>
        A pointer to the opaque keyboard object this object will hold state
        for.
      </dd>

      <dt id="env"><code class="token symbol">env</code></dt>
      <dd>
        The array of
        <a href="#km_kbp_option_item"><code class="token symbol">km_kbp_option_item</code></a>
        key/value pairs used to initialise the environment, terminated by
        <a href="#KM_KBP_OPTIONS_END"><code class="token constant">KM_KBP_OPTIONS_END</code></a>.
      </dd>

      <dt id="out"><code class="token symbol">out</code></dt>
      <dd>
        A pointer to result variable: A pointer to the opaque state object
        returned by the Processor, initalised to maintain state for
        <a href="#keyboard"><code class="token symbol">keyboard</code></a>.
        <br/>
        This must be disposed of by a call to <a href="#km_kbp_state_dispose"><code class="token function">km_kbp_state_dispose()</code></a>
      </dd>
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
      <dd>
        In the event the
        <a href="#keyboard"><code class="token symbol">keyboard</code></a>
        or
        <a href="#out"><code class="token symbol">out</code></a>
        pointer are null.
      <dd>
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
<pre><code class="language-c">km_kbp_status
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
      <dd>
        A pointer to result variable: A pointer to the opaque state object
        returned by the Processor, cloned from the existing object
        <a href="#state"><code class="token symbol">state</code></a>.
        This must be disposed of by a call to
        <a href="#km_kbp_state_dispose"><code class="token function">km_kbp_state_dispose()</code></a>.
      </dd>
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
      <dd>
        In the event the
        <a href="#state"><code class="token symbol">state</code></a>
        or
        <a href="#out"><code class="token symbol">out</code></a>
        pointer are null.
      </dd>
    </dl>
  </section>
</article>


<article id="km_kbp_state_dispose">
  <h1>km_kbp_state_dispose</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      Free the allocated resources belonging to a
      <a href="#km_kbp_state"><code class="token symbol">km_kbp_state</code></a>
      object previously returned by
      <a href="#km_kbp_state_create"><code class="token function">km_kbp_state_create()</code></a>
      or
      <a href="#km_kbp_state_clone"><code class="token function">km_kbp_state_clone()</code></a>.
      After this all pointers previously returned by any
      <code class="token function">km_kbp_state_</code> family of calls will
      become invalid.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">void
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
</article>


<article id="km_kbp_state_context">
  <h1>km_kbp_state_context</h1>
  <section class="description">
    <h2>Description</h2>
    <p>Get access to the state object's context.</p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">km_kbp_context *
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
    <p>
      A pointer to an opaque context object. This pointer is valid for the
      lifetime of the state object. If null is passed in, then null is
      returned.
    </p>
  </section>
</article>


<article id="km_kbp_state_action_items">
  <h1>km_kbp_state_action_items</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      Get the list of action items generated by the last call to
      <a href="#km_kbp_process_event"><code class="token function">km_kbp_process_event()</code></a>.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
    <pre><code class="language-c">km_kbp_action_item const *
    km_kbp_state_action_items(km_kbp_state const *state,
                              size_t *num_items);
    </code></pre>
  </section>
  <section class="parameters">
    <h2>Parameters</h2>
    <dl>
      <dt id="state"><code class="token symbol">state</code></dt>
      <dd>
        A pointer to the opaque
        <a href="#km_kbp_state"><code class="token symbol">km_kbp_state</code></a>
        object to be queried.
      </dd>

      <dt id="num_items"><code class="token symbol">num_items</code></dt>
      <dd>
        A pointer to a result variable: The number of items in the action item
        list including the
        <a href="#KM_KBP_IT_END"><code class="token constant">KM_KBP_IT_END</code></a>
        terminator. May be null if that information is not required.
      </dd>
    </dl>
  </section>
  <section class="returns">
    <h2>Returns</h2>
    <p>
      A pointer to a
      <a href="#km_kbp_action_item"><code class="token symbol">km_kbp_action_item</code></a>
      array, of
      <code class="token operator">*</code><code class="token symbol">num_items</code>
      in length. This data becomes invalid when the state object is destroyed,
      or after a call to
      <a href="#km_kbp_process_event"><code class="token function">km_kbp_process_event()</code></a>.
      Do not modify the contents of this array. The returned array is
      terminated with a
      <a href="#KM_KBP_IT_END"><code class="token constant">KM_KBP_IT_END</code></a>
      entry.
    </p>
  </section>
</article>


<article id="km_kbp_state_to_json">
  <h1>km_kbp_state_to_json</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      Export the internal state of a
      <a href="#km_kbp_state"><code class="token symbol">km_kbp_state</code></a>
      object to a JSON format document and place it in the supplied buffer,
      reporting how much space was used. If null is passed as the buffer the
      number of bytes required is returned. If there is insufficent space to
      hold the document, the contents of the buffer is undefined. The encoding
      of the returned data is UTF-8.
      <br/><br/>
      <div class="note"><p>
        <strong>WARNING</strong>:
        The structure and format of the JSON document while independently
        versioned is not part of this API and is intended solely for use in
        diagnostics or by development and debugging tools which are aware of
        processor implementation details.
      </p></div>
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">km_kbp_status
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
      <dd>
        A pointer to the buffer to place the C string containing the JSON
        document into. May be null.
      </dd>

      <dt id="space"><code class="token symbol">space</code></dt>
      <dd>
        A pointer to a size_t variable. This variable must contain the number
        of bytes available in the buffer pointed to by
        <a href="#buf"><code class="token symbol">buf</code></a>,
        unless
        <a href="#buf"><code class="token symbol">buf</code></a>
        is null.  On return it will hold how many bytes were used.
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
    </dl>
  </section>
<article>


<article id="km_kbp_process_event">
  <h1>km_kbp_process_event</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      Run the keyboard on an opaque state object with the provided virtual key
      and modifer key state. Updates the state object as appropriate and fills
      out its action list.<br/>
      The action list will be cleared at the start of this call; options and
      context in the state may also be modified.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">km_kbp_status
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
      <dd>
        The combinations of modifier keys set at the time key
        <a href="#vk"><code class="token symbol">vk</code></a>
        was pressed, bitmask from the
        <a href="#km_kbp_modifier_state"><code class="token symbol">km_kbp_modifier_state</code></a>
        enum.
      </dd>
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
      <dd>
        In the event the
        <a href="#state"><code class="token symbol">state</code></a>
        pointer is null or an invalid virtual key or modifier state is passed.
      </dd>
    </dl>
  </section>
</article>
