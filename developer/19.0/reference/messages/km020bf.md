---
title: KM020BF: WARN_CallUsedOnUnsupportedPlatform
---

|            |           |
|------------|---------- |
| Message    | The \`call\(\)\` statement is not supported on macOS or Linux platforms\. |
| Module     | [kmc-kmn.KmnCompilerMessages](kmc-kmn.kmncompilermessages) |
| Identifier | `WARN_CallUsedOnUnsupportedPlatform` |


The `call()` statement is supported on Windows and web-based platforms,
including mobile and tablet. The target platforms can be specified in
the `&targets` system store; avoid the use of generic platforms such as
`'any'` or `'desktop'`. Note that the implementation of your call
target will differ across platforms; see
[`call()` statement](https://help.keyman.com/developer/language/reference/call)
in the documentation for more details.

