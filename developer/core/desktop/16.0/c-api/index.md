---
title: Reference - Keyman Core API
---

## Namespace

All calls, types and enums are prefixed with the namespace prefix `km_kbp_`

## Idioms

### Error handling

Follows a COM HRESULT style model where functions that can fail will always
return a status value and all other results are returned via outparams passed to
the function. Only attribute accessor functions which cannot fail, may return
their results via return results.

### Passing variable length data out

Almost all calls marshalling variable length aggregate data in or out of an API
object take the form:

```c
km_kbp_status fn_name(object_ref, buffer_ptr, size_ptr)
```
where the `buffer_ptr` is nullable and all other arguments are required (will
result in an [`KM_KBP_STATUS_INVALID_ARGUMENT`](#km_kbp_status_type_values)
status being returned if nulled). When `buffer_ptr` is `nullptr` or `0` the
function will place the size of the required buffer in the variable pointed to
by `size_ptr`.

### Resource management

Calls which result in the allocation of resources, regardless of resulting
ownership, are of the form:
```c
km_kbp_status fn_name(object_ref, handle_out_ptr)
```
where `handle_out_ptr` is a valid pointer to a caller allocated variable to hold
the resulting resource handle. This is often a reference to a created object.
Unless stated all arguments are required (will result in an
[`KM_KBP_STATUS_INVALID_ARGUMENT`](#km_kbp_status_type_values) status being
returned if nulled).

All dispose calls are designed to accept `nullptr` or `0` as a valid value and
will do nothing in that event.

### Fixed size attribute access

For accessors to fixed size attributes of an object these will take the form:
```c
attr_value fn_name(object_ref)
```
`object_ref` is required to be valid and will result in a nonsense value being returned if `nullptr` or `0`.

### Versioning scheme {#versioning-scheme}

This follows the libtool interface versioning scheme of `current.age.revision`:

`current`

The most recent interface number that the engine implements.

`age`

How many interface numbers back from current the library implements. E.g. 5.2.0
would mean the library provides interface versions 3-5 and 5.0.0 would mean just
interface version 5 and nothing older.

`revision`

The implementation version of the current interface. This represents
improvements to the code that don't change the intended behaviour of the
interface such as bug fixes and optimisations.

For Linux and other OS which support this scheme the dynamic linker will
automatically choose the most updated version if more than one implementation is
available. For Windows or dynamic loaded shared objects on Linux you can use the
[`km_kbp_get_engine_attrs`](#km_kbp_get_engine_attrs) call and [Library version
macros](#lib-version-macros) to check the loaded DLL supplies the correct
interface.

# Common functions, types, and macros

## Basic types {#basic_types}

Fundamental types for representing data passed across the API.

| Type | C/C++ type | Purpose |
|:------|:----------|:--------|
| `km_kbp_cp` | `uint16_t/char16_t` | Represents a UTF16 codepoint, most strings are passed as UTF16. |
|`km_kbp_usv`|`uint32_t/char32_t`| An integral type capable of holding a single Unicode Scalar Value, a decoded UTF codepoint.|
|`km_kbp_virtual_key`|`uint16_t`|An integral type capable of holding a platform specific virtual key code.|
|`km_kbp_status`|`uint32_t`|An integral 32 bit wide type capable of holding any valid status code as defined by the `enum` [km\_kbp\_status\_codes](#km_kbp_status_codes).|
|`km_kbp_modifier_state`|`uint16_t`|An integral type bitmask representing the state of each modifier key. |

## Resource types

Opaque types for representing resources provided or created by the keyboard processor implementation.

| Type | Purpose |
|:-----|:--------|
|`km_kbp_keyboard`|Represents a keyboard loaded from disk, that can be executed by the keyboard processor to consume events, update state associated with an insertion point and produce action items. A keyboard object may be referenced by any number of state objects but must be disposed of after all state objects referencing it have first been disposed of.|
|`km_kbp_state`|Represents all state associated with an insertion point using a keyboard. This tracks context, and current action items resulting from a processed keyboard event. There can be many state objects using the same keyboard. A state object may not live longer than the keyboard it manages state for.|
|`km_kbp_context`|Represents the pre-context of an insertion point and may be set, queried, append or shrunk by one or more context items. A context object is a sub-part of the state object, and a context handle may not be used after its state object has been disposed of.|

# Library version macros {#lib-version-macros}

## Description

These macros evaluate to the version of the library your binary was compiled
against, which may not be the same as the version returned by
[`km_kbp_get_engine_attrs`](#km_kbp_get_engine_attrs). See [Versioning
scheme](#versioning-scheme).

## Specification

```c
    #define KM_KBP_LIB_CURRENT  @lib_curr@
    #define KM_KBP_LIB_AGE      @lib_age@
    #define KM_KBP_LIB_REVISION @lib_rev@
```
    

# km\_kbp\_status\_codes enum {#km_kbp_status_codes}

## Description

An error code mechanism similar to COM’s `HRESULT` scheme (unlike COM, any
non-zero value is an error).

## Specification

```c
    enum km_kbp_status_codes {
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
```    

## Values {#km_kbp_status_type_values}

`KM_KBP_STATUS_OK`

: Success code. Call completed as documented.

`KM_KBP_STATUS_NO_MEM`

: The call failed to allocate memory during its execution, causing it to fail.

`KM_KBP_STATUS_IO_ERROR`

: The call performed an I/O operation which failed, causing it to fail.

`KM_KBP_STATUS_INVALID_ARGUMENT`

: The call detected one of its parameters was invalid or unsafe.

`KM_KBP_STATUS_KEY_ERROR`

: The provided key or index into a collection object was not present.

`KM_KBP_STATUS_INSUFFICENT_BUFFER`

: The provided buffer did not contain enough space to fully encode or copy the
result of this call.

`KM_KBP_STATUS_INVALID_UTF`

: A malformed or partial UTF sequence prevented complete decoding of a unicode
string.

`KM_KBP_STATUS_INVALID_KEYBOARD`

: An attempt to decode a keyboard file failed.

`KM_KBP_STATUS_OS_ERROR`

: This allows encapsulating a platform error code: the remaining 31 low bits are
the error code returned by the OS for cases where the failure mode is platform
specific. For HRESULT codes this only permits failure codes to be passed and not
success codes.

# km\_kbp\_attr struct {#km_kbp_attr}

## Description

A structure describing information about the keyboard processor, implementing
this API.

## Specification

```c
    typedef struct {
      size_t      max_context;
      uint16_t    current;
      uint16_t    revision;
      uint16_t    age;
      uint16_t    technology;
      char const *vendor;
    } km_kbp_attr;
```    

## Members

`max_context`
:Maximum context size supported by processor.

`current`
:Current API number supported.

`revision`
: Implementation number of current API.

`age`
: current - age == Oldest API number supported.

`technology` 
: A bit field of [`km_kbp_tech_value`](#km_kbp_tech_value) values,
specifiying which Keyboard technologies the engine supports.

`vendor`
: A UTF-8 encoded string identifying the implementer of the processor.

# km\_kbp\_tech\_value enum {#km_kbp_tech_value}

## Description

Values for a bit field indicating which keyboarding technologies a keyboard
processor supports.

## Specification

```c
    enum km_kbp_tech_value {
      KM_KBP_TECH_UNSPECIFIED = 0,
      KM_KBP_TECH_MOCK        = 1 << 0,
      KM_KBP_TECH_KMX         = 1 << 1,
      KM_KBP_TECH_LDML        = 1 << 2
    };
```

## Values

`KM_KBP_TECH_UNSPECIFIED` 
: The keyboard processor implementation does not disclose which technologies it
implements.

`KM_KBP_TECH_MOCK`
: The keyboard processor implements a simple en-US keyboard for the purposes of
testing the API.

`KM_KBP_TECH_UNSPECIFIED`
: The keyboard processor implements a Keyman KMX compatible engine.

`KM_KBP_TECH_UNSPECIFIED`
: The keyboard processor implements a LDML capable processing engine.

# km\_kbp\_get\_engine\_attrs() {#km_kbp_get_engine_attrs}

## Description

Get access processors attributes describing version and technology implemented.

## Specification

```c    
    KMN_API
    km_kbp_attr const *
    km_kbp_get_engine_attrs(km_kbp_state const *state);
```   

## Parameters

`state`
:An opaque pointer to an [`km_kbp_state`](state-api#state).

## Returns

A pointer to a [`km_kbp_attr`](#km_kbp_attr) structure. Do not modify the
contents of this structure.
