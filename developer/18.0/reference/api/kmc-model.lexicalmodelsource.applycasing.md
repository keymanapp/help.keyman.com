<!-- Do not edit this file. It is automatically generated by API Documenter. -->

[Home](./index.md) &gt; [@keymanapp/kmc-model](./kmc-model.md) &gt; [LexicalModelSource](./kmc-model.lexicalmodelsource.md) &gt; [applyCasing](./kmc-model.lexicalmodelsource.applycasing.md)

## LexicalModelSource.applyCasing property

Specifies the casing rules for a language. Should implement three casing forms: - 'lower' -- a fully-lowercased version of the text appropriate for the language's use of the writing system. - 'upper' -- a fully-uppercased version of the text - 'initial' -- a version preserving the input casing aside from the initial character, which is uppercased (like with proper nouns and sentence-initial words in English sentences.)

This is only utilized if `languageUsesCasing` is defined and set to `true`<!-- -->.  14.0

**Signature:**

```typescript
readonly applyCasing?: CasingFunction;
```
