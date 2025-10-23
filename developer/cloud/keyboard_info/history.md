---
title: Version History
---

### 2.0, 2023-08-16

* A number of changes, in order to simplify the format and make it 100%
  generated from .kmp metadata. This also means the distinction between
  keyboard_info.source.json and keyboard_info.distribution.json has been
  removed, and the schema file is now called keyboard_info.schema.json. The
  following changes have been made to the JSON structure [#798](https://github.com/keymanapp/help.keyman.com/pull/798):
    * Removed `legacyId`, `documentationFilename`, `documentationFileSize`,
    `links`, `related[].note`, `language.[osk]font.size` fields.
    * `language.[osk]font.source` is now always an `array`.
    * `language.examples` replaces `language.example`, and structure has been
    simplified.

### 1.0.6, 2019-09-06

* No changes (originally in
  [\#36](https://github.com/keymanapp/help.keyman.com/pull/36) removed
  some unused fields but these are still in use. Reverted in
  2020-06-10.).

### 1.0.5, 2018-12-18

* Deprecate languages\[\] array. Update KeyboardLanguageInfo object to
  include subtag names.

### 1.0.4, 2018-11-26

* Add helpLink field that contains the link to a keyboard help page on
  help.keyman.com.

### 1.0.3, 2018-02-12

* Renamed minKeymanDesktopVersion to minKeymanVersion to clarify that
  this version information applies to all platforms.

### 1.0.2, 2018-02-10

* Add dictionary to platform support choices. Fixed default for
  platform to 'none'.

### 1.0.1, 2018-01-31

* Add file sizes, isRTL, sourcePath fields so we can supply these to
  the legacy KeymanWeb Cloud API endpoints. Remove references to .kmx
  being a valid package format.

### 1.0, 2017-09-14

* Initial version