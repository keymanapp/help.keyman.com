<?php
require_once('includes/template.php');

head([
    'title' => "Options"
]);
?>

<h1 class="title">Options</h1>
<p>
  A state’s default options are set from the keyboard at creation time and the
  environment. The Platform layer is then is expected to apply any persisted
  options it is maintaining.  Options are passed into and out of API functions
  as simple C arrays of <code class="token symbol">km_kbp_option_item</code>
  terminated with a
  <a href="#KM_KBP_OPTIONS_END"><code class="token constant">KM_KBP_OPTIONS_END</code></a>
  sentinel value. A state's options are exposed and manipulatable via the state
  object.
</p>
<p>
  During processing when the Platform layer finds a PERSIST action type it
  should store the updated option in the appropriate place, based on its scope.
  For RESET the processor will apply the pristine value from the original
  scope, the Platform layer should update that only if it manages a previously
  persisted value.
</p>


<article id="km_kbp_option_scope">
  <h1>km_kbp_option_scope</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      Identifies which scope and option should be stored to. Scopes are
      essentially separate key-value stores.
    </p>
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
      <dt id="KM_KBP_OPT_UNKNOWN"><code class="token constant">KM_KBP_OPT_UNKNOWN</code></dt>
      <dd>
        It is unknown which store and option has come from. This should never
        be seen by client code.
      </dd>

      <dt id="KM_KBP_OPT_KEYBOARD"><code class="token constant">KM_KBP_OPT_KEYBOARD</code></dt>
      <dd>
        The option is store in the keyboard store, a per-keyboard store
        modifiable by the keyboard itself.
      </dd>

      <dt id="KM_KBP_OPT_ENVIRONMENT"><code class="token constant">KM_KBP_OPT_ENVIRONMENT</code></dt>
      <dd>
        The option is store in the global environment store, set and managed
        by the Keyman application.
      </dd>

      <dt id="KM_KBP_OPT_MAX_SCOPES"><code class="token constant">KM_KBP_OPT_MAX_SCOPES</code></dt>
      <dd>The maximum number of different scopes supported by the API.</dd>
    </dl>
  </section>
</article>


<article id="km_kbp_option_item">
  <h1>km_kbp_option_item</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      A scoped key-value tuple.  This is used to permit mass update of a
      keyboard state object with multiple options differently scoped options
      in a single call.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">struct km_kbp_option_item {
  km_kbp_cp const *   key;
  km_kbp_cp const *   value;
  uint8_t             scope;
};
</code></pre>
  </section>
  <section class="members">
    <h2>Members</h2>
    <dl>
      <dt id="key"><code class="token symbol">key</code></dt>
      <dd>
        The name of an option. Pointer to a null-terminated UTF16 encoded
        string.
      </dd>

      <dt id="value"><code class="token symbol">value</code></dt>
      <dd>
        The value of an option. Pointer to an array of
        <a href="#km_kbp_cp"><code class="token symbol">km_kbp_cp</code></a>
        value containing a null-terminated UTF16 encoded string.
      </dd>

      <dt id="scope"><code class="token symbol">scope</code></dt>
      <dd>
        The scope of the option. A
        <a href="#km_kbp_option_scope"><code class="token symbol">km_kbp_option_scope</code></a>
        value which must be less than
        <a href="#KM_KBP_OPT_MAX_SCOPES"><code class="token constant">KM_KBP_OPT_MAX_SCOPES</code></a>.
      </dd>
    </dl>
  </section>
</article>


<article id="KM_KBP_OPTIONS_END">
  <h1>KM_KBP_OPTIONS_END</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      Terminating entry for a c array of
      <a href="#km_kbp_option_item"><code class="token symbol">km_kbp_option_item</code></a>
       values
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">#define KM_KBP_OPTIONS_END { 0, 0, 0 }</code></pre>
  </section>
</article>


<article id="km_kbp_options_list_size">
  <h1>km_kbp_options_list_size</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      Calculate the length of a terminated
      <a href="#km_kbp_option_item"><code class="token symbol">km_kbp_option_item</code></a>
      array (options list).
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">size_t
km_kbp_options_list_size(km_kbp_option_item const *opts);
</code></pre>
  </section>
  <section class="parameters">
    <h2>Parameters</h2>
    <dl>
      <dt id="opts"><code class="token symbol">opts</code></dt>
      <dd>
        A pointer to a
        <a href="#KM_KBP_OPTIONS_END"><code class="token function">KM_KBP_OPTIONS_END</code></a>
        terminated array of
        <a href="#km_kbp_option_item"><code class="token symbol">km_kbp_option_item</code></a>
        values.
      </dd>
    </dl>
  </section>
  <section class="returns">
    <h2>Returns</h2>
    <p>
      The number of items in the list or 0 if
      <a href="#opts"><code class="token symbol">opts</code></a> is null.
    </p>
  </section>
</article>


<article id="km_kbp_state_option_lookup">
  <h1>km_kbp_state_option_lookup</h1>
  <section class="description">
    <h2>Description</h2>
    <p>
      Lookup an option based on its key and scope from a keyboard state. The
      scope may never be
      <a href="#KM_KBP_OPT_UNKNOWN"><code class="token constant">KM_KBP_OPT_UNKNOWN</code></a>.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">km_kbp_status
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
      <dd>
        A UTF-16 string that matches the key in the target
        <a href="#km_kbp_option_item"><code class="token symbol">km_kbp_option_item</code></a>.
      </dd>

      <dt id="value"><code class="token symbol">value</code></dt>
      <dd>
        A pointer to the result variable:
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
    <p>
      Adds or updates one or more options from a list of
      <a href="#km_kbp_option_items"><code class="token symbol">km_kbp_option_items</code></a>.
      All UTF16 strings passed int the
      <a href="#km_kbp_option_item"><code class="token symbol">km_kbp_option_item</code></a>
      are copied. The scope of any
      <a href="#km_kbp_option_item"><code class="token symbol">km_kbp_option_item</code>s</a>
      may never be
      <a href="#KM_KBP_OPT_UNKNOWN"><code class="token constant">KM_KBP_OPT_UNKNOWN</code></a>.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">km_kbp_status
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
      <dd>
        An array of
        <a href="#km_kbp_option_item"><code class="token symbol">km_kbp_option_item</code></a>
        objects to update or add. Must be terminated with
        <a href="#KM_KBP_OPTIONS_END"><code class="token constant">KM_KBP_OPTIONS_END</code></a>.
      </dd>
    </dl>
  </section>
  <section class="returns">
    <h2>Returns</h2>
    <dl>
      <dt id="KM_KBP_STATUS_OK"><code class="token constant">KM_KBP_STATUS_OK</code></dt>
      <dd>On success.</dd>

      <dt id="KM_KBP_STATUS_INVALID_ARGUMENT"><code class="token constant">KM_KBP_STATUS_INVALID_ARGUMENT</code></dt>
      <dd>
        If non-optional parameters are null or any option has
        <a href="#KM_KBP_OPT_UNKNOWN"><code class="token constant">KM_KBP_OPT_UNKNOWN</code></a>
        scope.
      </dd>

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
    <p>
      Export the state objects options to a JSON formatted document and place
      it in the supplied buffer, reporting how much space was used. If null is
      passed as the buffer the number of bytes required is returned in
      <a href="#space"><code class="token symbol">space</code></a>.  If there
      is insufficent space to hold the document the contents of the buffer is
      undefined.  The returned buffer uses UTF-8 encoding.
    </p>
  </section>
  <section class="specification">
    <h2>Specification</h2>
<pre><code class="language-c">km_kbp_status
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
      <dd>
        A pointer to the buffer to place the C string containing the JSON
        document into, can be null.</dd>

      <dt id="space"><code class="token symbol">space</code></dt>
      <dd>
        A pointer to a size_t variable. This variable must contain the number
        of bytes available in the buffer pointed to by
        <a href="#buf"><code class="token symbol">buf</code></a>, unless
        <a href="#buf"><code class="token symbol">buf</code></a> is null.
        On return it will hold how many bytes were used.
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
    <dd>In the event an internal memory allocation fails.</dd>
  </dl>
  </section>
</article>
