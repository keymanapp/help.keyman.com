# onLexicalModelInstalled()

## Summary
The `onLexicalModelInstalled()` event is called when a lexical-model package has been installed.

## Syntax
```java
onLexicalModelInstalled(List<HashMap<String key, String value>> lexicalModelsInstalled)
```

### Parameters
`lexicalModelsInstalled`

The information dictionaries of the lexical-models installed from a lexical-model package with keys and values defined as <code>List&lt;HashMap&lt;String key, String value&gt;&gt;</code>.</dd>


## Description
Implement this method to handle lexical-model package installed event.

## Examples

### Example: Using `onLexicalModelInstalled()`
The following script illustrate the use of `onLexicalModelInstalled()`:
```java
    @Override
    public void onLexicalModelInstalled(List<HashMap<String key, String value>> lexicalModelsInstalled) {
        // handle lexical-model package installed event here
    }
```

## See also
* [onPackageInstalled()](onPackageInstalled)
