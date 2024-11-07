---
title: Keyboards - Keyman Core API
---

A keyboard is a set of rules and transforms in a Processor specific format for
transforming key events into action items. The keyboard is parsed and loaded by
the processor and made available in an immutable fashion for use with any number
of state objects.

# km\_kbp\_keyboard\_attrs struct {#km_kbp_keyboard_attrs}

## Description

A static structure describing the basic keyboard attributes.

## Specification

```c    
    typedef struct {
      km_kbp_cp const * version_string;
      km_kbp_cp const * id;
      km_kbp_path_name  folder_path;
      km_kbp_option_item const * default_options;
    } km_kbp_keyboard_attrs;
```    

## Members

`version_string`
:Processor specific version string.

`id`
:Keyman keyboard ID string.

`folder_path`
:Path to the unpacked folder containing the keyboard and associated resources.

`default_options`
:Pointer to an array of [`km_kbp_option_item`](option-api#km_kbp_option_item),
terminated with [`KM_KBP_OPTIONS_END`](option-api#km_kbp_options_end).

# km\_kbp\_keyboard\_key struct {#km_kbp_keyboard_key}

## Description

A structure pairing a virtual key and modifier

## Specification

```c    
    typedef struct {
      km_kbp_virtual_key key;
      uint32_t modifier_flag;
    } km_kbp_keyboard_key;
```    

## Members

`key`
:a virtual key code

`modifier_flag`
:The modifier flag

# km\_kbp\_keyboard\_imx struct {#km_kbp_keyboard_imx}

## Description

A structure of IMX library and function name associated with an unique id

## Specification

```c    
    typedef struct {
      km_kbp_cp const * library_name;
      km_kbp_cp const * function_name;
      uint32_t imx_id;
    } km_kbp_keyboard_imx;
```    
    

## Members

`library_name`
:IMX library name

`function_name`
:IMX function name

`imx_id`
:unique identifier used to call this function

# km\_kbp\_keyboard\_load() {#km_kbp_keyboard_load}

## Description

Parse and load keyboard from the supplied path and a pointer to the loaded
keyboard into the out parameter.

## Specification

```c
    km_kbp_status
    km_kbp_keyboard_load(km_kbp_path_name kb_path,
                         km_kbp_keyboard **keyboard);
```    

## Parameters

`kb_path`
:On Windows, a UTF-16 string; on other platforms, a C string: contains a valid
path to the keyboard file.

`keyboard`
:A pointer to result variable: A pointer to the opaque keyboard object returned
by the Processor. This memory must be freed with a call to
[`km_kbp_keyboard_dispose()`](#km_kbp_keyboard_dispose)

## Returns

`KM_KBP_STATUS_OK`
:On success.

`KM_KBP_STATUS_NO_MEM`
:In the event an internal memory allocation fails.

`KM_KBP_STATUS_IO_ERROR`
:In the event the keyboard file is unparseable for any reason.

`KM_KBP_STATUS_INVALID_ARGUMENT`
:In the event the file doesn't exist or is inaccessible or `keyboard` is null.

`KM_KBP_STATUS_OS_ERROR`
:Bit 31 (high bit) set, bits 0-30 are an OS-specific error code.

# km\_kbp\_keyboard\_dispose() {#km_kbp_keyboard_dispose}

## Description

Free the allocated memory belonging to an opaque keyboard object previously
returned by [`km_kbp_keyboard_load()`](#km_kbp_keyboard_load).

## Specification
```c
    void
    km_kbp_keyboard_dispose(km_kbp_keyboard *keyboard);
```    

## Parameters

`keyboard`
:A pointer to the opaque keyboard object to be disposed of.

# km\_kbp\_keyboard\_get\_attrs() {#km_kbp_keyboard_get_attrs}

## Description

Returns the const internal attributes of the keyboard. This structure is valid for the lifetime of the opaque keyboard object. Do not modify the returned data.

## Specification
```c
    km_kbp_status
    km_kbp_keyboard_get_attrs(km_kbp_keyboard const *keyboard,
                              km_kbp_keyboard_attrs const **out);
``` 
    

## Parameters

`keyboard`
:A pointer to the opaque keyboard object to be queried.

`out`
:A pointer to the result: A pointer to a
[`km_kbp_keyboard_attrs`](#km_kbp_keyboard_attrs) structure.

## Returns

`KM_KBP_STATUS_OK`
:On success.

`KM_KBP_STATUS_INVALID_ARGUMENT`
:If non-optional parameters are null.

# km\_kbp\_keyboard\_get\_key\_list() {#km_kbp_keyboard_get_key_list}

## Description

Returns the unordered full set of modifier + virtual keys that are handled by
the keyboard. The matching dispose call needs to be called to free the memory.

## Specification
```c
    km_kbp_status
    km_kbp_keyboard_get_key_list(km_kbp_keyboard const *keyboard,
                                km_kbp_keyboard_key const **out);
``` 
    

## Parameters

`keyboard`
:A pointer to the opaque keyboard object to be queried.

`out`
:A pointer to the result, an array of
[`km_kbp_keyboard_keys`](#km_kbp_keyboard_key)

## Returns

`KM_KBP_STATUS_OK`
:On success.

`KM_KBP_STATUS_INVALID_ARGUMENT`
:If non-optional parameters are null.

# km\_kbp\_keyboard\_key\_list\_dispose() {#km_kbp_keyboard_key_list_dispose}

## Description

Free the allocated memory belonging to a keyboard key list previously returned
by [`km_kbp_keyboard_get_key_list`](#km_kbp_keyboard_get_key_list)

## Specification
```c
    void km_kbp_keyboard_key_list_dispose(km_kbp_keyboard_key *key_list);
```
    

## Parameters

`keyboard`
:A pointer to the keyboard key list to be disposed of.

# km\_kbp\_keyboard\_get\_imx\_list() {#km_kbp_keyboard_get_imx_list}

## Description

Returns the list of IMX libraries and function names that are referenced by the
keyboard. The matching dispose call
[`km_kbp_keyboard_imx_list_dispose`](#km_kbp_keyboard_imx_list_dispose) needs to
be called to free the memory.

## Specification
```c
    km_kbp_status km_kbp_keyboard_get_imx_list(
                                  km_kbp_keyboard const *keyboard,
                                  km_kbp_keyboard_imx** imx_list);
```    
    

## Parameters

`keyboard`
:A pointer to the opaque keyboard object to be queried.

`imx_list`
:A pointer to the result, an array of
[`km_kbp_keyboard_imx`](#km_kbp_keyboard_imx) structure.

## Returns

`KM_KBP_STATUS_OK`
:On success.

`KM_KBP_STATUS_INVALID_ARGUMENT`
:If non-optional parameters are null.

# km\_kbp\_keyboard\_imx\_list\_dispose() {#km_kbp_keyboard_imx_list_dispose}

## Description

Free the allocated memory belonging to a IMX list previously returned by
[`km_kbp_keyboard_get_imx_list`](#km_kbp_keyboard_get_imx_list).

## Specification
```c
    void km_kbp_keyboard_key_list_dispose(km_kbp_keyboard_key *key_list);
```    
    

## Parameters

`keyboard`
:A pointer to the IMX list to be disposed of.

