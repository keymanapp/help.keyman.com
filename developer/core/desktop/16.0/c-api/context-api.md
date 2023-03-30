---
title: Context - Keyman Core API
---

The context is the text prior to the insertion point (caret, cursor). The
context is constructed by the Platform layer, typically by interrogating the
Client Application. The context will be updated by the engine for keystroke
events. If the Platform layer code caches the context, the context should be
reset when a context state change is detected. Context state changes can occur
when the user uses the mouse to move the insertion point, uses cursor keys,
switches applications or input fields, or presses hotkeys such as Ctrl+N to
start a new document. The full set of context state change triggers is up to the
Platform layer.

Context can also contain positional Markers (also known as 'deadkeys' in kmn
keyboards), which are transitory state flags that are erased whenever a context
state change is detected. Markers are always controlled by the Engine.

Contexts are always owned by their state. They may be set to a list of
context\_items or interrogated for their current list of context items.

# km\_kbp\_context\_type enum  {#km_kbp_context_type}

## Description

[`km_kbp_context_item.type`](#km_kbp_context_item) values which identify which
data value (if any) the context item carries.

## Specification
```c
    enum km_kbp_context_type {
      KM_KBP_CT_END,
      KM_KBP_CT_CHAR,
      KM_KBP_CT_MARKER
    };
```
## Values {#km_kbp_ct_type_values}

`KM_KBP_CT_END`
: A [`km_kbp_context_item`](#km_kbp_context_item) of this type marks the end of
an array of context items.

`KM_KBP_CT_CHAR`
: The context item contains a Unicode Scalar Value which must be accessed
through the [`km_kbp_context_item.character`](#km_kbp_context_item) union
member.

`KM_KBP_CT_MARKER`
: The context item contains a positional marker which must be accessed through
the [`km_kbp_context_item.marker`](#km_kbp_context_item) union member.

# km\_kbp\_context\_item struct {#km_kbp_context_item}

## Description

A tagged union representing an element of context which can be either a Unicode
character or a positional marker.

## Specification
```c
    typedef struct {
      uint8_t   type;
      uint8_t   _reserved[3];
      union {
        km_kbp_usv  character;
        uint32_t    marker;
      };
    } km_kbp_context_item;
```    

## Members

`type`
:Identifies the union member to access. A value of enum
[`km_kbp_context_type`](#km_kbp_context_type) values.

`_reserved`
:Space reserved for alignment purposes and possible future use.

`character`
:A Unicode Scalar Value.

`marker`
:A marker value, only meaningful to an engine.

# KM\_KBP\_CONTEXT\_ITEM\_END macro

## Description

Convenience macro to declare a terminating entry in a
[`km_kbp_context_item`](#km_kbp_context_item) item array.

## Specification
```c
    #define KM_KBP_CONTEXT_ITEM_END {KM_KBP_CT_END, {0,}, {0,}}
```

# km\_kbp\_context\_items\_from\_utf16() {#km_kbp_context_items_from_utf16}

## Description

Convert a UTF16 encoded Unicode string into an array of
[`km_kbp_context_item`](#km_kbp_context_item) structures. Allocates memory as
needed.

## Specification
```c
    km_kbp_status
    km_kbp_context_items_from_utf16(km_kbp_cp const *text,
                                    km_kbp_context_item **out_ptr);
```    

## Parameters

`text`
:a pointer to a null terminated array of utf16 encoded data.

`out_ptr`
:A pointer to the result variable: A pointer to the start of the
[`km_kbp_context_item`](#km_kbp_context_item) array containing the
representation of the input string. Terminated with a type of
[`KM_KBP_CT_END`](#km_kbp_ct_type_values). Must be disposed of with
[`km_kbp_context_items_dispose()`](#km_kbp_context_items_dispose)

## Returns

`KM_KBP_STATUS_OK`
:On success.

`KM_KBP_STATUS_INVALID_ARGUMENT`
:If non-optional parameters are null.

`KM_KBP_STATUS_NO_MEM`
:In the event not enough memory can be allocated for the output buffer.

`KM_KBP_STATUS_INVALID_UTF`
:In the event the UTF16 string cannot be decoded because it contains unpaired
surrogate codeunits.

# km\_kbp\_context\_items\_from\_utf8() {#km_kbp_context_items_from_utf8}

## Description

Convert an UTF8 encoded Unicode string into an array of
[`km_kbp_context_item`](#km_kbp_context_item) structures. Allocates memory as
needed.

## Specification
```c
    km_kbp_status
    km_kbp_context_items_from_utf8(char const *text,
                                    km_kbp_context_item **out_ptr);
```    

## Parameters

`text`
:a pointer to a null terminated array of utf8 encoded data.

`out_ptr`
:A pointer to the result variable: A pointer to the start of the
[`km_kbp_context_item`](#km_kbp_context_item) array containing the
representation of the input string. Terminated with a type of
[`KM_KBP_CT_END`](#km_kbp_ct_type_values).

## Returns

`KM_KBP_STATUS_INVALID_ARGUMENT`
:If non-optional parameters are null.

`KM_KBP_STATUS_NO_MEM`
:In the event it cannot allocate enough memory for the output buffer.

`KM_KBP_STATUS_INVALID_UTF`
:In the event the UTF8 string cannot be decoded.

# km\_kbp\_context\_items\_to\_utf16() {#km_kbp_context_items_to_utf16}

## Description

Convert a context item array into a UTF-16 encoded string placing it into the
supplied buffer of specified size, and return the number codepoints actually
used in the conversion. If null is passed as the buffer the number codeunits
required is returned. This will strip markers from the context during the
conversion.

## Specification
```c
    km_kbp_status
    km_kbp_context_items_to_utf16(km_kbp_context_item const *item,
                                  km_kbp_cp *buf,
                                  size_t *buf_size);
```    

## Parameters

`context_items`
:A pointer to the start of an array
[`km_kbp_context_item`](#km_kbp_context_item). Must be terminated with a type of
[`KM_KBP_CT_END`](#km_kbp_ct_type_values).

`buf`
:A pointer to the buffer to place the UTF-16 string into. May be be null to
request size calculation.

`buf_size`
:A pointer to the result variable: A pointer the size of the supplied buffer in
codeunits or filled with the size required if `buf` is null.

## Returns

`KM_KBP_STATUS_OK`
:On success.

`KM_KBP_STATUS_INVALID_ARGUMENT`
:If non-optional parameters are null.

`KM_KBP_STATUS_INSUFFICENT_BUFFER`
:If the buffer is not large enough `buf_size` will contain the space required.
The contents of the buffer are undefined.

# km\_kbp\_context\_items\_to\_utf8() {#km_kbp_context_items_to_utf8}

## Description

Convert a context item array into a UTF-8 encoded string placing it into the
supplied buffer of specified size, and return the number codepoints actually
used in the conversion. If null is passed as the buffer the number codeunits
required is returned. This will strip markers from the context during the
conversion.

## Specification
```c
    km_kbp_status
    km_kbp_context_items_to_utf8(km_kbp_context_item const *item,
                                  char *buf,
                                  size_t *buf_size);
```    

## Parameters

`context_items`
:A pointer to the start of an array
[`km_kbp_context_item`](#km_kbp_context_item). Must be terminated with a type of
[`KM_KBP_CT_END`](#km_kbp_ct_type_values).

`buf`
:A pointer to the buffer to place the UTF-8 string into. May be be null to
request size calculation.

`buf_size`
:A pointer to the result variable: A pointer the size of the supplied buffer in
codeunits or filled with the size required if `buf` is null.

## Returns

`KM_KBP_STATUS_OK`
:On success.

`KM_KBP_STATUS_INVALID_ARGUMENT`
:If non-optional parameters are null.

`KM_KBP_STATUS_INSUFFICENT_BUFFER`
:If the buffer is not large enough [`buf_size`](#buf_size) will contain the
space required. The contents of the buffer are undefined.

# km\_kbp\_context\_items\_dispose() {#km_kbp_context_items_dispose}

## Description

Free the allocated memory belonging to a
[`km_kbp_context_item`](#km_kbp_context_item) array previously returned by
[`km_kbp_context_items_from_utf16()`](#km_kbp_context_items_from_utf16) or
[`km_kbp_context_get()`](#km_kbp_context_get).

## Specification

```c
    void
    km_kbp_context_items_dispose(km_kbp_context_item *context_items);
```  

## Parameters

`context_items`
:A pointer to the start of the [`km_kbp_context_item`](#km_kbp_context_item)
array to be disposed of.

# km\_kbp\_context\_set() {#km_kbp_context_set}

## Description

Replace the contents of the current context with a new sequence of
[`km_kbp_context_item`](#km_kbp_context_item) entries.

## Specification
```c
    km_kbp_status
    km_kbp_context_set(km_kbp_context *context,
                       km_kbp_context_item const *context_items);
```    

## Parameters

`context`
:A pointer to an opaque context object.

`context_items`
:A pointer to the start of the [`km_kbp_context_item`](#km_kbp_context_item)
array containing the new context. It must be terminated with an item of type
[`KM_KBP_CT_END`](#km_kbp_ct_type_values).

## Returns

`KM_KBP_STATUS_OK`
:On success.

`KM_KBP_STATUS_INVALID_ARGUMENT`
:If non-optional parameters are null.

`KM_KBP_STATUS_NO_MEM`
:In the event not enough memory can be allocated to grow the context buffer internally.

# km\_kbp\_context\_get() {#km_kbp_context_get}

## Description

Copies all items in the context into a new array and returns the new array. This
must be disposed of by caller using
[`km_kbp_context_items_dispose()`](#km_kbp_context_item).

## Specification
```c
    km_kbp_status
    km_kbp_context_get(km_kbp_context const *context_items,
                       km_kbp_context_item **out);
```    

## Parameters

`context_items`
:A pointer to the start of an array [`km_kbp_context_item`](#km_kbp_context_item).

`out`
:A pointer to the result variable: A pointer to the start of the
[`km_kbp_context_item`](#km_kbp_context_item) array containing a copy of the
context. Terminated with a type of [`KM_KBP_CT_END`](#km_kbp_ct_type_values).
Must be disposed of with
[`km_kbp_context_items_dispose()`](#km_kbp_context_item).

## Returns

`KM_KBP_STATUS_OK`
:On success.

`KM_KBP_STATUS_INVALID_ARGUMENT`
:If non-optional parameters are null.

`KM_KBP_STATUS_NO_MEM`
:In the event not enough memory can be allocated for the output buffer.

# km\_kbp\_context\_clear() {#km_kbp_context_clear}

## Description

Removes all context\_items from the internal array. If `context` is null, has no
effect.

## Specification

```c
    void
    km_kbp_context_clear(km_kbp_context *context);
```    

## Parameters

`context`
:A pointer to an opaque context object.

# km\_kbp\_context\_length() {#km_kbp_context_length}

## Description

Return the number of items in the context.

## Specification
```c
    size_t
    km_kbp_context_length(km_kbp_context *);
```    

## Parameters

`context`
:A pointer to an opaque context object.

## Returns

The number of items in the context, and will return 0 if passed a null `context` pointer.

# km\_kbp\_context\_append() {#km_kbp_context_append}

## Description

Add more items to the end (insertion point) of the context. If these exceed the
maximum context length the same number of items will be dropped from the
beginning of the context.

## Specification
```c
    km_kbp_status
    km_kbp_context_append(km_kbp_context *context,
                          km_kbp_context_item const *context_items);
```    

## Parameters

`context`
:A pointer to an opaque context object.

`context_items`
:A pointer to the start of the [`KM_KBP_CT_END`](#km_kbp_ct_type_values)
terminated array of [`km_kbp_context_item`](#km_kbp_context_item) to append.

## Returns

`KM_KBP_STATUS_OK`
:On success.

`KM_KBP_STATUS_INVALID_ARGUMENT`
:If non-optional parameters are null.

`KM_KBP_STATUS_NO_MEM`
:In the event not enough memory can be allocated to grow the context buffer
internally.

# km\_kbp\_context\_shrink() {#km_kbp_context_shrink}

## Description

Remove a specified number of items from the end of the context, optionally add
up to the same number of the supplied items to the front of the context.

## Specification
```c
    km_kbp_status
    km_kbp_context_shrink(km_kbp_context *context,
                          size_t num,
                          km_kbp_context_item const *prefix);
```    

## Parameters

`context`
:A pointer to an opaque context object.

`num`
:The number of items to remove from the end of context.

`context_items`
:Pointer to the start of the [`KM_KBP_CT_END`](#km_kbp_ct_type_values)
terminated array of [`km_kbp_context_item`](#km_kbp_context_item) to add to the
front. Up to `num` items will be prepended. This may be null if not required.

## Returns

`KM_KBP_STATUS_OK`
:On success.

`KM_KBP_STATUS_INVALID_ARGUMENT`
:If non-optional parameters are null.

`KM_KBP_STATUS_NO_MEM`
:In the event it cannot allocate enough memory to grow the context internally.

# km\_kbp\_context\_item\_list\_size() {#km_kbp_context_item_list_size}

## Description

Return the length of a terminated [`km_kbp_context_item`](#km_kbp_context_item) array.

## Specification
```c
    size_t
    km_kbp_context_item_list_size(km_kbp_context_item const *context_items);
```    

## Parameters

`context_items`
:A pointer to a [`KM_KBP_CT_END`](#km_kbp_ct_type_values) terminated array of
[`km_kbp_context_item`](#km_kbp_context_item) values.

## Returns

The number of items in the list, not including terminating item, or 0 if
`context_items` is null.
