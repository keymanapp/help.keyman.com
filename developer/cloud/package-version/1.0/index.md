---
title: package-version cloud API
---

https://api.keyman.com/package-version

Endpoint for getting keyboard and lexical model versions. The results will contain latest versions and links to the .kmp or .model.kmp packages. This endpoint is used by Keyman applications to query for newer versions of installed packages.

```http
GET https://api.keyman.com/package-version?keyboard=<id>&model=<id>&platform=<platform>
```

# Parameters

* `keyboard`: packaged keyboards to query
  * `<id>`: package ID for the first keyboard package. This is not necessarily the same as the keyboard ID (e.g. a package can contain multiple keyboards)
  * This parameter can be repeated, and/or multiple ids can be separated by commas
  * This parameter is optional.
* `model`: packaged lexical models to query
  * `<id>`: lexical model ID for the first lexical model package (this is same as package ID, minus the `.model` pre-extension)
  * This parameter can be repeated, and/or multiple ids can be separated by commas
  * This parameter is optional.
* `platform`: which platform must be supported for updates
  * `<platform>`: one of `android`, `ios`, `linux`, `mac`, `windows` (`web` does not currently support packages)
  * This stops the API returning packages that are invalid for the target platform.
  * This parameter is optional. If not supplied, does not filter by platform support.

# Returns

* JSON blob or HTTP/400 on invalid parameters

The valid blob will contain latest version and url for the packages for each keyboards/lexical models.

## Sample response

```sh
  curl -s 'https://api.keyman.com/package-version?platform=ios&keyboard=khmer_angkor&keyboard=sil_euro_latin&keyboard=foo&keyboard=us&keyboard=european2&model=nrc.en.mtnt'
```

```json
{
  "keyboards": {
    "khmer_angkor": {
      "version": "1.0.6",
      "kmp": "https://keyman.com/go/package/download/keyboard/khmer_angkor?version=1.0.6&update=1"
    },
    "sil_euro_latin": {
      "version": "1.9.1",
      "kmp": "https://keyman.com/go/package/download/keyboard/sil_euro_latin?version=1.9.1&update=1"
    },
    "foo": {
      "error": "not found"
    },
    "us": {
      "version": "1.0",
      "error": "not available as package",
      "deprecatedBy": "basic_kbdus"
    },
    "european2": {
      "version": "1.6",
      "error": "not available as package",
      "deprecatedBy": "sil_euro_latin"
    }
  },
  "models": {
    "nrc.en.mtnt": {
      "version": "0.1.4",
      "kmp": "https://keyman.com/go/package/download/model/nrc.en.mtnt?version=0.1.4&update=1"
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
* Other error codes may be possible

#### Package error codes
* `"error": "not found"` -- the package was not found in the database
* `"error": "not available for platform"` -- the package is found but does not work on the target platform
* `"error": "not available as package"` -- the package is old and is not available in package format
* Other error codes may be possible
