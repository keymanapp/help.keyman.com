---
title: &CasedKeys store
---

## Summary

The `&CasedKeys` store defines the keys on the keyboard that are affected by the Caps Lock state.

## Syntax

```keyman
store(&CasedKeys) VirtualKey ...
```

### Parameters

`VirtualKey`
: An unmodified virtual key which is affected by Caps Lock.

## Description

The `&CasedKeys` system store is a compiler feature that reduces the repetitive nature of keyboard rules for `CAPS` and `NCAPS`. The `&CasedKeys` system store defines a list of virtual keys for which 'normal' Caps Lock rules apply. This store has no default value, for backward compatibility.

Once this store is defined, then you can define just the unshifted and shifted versions of a rule, and Keyman Developer will synthesize the `CAPS` and `NCAPS` versions of the rule. For example, you may have the following rules:

```keyman
store(&CasedKeys) [K_A]
+ [K_A] > 'α'
+ [SHIFT K_A] > 'Α'
```

These would be replaced by the compiler with:

```keyman
store(&CasedKeys) [K_A]
+ [NCAPS K_A] > 'α'
+ [SHIFT CAPS K_A] > 'α'
+ [CAPS K_A] > 'Α'
+ [SHIFT NCAPS K_A] > 'Α'
```

You can also use this functionality with characters in the key part of the rule:

```keyman
store(&CasedKeys) 'a'..'c'
+ 'a' > 'α'
+ 'A' > 'Α'
```

and the compiled expansion would be similar:

```keyman
store(&CasedKeys) [K_A] [K_B] [K_C]
+ [NCAPS K_A] > 'α'
+ [SHIFT CAPS K_A] > 'α'
+ [CAPS K_A] > 'Α'
+ [SHIFT NCAPS K_A] > 'Α'
```

This feature is backwardly compatible with Keyman 6.0, as it is entirely implemented in the compiler.

This feature is not compatible with mnemonic layouts, and the keys defined in the `&CasedKeys` store must be the unshifted base keys as found on a US English keyboard, or you can use ISO9995 identifiers if you prefer.

If you define a rule where you specify either `NCAPS` or `CAPS`, for a key found in the store, then no change will be made to that rule. You can also continue to define rules which use `NCAPS` or `CAPS` for keys not found in the store.

As a side-benefit, this allows the visual designer to be used and support Caps Lock, although at this stage, the `&CasedKeys` store is not surfaced in the visual designer.

## Version history

* Version 14.0: &CasedKeys support added to compiler; backwardly compatible with earlier versions of Keyman
