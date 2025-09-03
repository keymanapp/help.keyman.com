---
title: Rotational key rules
---

Rotational keys, or "rotas" are combinations of one or more keys pressed together to produce a character or letter output, following the sequences defined by Keyman rules, and they will always end up back to the first letter as part of a rotation.

To easily understand this, check and test the rules:
```keyman
begin Unicode > use(main)
group(main) using keys

'c' + 'c' > 'č'             c caron
'č' + 'c' > 'cc'              c double c
'cc' + 'c' > 'čč'              c double c caron
'čč' + 'c' > 'c'              c back to c
```

The rule below allows the combination of a vowel with one of the diacritics (',\`,^) to output the vowel and an accent (à, ô, ú). After that, the rotation will happen if one of the specified diacritics is typed. Only then will it revert back to the initial vowel.

```keyman

store(vowel)  'aeiou'
store(acute)  'áéíóú'
store(grave)  'àèìòù'
store(circum) 'âêîôû'

any(vowel) + "'" > index(acute, 1)
any(acute) + "'" > index(vowel, 1)     c Point of rotation

any(vowel) + "`" > index(grave, 1)
any(grave) + "`" > index(vowel, 1)     c Point of rotation

any(vowel)  + "^" > index(circum, 1)
any(circum) + "^" > index(vowel, 1)    c Point of rotation
```

Now, this rule is a bit different. The vowel directly changes to the accented vowels when <kbd>/</kbd> is typed; it will do this four times and then reverts back to the initial vowel.

```keyman

any(vowel) + '/' > index(acute, 1)
any(acute) + '/' > index(grave, 1)
any(grave) + '/' > index(circum, 1)
any(circum) + '/' > index(vowel, 1)
```


## See also
* [store()](../reference/store)
* [any()](../reference/any)
* [index()](../reference/index)
* [Xinaliq Keyboard Help](/keyboard/xinaliq/1.1.4/xinaliq#toc-how-to-use-this-keyboard)
