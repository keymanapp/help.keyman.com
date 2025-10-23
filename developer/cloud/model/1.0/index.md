---
title: Model result API 1.0 Specification
---

## Model result mode

Documents the [`api.keyman.com/model/<model_id>`](https://api.keyman.com/model) endpoint.

### Parameters

`model_id`

: The identifier of the model to return

### Results

A valid response will return a single [`model_info`](../../model_info) object,
for example:

```json
{
  "license": "mit",
  "languages": [
    "am"
  ],
  "description": "Amharic Lexical Model derived from the UniLex word list for Amharic.",
  "id": "gff.am.gff_amharic",
  "name": "GFF Amharic Lexical Model",
  "authorName": "Ge'ez Frontier Foundation",
  "authorEmail": "yacob@geez.org",
  "lastModifiedDate": "2022-08-31T19:08:07.624Z",
  "packageFilename": "https://keyman.com/go/package/download/model/gff.am.gff_amharic?version=1.0&update=1",
  "packageFileSize": 1187671,
  "jsFilename": "https://downloads.keyman.com/models/gff.am.gff_amharic/1.0/gff.am.gff_amharic.model.js",
  "jsFileSize": 9757475,
  "packageIncludes": [],
  "version": "1.0",
  "minKeymanVersion": "12.0",
  "sourcePath": "release/gff/gff.am.gff_amharic"
}
```

If no model is found, or a server error occurs, a JSON object will be returned
with the error, and with the HTTP response code 404 or 500, for example:

```json
{
  "message": "Model not found"
}
```

---

## Search mode

Documents the [`api.keyman.com/model/?q=<search>`](https://api.keyman.com/model/?q=)
search endpoint.

### Parameters

* `search`: A search string. There are two prefixes available:

  * `id:` search for a single model by identifier, which will be an exact
    match. This result is identical to the metadata endpoint, except it will be
    in an array, and non-matches will be an empty array rather than an error.

  * `bcp47:` search for models that exactly match the BCP 47 tag.

  * All other searches are case-insensitive substring searches on model id,
    model name or model description

### Results

A valid response will return an array of matching
[`model_info`](../../model_info) objects.
