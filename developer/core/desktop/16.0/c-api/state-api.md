---
title: State - Keyman Core API
---

A State object maintains all per keyboard related state including context and
dynamic options ("option stores" in kmn format).

# km\_kbp\_action\_item struct {#km_kbp_action_item}

## Description

These provide the results of processing a key event to the Platform layer and
should be processed by the Platform layer to issue commands to the OS text
services framework to transform the text store in the Client Application, among
other actions.

## Specification
```c
    typedef struct {
      uint8_t   type;
      uint8_t   _reserved[sizeof(void*)-sizeof(uint8_t)];
      union {
        uintptr_t             marker;
        km_kbp_option_item    const * option;
        km_kbp_usv            character;
        uint8_t               capsLock;
        km_kbp_backspace_item backspace;
      };
    } km_kbp_action_item;
```    

## Members

`type`
:Must be any value from [`km_kbp_action_type`](#km_kbp_action_type), except
[`KM_KBP_IT_MAX_TYPE_ID`](#values).

`_reserved`
:Space reserved for alignment purposes and possible future use. Note this will
be different depending on native machine register width.

`marker`
:A marker value, only meaningful to an engine.

`option`

`character`
:A Unicode Scalar Value.

`capsLock`
:CAPSLOCK type, 1 to turn on, 0 to turn off.

`backspace`
:Backspace type, Unknown, Character, Marker

A pointer to [`km_kbp_option_item`](option-api#km_kbp_option_item) tuple. It
will be valid until the next call to
[`km_kbp_process_event()`](#km_kbp_process_event)

# km\_kbp\_action\_type enum {#km_kbp_action_type}

## Description

Enumerate the various action types which indicate which type the value in the
[`km_kbp_action_item`](#km_kbp_action_item) struct is.

## Specification
```c
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
```    

## Values {#km_kbp_it_type_values}

`KM_KBP_IT_END`
:Marks end of action items list.

`KM_KBP_IT_CHAR`
:A Unicode character has been generated.

`KM_KBP_IT_MARKER`
:Correlates to kmn's "deadkey" markers.

`KM_KBP_IT_ALERT`
:The keyboard has triggered a alert/beep/bell.

`KM_KBP_IT_BACK`
:Delete the codepoint preceding the insertion point.

`KM_KBP_IT_PERSIST_OPT`
:The indicated option needs to be stored.

`KM_KBP_IT_EMIT_KEYSTROKE`
:Emit the current keystroke to the application.

`KM_KBP_IT_INVALIDATE_CONTEXT`
:The processor requests that the context buffer be cleared; for applications
where context is cached, this clears the context; for applications where context
is read from the focused text store, the context is just re-read and markers
flushed.

# km\_kbp\_state\_create() {#km_kbp_state_create}

## Description

Create a keyboard processor state object, maintaining state for the keyboard in
the environment passed.

## Specification
```c
    km_kbp_status
    km_kbp_state_create(km_kbp_keyboard *keyboard,
                        km_kbp_option_item const *env,
                        km_kbp_state **out);
```    

## Parameters

`keyboard`
:A pointer to the opaque keyboard object this object will hold state for.

`env`
:The array of [`km_kbp_option_item`](option-api#km_kbp_option_item) key/value
pairs used to initialise the environment, terminated by
[`KM_KBP_OPTIONS_END`](option-api#km_kbp_opt_type_values).

`out`
:A pointer to result variable: A pointer to the opaque state object returned by
the Processor, initalised to maintain state for `keyboard`.  
This must be disposed of by a call to [`km_kbp_state_dispose()`](#km_kbp_state_dispose)

## Returns

`KM_KBP_STATUS_OK`
:On success.

`KM_KBP_STATUS_NO_MEM`
:In the event memory is unavailable to allocate a state object.

`KM_KBP_STATUS_INVALID_ARGUMENT`
:In the event the `keyboard` or `out` pointer are null.

# km\_kbp\_state\_clone() {#km_kbp_state_clone}

## Description

Clone an existing opaque state object.

## Specification
```c
    km_kbp_status
    km_kbp_state_clone(km_kbp_state const *state,
                       km_kbp_state **out);
```    

## Parameters

`state`
:A pointer to the opaque state object to be cloned.

`out`
:A pointer to result variable: A pointer to the opaque state object returned by
the Processor, cloned from the existing object `state`. This must be disposed of
by a call to [`km_kbp_state_dispose()`](#km_kbp_state_dispose).

## Returns

`KM_KBP_STATUS_OK`
:On success.

`KM_KBP_STATUS_NO_MEM`
:In the event memory is unavailable to allocate a state object.

`KM_KBP_STATUS_INVALID_ARGUMENT`
:In the event the `state` or `out` pointer are null.

# km\_kbp\_state\_dispose() {#km_kbp_state_dispose}

## Description

Free the allocated resources belonging to a `km_kbp_state` object previously
returned by [`km_kbp_state_create()`](#km_kbp_state_create) or
[`km_kbp_state_clone()`](#km_kbp_state_clone). After this all pointers
previously returned by any `km_kbp_state_` family of calls will become invalid.

## Specification
```c
    void
    km_kbp_state_dispose(km_kbp_state *state);
```   

## Parameters

`state`
:A pointer to the opaque state object to be disposed.

# km\_kbp\_state\_context() {#km_kbp_state_context}

## Description

Get access to the state object's context.

## Specification
```c
    km_kbp_context *
    km_kbp_state_context(km_kbp_state *state);
```    

## Parameters

`state`
:A pointer to the opaque state object to be queried.

## Returns

A pointer to an opaque context object. This pointer is valid for the lifetime of
the state object. If null is passed in, then null is returned.

# km\_kbp\_state\_action\_items() {#km_kbp_state_action_items}

## Description

Get the list of action items generated by the last call to
[`km_kbp_process_event()`](#km_kbp_process_event).

## Specification
```c
    km_kbp_action_item const *
    km_kbp_state_action_items(km_kbp_state const *state,
                              size_t *num_items);
```        

## Parameters

`state`
:A pointer to the opaque `km_kbp_state` object to be queried.

`num_items`
:A pointer to a result variable: The number of items in the action item list
including the [`KM_KBP_IT_END`](#km_kbp_it_type_values) terminator. May be null
if that information is not required.

## Returns

A pointer to a [`km_kbp_action_item`](#km_kbp_action_item) array, of
`*``num_items` in length. This data becomes invalid when the state object is
destroyed, or after a call to [`km_kbp_process_event()`](#km_kbp_process_event).
Do not modify the contents of this array. The returned array is terminated with
a [`KM_KBP_IT_END`](#km_kbp_it_type_values) entry.

# km\_kbp\_state\_to\_json() {#km_kbp_state_to_json}

## Description

Export the internal state of a `km_kbp_state` object to a JSON format document
and place it in the supplied buffer, reporting how much space was used. If null
is passed as the buffer the number of bytes required is returned. If there is
insufficent space to hold the document, the contents of the buffer is undefined.
The encoding of the returned data is UTF-8.  
  

**WARNING**: The structure and format of the JSON document while independently
versioned is not part of this API and is intended solely for use in diagnostics
or by development and debugging tools which are aware of processor
implementation details.

## Specification
```c
    km_kbp_status
    km_kbp_state_to_json(km_kbp_state const *state,
                         char *buf,
                         size_t *space);
```    
    

## Parameters

`state`
:An pointer to an opaque state object.

`buf`
:A pointer to the buffer to place the C string containing the JSON document
into. May be null.

`space`
:A pointer to a size\_t variable. This variable must contain the number of bytes
available in the buffer pointed to by `buf`, unless `buf` is null. On return it
will hold how many bytes were used.

## Returns

`KM_KBP_STATUS_OK`
:On success.

`KM_KBP_STATUS_NO_MEM`
:In the event an internal memory allocation fails.

# km\_kbp\_process\_event() {#km_kbp_process_event}

## Description

Run the keyboard on an opaque state object with the provided virtual key and
modifier key state. Updates the state object as appropriate and fills out its
action list.  
The action list will be cleared at the start of this call; options and context in the state may also be modified.

## Specification
```c
    km_kbp_status
    km_kbp_process_event(km_kbp_state *state,
                         km_kbp_virtual_key vk,
                         uint16_t modifier_state);
```    

## Parameters

`state`
:A pointer to the opaque state object.

`vk`
:A virtual key to be processed.

`modifier_state`
:The combinations of modifier keys set at the time key [`vk`](index#basic_types)
was pressed, bitmask from the [`km_kbp_modifier_state`](index#basic_types) enum.

`is_key_down`
:If the key is down value is > 0.

## Returns

`KM_KBP_STATUS_OK`
:On success.

`KM_KBP_STATUS_NO_MEM`
:In the event memory is unavailable to allocate internal buffers.

`KM_KBP_STATUS_INVALID_ARGUMENT`
:In the event the `state` pointer is null or an invalid virtual key or modifier
state is passed.

# km\_kbp\_process\_queued\_actions() {#km_kbp_process_queued_actions}

## Description

Process the keyboard processors queued actions for the opaque state object.
Updates the state object as appropriate and fills out its action list. The
client can add actions externally via the
[`km_kbp_state_queue_action_items`](#km_kbp_state_queue_action_items) and then
request the processing of the actions with this method.

## Specification
```c
    km_kbp_status km_kbp_process_queued_actions(km_kbp_state *state);
```   

## Parameters

`state`
:A pointer to the opaque state object.

## Returns

`KM_KBP_STATUS_OK`
:On success.

`KM_KBP_STATUS_NO_MEM`
:In the event memory is unavailable to allocate internal buffers.

`KM_KBP_STATUS_INVALID_ARGUMENT`
:In the event the `state` pointer is null.

# km\_kbp\_event() {#km_kbp_event}

## Description

Tell the keyboard processor that an external event has occurred, such as a
keyboard being activated through the language switching UI.  
The keyboard processor may generate actions which should be processed by the consumer of the API.  
The action list will be cleared at the start of this call; options and context in the state may also be modified.

## Specification
```c
    km_kbp_status
    km_kbp_event(km_kbp_state *state,
                 uint32_t event,
                 void *data);
```    

## Parameters

`state`
:A pointer to the opaque state object.

`event`
:An event to be processed, from `km_kbp_event_code` enumeration.

`data`
:Additional event-specific data. Currently unused, must be nullptr.

## Returns

`KM_KBP_STATUS_OK`
:On success.

`KM_KBP_STATUS_NO_MEM`
:In the event memory is unavailable to allocate internal buffers.

`KM_KBP_STATUS_INVALID_ARGUMENT`
:In the event the `state` pointer is null or an invalid event or data is passed.

# kbp\_state\_get\_intermediate\_context() {#kbp_state_get_intermediate_context}

## Description

Get access to the state object's context.

## Specification
```c
    km_kbp_status
    kbp_state_get_intermediate_context(km_kbp_state *state, km_kbp_context_item ** context_items);
```    

## Parameters

`state`
:A pointer to the opaque state object to be queried.

## Returns

A pointer to an opaque context object. This pointer is valid for the lifetime of
the state object. If null is passed in, then null is returned.

# km\_kbp\_state\_imx\_register\_callback() {#km_kbp_state_imx_register_callback}

## Description

Register the IMX callback endpoint for the client.

## Specification
```c
    void km_kbp_state_imx_register_callback(km_kbp_state *state,
                                            km_kbp_keyboard_imx_platform imx_callback,
                                            void *callback_object);
```    

## Parameters

`state`
:A pointer to the opaque state object.

`imx_callback`
:imx callback.

`callback_object`
:callback object

# km\_kbp\_state\_imx\_deregister\_callback {#km_kbp_state_imx_deregister_callback}

## Description

Enumerate the various event types which can be raised through `km_kbp_event`.

## Specification

```c    
    enum km_kbp_event_code {
      KM_KBP_EVENT_KEYBOARD_ACTIVATED         = 1,
    };
```    

## Values

`KM_KBP_EVENT_KEYBOARD_ACTIVATED`
:A keyboard has been activated by the user. The processor may use this event,
for example, to switch caps lock state or provide other UX.

# km\_kbp\_state\_queue\_action\_items() {#km_kbp_state_queue_action_items}

## Description

Queue actions for the current keyboard processor state; normally used in IMX
callbacks called during [`km_kbp_process_event`](#km_kbp_process_event).

## Specification
```c
    km_kbp_status km_kbp_state_queue_action_items(km_kbp_state *state, km_kbp_action_item const *action_items);
```    

## Parameters

`state`
:A pointer to the opaque state object.

`action_items`
:The action items to be added to the keyboardprocessor queue. Must be terminated
with a [`KM_KBP_IT_END`](#km_kbp_it_type_values) entry.

## Returns

`KM_KBP_STATUS_OK`
:On success.

`KM_KBP_STATUS_INVALID_ARGUMENT`
:In the event the `state` or `action_items` pointer is null.

