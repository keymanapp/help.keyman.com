---
title: package-version cloud API
---

https://api.keyman.com/package-version

Endpoint for getting keyboard and lexical model versions. The results will contain latest versions and links to the .kmp or .model.kmp packages. This endpoint is used by Keyman applications to query for newer versions of installed packages.

```http
GET https://api.keyman.com/package-version?keyboard=<id>&model=<id>&platform=<platform>
```

# Parameters

* `keyboard`: keyboards to query
  * `<id>`: keyboard ID for the first keyboard
  * This parameter can be repeated, and/or multiple ids can be separated by commas
  * This parameter is optional.
* `model`: lexical models to query
  * `<id>`: lexical model ID for the first lexical model
  * This parameter can be repeated, and/or multiple ids can be separated by commas
  * This parameter is optional.
* `platform`: which platform must be supported for updates
  * `<platform>`: one of `android`, `ios`, `linux`, `mac`, `windows` (web does not currently support packages)
  * This stops the API returning packages that are invalid for the target platform.
  * This parameter is optional. If not supplied, does not filter by platform support.

# Returns

* JSON blob or HTTP/400 on invalid parameters

The valid blob will contain latest version and url for the keyboards/lexical models.

## Sample response (annotated)
```json
{
  "keyboards": {
    "khmer_angkor": {
      "version": "1.0.3",
      "kmp": "https://downloads.keyman.com/keyboards/khmer_angkor/1.0.3/khmer_angkor.kmp"
    },
    "sil_euro_latin": {
      "version": "1.9",
      "kmp": "https://downloads.keyman.com/keyboards/sil_euro_latin/1.9/sil_euro_latin.kmp"
    },
    "foo": {
      "error": "not found"
    },
    "bar": {
      "error": "not available for ios"
    }
  },
  "models": {
    "nrc.en.mtnt": {
      "version": "0.1.2",
      "kmp": "https://downloads.keyman.com/models/nrc.en.mtnt/0.1.2/nrc.en.mtnt.model.kmp"
    }
  }
}
```

# Schema Definition

https://api.keyman.com/schemas/package-version.json

# Possible error codes

#### API errors (full response)
* `{ "error": "invalid parameters" }` -- 400 invalid parameters
* `{ "error": "database error" }` -- 500 database is unavailable (message may differ)

#### Package error codes
* `"error": "not found"` -- the package was not found in the database
* `"error": "not available for <platform>"` -- the package is found but does not work on the target platform

## History
* 1 May 2020 - Version 1.0
