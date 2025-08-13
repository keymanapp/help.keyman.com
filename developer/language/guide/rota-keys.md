---
title: Rotational key rules
---

Rotational keys or rota (aka. doublepressing) is a single key pressed to output sequences of characters or letters.

To easily understand this, check and test the rules:
```
begin Unicode > use(main)
group(main) using keys

'c' + 'c' > 'č'             c caron
'č' + 'c' > 'cc'              c double c
'cc' + 'c' > 'čč'              c double c caron
'čč' + 'c' > 'c'              c back to c
```

It can be more complex:
```
begin Unicode > use(main)
group(main) using keys

+ [K_Z] > 'ʋ'

store(lat_norm_replacement) "zxc;ZXC:"
store(lat_vowels) "ʋɛɔɩƲƐƆɭ"

any(lat_norm_replacement) + '`' > index(lat_vowels, 1) U+0300   c ʋ̀
any(lat_norm_replacement) + "'" > index(lat_vowels, 1) U+0301   c ʋ́ 
any(lat_norm_replacement) + '~' > index(lat_vowels, 1) U+0303   c ʋ̃

'ʋ̀' + 'z' > 'z'
'ʋ́' + 'z' > 'z'
'ʋ̃' + 'z' > 'z'
```

## See also
* [store()](../reference/store)
* [any()](../reference/any)
* [index()](../reference/index)
* [Xinaliq Keyboard Help](../../../keyboard/xinaliq#toc-how-to-use-this-keyboard)