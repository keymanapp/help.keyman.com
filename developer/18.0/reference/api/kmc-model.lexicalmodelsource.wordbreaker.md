<!-- Do not edit this file. It is automatically generated by API Documenter. -->

[Home](./index.md) &gt; [@keymanapp/kmc-model](./kmc-model.md) &gt; [LexicalModelSource](./kmc-model.lexicalmodelsource.md) &gt; [wordBreaker](./kmc-model.lexicalmodelsource.wordbreaker.md)

## LexicalModelSource.wordBreaker property

Which word breaker to use. Choose from:

- 'default' -- breaks according to Unicode UAX \#29 §4.1 Default Word Boundary Specification, which works well for \*most\* languages. - 'ascii' -- a very simple word breaker, for demonstration purposes only. - word breaking function -- provide your own function that breaks words. - class-based word-breaker - may be supported in the future.

**Signature:**

```typescript
readonly wordBreaker?: WordBreakerSpec | SimpleWordBreakerSpec;
```