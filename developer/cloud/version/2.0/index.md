---
title: Keyman Version API 2.0 Specification
---

The [api.keyman.com/version](https://api.keyman.com/version) endpoint allows you
to query the latest version of the downloads available for each Keyman product
on `https://downloads.keyman.com`.

This API was previously named `get-version` from the deprecated endpoint
`https://r.keymanweb.com/code/get-version`

## API version 2.x

`version` is backwardly compatible with version 1.0. A plain call will return
an integer return value, which is the latest stable build for KeymanWeb 2.0.
See version 1.0 for further details.

Version 2.0 adds the ability to query for a given platform and tier.

Version 2.1 adds the ability to query for a given platform and all tiers.

### Syntax

```plain
https://api.keyman.com/version/$platform/$level
```

### Parameters

`platform`

: The platform to query against. Possible values are: `android`, `ios`, `linux`, `mac`, `web` or `windows`.

`level` <span class="optional">(optional)</span>

: The stability level to query, default `stable`. Possible values are: `stable`, `beta`, `alpha` or `all`.

If `platform` is not passed, then the API falls back to version 1.0.

### Return value

For version 2.0, a JSON object is returned. If `alpha`, `beta`, or `stable` tier is passed in:

```json
{
  "platform": "$platform",
  "level": "$tier",
  "version": "$version"
}
```

For tier `all`:

```json
{
  "platform": "$platform",
  "alpha": "$alpha-version",
  "beta": "$beta-version",
  "stable": "$stable-version"
}
```

The `$version` strings will be dotted versions that corresponds to the
versioning scheme of the product. Note that version 2.0 of this API returns the
whole version string for KeymanWeb, as opposed to version 1.0 of the API which
returned only the last portion (build number).

If a version is not available for a given platform and stability level, then an
`$error-message` is returned instead of `$version`:

```json
{
  "platform": "$platform",
  "level": "$tier",
  "error": "$error-message"
}
```

If invalid parameters are passed in, a `400` HTTP error is returned.

This build version can be embedded in the reference to the KeymanWeb code, e.g.,
for PHP:

```php
  $json = @file_get_contents('https://api.keyman.com/version/web/alpha');
  if($json) {
    $json = json_decode($json);
  }
  if($json && property_exists($json, 'version')) {
    $kmwbuild = $json->version;
  } else {
    // If the get-version API fails, we'll use the latest known version
    $kmwbuild = "14.0.282";
  }
  echo "<script src='https://s.keyman.com/kmw/engine/$kmwbuild/keymanweb.js'></script>";
```

**Note:** For the web platform, the API server will also check s.keyman.com to
ensure that the web artifacts are available. When new releases are built, there
is a window of time when artifacts are available on downloads.keyman.com but
have not been propagated to s.keyman.com. Version 2.1 of this API handles those
situations and will return a version that is available on s.keyman.com.

## API version 1.0

`version` should be called via HTTP GET to retrieve the latest build number. It
will return an integer build number. In case of error, you should choose a known
build number to reference (e.g. 473).

```plain
https://api.keyman.com/version
```

This build number can be embedded in the reference to the KeymanWeb code, e.g.,
for PHP:

```php
  $kmwbuild = @file_get_contents('https://api.keyman.com/version');

  if($kmwbuild === FALSE || !is_numeric($kmwbuild)) {
    // If the get-version API fails, we'll use the latest known version
    $kmwbuild = 473;
  }
  echo "<script src='https://s.keyman.com/kmw/engine/$kmwbuild/keymanweb.js'></script>";
```

## See Also

[KeymanWeb Developer Home](https://keyman.com/developer/keymanweb/)
