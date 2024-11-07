---
title: Options - Keyman Core API
---

A state’s default options are set from the keyboard at creation time and the environment. The Platform layer is then is expected to apply any persisted options it is maintaining. Options are passed into and out of API functions as simple C arrays of `km_kbp_option_item` terminated with a [`KM_KBP_OPTIONS_END`](#km_kbp_options_end) sentinel value. A state's options are exposed and manipulatable via the state object.

During processing when the Platform layer finds a PERSIST action type it should store the updated option in the appropriate place, based on its scope. For RESET the processor will apply the pristine value from the original scope, the Platform layer should update that only if it manages a previously persisted value.

# km\_kbp\_option\_scope enum {#km_kbp_option_scope}

## Description

Identifies which scope and option should be stored to. Scopes are essentially separate key-value stores.

## Specification
```c
    enum km_kbp_option_scope {
        KM_KBP_OPT_UNKNOWN      = 0,
        KM_KBP_OPT_KEYBOARD     = 1,
        KM_KBP_OPT_ENVIRONMENT  = 2,
        KM_KBP_OPT_MAX_SCOPES
      };
```    

## Values {#km_kbp_opt_type_values}}

`KM_KBP_OPT_UNKNOWN`
:It is unknown which store and option has come from. This should never be seen by client code.

`KM_KBP_OPT_KEYBOARD`
:The option is store in the keyboard store, a per-keyboard store modifiable by the keyboard itself.

`KM_KBP_OPT_ENVIRONMENT`
:The option is store in the global environment store, set and managed by the Keyman application.

`KM_KBP_OPT_MAX_SCOPES`
:The maximum number of different scopes supported by the API.

# km\_kbp\_option\_item struct {#km_kbp_option_item}

## Description

A scoped key-value tuple. This is used to permit mass update of a keyboard state object with multiple options differently scoped options in a single call.

## Specification
```c
    struct km_kbp_option_item {
      km_kbp_cp const *   key;
      km_kbp_cp const *   value;
      uint8_t             scope;
    };
```    

## Members

`key`
:The name of an option. Pointer to a null-terminated UTF16 encoded string.

`value`
:The value of an option. Pointer to an array of [`km_kbp_cp`](index#basic_types) value containing a null-terminated UTF16 encoded string.

`scope`
:The scope of the option. A [`km_kbp_option_scope`](#km_kbp_option_scope) value which must be less than [`KM_KBP_OPT_MAX_SCOPES`](#km_kbp_opt_type_values).

# KM\_KBP\_OPTIONS\_END macro {#km_kbp_options_end}

## Description

Terminating entry for a c array of [`km_kbp_option_item`](#km_kbp_option_item) values

## Specification
```c
    #define KM_KBP_OPTIONS_END { 0, 0, 0 }
```

# km\_kbp\_options\_list\_size() {#km_kbp_options_list_size}

## Description

Calculate the length of a terminated [`km_kbp_option_item`](#km_kbp_option_item) array (options list).

## Specification
```c
    size_t
    km_kbp_options_list_size(km_kbp_option_item const *opts);
```    

## Parameters

`opts`
:A pointer to a [`KM_KBP_OPTIONS_END`](#km_kbp_opt_type_values) terminated array of [`km_kbp_option_item`](#km_kbp_option_item) values.

## Returns

The number of items in the list or 0 if [`opts`](#opts) is null.

# km\_kbp\_state\_option\_lookup() {#km_kbp_state_option_lookup}

## Description

Lookup an option based on its key and scope from a keyboard state. The scope may never be [`KM_KBP_OPT_UNKNOWN`](#km_kbp_opt_type_values).

## Specification
```c
    km_kbp_status
    km_kbp_state_option_lookup(km_kbp_state const *state,
                          uint8_t scope,
                          km_kbp_cp const *key,
                          km_kbp_cp const **value);
```    

## Parameters

`state`
:An opaque pointer to a state object.

`scope`
:Which key-value store to interrogate.

`key`
:A UTF-16 string that matches the key in the target [`km_kbp_option_item`](#km_kbp_option_item).

`value`
:A pointer to the result variable: A pointer to a UTF-16 string value owned by
the state or keyboard object at the time of the call. This pointer is only valid
\*until\* the next call to any function on this API and should be used
immediately.

## Returns

`KM_KBP_STATUS_OK`
:On success.

`KM_KBP_STATUS_INVALID_ARGUMENT`
:If non-optional parameters are null, or if the scope is invalid.

`KM_KBP_STATUS_KEY_ERROR`
:The key cannot be found.

# km\_kbp\_state\_options\_update() {#km_kbp_state_options_update}

## Description

Adds or updates one or more options from a list of
[`km_kbp_option_items`](#km_kbp_option_item). All UTF16 strings passed int the
[`km_kbp_option_item`](#km_kbp_option_item) are copied. The scope of any
[`km_kbp_option_item`](#km_kbp_option_item) may never be
[`KM_KBP_OPT_UNKNOWN`](#km_kbp_opt_type_values).

## Specification
```c
    km_kbp_status
    km_kbp_state_options_update(km_kbp_state *state,
                          km_kbp_option_item const *new_opts);
```    

## Parameters

`state`
:An opaque pointer to a state object.

`new_opts`
:An array of [`km_kbp_option_item`](#km_kbp_option_item) objects to update or
add. Must be terminated with [`KM_KBP_OPTIONS_END`](#KM_KBP_OPTIONS_END).

## Returns

`KM_KBP_STATUS_OK`
:On success.

`KM_KBP_STATUS_INVALID_ARGUMENT`
:If non-optional parameters are null or any option has
[`KM_KBP_OPT_UNKNOWN`](#km_kbp_opt_type_values) scope.

`KM_KBP_STATUS_NO_MEM`
:In the event an internal memory allocation fails.

`KM_KBP_STATUS_KEY_ERROR`
:The key cannot be found.

# km\_kbp\_state\_options\_to\_json() {#km_kbp_state_options_to_json}

## Description

Export the state objects options to a JSON formatted document and place it in
the supplied buffer, reporting how much space was used. If null is passed as the
buffer the number of bytes required is returned in [`space`](#space). If there
is insufficent space to hold the document the contents of the buffer is
undefined. The returned buffer uses UTF-8 encoding.

## Specification
```c
    km_kbp_status
    km_kbp_state_options_to_json(km_kbp_state const *state,
                           char *buf,
                           size_t *space);
```    

## Parameters

`opts`
:An opaque pointer to a state object.

`buf`
:A pointer to the buffer to place the C string containing the JSON document
into, can be null.

`space`
:A pointer to a size\_t variable. This variable must contain the number of bytes
available in the buffer pointed to by `buf`, unless `buf` is null. On return it
will hold how many bytes were used.

## Returns

`KM_KBP_STATUS_OK`
:On success.

`KM_KBP_STATUS_INVALID_ARGUMENT`
:If non-optional parameters are null.

`KM_KBP_STATUS_NO_MEM`
:In the event an internal memory allocation fails.

